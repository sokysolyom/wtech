
    @extends('app')

    @section('styles')
      <link rel="stylesheet" href="{{ asset('css/adress.css') }}">
    @endsection


@section('content')
<form enctype="multipart/form-data"  action="/newitem" method="POST">
<div class="container-fluid col-sm-12 col-md-5 ">
<h1>Pridat novy produkt</h1>
<hr>
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Názov produktu</label>
        <input type="text"  class="form-control" name="title" >
    </div>
    <div class="form-group">
        <label for="description">Popis produktu</label>
        <textarea class="form-control" name="description" ></textarea>
    </div>
    <div id="container_doprava" class="container">
        <table class="table">
            <label for="description">Kategorie</label>
            <tr>
            <td>
                <input class="form-check-input" type="radio" name="category" id="1" value="0" >
            </td>
            <td>
                <span>Stolička</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="category" id="2" value="1" >
            </td>
            <td>
                <span>Stoly</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="category" id="3" value="2" >
            </td>
            <td>
                <span>Postele</span>
            </td>
            </tr>
        </table>
    </div>
    <div class="form-group">
        <label for="parametre">Parametre</label>
        <textarea class="form-control"  name="parametre" ></textarea>
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
                <input class="form-check-input" type="radio" name="colour" id="3" value="biela" >
            </td>
            <td>
                <span>Biela</span>
            </td>
            </tr>
        </table>
    </div>
    <div class="form-group">
        <label for="rozmery">Rozmery</label>
        <textarea class="form-control" name="rozmery" ></textarea>
    </div>
    <div id="container_doprava" class="container">
        <table class="table">
            <label for="description">Materiál</label>
            <tr>
            <td>
                <input class="form-check-input" type="radio" name="material" id="1" value="kov" >
            </td>
            <td>
                <span>Kov</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="material" id="2" value="plast" >
            </td>
            <td>
                <span>Plast</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="material" id="3" value="drevo" >
            </td>
            <td>
                <span>Drevo</span>
            </td>
            </tr>

            <tr>
            <td>
                <input class="form-check-input" type="radio" name="material" id="3" value="koza" >
            </td>
            <td>
                <span>Koža</span>
            </td>
            </tr>
        </table>
    </div>
    <div class="form-group">
        <label for="price">Cena</label>
        <textarea class="form-control" name="price" ></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="image" id="image" required>
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
    <button type="submit" class="btn btn-primary">Pridať produkt</button>
</div>
</form>
@endsection
