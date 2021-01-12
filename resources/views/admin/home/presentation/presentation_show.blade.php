@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Présentation</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/presentation/{{$datas[0]->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p>titre : {{$datas[0]->titre}}</p>
            <p>texte 1 : {{$datas[0]->text1}}</p>
            <p>texte 2 : {{$datas[0]->text2}}</p>
            <p>nom boutton : {{$datas[0]->nomBoutton}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
