  @extends('app')

  @section('styles')
    <link rel="stylesheet" href="../css/register.css">
  @endsection



  @section('content')



    <div class="d-block d-sm-block d-md-none">
      <a href="./welcome.html" class="navbar-brand logo"> <img src="{{ asset('images/logo-nabytok.png') }}" alt="" class="main-logo">
      </a>
    </div>
    <div class="container register-box">
      <h1 style="text-align: center">REGISTRACIA</h1>
      <div class="row justify-content-center form-items">
        <div class="col-lg-5 col-sm-10">
          <label for="exampleFormControlInput1" class="form-label"
            >Prihlasovacie meno</label
          >
          <input
            type="email"
            class="form-control"
            id="username"
            placeholder="xsokoll"
          />
        </div>
      </div>
      <div class="row justify-content-center form-items">
        <div class="col-lg-5 col-sm-10">
          <label for="exampleFormControlInput1" class="form-label">Heslo</label>
          <input type="password" class="form-control" id="password" />
        </div>
      </div>
      <div class="row justify-content-center form-items">
        <div class="col-lg-5 col-sm-10">
          <label for="exampleFormControlInput1" class="form-label"
            >Heslo opakovane</label
          >
          <input type="password" class="form-control" id="passwordAgain" />
        </div>
      </div>
      <div class="row justify-content-center form-items" >
        <div class="col-lg-2 col-sm-5">
          <label for="exampleFormControlInput1" class="form-label">Meno</label>
          <input
            type="email"
            class="form-control"
            id="username"
            placeholder="Ladislav"
          />
        </div>
        <div class="col-lg-3 col-sm-5">
          <label for="exampleFormControlInput1" class="form-label"
            >Priezvisko</label
          >
          <input
            type="email"
            class="form-control"
            id="username"
            placeholder="Sokol"
          />
        </div>
      </div>
      <div class="row justify-content-center form-items">
        <div class="col-lg-5 col-sm-10">
          <label for="exampleFormControlInput1" class="form-label"
            >Mesto</label
          >
          <input
            type="email"
            class="form-control"
            id="adress"
            placeholder="name@example.com"
          />
        </div>
      </div>
      <div class="row justify-content-center form-items">
        <div class="col-lg-5 col-sm-10">
          <label for="exampleFormControlInput1" class="form-label"
            >Ulica</label
          >
          <input
            type="email"
            class="form-control"
            id="adress"
            placeholder="name@example.com"
          />
        </div>
      </div>
      <div class="row justify-content-center form-items">
        <div class="col-lg-5 col-sm-10">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="name@example.com"
          />
        </div>
      </div>
      <div class="row justify-content-center form-items">
        <div class="col-lg-5 col-sm-10">
          <label for="exampleFormControlInput1" class="form-label"
            >Telefonne cislo</label
          >
          <input
            type="email"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="+421918110652"
          />
        </div>
      </div>
      <div class="row justify-content-end button-margin ">
        <div class="col-5">
          <div class="col">
            <a class="col-sm-5 col-md-3 col-5" href="./welcome.html">
              <button class="btn-success  col-xl-5 col-md-7 col-10 h-100 p-0"><h4 class="registerbutton">Zaregistrovat!</h4></button>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endsection
