@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">User</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <div class='card-body'>
        <h2 class='mb-5'><u>User</u> :</h2>
        @foreach($newsletter as $element)
            <p>email : {{$element->email}}</p>
            <hr>
        @endforeach
    </div>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
