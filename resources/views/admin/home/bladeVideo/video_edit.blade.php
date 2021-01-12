@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Vidéo</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/video/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50'>
            <label for="logo">image video :</label>
            <input type="file" name="imageVideo" class='form-control text-center'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">url video :</label>
            <input type="text" name="srcVideo" class='form-control text-center' value='{{$edit->srcVideo}}'>
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
