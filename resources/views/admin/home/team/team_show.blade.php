@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Team</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <h2><u>le titre</u> :</h2>
    <form action="/teamTitre/{{$titre[0]->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p><u>titre</u> : {{$titre[0]->titre}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <hr>
    <h2><u>rajouter un membre</u> :</h2>
    <form action="/team" method="post" enctype='multipart/form-data'>
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <label for=""><u>image profil</u> :</label>
            <input type="file" name="imageTeam">
            <label for="" class='mt-3'><u>Nom</u> :</label>
            <input type="text" name="nomTeam">
            <label for="" class='mt-3'><u>Prénom</u> :</label>
            <input type="text" name='prenomTeam'>
            <label for="" class='mt-3'><u>Poste</u> :</label>
            <input type="text" name='posteTeam'>
            <button type="submit" class='btn bg-orange mt-3'>ajouter</button>
        </div>
    </form>
    <hr>
    <h2><u>les commentaires</u> :</h2>
    
    @foreach($datas as $element)
    <form action="/team/{{$element->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p><u>image profil</u> :<p><img src="{{asset('img/team/'.$element->imageTeam)}}" alt="" height='200px'>
            <p><u>Nom</u> : {{$element->nomTeam}}</p>
            <p><u>Prénom</u> : {{$element->prenomTeam}}</p>
            <p><u>poste</u> : {{$element->posteTeam}}</p>
     
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <form action="/team/{{$element->id}}" method="post">
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
