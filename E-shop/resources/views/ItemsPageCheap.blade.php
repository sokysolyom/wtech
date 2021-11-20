
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


        <h1>{{ "$category" }}</h1>


        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ $url_link_new }}">Najnovšie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ $url_link_cheap }}">Najlacnejšie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ $url_link_luxury }}">Najdrahšie</a>
            </li>
          </ul>
      <div class="row justify-content-around">
      @foreach($itemslist as $item)

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
      </div>
          <div class="row justify-content-center " style="margin-top: 30px; margin-bottom: 30px;">
            <ul class="pagination" style="justify-content: center !important;">
              <li class="page-item"><a class="page-link" href="{{ $itemslist->previousPageUrl() }}">Previous</a></li>
              <li class="page-item"><a class="page-link" href="{{ $itemslist->nextPageUrl() }}">Next</a></li>
            </ul>
          </div>
    </main>


    @endsection
