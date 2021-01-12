@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Contact map</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
        <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50'>
        <div style="width: 100%">
            <iframe width="100%" height="600" src="https://maps.google.com/maps?q={{$map[0]->adresse}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"
            marginwidth="0">
            </iframe>
        </div>
        <form action="/contactMap/{{$map[0]->id}}" method="post">
        @method('PUT')
        @csrf
        <div class='form-group w-50'>
            <label for="logo">Adresse Map :</label>
            <input type="text" name="adresse" class='form-control text-center' value='{{$map[0]->adresse}}'>
            <button type="submit" class='btn bg-orange mt-3'>changer</button>
        </div>
        </form>
        </div>
        </div>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
