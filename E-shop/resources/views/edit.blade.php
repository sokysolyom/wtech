
    @extends('app')

    @section('styles')
      <link rel="stylesheet" href="{{ asset('css/adress.css') }}">
    @endsection


@section('content')
<form action="/products/edit/{{$product->id}}" method="POST">
<div class="container-fluid col-sm-12 col-md-5 ">
<h2>AHOJ</h2>
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
    <div class="form-group">
        <label for="colour">Farba</label>
        <textarea class="form-control"  name="colour" >{{$product->colour}}</textarea>
    </div>
    <div class="form-group">
        <label for="rozmery">Rozmery</label>
        <textarea class="form-control" name="rozmery" >{{$product->rozmery}}</textarea>
    </div>
    <div class="form-group">
        <label for="material">Material</label>
        <textarea class="form-control" name="material" >{{$product->material}}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Cena</label>
        <textarea class="form-control" name="price" >{{$product->price}}</textarea>
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
@endsection
