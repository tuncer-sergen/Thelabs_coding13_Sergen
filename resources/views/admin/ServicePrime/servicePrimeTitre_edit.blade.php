@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Service Prime</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/servicePrime/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')   
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50'>
            <label for="logo">titre :</label>
            <input type="text" name="titreServicePrime" class='form-control text-center' value='{{$edit->titreServicePrime}}'>
        </div>
        <div class='form-group w-50'>
            <label for="logo">nom boutton :</label>
            <input type="text" name="btnServicePrime" class='form-control text-center' value='{{$edit->btnServicePrime}}'>
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
