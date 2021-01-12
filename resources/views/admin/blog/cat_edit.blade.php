@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">categorie modifier</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <div class='card-body d-flex flex-column align-items-center'>
    <form action="/cat/{{$edit->id}}" method='Post'>
    @method('PUT')
    @csrf
        <div class='form-group w-50'>
            <label for="">categorie :</label>
            <input type="text" name="categorie" class='form-control text-center' value='{{$edit->categorie}}'>
        </div>
        <div class='form-group w-50'>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    </div>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
