@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Menu</h1>
@stop

@section('content')


<link rel="stylesheet" href="{{asset('css/style.css')}}"/>

<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/video/{{$datas[0]->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p>image video : {{$datas[0]->imageVideo}}</p>
            <p>url video : {{$datas[0]->srcVideo}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
