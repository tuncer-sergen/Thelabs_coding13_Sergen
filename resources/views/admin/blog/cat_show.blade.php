@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Categorie</h1>
@stop

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <div class='card-body'>
        <h2 class='mb-5'><u>Rajouter un categorie</u> :</h2>
        <form action="/cat" method='POST'>
        @csrf
            <label for="logo">categorie :</label>
            <input type="text" name="categorie">
            <div>
                <button type="submit" class='btn bg-orange mt-4'>ajouter</button>
            </div>
        </form>
        <hr>
    </div>
    <div class='mt-5'>
        <h2><u>les categories</u> :</h2>
        @foreach($cat as $element)
        <form action="/cat/{{$element->id}}/edit" method="get">
        @csrf
            <p>- {{$element->categorie}}</p>
            <button type="submit" class='btn btn-success'>edit</button>

        </form>
        <form action="/cat/{{$element->id}}" method="post">
        @method('DELETE')
        @csrf
            <button type="submit" class='btn btn-danger my-3'>delete</button>
        </form>
        @endforeach
    </div>

    <div class="card-footer bg-orange">
    </div>
</div>
@stop
