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
        <p>nom : {{$user->name}}</p>
        <p>email : {{$user->email}}</p>
        <form action="/userAdmin/{{$user->id}}" method='POST'>
        @csrf
        <div>
            role : <select name="role_id">
                @foreach($role as $element)
                <option value="{{$element->id}}">{{$element->role}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class='btn bg-orange mt-3'>modifier</button>
        </form>
    </div>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
