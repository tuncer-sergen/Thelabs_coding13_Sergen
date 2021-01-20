@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Testimonial</h1>
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
    <form action="/testimonial/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50  d-flex flex-column'>
            <label for="logo">commentaire :</label>
            <textarea name="commentaire" cols="30" rows="3">{{$edit->commentaire}}</textarea>
        </div>
        <div class='form-group w-50'>
            <label for="logo">image :</label>
            <input type="file" name="image" class='form-control'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">nom :</label>
            <input type="text" name="nom" class='form-control text-center' value='{{$edit->nom}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">prenom :</label>           
            <input type="text" name="prenom" class='form-control text-center' value='{{$edit->prenom}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">poste :</label>
            <input type="text" name="poste" class='form-control text-center' value='{{$edit->poste}}'>
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
