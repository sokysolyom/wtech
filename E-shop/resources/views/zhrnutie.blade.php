
    @extends('app')

    @section('styles')
    <link rel="stylesheet" href="../css/style.css">
    @endsection


    @section('content')
    <div class="d-block d-sm-block d-md-none">
      <a href="./welcome.html" class="navbar-brand logo"> <img src="../images/logo-nabytok.png" alt="" class="main-logo">
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
              <h6>Ladislav Sokol</h6>
              <h6>Lipova 2</h6>
              <h6>Želiezovce</h6>
              <h6>xsokol@stuba.sk</h6>
              <h6>0904555555</h6>
            </div>
            <div class="container col-md-6 col-sm-12 mt-4 mb-4">
              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-6">Spôsob platby:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">Karta</h6>
                </div>
              </div>
              
  
              <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-6">Dodanie:</h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">Kuriér</h6>
                </div>
              </div>
  
  
  
               <div class="row pl-5 pr-5 justify-content-start">
                <h6 class="col-6">Očakávaný dátum dodania: </h6>
                <div class="col-6 row align-items-center justify-content-start">
                  <h6 class=" vertical-align:align-middle">29.9.2022</h6>
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
                <tr>
                  <td><p>Postel Minecraft postel , pohodlna 200x250</p></td>
                  <td class ="center ">
                      <div class="row justify-content-center">
                        <h4 class="m-0">2</h4>
                      </div>
                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">55.50</h4>
                      <h4 class="col-4 text-start m-0 p-1">$</h4>
                    </div>
                    
                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">55.50</h4>
                      <h4 class="col-4 text-start m-0 p-1">$</h4>
                    </div>
                    
                  </td>
      
                </tr>
                <tr>
                  <td><p>Postel Minecraft postel , pohodlna 200x25 ja neviem ako sa to valoa</p></td>
                  <td class ="center">
                    <div class="row justify-content-center">
                      <h4 class="m-0">2</h4>
                    </div>
                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">55.50</h4>
                      <h4 class="col-4 text-start m-0 p-1">$</h4>
                    </div>
                    
                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">55.50</h4>
                      <h4 class="col-4 text-start m-0 p-1">$</h4>
                    </div>
                    
                  </td>
                  
                </tr>
                <tr>
                  <td><p>Postel Minecraft postel , pohodlna 200x250</p></td>
                  <td class ="center" > 
                    <div class="row justify-content-center">
                      <h4 class="m-0">2</h4>
                    </div>
                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">55.50</h4>
                      <h4 class="col-4 text-start m-0 p-1">$</h4>
                    </div>
                    
                  </td>
                  <td style="text-align: center;">
                    <div class="row">
                      <h4 class="col-8 text-end p-1 m-0">90.50</h4>
                      <h4 class="col-4 text-start m-0 p-1">$</h4>
                    </div>
                    
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
  
          <div class="container">
            <div class="row mb-5 mt-5">
              <div class="col-10">
                <h2 class= "text-right">Celková cena :</h2>
              </div>
              <div class = "col-2 p-0 mx-auto">
                <h2>500 $
                </h2>
              </div>
            </div>
          </div>
          
          <div class="container mb-5">
            <div class="row justify-content-center justify-content-md-around justify-content-sm-center " style="height: 50px;">
              
                <a class="col-4 col-md-4 col-sm-9 mt-sm-3 mt-md-0 " href="./vyber_dopravy.html">
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
    