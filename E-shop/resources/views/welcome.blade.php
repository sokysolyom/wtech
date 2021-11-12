
  @extends('app')

  @section('styles')
    <link rel="stylesheet" href="../css/style.css">
  @endsection

  @section('content')
  

  <div class="d-block d-sm-block d-md-none logo">
    <a href="/" class="navbar-brand "> <img src="../images/logo-nabytok.png" alt="" class="main-logo">
    </a>
  </div>
  

  <main class="container-fluid pt-5 pb-5 " >

    <nav class=" d-sm-none d-md-block d-none d-sm-block secondnav container  mb-5 navbar navbar-expand-sm ">
      <div class="navseconditems justify-content-center" id="navbarNav">
        <span>
          <ul class="justify-content-center navbar-nav "style="font-size: x-large;">
            <li class="nav-item ">
              <a class="nav-link text-black" href="./stolicky">Stoličky</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="./stoly">Stoly</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="./postele">Postele</a>
            </li>
          </ul>
        </span>
        
      </div>
    </nav>

    <nav class="collapse  external-second-nav " id="navbarToggleExternalContent1">
      <div class=" navseconditems w-100 justify-content-center" id="navbarNav">
        <span>
          <ul class="text-white navbar-nav "style="font-size: x-large;">
            <li class=" nav-item ">
              <a class=" nav-link text-black" href="./chairsPage.html"> <img class= "pr-5 "src="../images/Chair.png" width=30 alt=""> Stoličky</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="./tablesPage.html"> <img src="../images/table.png" width=30 alt=""> Stoly</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="./bedsPage.html"><img src="../images/bed.png" width=30 alt=""> Postele</a>
            </li>
          </ul>
        </span>
      </div>
    </nav>

    <nav class="navbar navbar-dark bg-dark d-block d-sm-block d-md-none mb-5" id="navbarNav">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>




  
  
  <div class="container mb-5 pb-5">
    <div class="row justify-content-center">
      <div id="carouselExampleSlidesOnly" class="carousel slide col-7" data-bs-ride="carousel">
        <div class="carousel-inner" id="container_doprava">
          <section class="carousel-item active">
            <a href="../HTML/info.html"><img class="d-block " src="../images/Bed.png" alt="First slide"></a>
            <div class="carousel-caption">
              <div class="circle">
                <h3>999 eur
                </h3>
              </div>
              
            </div>
          </section>
          <section class="carousel-item">
            <a href="../HTML/info.html"><img class="d-block " src="../images/table.png" alt="Second slide"></a>
            <div class="carousel-caption">
              <div class="circle">
                <h3>999 eur
                </h3>
              </div>
              
            </div>
          </section>
          <section class="carousel-item">
            <a href="../HTML/info.html"><img class="d-block " src="../images/Chair.png" alt="Second slide"></a>
            <div class="carousel-caption">
              <div class="circle">
                <h3>999 eur
                </h3>
              </div>
              
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
    
  

  <div class="container">
   <h2 >Odporúčané produkty</h2>
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

  <div class="container mt-5">
    <h2 >Najnovšie pridané produkty</h2>
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
  </div>
 
  </main>

  @endsection
  







