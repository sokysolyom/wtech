
  @extends('app')

  @section('styles')
  <link rel="stylesheet" href="../css/kosik.css">
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  @endsection


  @section('content')

  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>



    <div class="d-block d-sm-block d-md-none">
      <a href="/" class="navbar-brand logo"> <img src="{{ asset('images/logo-nabytok.png') }}" alt="" class="main-logo">
      </a>
    </div>
    <main class="container-fluid mx-0 px-4 pt-2 pb-2 ">
      <div class=" container-fluid m-0 px-1 mt-5 mb-5 w-100 m-auto" id="container_doprava">
        <div class=" container pt-5">
          <h1>Váš Nákup</h1>

          <div class="mt-5">

          </div>

          <div class="container-fluid p-1 bg-dark text-white">
            <div class="row m-3 d-none d-lg-flex">
              <h4 class= "col-6">Produkt</h4>
              <h4 class= "col-1 text-center">Ks</h4>
              <h4 class= "col-2 text-center">Cena/ks</h4>
              <h4 class= "col-2 text-center">Celková cena</h4>
              <h4 class= "col-1 text-center"></h4>
            </div>
            @php
                $totalprice =0;
                $i = 0;
            @endphp
            @foreach ($items as $item)
            @php
                $totalprice = $totalprice + ($item[0]->price * $item[1]);
                $i = $i + 1;
            @endphp
            <div class="row justify-content-center m-3 bg-light text-black ">





              <div class="kosik_item col-12 col-sm-5 align-self-center col-sm-5 col-md-4 col-lg-2">
                <img class=" p-2" src="{{ asset('images/'. $item[0]->image) }}"  alt="">
              </div>


              <div class="col-12 col-sm-7 col-md-8 col-lg-4"><p>{{ $item[0]->title }}</p>
                <p>{{ $item[0]->description }}</p>

              </div>
              <div class="col-2 col-sm-1 col-md-1 col-lg-1 text-center p-1 align-self-center">

                  <form id="myForm">
                    <div class=" justify-content-center p-lg-2 p-0">
                      <button type="button" class= " button btn-danger w-100 decrement_button" style="width:30px" id="dec{{$i}}" id = "element" onclick="decrement({{$i}})" onclick="zapni()">
                        -
                       </button>
                    </div>

                    <div class=" m-0 mt-2 mb-2 justify-content-center">
                      <input type="text" class="ks" id="ks{{$i}}" value=" {{ $item[1]  }}" disabled name='quantity'>
                    </div>

                    <div class=" justify-content-center p-lg-2 p-0">
                      <button type="button" class= "button btn-success w-100 increment_button" style="width:30px" id="inc{{$i}}" id = "element" onclick="increment({{$i}})" onclick="zapni()">
                       +
                      </button>
                    </div>

                    <input type="hidden" value="{{ $cart_id}}" class="cart_id{{$i}}" id="cart_id{{$i}}">
                    <input type="hidden" value="{{ $item[0]->id}}" class="product_id{{$i}}" id = "product_id{{$i}}">
                    <input type="hidden" value="{{ $item[1] }}" class="p_ks{{$i}}" id = "p_ks{{$i}}">
                    <input type="hidden" value="{{$i}}" class="id_pre_ajax" id = "id_pre_ajax">
                  </form>



              </div>
              <div class="col-5 col-sm-5 col-md-5 col-lg-2 text-center align-self-center">
                <div class="container p-0">
                  <h4 class="d-lg-none ">Cena/ks</h4>
                  <div class="row justify-content-center">
                    <h4 class= "col-3" id="cena_ks{{$i}}">{{ $item[0]->price }}</h4>
                    <h4 class= "col-3">$</h4>
                  </div>
                </div>
              </div>
              <div class="col-5 col-sm-6 col-md-5 col-lg-2 text-center align-self-center ">
                <div class="   container p-0">
                  <h4 class="d-lg-none ">Celková cena</h4>
                  <div class="row justify-content-center">
                    <h4 class= "col-3" id="celk{{$i}}">{{ $item[0]->price * $item[1] }}</h4>
                    <h4 class= "col-3">$</h4>
                  </div>


                </div>
              </div>

              <div class="px-1 py-2 x-button col-2 col-sm-2  col-md-1 col-lg-1  text-danger container-fluid p-0 m-0  ">
                <form action="{{ route('cart.delete.item') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $item[0]->id }}" name="id">
                  <button class=" w-100 p-1 btn text-black btn-danger">X</button>
                </form>
              </div>

            </div>
            @endforeach

            <input type="hidden" value="{{$i}}" id="pocet_produktov">


            <script>
              function decrement(poradie) {
                var id = "ks"+poradie;
                var id2 = "p_ks"+poradie;


                var celk = "celk"+poradie;
                var cena_ks = "cena_ks"+poradie;
                var i = document.getElementById(id).value;
                if (document.getElementById(id).value >=2){
                  document.getElementById(id).value = --i;
                  document.getElementById(id2).value = i;
                }
                console.log("SDA");
                var cena = document.getElementById(celk).textContent;
                cena = (Number(cena));
                var ck = document.getElementById(cena_ks).textContent;
                ck = (Number(ck));
                cena = ck * i;
                console.log(cena);
                document.getElementById(celk).textContent = cena;
                calculate(i);
                var p_ks = '#p_ks'+ poradie;
                var cart_id = '#cart_id'+ poradie;
                var product = '#product_id'+ poradie;
                console.log(product);
                $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{ url('/kosik/update') }}",
                    method: 'POST',
                    data: {
                      cart: jQuery(cart_id).val(),
                      product: jQuery(product).val(),
                      count: jQuery(p_ks).val()
                    },
                    success: function(result){
                      console.log(result)
                    }});
              }
              function increment(poradie) {
                var id = "ks"+poradie;
                var id2 = "p_ks"+poradie;
                var celk = "celk"+poradie;
                var cena_ks = "cena_ks"+poradie;
                var i = document.getElementById(id).value;
                document.getElementById(id).value = ++i;
                document.getElementById(id2).value = i;
                var cena = document.getElementById(celk).textContent;
                cena = (Number(cena));
                var ck = document.getElementById(cena_ks).textContent;
                ck = (Number(ck));
                cena = ck * i;
                console.log(cena);
                document.getElementById(celk).textContent = cena;
                calculate();
                var p_ks = '#p_ks'+ poradie;
                var cart_id = '#cart_id'+ poradie;
                var product = '#product_id'+ poradie;
                console.log(product);
                $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{ url('/kosik/update') }}",
                    method: 'POST',
                    data: {
                      cart: jQuery(cart_id).val(),
                      product: jQuery(product).val(),
                      count: jQuery(p_ks).val()
                    },
                    success: function(result){
                      console.log(result)
                    }});
              }
            </script>

            <script>
              function calculate(){
                console.log("SJDHADGHA");
                var pocet = document.getElementById('pocet_produktov').value;
                var totalprice = 0;
                for (let step = 1; step <= pocet; step++) {
                  var id= "celk"+step;
                  var price = document.getElementById(id).textContent;
                  price = Number(price);
                  console.log(price);
                  totalprice = totalprice + price;
                }
                console.log(totalprice);
                document.getElementById('totalprice').textContent = totalprice;
              }
            </script>



        </div>

        <div class="container">
          <div class="row mb-5 mt-5 ml-0 mr-0">

            <div class="col text-end">
              <h2 class= "text-right">Celková cena :</h2>
            </div>

            <div class = "col-3 align-self-end text-end">
              <div class="row justify-content-center">
                <h2 class="col-3" id = "totalprice">{{ $totalprice }}</h2>
                <h2 class="col-3">$</h2>
              </div>

            </div>

          </div>
        </div>



        <form action="{{ route('order.create') }}" method="POST" enctype="multipart/form-data">
          @csrf
         @php
             $c = 0;
         @endphp
          @foreach ($items as $item)


            <input type="hidden" value="{{ $cart_id}}" name="cart_id">


          @php
              $c = $c + 1;
          @endphp
          @endforeach
          <input type="hidden" value="{{$c}}" name="pocet_objektov">


          @if (count($items) > 0)
          <div class="container mb-5">
            <div class="row justify-content-md-end justify-content-sm-center justify-content-center " style="height: 50px;">
              <a class="col-md-3 col-sm-10 col-10" href="./adresa">
                <button class="btn-success col-12 h-100"><h4>Pokracovat</h4></button>
              </a>
            </div>
          </div>
          @endif


        </form>

      </div>

    </main>


    @endsection
