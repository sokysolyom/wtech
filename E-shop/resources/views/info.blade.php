
  @extends('app')

  @section('styles')
    <link rel="stylesheet" href="../css/info.css">
  @endsection



  @section('content')


  <div class="d-block d-sm-block d-md-none">
    <a href="./welcome.html" class="navbar-brand logo"> <img src="{{ asset('images/logo-nabytok.png') }}" alt="" class="main-logo">
    </a>
  </div>

    <div class="container-xl info-box">
      <div class="row">
        <div class="col-md-8">
          <img src="{{ asset('images/'. $product->image) }}" class="rounded mx-auto d-block" alt="..." />
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
                <button type="button" class="p-0 m-0 button btn-success amount-button">
                 <p class= "m-0 align-middle">+</p>
                </button>
              </div>
              <div class="col-12 justify-content-center amout-button-margin">
                <button type="button" class="p-0 m-0 button btn-danger amount-button">
                  <p class= "m-0 align-middle">-</p>
                 </button>
              </div>
            </div>
            <div class="col-1 amount-item">
              <h4>1ks</h4>
            </div>
            <div class=" add-to-cart-button">
              <a href="/kosik" class="btn btn-success">Pridat do kosika</a>
            </div>
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
          </div>
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
          <div
            class="tab-pane fade"
            id="nav-profile"
            role="tabpanel"
            aria-labelledby="nav-profile-tab"
          >
            <div class="row reference-box">
              <p>
                {{$product->paramtere}}
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
         <button class="malybutton button  col-1 btn-dark btn-work align-self-center">
           <
         </button>

         @foreach($suggestedlist as $suggested)

         <section class="item d-none d-sm-block " id="container_doprava">
           <div class="row">
             <a href="{{ $url_link }}/{{ $suggested->id }}" class="text-center">
               <img src="{{ asset('images/'. $suggested->image) }}" alt="">
             </a>

           </div>
           <div class="content">
             <p>Cena : {{ $suggested->price }}$</p>
           </div>
         </section>

         @endforeach
         <button class="malybutton button col-1 btn-dark btn-work align-self-center align-middle">
           >
         </button>
       </div>
     </div>


     @endsection
