

  @extends('app')

  @section('styles')
  <link rel="stylesheet" href="../css/kosik.css">
  @endsection

  @section('content')


    <div class="d-block d-sm-block d-md-none">
      <a href="/" class="navbar-brand logo"> <img src="../images/logo-nabytok.png" alt="" class="main-logo">
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

            @foreach ($cartItems as $item)
            <div class="row justify-content-center m-3 bg-light text-black ">
              
              <div class="kosik_item col-12 col-sm-5 align-self-center col-sm-5 col-md-4 col-lg-2">
                <img class=" p-2" src="../images/Bed.png"  alt="">
              </div>
              $echo("ferenc");
              $echo($item);
              <div class="col-12 col-sm-7 col-md-8 col-lg-4"><p>{{ $item->id }}</p>
    
              </div>
              <div class="col-2 col-sm-1 col-md-1 col-lg-1 text-center p-1 align-self-center">
                
    
                  <div class=" justify-content-center p-lg-2 p-0">
                    <button type="button" class= " button btn-danger w-100" style="width:30px">
                      -
                     </button>
                  </div>
                 
                  <div class=" m-0 mt-2 mb-2 justify-content-center">
                    <h4 class="">2</h4>
                  </div>
                  
                  <div class=" justify-content-center p-lg-2 p-0">
                    <button type="button" class= " button btn-success w-100" style="width:30px">
                     +
                    </button>
                  </div>
    
                
              </div>
              <div class="col-5 col-sm-5 col-md-5 col-lg-2 text-center align-self-center">
                <div class="container p-0">
                  <h4 class="d-lg-none ">Cena/ks</h4>
                  <h4>{{ $item }}</h4>
                </div>
              </div>
              <div class="col-5 col-sm-6 col-md-5 col-lg-2 text-center align-self-center ">
                <div class="   container p-0">
                  <h4 class="d-lg-none ">Celková cena</h4>
                  <h4>{{$item}}</h4>
                </div>
              </div>
              <div class="px-1 py-2 x-button col-1 col-sm-1  col-md-1 col-lg-1  text-danger container-fluid p-0 m-0  "> 
                <button class=" w-100 p-1 btn text-black btn-danger">X </button>
              </div>
    
            </div>

            @endforeach
  
        </div>
    
    
    
        <div class="container">
          <div class="row mb-5 mt-5 ml-0 mr-0">
    
            <div class="col text-end">
              <h2 class= "text-right">Celková cena :</h2>
            </div>
    
            <div class = "col-3 align-self-end text-end">
              <h2>500 $</h2>
            </div>
    
          </div>
        </div>
    
    
        <div class="container mb-5">
          <div class="row justify-content-md-end justify-content-sm-center justify-content-center " style="height: 50px;">
            <a class="col-md-3 col-sm-10 col-10" href="./adress.html">
              <button class="btn-success col-12 h-100"><h4>Pokracovat</h4></button>
            </a>
          </div>
        </div>
      </div>
    
    </main>

    @endsection
    
