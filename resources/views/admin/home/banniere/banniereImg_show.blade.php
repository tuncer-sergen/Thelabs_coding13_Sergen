@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Image carousel</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <div class='mt-5'>
    <form action="/banniereImg" method="post" enctype='multipart/form-data'>
    @csrf
        <label for=""><u>rajoutez image</u> :</label>
        <input type="file" name="image">
        <button type="submit" class='btn bg-orange'>rajoutez</button>
    </form>
    </div>
    <hr>
    @foreach($datas as $element)
    <form action="/banniereImg/{{$element->id}}/edit" method="get">
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <img src="{{asset('img/'.$element->image)}}" alt="" height='200px'>
            <button type="submit" class='btn bg-orange mt-3'>modifier</button>
        </div>
    </form>
    <form action="/banniereImg/{{$element->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class='btn btn-danger'>Delete</button>
    </form>
    <hr>
    @endforeach
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
