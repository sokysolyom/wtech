
    @extends('app')

    @section('styles')
      <link rel="stylesheet" href="{{ asset('css/itemsPage.css') }}">

    @endsection



    @section('content')


    <div class="d-block d-sm-block d-md-none">
      <a href="/" class="navbar-brand logo"> <img src="{{ asset('images/logo-nabytok.png') }}" alt="" class="main-logo">
      </a>
    </div>
    <main class="row">
      <div
        class="col-xl-2 col-lg-3 col-md-3 left-box"
      >
        <h3 class="text-align">Filtrovať produkty</h3>
        <form method="POST" role="filter" action="{{ $url_link }}/filter/">
            {{ csrf_field() }}
        <h5 class="left-titles">$ Cena</h5>
        <div class="row justify-content-center">
          <div class="col-md-5 col-3">
            <input
            name="low_price"
              type="text"
              class="form-control"
              placeholder="OD"
            />
          </div>
          <div class="col-md-5 col-3">
            <input
            name="high_price"
              type="text"
              class="form-control"
              placeholder="DO"
            />
          </div>
        </div>
        <h5 class="left-titles">Farba</h5>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              name="colour[]"
              value="cervena"

            />
            <label class="form-check-label" for="flexCheckDefault"> Červená </label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              name="colour[]"
              value="modra"

            />
            <label class="form-check-label" for="flexCheckDefault">
              Modrá
            </label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              name="colour[]"
              value="zlta"
            />
            <label class="form-check-label" for="flexCheckDefault">
              Žltá
            </label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              name="colour[]"
              value="biela"
            />
            <label class="form-check-label" for="flexCheckDefault">
              Biela
            </label>
          </div>
        </div>
        <h5 class="left-title-material">Type materialu</h5>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              name="material[]"
              value="kov"

            />
            <label class="form-check-label" for="flexCheckDefault"> Kov </label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              name="material[]"
              value="plast"

            />
            <label class="form-check-label" for="flexCheckDefault">
              Plast
            </label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              name="material[]"
              value="drevo"

            />
            <label class="form-check-label" for="flexCheckDefault">
              Drevo
            </label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              name="material[]"
              value="koza"

            />
            <label class="form-check-label" for="flexCheckDefault">
              Koža
            </label>
          </div>
        </div>
        <div class="row justify-content-center " style="margin-top: 30px;">
          <div class="col-xxl-8 col-xl-9 col-lg-8 col-md-9 col-sm-3 col-5">
            <button type="submit" class="btn btn-primary">
              Aplikovať filtre
            </button>
          </div>
        </div>
        </form>
      </div>
      <div
        class="col-xl-10 col-lg-9  col-md-9 all-items-box "
      >

      <nav class=" d-sm-none d-md-block d-none d-sm-block secondnav container  mb-5 navbar navbar-expand-sm ">
        <div class="navseconditems justify-content-center" id="navbarNav">
          <span>
            <ul class="navbar-nav "style="font-size: x-large; justify-content: space-evenly !important">
              <li class="nav-item ">
                <a class="nav-link text-black" href="./stolicky">Stoličky</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="./stoly">Stoly</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="./postele">Postele</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-black" href="./products">Všetko</a>
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
                <a class=" nav-link text-black" href="./stolicky"> <img class= "pr-5 "src="{{ asset('images/Chair.png') }}" width=30 alt=""> Stoličky</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="./stoly"> <img src="{{ asset('images/table.png') }}" width=30 alt=""> Stoly</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="./postele"><img src="{{ asset('images/Bed.png') }}" width=30 alt=""> Postele</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-black" href="./products"><img src="{{ asset('images/preview.svg') }}" width=30 alt=""> Všetko</a>
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


        <h1>{{ "$category" }}</h1>


        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a
              class="nav-link active"
              id="nav-home-tab"
              data-bs-toggle="tab"
              href="#news"
              role="tab"
              aria-controls="nav-news"
              aria-selected="true"
              >Najnovšie</a
            >
            <a
              class="nav-link"
              id="nav-profile-tab"
              data-bs-toggle="tab"
              href="#cheap"
              role="tab"
              aria-controls="nav-cheap"
              aria-selected="false"
              >Najlacnejšie</a
            >
            <a
              class="nav-link"
              id="nav-profile-tab"
              data-bs-toggle="tab"
              href="#expensive"
              role="tab"
              aria-controls="nav-expensive"
              aria-selected="false"
              >Najdrahšie</a
            >
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active right-box"
            id="news"
            role="tabpanel"
            aria-labelledby="nav-news-tab"

          >
            <div class="row justify-content-around">

              @foreach($itemslist as $item)

              <div class="col-4 col-xxl-3">
                <article class="card item-card">
                  
                  <a href="{{ $url_link }}/{{ $item->id }}" class="text-center">
                    <img src="{{ asset('images/'. $item->image) }}" class="card-img-top" alt="..." />
                  </a>
                  
                  
                  
                  
                  <div class="card-body">
                    <a href="{{ $url_link }}/{{ $item->id }}">
                   <h5 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: clip;">{{ $item->title }}</h5>
                  </a>

                    <p class="card-text">Cena: {{ $item->price }}$</p>

                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" value="{{ $item->id }}" name="id">
                      <input type="hidden" value="1" name="quantity">
                      <button class="btn btn-success">Pridať do košíka</button>
                    </form>



                  </div>
                </article>
              </div>

              @endforeach

              <script>
                var msg = '{{Session::get('message')}}';
                var exist = '{{Session::has('message')}}';
                if(exist){
                  message(msg);
                }
              </script>


            </div>

            <div class="row justify-content-center " style="margin-top: 30px; margin-bottom: 30px;">
              <ul class="pagination" style="justify-content: center !important;">
              <li class="page-item"><a class="page-link" href="{{ $itemslist->previousPageUrl() }}">Previous</a></li>
              <li class="page-item"><a class="page-link" href="{{ $itemslist->nextPageUrl() }}">Next</a></li>
            </ul>
          </div>

          </div>
          <div
            class="tab-pane fade rigt-box-tab"
            id="cheap"
            role="tabpanel"
            aria-labelledby="nav-cheap-tab"

          >
          <div class="row justify-content-around">

          @foreach($ascitemslist as $item)

          <div class="col-4 col-xxl-3">
            <article class="card item-card">
              <a href="{{ $url_link }}/{{ $item->id }}">
                <img src="{{ asset('images/'. $item->image) }}" class="card-img-top" alt="..." />
              </a>
              <div class="card-body">
                <a href="{{ $url_link }}/{{ $item->id }}">
              <h5 class="card-title">{{ $item->title }}</h5>
              </a>

                <p class="card-text">Cena: {{ $item->price }}$</p>
                <a href="kosik.html" class="btn btn-success">Pridat do kosika</a>
              </div>
            </article>
          </div>

          @endforeach
          <div class="row justify-content-center " style="margin-top: 30px; margin-bottom: 30px;">
            <ul class="pagination" style="justify-content: center !important;">
              <li class="page-item"><a class="page-link" href="{{ $ascitemslist->previousPageUrl() }}">Previous</a></li>
              <li class="page-item"><a class="page-link" href="{{ $ascitemslist->nextPageUrl() }}">Next</a></li>
            </ul>
          </div>
          </div>


          </div>
          <div
            class="tab-pane fade right-box-tab"
            id="expensive"
            role="tabpanel"
            aria-labelledby="nav-expensive-tab"
          >
          <div class="row justify-content-around">

          @foreach($descitemslist as $item)

          <div class="col-4 col-xxl-3">
            <article class="card item-card">
              <a href="{{ $url_link }}/{{ $item->id }}">
                <img src="{{ asset('images/'. $item->image) }}" class="card-img-top" alt="..." />
              </a>
              <div class="card-body">
                <a href="{{ $url_link }}/{{ $item->id }}">
              <h5 class="card-title">{{ $item->title }}</h5>
              </a>

                <p class="card-text">Cena: {{ $item->price }}$</p>
                <a href="kosik.html" class="btn btn-success">Pridat do kosika</a>
              </div>
            </article>
          </div>

          @endforeach
          <div class="row justify-content-center " style="margin-top: 30px; margin-bottom: 30px;">
            <ul class="pagination" style="justify-content: center !important;">
              <li class="page-item"><a class="page-link" href="{{ $descitemslist->previousPageUrl() }}">Previous</a></li>
              <li class="page-item"><a class="page-link" href="{{ $descitemslist->nextPageUrl() }}">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </main>


    @endsection
