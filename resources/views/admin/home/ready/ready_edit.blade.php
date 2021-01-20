@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ready</h1>
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
    <form action="/ready/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50'>
            <label for="logo">titre :</label>
            <input type="text" name="readyTitre" class='form-control text-center' value='{{$edit->readyTitre}}'>
        </div>
        <div class='form-group w-50 d-flex flex-column'>
            <label for="logo">Sous-titre :</label>
            <input type="text" name="readySousTitre" class='form-control text-center' value='{{$edit->readySousTitre}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">nom boutton :</label>
            <input type="text" name="readyBoutton" class='form-control text-center' value='{{$edit->readyBoutton}}'>
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
