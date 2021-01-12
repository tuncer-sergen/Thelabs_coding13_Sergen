@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Logan & Slogan</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/banniereLogoSlogan/{{$datas[0]->id}}/edit" method="get" class='my-5'>
    @csrf
        <u>logo</u> : <img src="{{asset('img/'.$datas[0]->logo)}}" alt="" height='50px'>
        <p><u>slogan</u> : {{$datas[0]->slogan}}</p>
        <button type="submit" class='btn bg-orange'>modifier</button>
    </form>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
