@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">mail</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <div class='card-body'>
        <h2 class='mb-5'><u>mail</u> :</h2>
        @foreach($mail as $element)
            <p>name : {{$element->name}}</p>
            <p>email : {{$element->email}}</p>
            <p>subject : {{$element->subject}}</p>
            <p>message : {{$element->message}}</p>
            <hr>
        @endforeach
    </div>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
