
    @extends('app')

    @section('styles')
    <link rel="stylesheet" href="../css/style.css">
    @endsection


    @section('content')
    <div class="d-block d-sm-block d-md-none">
      <a href="./welcome.html" class="navbar-brand logo"> <img src="{{ asset('images/logo-nabytok.png') }}" alt="" class="main-logo">
      </a>
    </div>
    <main class="container-fluid pt-5 pb-5 ">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <h2 class="text-white">Zhrnutie Objednávky</h2>
        </div>
      </div>

      <div class="container  mt-5 pt-5 pb-5 mb-5 " id="container_doprava">

        <div class="container">
          <h3> Fakturačne údaje</h3>
          <div class="container mt-5 row m-0" id="container_doprava">
            <div class="container col-md-6 col-sm-12 mt-4 mb-4">
              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-4">Meno Priezvisko:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">{{$contact[0]}} {{$contact[1]}}</h6>
                </div>
              </div>
              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-4">Adresa:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">{{$contact[2]}}</h6>
                </div>
              </div>
              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-4">Email:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">{{$contact[3]}}</h6>
                </div>
              </div>
              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-4">Telefónne číslo:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">{{$contact[4]}}</h6>
                </div>
              </div>
              
              
              
              
            </div>
            <div class="container col-md-6 col-sm-12 mt-4 mb-4">

              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-4">Spôsob platby:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">{{$contact[5]}}</h6>
                </div>
              </div>


              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-4">Dodanie:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">{{$contact[6]}}</h6>
                </div>
              </div>



               
            </div>

          </div>

          <div class="container m-0 mt-5 p-0" id="container_doprava">
            <table class="  table-striped table table-bordered">
              <thead>
                <tr class="">
                  <th class="col-6" scope="col"><h4>Názov produktu</h4></th>
                  <th class="col-2 center" scope="col"><h4>Ks</h4></th>
                  <th class="col-2 center " scope="col"><h4>Cena/ks</h4></th>
                  <th class="col-2 center " scope="col" ><h4>Celková cena</h4></th>

                </tr>
              </thead>
              <tbody >
                @php
                    $total =0;
                @endphp
                @foreach ($product as $item)

                @php
                    $totalprice_of_item = $item[0]->price * $item[1];
                    $total = $total + $totalprice_of_item
                @endphp
                <tr>
                  <td><p>{{($item[0])->title}}</p></td>
                  <td class ="center ">
                      <div class="row justify-content-center">
                        <h4 class="m-0">{{$item[1]}}</h4>
                      </div>
                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">{{$item[0]->price}}</h4>
                      <h4 class="col-4 text-start m-0 p-1">$</h4>
                    </div>

                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">{{$totalprice_of_item}}</h4>
                      <h4 class="col-4 text-start m-0 p-1">$</h4>
                    </div>

                  </td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>


          <div class="container">
            <div class="row mb-5 mt-5">
              <div class="col-10">
                <h2 class= "text-right">Celková cena :</h2>
              </div>
              <div class = "col-2 p-0 mx-auto">
                <h2>{{$total}} $
                </h2>
              </div>
            </div>
          </div>

          <div class="container mb-5">
            <div class="row justify-content-center justify-content-md-around justify-content-sm-center " style="height: 50px;">

                <a class="col-4 col-md-4 col-sm-9 mt-sm-3 mt-md-0 " href="/doprava">
                  <button class="btn-success col-12  h-100"><h4>Späť</h4></button>
                </a>

                <a class="col-4 col-md-4 col-sm-9 mt-sm-3 mt-md-0  " href="/confirm-order">
                  <button class="btn-success  col-12 h-100"><h4>Záväzne objednať</h4></button>
                </a>


            </div>
          </div>
        </div>
      </div>
    </main>

    @endsection
