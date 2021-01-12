@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Service titre</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/serviceTitreHome/{{$edit->id}}" method="post">
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50'>
            <label for="logo">titre :</label>
            <input type="text" name="titre" class='form-control text-center' value='{{$edit->titre}}'>
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
