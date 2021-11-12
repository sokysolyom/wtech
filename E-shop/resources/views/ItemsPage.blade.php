
    @extends('app')

    @section('styles')
      <link rel="stylesheet" href="../css/itemsPage.css">
    @endsection
  
    
  
    @section('content')


    <div class="d-block d-sm-block d-md-none">
      <a href="./welcome.html" class="navbar-brand logo"> <img src="../images/logo-nabytok.png" alt="" class="main-logo">
      </a>
    </div>
    <div class="row">
      <div
        class="col-xl-2 col-lg-3 col-md-3 left-box"
      >
        <h3 class="text-align">Filtrovať produkty</h3>
        <h5 class="left-titles">$ Cena</h5>
        <div class="row justify-content-center">
          <div class="col-md-5 col-3">
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="OD"
            />
          </div>
          <div class="col-md-5 col-3">
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
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
              value=""
              id="flexCheckDefault"

            />
            <label class="form-check-label" for="flexCheckDefault"> Červená </label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              value=""
              id="flexCheckDefault"
             
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
              value=""
              id="flexCheckDefault"
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
              value=""
              id="flexCheckDefault"
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
              value=""
              id="flexCheckDefault"
              
            />
            <label class="form-check-label" for="flexCheckDefault"> Kov </label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-sm-2 col-3">
            <input
              class="form-check-input left-box-inputs"
              type="checkbox"
              value=""
              id="flexCheckDefault"

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
              value=""
              id="flexCheckDefault"

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
              value=""
              id="flexCheckDefault"

            />
            <label class="form-check-label" for="flexCheckDefault">
              Koža
            </label>
          </div>
        </div>
        <div class="row justify-content-center " style="margin-top: 30px;">
          <div class="col-xxl-8 col-xl-9 col-lg-8 col-md-9 col-sm-3 col-5">
            <button type="button" class="btn btn-primary">
              Aplikovať filtre
            </button>
          </div>
        </div>
      </div>
      <div
        class="col-xl-10 col-lg-9  col-md-9 all-items-box "
      >

       
        <h1>{{ "$category" }}</h1>
        
        
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a
              class="nav-link active"
              id="nav-home-tab"
              data-bs-toggle="tab"
              href="#nav-news"
              role="tab"
              aria-controls="nav-news"
              aria-selected="true"
              >Najnovšie</a
            >
            <a
              class="nav-link"
              id="nav-profile-tab"
              data-bs-toggle="tab"
              href="#nav-cheap"
              role="tab"
              aria-controls="nav-cheap"
              aria-selected="false"
              >Najlacnejšie</a
            >
            <a
              class="nav-link"
              id="nav-profile-tab"
              data-bs-toggle="tab"
              href="#nav-expensive"
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
            id="nav-news"
            role="tabpanel"
            aria-labelledby="nav-news-tab"
   
          >
            <div class="row justify-content-around">

              @foreach($itemslist as $item)

              <div class="col-4 col-xxl-3">
                <article class="card item-card">
                  <a href="{{ $url_link }}/{{ $item->id }}">
                    <img src="../images/Bed.png" class="card-img-top" alt="..." />
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
          
          </div>
          <div
            class="tab-pane fade rigt-box-tab"
            id="nav-cheap"
            role="tabpanel"
            aria-labelledby="nav-cheap-tab"

          >
          <div class="row justify-content-around">

          @foreach($ascitemslist as $item)

          <div class="col-4 col-xxl-3">
            <article class="card item-card">
              <a href="{{ $url_link }}/{{ $item->id }}">
                <img src="../images/Bed.png" class="card-img-top" alt="..." />
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
          <div
            class="tab-pane fade right-box-tab"
            id="nav-expensive"
            role="tabpanel"
            aria-labelledby="nav-expensive-tab"
          >
          <div class="row justify-content-around">
            
          @foreach($descitemslist as $item)

          <div class="col-4 col-xxl-3">
            <article class="card item-card">
              <a href="{{ $url_link }}/{{ $item->id }}">
                <img src="../images/Bed.png" class="card-img-top" alt="..." />
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
    </div>
    
    
    @endsection