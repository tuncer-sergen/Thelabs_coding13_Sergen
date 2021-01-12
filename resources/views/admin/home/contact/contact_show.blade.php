@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Contact</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/contactHome/{{$datas[0]->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <p><u>titre</u> : {{$datas[0]->titreContact}}</p>
            <p><u>texte</u> : {{$datas[0]->textContact}}</p>
            <p><u>sous-titre</u> : {{$datas[0]->sousTitreContact}}</p>
            <p><u>rue</u> : {{$datas[0]->rueContact}}</p>
            <p><u>ville</u> : {{$datas[0]->codePostalContact}}</p>
            <p><u>tel</u> : {{$datas[0]->telContact}}</p>
            <p><u>email</u> : {{$datas[0]->emailContact}}</p>
            <p><u>nom boutton</u> : {{$datas[0]->btnContact}}</p>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </form>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
