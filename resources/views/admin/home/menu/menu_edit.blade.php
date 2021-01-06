@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Menu</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/menu/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50'>
            <label for="logo">nom lien 1 :</label>
            <input type="text" name="nomLien1" class='form-control text-center' value='{{$edit->nomLien1}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">nom lien 2 :</label>
            <input type="text" name="nomLien2" class='form-control text-center' value='{{$edit->nomLien2}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">nom lien 3 :</label>
            <input type="text" name="nomLien3" class='form-control text-center' value='{{$edit->nomLien3}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">nom line 4 :</label>
            <input type="text" name="nomLien4" class='form-control text-center' value='{{$edit->nomLien4}}'>
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
