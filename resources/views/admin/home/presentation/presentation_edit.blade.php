@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Menu</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/presentation/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50'>
            <label for="logo">titre :</label>
            <input type="text" name="titre" class='form-control text-center' value='{{$edit->titre}}'>
        </div>
        <div class='form-group w-50 d-flex flex-column'>
            <label for="logo">text 1 :</label>
            <textarea name="text1" cols="50" rows="5">{{$edit->text1}}</textarea>
        </div>
        <div class='form-group w-50 d-flex flex-column'>
            <label for="logo">text 2 :</label>           
            <textarea name="text2" cols="50" rows="5">{{$edit->text2}}</textarea>
        </div>
        <div class='form-group w-50'>
            <label for="logo">nom boutton :</label>
            <input type="text" name="nomBoutton" class='form-control text-center' value='{{$edit->nomBoutton}}'>
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
