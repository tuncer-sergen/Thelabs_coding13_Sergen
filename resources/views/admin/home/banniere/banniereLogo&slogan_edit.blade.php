@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Logan & Slogan</h1>
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
    <form action="/banniereLogoSlogan/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')
    @csrf
        <div class="card-body d-flex flex-column align-items-center">
            <label for="" class='my-3'>logo :</label>
            <img src="{{asset('img/'.$edit->logo)}}" alt="" height='50px'>
            <input type="file" name="logo">
            <label for="" class='my-3'>slogan :</label>
            <textarea name="slogan" cols="30" rows="3">{{$edit->slogan}}</textarea>
            <button type="submit" class='btn bg-orange mt-3'>editer</button>
        </div>
    </form>
    <div class="card-footer bg-orange">
    <a href="/banniereImg"><button type="button" class="btn btn-outline-light">retour</button></a>
    </div>
</div>
@stop
