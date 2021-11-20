

    @extends('app')

    @section('styles')
      <link rel="stylesheet" href="../css/style.css">
    @endsection



    @section('content')

    <div class="d-block d-sm-block d-md-none">
      <a href="./welcome.html" class="navbar-brand logo"> <img src="{{ asset('images/logo-nabytok.png') }}" alt="" class="main-logo">
      </a>
    </div>
    <main class="container-fluid pt-5 pb-5">
        <form method="post" action="/doprava/{{ request()->route('id') }}">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
      <div class="container mt-5 mb-5" id="container_doprava">

        <div class="container mt-5 pt-3 mb-5 pb-5">
          <div class="row">

            <div class="container-fluid col-sm-12 col-md-5 ">
              <h3>Výber dopravy</h3>

              <div id="container_doprava" class="container">
                <table class="table">
                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="delivery" id="exampleRadios1" value="Slovenská pošta" >
                    </td>
                    <td>
                      <span>Slovenská pošta</span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="delivery" id="exampleRadios1" value="Zasielkovňa" >
                    </td>
                    <td>
                      <span>Zasielkovňa</span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="delivery" id="exampleRadios1" value="Kuriér" >
                    </td>
                    <td>
                      <span>Kuriér</span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="delivery" id="exampleRadios1" value="Vyzdvihnúť na mieste" >
                    </td>

                    <td>
                    <span>Vyzdvihnúť na mieste</span>
                    </td>
                  </tr>

                </table>
              </div>
            </div>
            <div class="container-fluid  col-12 col-sm-12 col-md-5 mt-md-0 mt-sm-5 mt-5 ">
              <h3>Výber platby</h3>

              <div id="container_doprava" class="container">
                <table class="table border-bottom">

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios4" value="Platba Kartou" >
                    </td>

                    <td>
                      <span>Platba Kartou </span>
                    </td>

                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Platba dobierkou" >
                    </td>

                    <td>
                      <span>Platba dobierkou</span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Bankový prevod" >
                    </td>

                    <td>
                      <span>Bankový prevod</span>
                    </td>
                 </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="PayPal" >
                    </td>

                    <td>
                      <span>PayPal</span>
                    </td>
                 </tr>

                </table>
              </div>
            </div>
              </form>
        </div>

        <div class="container mb-5">
          <div class="row justify-content-center justify-content-md-around justify-content-sm-center " style="height: 50px; margin-top: 30px">

              <a class="col-md-4 col-sm-9  mr-3" href="/adresa">
                <button type="button" class="btn-success col-12  h-100"><h4>Späť</h4></button>
              </a>

              <a class="col-md-4 col-sm-9 mt-sm-3 mt-md-0 mt-3" href="/zhrnutie">
                <button type="submit" class="btn-success  col-12  h-100 "><h4>Zhrnutie Objednávky</h4></button>
              </a>

          </div>
        </div>
      </div>
    </div>
</form>
    </main>

    @endsection
