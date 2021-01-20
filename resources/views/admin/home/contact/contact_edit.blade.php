@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Contact</h1>
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
    <form action="/contactHome/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50'>
            <label for="logo">Titre :</label>
            <input type="text" name="titreContact" class='form-control text-center' value='{{$edit->titreContact}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">Texte :</label>
            <input type="text" name="textContact" class='form-control text-center' value='{{$edit->textContact}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">Sous-titre :</label>
            <input type="text" name="sousTitreContact" class='form-control text-center' value='{{$edit->sousTitreContact}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">Rue :</label>
            <input type="text" name="rueContact" class='form-control text-center' value='{{$edit->rueContact}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">Ville :</label>
            <input type="text" name="codePostalContact" class='form-control text-center' value='{{$edit->codePostalContact}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">Téléphone :</label>
            <input type="text" name="telContact" class='form-control text-center' value='{{$edit->telContact}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">Email :</label>
            <input type="text" name="emailContact" class='form-control text-center' value='{{$edit->emailContact}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">Nom boutton :</label>
            <input type="text" name="btnContact" class='form-control text-center' value='{{$edit->btnContact}}'>
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
