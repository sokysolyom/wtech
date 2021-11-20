
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
          <h2>Zhrnutie Objednávky</h2>
        </div>
      </div>

      <div class="container  mt-5 pt-5 pb-5 mb-5 " id="container_doprava">

        <div class="container">
          <h3> Fakturačne údaje</h3>
          <div class="container mt-5 row m-0" id="container_doprava">
            <div class="container col-md-6 col-sm-12 mt-4 mb-4">
              <h6>{{ $order->Name }}</h6>
              <h6>{{ $order->Adress }}</h6>
              <h6>Želiezovce</h6>
              <h6>{{ $order->Email }}</h6>
              <h6>{{ $order->Telephone }}</h6>
            </div>
            <div class="container col-md-6 col-sm-12 mt-4 mb-4">
              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-6">Spôsob platby:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">{{ $order->Payment }}</h6>
                </div>
              </div>


              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-6">Dodanie:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">{{ $order->Delivery }}</h6>
                </div>
              </div>



               <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-6">Očakávaný dátum dodania: </h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">{{ $ldate }}</h6>
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
                  <th class="col-2 cennter " scope="col" ><h4>Celková cena</h4></th>

                </tr>
              </thead>
              <tbody >
                @php
                $totalprice =0;
                $i = 0;
            @endphp
                @foreach ($items as $item)
                @php
                $totalprice = $totalprice + ($item[0]->price * $item[1]);
                $i = $i + 1;
            @endphp
                <tr>
                  <td><p>{{ $item[0]->title}}</p></td>
                  <td class ="center ">
                      <div class="row justify-content-center">
                        <h4 class="m-0">{{ $item[1]  }}</h4>
                      </div>
                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">{{ $item[0]->price}}</h4>
                      <h4 class="col-4 text-start m-0 p-1">$</h4>
                    </div>

                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">{{ $item[0]->price * $item[1]}}</h4>
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
                <h2>{{ $totalprice }} $</h2>
              </div>
            </div>
          </div>

          <div class="container mb-5">
            <div class="row justify-content-center justify-content-md-around justify-content-sm-center " style="height: 50px;">

                <a class="col-4 col-md-4 col-sm-9 mt-sm-3 mt-md-0 " href="/doprava-back">
                  <button class="btn-success col-12  h-100"><h4>Späť</h4></button>
                </a>

                <a class="col-4 col-md-4 col-sm-9 mt-sm-3 mt-md-0  " href="#">
                  <button class="btn-success  col-12 h-100"><h4>Záväzne objednať</h4></button>
                </a>


            </div>
          </div>
        </div>
      </div>
    </main>

    @endsection
