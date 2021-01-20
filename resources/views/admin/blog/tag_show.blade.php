@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">tag</h1>
@stop

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <div class='card-body'>
        <h2 class='mb-5'><u>Rajouter un tag</u> :</h2>
        <form action="/tag" method='Post'>
        @csrf
            <label for="logo">tag :</label>
            <input type="text" name="tag">
            <div>
                <button type="submit" class='btn bg-orange mt-4'>ajouter</button>
            </div>
        </form>
        <hr>
    </div>
    <div class='mt-5'>
        <h2><u>les Tags</u> :</h2>
        @foreach($tag as $element)
        <form action="/tag/{{$element->id}}/edit" method="get">
        @csrf
            <p>- {{$element->tag}}</p>
            <button type="submit" class='btn btn-success'>edit</button>
        </form>
        <form action="/tag/{{$element->id}}" method="post">
        @method('DELETE')
        @csrf
            <button type="submit" class='btn btn-danger my-3'>delete</button>
        </form>
        @endforeach
        <hr>
        <hr>
    </div>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
