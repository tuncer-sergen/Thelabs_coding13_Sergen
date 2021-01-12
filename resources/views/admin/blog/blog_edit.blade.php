@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Articles & tag & categorie</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <h1><u>rajouter un article</u></h1>
    <form action="/blogAdmin" method="post" enctype='multipart/form-data'>
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50  d-flex flex-column'>
            <label for="">image Blog :</label>
            <input type="file" name="imageBlog" class='form-control'>
        </div>
        <div class='form-group w-50'>
            <label for="">date :</label>
            <input type="text" name="date" class='form-control text-center' value='{{$edit->date}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">titre blog :</label>
            <input type="text" name="titreBlog" class='form-control text-center' value='{{$edit->titreBlog}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">description blog :</label>
            <input type="text" name="descriptionBlog" class='form-control text-center' value='{{$edit->descriptionBlog}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">auteur blog :</label>
            <input type="text" name="auteurBlog" class='form-control text-center' value='{{$edit->auteurBlog}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">photo auteur :</label>
            <input type="file" name="photoProfilAuteur" class='form-control text-center'>
        </div>
        <div class='form-group w-50'>
            <label for="">texte auteur :</label>
            <input type="text" name="textAuteur" class='form-control text-center' value='{{$edit->textAuteur}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">textBlog :</label>
            <input type="text" name="textBlog" class='form-control text-center' value='{{$edit->textBlog}}'>
        </div>
        <div class='form-group w-50'>
            <button type="submit" class='btn bg-orange'>ajouter</button>
        </div>
    </div>
    </form>
    <hr>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
