@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Image carousel</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <form action="/banniereImg/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <img src="{{asset('img/'.$edit->image)}}" alt="" height='200px'>
            <input type="file" name="image">
            <button type="submit" class='btn bg-orange mt-3'>editer</button>
        </div>
    </form>
    <div class="card-footer bg-orange">
    <a href="/banniereImg"><button type="button" class="btn btn-outline-light">retour</button></a>
    </div>
</div>
@stop
