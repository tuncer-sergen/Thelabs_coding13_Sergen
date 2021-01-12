@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Service Prime</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <h2><u>le titre</u> :</h2>
    <form action="/servicePrime/{{$datas[0]->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p><u>titre</u> : {{$datas[0]->titreServicePrime}}</p>
            <p><u>nom boutton</u> : {{$datas[0]->btnServicePrime}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
