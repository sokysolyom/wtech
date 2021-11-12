

  @extends('app')

  @section('styles')
    <link rel="stylesheet" href="../css/info.css">
  @endsection

  

  @section('content')


  <div class="d-block d-sm-block d-md-none">
    <a href="./welcome.html" class="navbar-brand logo"> <img src="../images/logo-nabytok.png" alt="" class="main-logo">
    </a>
  </div>

    <div class="container-xl info-box">
      <div class="row">
        <div class="col-md-8">
          <img src="../images/Bed.png" class="rounded mx-auto d-block" alt="..." />
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
              <a href="kosik.html" class="btn btn-success">Pridat do kosika</a>
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
            <div class="row reference-box">
              <div class="col-3">
                <h5>Martina Havlova</h5>
              </div>
              <div class="col">
                <p>
                  Postel jsem vybírala hodně dlouho. Chtěla jsem boxspring s
                  čelem, úložným prostorem a nejlépe v tmavém provedení. Byla to
                  sázka do loterie, protože nikde na prodejně ji není možné
                  vyzkoušet. Riskla jsem to a jsem moc spokojená. Je vysoká,
                  skvěle se z ní vstává. Úložný prostor je obrovský. Už se nikde
                  jinde pořádně nevyspím. Jedinou vadou je, že se časem (postel
                  mám pomalu dva roky) dělají na čele žmolky od manželovy hlavy
                  a na vršku čela je dost vidět prach, ale to jsou drobnosti.
                  Tuto postel doporučuji všem!
                </p>
              </div>
              <hr />
            </div>
            <div class="row reference-box">
              <div class="col-3">
                <h5>Tugyine Torocsik Beata</h5>
              </div>
              <div class="col">
                <p>
                  A kárpitozást a 6 éves gyerekem jobban csinálta volna. Az
                  ágyneműtartó fa lécezésén a lyukakat majdnem eltalálták.
                  MAJDNEM! A matrac kényelmesnek tűnik, de összességében az ágy
                  olcsó hatást sugall.
                </p>
              </div>
              <hr />
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="nav-profile"
            role="tabpanel"
            aria-labelledby="nav-profile-tab"
          >
            <div class="row reference-box">
              <p>
                Obojstranný pružinový matrac s pružinami Bonell 110/m² a výplňou
                z polyuretánovej peny. 4 cm vrchný matrac s jadrom z
                polyuretánovej peny. Pružný poťah s hustým prešívaním. Základňu
                tvorí 1 rám. Vrátane nôh. Bez čela. 140x200 cm
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
                    <td>Cervena</td>
                  </tr>
                  <tr>
                    <th scope="row">Rozmery</th>
                    <td>Šírka: 140 cm, Dĺžka: 200 cm, Výška: 56,5 cm</td>
                  </tr>
                  <tr>
                    <th scope="row">Material</th>
                    <td>Čalúnenie, Zamat</td>
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
         <section class="item d-none d-sm-block " id="container_doprava">
           <div class="row">
             <a href="" class="text-center">
               <img src="../images/Bed.png" alt="">
             </a>
             
           </div>
           <div class="content">
             <p>Cena : 5901$</p>
           </div>
         </section>
         <section class="item  d-md-block" id="container_doprava">
           <div class="row">
             <a href="" class="text-center">
               <img src="../images/Bed.png" alt="">
             </a>
           </div>
           <div class="content">
             <p>Cena : 5902$</p>
           </div>
         </section>
         <section class="item d-none d-lg-block" id="container_doprava">
           <div class="row">
             <a href="" class="text-center">
               <img src="../images/Bed.png" alt="">
             </a>
           </div>
           <div class="content">
             <p>Cena : 5903$</p>
           </div>
         </section>
         <section class="item d-none d-xl-block" id="container_doprava">
           <div class="row">
             <a href="" class="text-center">
               <img src="../images/Bed.png" alt="">
             </a>
           </div>
           <div class="content">
             <p>Cena : 5904$</p>
           </div>
          </section>
         <button class="malybutton button col-1 btn-dark btn-work align-self-center align-middle">
           >
         </button>
       </div>
     </div>
     

     @endsection
