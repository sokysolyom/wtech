

    @extends('app')

    @section('styles')
      <link rel="stylesheet" href="../css/adress.css">
    @endsection
  
    
  
    @section('content')


    <div class="d-block d-sm-block d-md-none">
      <a href="./welcome.html" class="navbar-brand logo"> <img src="../images/logo-nabytok.png" alt="" class="main-logo">
      </a>
    </div>
    <div class="container adress-box">
        <h1 style="text-align: center;">ADRESA DODANIA</h1>
        <div class="form-items row justify-content-center">
            <div class="col-lg-2 col-sm-5">
                <label for="exampleFormControlInput1" class="form-label">Meno</label>
                <input type="email" class="form-control" id="username" placeholder="Ladislav">
            </div>
            <div class="col-lg-3 col-sm-5">
                <label for="exampleFormControlInput1" class="form-label">Priezvisko</label>
                <input type="email" class="form-control" id="username" placeholder="Sokol">
            </div>
        </div>
        <div class="form-items row justify-content-center" >
            <div class="col-lg-5 col-sm-10">
                <label for="exampleFormControlInput1" class="form-label">Adresa</label>
                <input type="email" class="form-control" id="adress" placeholder="name@example.com">
            </div>
        </div>
        <div class="form-items row justify-content-center">
            <div class="col-lg-5 col-sm-10">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
        </div>
        <div class="form-items row justify-content-center" >
            <div class="col-lg-5 col-sm-10">
                <label for="exampleFormControlInput1" class="form-label">Telefonne cislo</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+421918110652">
            </div>
        </div>
        <div class="button-margin container mb-5">
          <div class="button-height row justify-content-center ">
            <div class="container row justify-content-center">
              <a class="col-sm-5 col-md-3 col-5 mr-3" href="../HTML/kosik.html">
                <button class="btn-success col-10  h-100"><h5>Späť</h5></button>
              </a>
              <div class="col-auto">
                
              </div>
              <a class="col-sm-5 col-md-3 col-5" href="vyber_dopravy.html">
                <button class="btn-success  col-10 h-100"><h5>Typ platby</h5></button>
              </a>
            </div>
            
          </div>
        </div>
    </div>
    
    @endsection
