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
        @foreach($user as $element)
        <form action="/userAdmin/{{$element->id}}/edit" method='GET'>
        @csrf
            <p>name : {{$element->name}}</p>
            <p>email : {{$element->email}}</p>
            <p>role : {{$element->role->role}}</p>
            <button type="submit" class='btn bg-orange'>modfier role</button>
        </form>
        @if($team->contains('nomTeam',$element->name))
        <div>deja dans team</div>
        @else
        @can('team')
        <form action="/userTeam/{{$element->id}}" method="post">
        @csrf
            <button type="submit" class='btn bg-orange mt-3'>Team</button>
        </form>
        @endcan
        @endif
        <hr>
        @endforeach
    </div>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
