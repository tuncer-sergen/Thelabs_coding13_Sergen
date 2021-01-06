@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">presentation</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <h2><u>le titre</u> :</h2>
    <form action="/testimonialTitre/{{$titre[0]->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p><u>titre</u> : {{$titre[0]->titre}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <hr>
    <h2><u>rajouter un commentaire</u> :</h2>
    <form action="/testimonial" method="post" enctype='multipart/form-data'>
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <label for=""><u>commentaire</u> :</label>
            <textarea name="commentaire" cols="30" rows="3"></textarea>
            <label for="" class='mt-3'><u>image de profil</u> :</label>
            <input type="file" name="image">
            <label for="" class='mt-3'><u>Nom</u> :</label>
            <input type="text" name="nom">
            <label for="" class='mt-3'><u>Prenom</u> :</label>
            <input type="text" name="prenom">
            <label for="" class='mt-3'><u>poste</u> :</label>
            <input type="text" name="poste">
            <button type="submit" class='btn bg-orange mt-3'>rajouter</button>
        </div>
    </form>
    <hr>
    <h2><u>les commentaires</u> :</h2>
    
    @foreach($datas as $element)
    <form action="/testimonial/{{$element->id}}/edit" method="get" enctype='multipart/form-data'>
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p><u>commentaire</u> : {{$element->commentaire}}</p>
            <p><u>image profil</u> : </p> <img src="{{asset('img/avatar/'.$element->image)}}" alt="" height='100px'>
            <p><u>Nom</u> : {{$element->nom}}</p>
            <p><u>Prenom</u> : {{$element->prenom}}</p>
            <p><u>Poste</u> : {{$element->poste}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <form action="/testimonial/{{$element->id}}" method="post">
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
