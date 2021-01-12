@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Service</h1>
@stop

@section('content')
<link rel="stylesheet" href="css/flaticon.css"/>

<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <h2><u>le titre</u> :</h2>
    <form action="/serviceTitreHome/{{$titre[0]->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p><u>titre</u> : {{$titre[0]->titre}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <hr>
    <h2><u>rajouter un service</u> :</h2>
    <form action="/serviceHome" method="post">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <label for=""><u>icone(class)</u> :</label>
            <input type="text" name="iconeService">
            <label for="" class='mt-3'><u>Titre service</u> :</label>
            <input type="text" name="titreService">
            <label for="" class='mt-3'><u>texte service</u> :</label>
            <textarea name="textService" cols="22" rows="3"></textarea>
            <button type="submit" class='btn bg-orange mt-3'>ajouter</button>
        </div>
    </form>
    <hr>
    <h2><u>les commentaires</u> :</h2>
    
    @foreach($datas as $element)
    <form action="/serviceHome/{{$element->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p><u>icone service</u> : <i class='{{$element->iconeService}}'></i></p>
            <p><u>titre service</u> : {{$element->titreService}}</p>
            <p><u>texte service</u> : {{$element->textService}}</p>
     
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <form action="/serviceHome/{{$element->id}}" method="post">
    @method('DELETE')
    @csrf
        <button type="submit" class='btn btn-danger'>Delete</button>
    </form>
    <hr>
    @endforeach
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
