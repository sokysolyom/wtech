

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
        @php
        if (Auth::check())
        {
            $put_url = "/doprava/".$order_id;
        }
        else {
            $put_url = "/doprava/";
        }
    @endphp
        <form method="post" action={{ $put_url }}>
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
                      <input class="form-check-input" type="radio" name="doprava" id="1" value="Slovenská pošta" >
                    </td>
                    <td>
                      <span>Slovenská pošta</span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="doprava" id="2" value="Zasielkovňa" >
                    </td>
                    <td>
                      <span>Zasielkovňa</span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="doprava" id="3" value="Kuriér" >
                    </td>
                    <td>
                      <span>Kuriér</span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="doprava" id="4" value="Vyzdvihnúť na mieste" >
                    </td>

                    <td>
                    <span>Vyzdvihnúť na mieste</span>
                    </td>
                  </tr>

                </table>

                <input type="hidden" value="{{$choices[0]}}" id ='platba'>
                <input type="hidden" value="{{$choices[1]}}" id ='doprava'>




              </div>
            </div>
            <div class="container-fluid  col-12 col-sm-12 col-md-5 mt-md-0 mt-sm-5 mt-5 ">
              <h3>Výber platby</h3>

              <div id="container_doprava" class="container">
                <table class="table border-bottom">

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="platba" id="5" value="Platba Kartou" >
                    </td>

                    <td>
                      <span>Platba Kartou</span>
                    </td>

                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="platba" id="6" value="Platba dobierkou" >
                    </td>

                    <td>
                      <span>Platba dobierkou</span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="platba" id="7" value="Bankový prevod" >
                    </td>

                    <td>
                      <span>Bankový prevod</span>
                    </td>
                 </tr>

                  <tr>
                    <td>
                      <input class="form-check-input" type="radio" name="platba" id="8" value="PayPal" >
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
            @php
                if (Auth::check())
                {

                    $ref1 = "/adresa/".$order_id;
                    $ref2 = "/zhrnutie/".$order_id;
                }
                else {
                  $ref1 = '/adresa';
                  $ref2 = '/zhrnutie';
                }
            @endphp
              <a class="col-md-4 col-sm-9  mr-3" href={{$ref1}}>
                <button type="button" class="btn-success col-12  h-100"><h4>Späť</h4></button>
              </a>

              <a class="col-md-4 col-sm-9 mt-sm-3 mt-md-0 mt-3" href={{$ref2}}>
                <button type="submit" class="btn-success  col-12  h-100 "><h4>Zhrnutie Objednávky</h4></button>
              </a>

          </div>
        </div>
      </div>
    </div>
</form>
    </main>




    <script>
      document.addEventListener("DOMContentLoaded", function(){
        var idplatba = document.getElementById('platba').value;
        var iddoprava = document.getElementById('doprava').value;
        console.log(iddoprava);

        var iplatba =0;
        var idoprava =0;
        if (idplatba == "Platba Kartou")
        {
          iplatba = 5
        }
        if (idplatba == "Platba dobierkou")
        {
          iplatba = 6
        }
        if (idplatba == "Bankový prevod")
        {
          iplatba = 7
        }
        if (idplatba == "Paypal")
        {
          iplatba = 8
        }

        if (iddoprava == "Slovenská pošta")
        {
          idoprava = 1
        }
        if (iddoprava == "Zasielkovňa")
        {
          idoprava = 2
        }
        if (iddoprava == "Kuriér")
        {
          idoprava = 3
        }
        if (iddoprava == "Vyzdvihnúť na mieste")
        {
          idoprava = 4
        }
        console.log(idoprava);
        var my_id = document.getElementById(iplatba).checked = true;
        var my_id2 = document.getElementById(idoprava).checked = true;
        console.log("SADS");
      });


    </script>

    @endsection
