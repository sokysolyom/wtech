

    @extends('app')

    @section('styles')
      <link rel="stylesheet" href="../css/adress.css">
    @endsection



    @section('content')


    <div class="d-block d-sm-block d-md-none">
      <a href="/" class="navbar-brand logo"> <img src="{{ asset('images/logo-nabytok.png') }}" alt="" class="main-logo">
      </a>
    </div>
    <div class="container adress-box">
        <h1 style="text-align: center;">ADRESA DODANIA</h1>
        @php
            if (Auth::check())
            {
              $post_route = "/adresa/".$id;
            }
            else
            {
              $post_route = "/doprava";
            }
        @endphp
        <form method="post" action={{ $post_route }}>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            @csrf

        @if(!Auth::check())
        <div class="form-items row justify-content-center">
            <div class="col-lg-2 col-sm-5">
                <label for="exampleFormControlInput1" class="form-label">Meno</label>
                <input type="text" class="form-control" name="name" placeholder="Ladislav" required value="{{$contact[0]}}">
            </div>
            <div class="col-lg-3 col-sm-5">
                <label for="exampleFormControlInput1" class="form-label">Priezvisko</label>
                <input type="text" class="form-control" name="surname" placeholder="Sokol" required value="{{$contact[1]}}">
            </div>
        </div>
        @endif
        <div class="form-items row justify-content-center" >
            <div class="col-lg-5 col-sm-10">
                <label  class="form-label">Adresa</label>
                <input type="text" class="form-control" placeholder="Ilkovicova, 2" name="address" required value="{{$contact[2]}}">
            </div>
        </div>
        <div class="form-items row justify-content-center">
            <div class="col-lg-5 col-sm-10">
                <label  class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" required value="{{$contact[3]}}">
            </div>
        </div>
        <div class="form-items row justify-content-center" >
            <div class="col-lg-5 col-sm-10">
                <label for="exampleFormControlInput1" class="form-label">Telefonne cislo</label>
                <input type="text" class="form-control" name="telephone" placeholder="+421918110652" required value="{{$contact[4]}}">
            </div>
        </div>
        <div class="button-margin container mb-5" >
          <div class="button-height row justify-content-center " >
            <div class="container row justify-content-center" >
              <a class="col-sm-5 col-md-3 col-5 mr-3" href="/kosik">
                <button type="button" class="btn-success col-10  h-100"><h5>Späť</h5></button>
              </a>
              <div class="col-auto">

              </div>
              <a class="col-sm-5 col-md-3 col-5" href="/doprava">
                <button type="submit" class="btn-success  col-10 h-100"><h5>Pokračovať</h5></button>
              </a>
            </div>

          </div>
        </div>
        </form>
    </div>

    @endsection
