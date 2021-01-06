@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Team</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/team/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50  d-flex flex-column'>
            <label for="">image profil :</label>
            <input type="file" name="imageTeam" class='form-control'>
        </div>
        <div class='form-group w-50'>
            <label for="">nom :</label>
            <input type="text" name="nomTeam" class='form-control text-center' value='{{$edit->nomTeam}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">Prénom :</label>
            <input type="text" name="prenomTeam" class='form-control text-center' value='{{$edit->prenomTeam}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">Poste :</label>
            <input type="text" name="posteTeam" class='form-control text-center' value='{{$edit->posteTeam}}'>
        </div>
        <div class='form-group w-50'>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </div>
    </form>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
