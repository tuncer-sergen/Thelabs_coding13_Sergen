@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Service</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/serviceHome/{{$edit->id}}" method="post">
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50  d-flex flex-column'>
            <label for="logo">icone service(class) :</label>
            <input type="text" name="iconeService" class='form-control' value='{{$edit->iconeService}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">titre service :</label>
            <input type="text" name="titreService" class='form-control' value='{{$edit->titreService}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">text service :</label>
            <textarea name="textService" cols="30" rows="3" class='form-control'>{{$edit->textService}}</textarea>
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
