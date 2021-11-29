
  @extends('app')

  @section('styles')
    <link rel="stylesheet" href="../css/info.css">
  @endsection



  @section('content')


  <div class="d-block d-sm-block d-md-none">
    <a href="/" class="navbar-brand logo"> <img src="{{ asset('images/logo-nabytok.png') }}" alt="" class="main-logo">
    </a>
  </div>
    <div class="container-xl info-box">
     @if(Auth::check())
        @php
            $admin = Auth::user();

        @endphp
        @if($admin->is_admin)
        <div class="justify-content-end">
            <a href="/products/edit/{{ $product->id }}">
                <button type="button" class="btn btn-primary">Editovat</button>
            </a>
            <form action="/products/delete/{{$product->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-danger" value="Vymazať"/>
            </form>
        </div>
        @endif
    @endif
      <div class="row">
        <div class="col-md-8">

          <img src="{{ asset('storage/images/'. $product->image) }}" class="rounded mx-auto d-block" alt="..." />
        </div>
        <div class="col-md-4">
          <div class="col">
            <h1>{{ $product->title }}</h1>
          </div>
          <div class="col">


            <p>

                {{ $product->description }}

            </p>

          </div>
          <div class="row">
            <div class="col-4">
              <h1>{{$product->price}}$</h1>
            </div>
            <div class="col-2">
              <div class="col-12 justify-content-center">
                <button type="button" class="p-0 m-0 button btn-success amount-button " onclick="increment()">
                 <p class= "m-0 align-middle">+</p>
                </button>
              </div>
              <div class="col-12 justify-content-center amout-button-margin">
                <button type="button" class="p-0 m-0 button btn-danger amount-button" onclick="decrement()">
                  <p class= "m-0 align-middle">-</p>
                 </button>
              </div>

              <script>
                var i =1;
                function decrement() {
                  if (document.getElementById('ks').value >=2){
                    document.getElementById('ks').value = --i;
                    document.getElementById('ks2').value = i;
                  }

                }
                function increment() {
                  document.getElementById('ks').value = ++i;
                  document.getElementById('ks2').value = i;
                }
              </script>

            </div>
            <div class="col-1 amount-item">
              <input type="text" id="ks" value="1" disabled name='quantity'>
            </div>
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{ $product->id }}" name="id">
              <input type="hidden" id="ks2" value="1" name="quantity">
              <div class=" add-to-cart-button">
                <button class="btn btn-success">Pridať do košíka</button>
              </div>
            </form>

          </div>
        </div>
      </div>
      <div class="row">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a
              class="nav-link active"
              id="nav-home-tab"
              data-bs-toggle="tab"
              href="#nav-home"
              role="tab"
              aria-controls="nav-home"
              aria-selected="true"
              >Recenzie</a
            >
            <a
              class="nav-link"
              id="nav-profile-tab"
              data-bs-toggle="tab"
              href="#nav-profile"
              role="tab"
              aria-controls="nav-profile"
              aria-selected="false"
              >Parametre</a
            >
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="nav-home"
            role="tabpanel"
            aria-labelledby="nav-home-tab"
          >

          @if(count($recenzia) === 0)
            <h5>Nie su recenzie</h5>
          @endif


          @foreach($recenzia as $item)
            <div class="row reference-box">
              <div class="col-3">
                <h5> {{$item->author}} </h5>
              </div>
              <div class="col">
                <p>
                {{$item->text}}
                </p>
              </div>
              <hr />
            </div>

            @endforeach
            @if(Auth::check())
          <form method="POST" action="/products/{{ $product->id }}">
            {{ csrf_field() }}
          <div class="row justify-content-start form-items">
            <div class="col-lg-10 col-md-12">
                <h4 for="name" >Pridat recenziu</h4>
                <input type="text" name="text" class="form-control">
            </div>
            <div style="margin-top: 30px">
                <button type="submit" style="btn-success">Pridat recenziu</button>
            </div>
          </div>
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          </form>
          @endif
          </div>

          <div
            class="tab-pane fade"
            id="nav-profile"
            role="tabpanel"
            aria-labelledby="nav-profile-tab"
          >
            <div class="row reference-box">
              <p>
                {{$product->parametre}}
              </p>
            </div>
            <div class="row reference-box">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">INFORMACIE O VYROBKU</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Farba</th>
                    <td>{{$product->colour}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Rozmery</th>
                    <td>{{$product->rozmery}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Material</th>
                    <td>{{$product->material}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="text-black mt-5">Odporúčané produkty</h2>
     </div>

     <div class="container mt-2" id="container_doprava">
       <div class="row justify-content-around">
         @foreach($suggestedlist as $suggested)

         <section class="item d-sm-block col-sm-6" id="container_doprava">
           <div class="row">
             <a href="{{ $url_link }}/{{ $suggested->id }}" class="text-center">
               <img src="{{ asset('storage/images/'. $suggested->image) }}" alt="">
             </a>

           </div>
           <div class="content">
             <p>Cena : {{ $suggested->price }}$</p>
           </div>
         </section>
         @endforeach
       </div>
     </div>


     @endsection
