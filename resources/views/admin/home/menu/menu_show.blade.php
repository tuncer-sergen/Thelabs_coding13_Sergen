@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Menu</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/menu/{{$datas[0]->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p>nom lien 1 : {{$datas[0]->nomLien1}}</p>
            <p>nom lien 1 : {{$datas[0]->nomLien2}}</p>
            <p>nom lien 1 : {{$datas[0]->nomLien3}}</p>
            <p>nom lien 1 : {{$datas[0]->nomLien4}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
