
    @extends('app')

    @section('styles')
      <link rel="stylesheet" href="{{ asset('css/adress.css') }}">
    @endsection


@section('content')
<form enctype="multipart/form-data" action="/products/edit/{{$product->id}}" method="POST">
<div class="container-fluid col-sm-12 col-md-5 ">
<h2>Editovať produkt</h2>
    <hr>

	<input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Názov produktu</label>
        <input type="text" value="{{$product->title}}" class="form-control" name="title" >
    </div>
    <div class="form-group">
        <label for="description">Opis produktu</label>
        <textarea class="form-control" name="description" >{{$product->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="parametre">Parametre</label>
        <textarea class="form-control"  name="parametre" >{{$product->parametre}}</textarea>
    </div>
    <div id="container_doprava" class="container">
        <table class="table">
            <label for="description">Farba</label>
            <tr>
            <td>
                <input class="form-check-input" type="radio" name="colour" id="1" value="cervena" >
            </td>
            <td>
                <span>Červená</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="colour" id="2" value="modra" >
            </td>
            <td>
                <span>Modrá</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="colour" id="3" value="zlta" >
            </td>
            <td>
                <span>Žltá</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="colour" id="4" value="biela" >
            </td>
            <td>
                <span>Biela</span>
            </td>
            </tr>
        </table>
    </div>
    <div class="form-group">
        <label for="rozmery">Rozmery</label>
        <textarea class="form-control" name="rozmery" >{{$product->rozmery}}</textarea>
    </div>
    <div id="container_doprava" class="container">
        <table class="table">
            <label for="description">Materiál</label>
            <tr>
            <td>
                <input class="form-check-input" type="radio" name="material" id="5" value="kov" >
            </td>
            <td>
                <span>Kov</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="material" id="6" value="plast" >
            </td>
            <td>
                <span>Plast</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="material" id="7" value="drevo" >
            </td>
            <td>
                <span>Drevo</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="material" id="8" value="koza" >
            </td>
            <td>
                <span>Koža</span>
            </td>
            </tr>
        </table>
    </div>
    <div class="form-group">
        <label for="price">Cena</label>
        <textarea class="form-control" name="price" >{{$product->price}}</textarea>
    </div>
    <div class="form-group">
        <input type="file" name="image" id="image">
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Zmeniť</button>
</div>
</form>

<input type="hidden" value="{{$product->colour}}" id ='colour'>
<input type="hidden" value="{{$product->material}}" id ='material'>

<script>
    document.addEventListener("DOMContentLoaded", function(){
      var farba = document.getElementById('colour').value;
      var material = document.getElementById('material').value;

      var idFarba =0;
      var idMaterial =0;
      if (farba == "cervena")
      {
        idFarba = 1
      }
      if (farba == "modra")
      {
        idFarba = 2
      }
      if (farba == "zlta")
      {
        idFarba = 3
      }
      if (farba == "biela")
      {
        idFarba = 4
      }

      if (material == "kov")
      {
        idMaterial = 5
      }
      if (material == "plast")
      {
        idMaterial = 6
      }
      if (material == "drevo")
      {
        idMaterial = 7
      }
      if (material == "koza")
      {
        idMaterial = 8
      }
      var my_id = document.getElementById(idFarba).checked = true;
      var my_id2 = document.getElementById(idMaterial).checked = true;
    });


  </script>
@endsection
