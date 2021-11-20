
  @extends('app')

  @section('styles')
    <link rel="stylesheet" href="../css/style.css">
    <script src="./resources/js/welcome.js"></script>

  @endsection

  @section('content')


  <div class="d-block d-sm-block d-md-none logo">
    <a href="/" class="navbar-brand "> <img src="{{ asset('images/logo-nabytok.png') }}" alt="" class="main-logo">
    </a>
  </div>


  <main class="container-fluid pt-5 pb-5 " >

    <nav class=" d-sm-none d-md-block d-none d-sm-block secondnav container  mb-5 navbar navbar-expand-sm ">
      <div class="navseconditems justify-content-center" id="navbarNav">
        <span>
          <ul class="justify-content-center navbar-nav "style="font-size: x-large;">
            <li class="nav-item ">
              <a class="nav-link text-black" href="./stolicky_new">Stoličky</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="./stoly_new">Stoly</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="./postele_new">Postele</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="./products_new">Všetko</a>
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
              <a class=" nav-link text-black" href="./stolicky_new"> <img class= "pr-5 "src="{{ asset('images/Chair.png') }}" width=30 alt=""> Stoličky</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="./stoly_new"> <img src="{{ asset('images/table.png') }}" width=30 alt=""> Stoly</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="./postele_new"><img src="{{ asset('images/Bed.png') }}" width=30 alt=""> Postele</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="./products_new"><img src="{{ asset('images/preview.svg') }}" width=30 alt=""> Všetko</a>
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

            <a href="../HTML/info.html">
              <img class="d-block " src="{{ asset('images/Bed.png') }}" alt="First slide">
            </a>


            <div class="carousel-caption">
              <div class="circle">
                <h3>999 eur
                </h3>
              </div>

            </div>
          </section>
          <section class="carousel-item">
            <a href="../HTML/info.html"><img class="d-block " src="{{ asset('images/Table.png') }}" alt="Second slide"></a>
            <div class="carousel-caption">
              <div class="circle">
                <h3>999 eur
                </h3>
              </div>

            </div>
          </section>
          <section class="carousel-item">
            <a href="../HTML/info.html"><img class="d-block " src="{{ asset('images/Chair.png') }}" alt="Second slide"></a>
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

      <input type="hidden" value={{$suggestedlist}}>
      @foreach($suggestedlist as $suggested)

      <section class="item d-none d-sm-block suggest_item" id="container_doprava">
        <div class="row">
          <div class="image">
            <a href="{{ $url_link }}/{{ $suggested->id }}" class="text-center">
              <img src="{{ asset('images/'. $suggested->image) }}" alt="">
            </a>
          </div>
        </div>
        <div class="content mt-2">
          <p>Cena : {{ $suggested->price }}$</p>
        </div>
      </section>

      @endforeach

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

            @foreach ($newslist as $item)

              <section class="item d-none d-sm-block " id="container_doprava">
                <div class="row">
                  <div class="image">
                    <a href="{{ $url_link }}/{{ $item->id }}" class="text-center">
                      <img src="{{ asset('images/'. $item->image) }}" alt="">
                    </a>
                  </div>


                </div>
                <div class="content mt-2">
                  <p>Cena : {{ $item->price }} $</p>
                </div>
              </section>



            @endforeach
      <button id="right_button" class="malybutton button col-1 btn-dark btn-work align-self-center align-middle" (click)="go_right()">
        >
      </button>




    </div>

  </div>


</main>

@endsection
