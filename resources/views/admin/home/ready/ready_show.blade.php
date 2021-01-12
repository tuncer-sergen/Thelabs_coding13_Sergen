@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ready</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/ready/{{$datas[0]->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p><u>titre</u> : {{$datas[0]->readyTitre}}</p>
            <p><u>sosu-titre</u> : {{$datas[0]->readySousTitre}}</p>
            <p><u>nom boutton</u> : {{$datas[0]->readyBoutton}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
