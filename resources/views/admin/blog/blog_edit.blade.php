@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Articles & tag & categorie</h1>
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
    <h1><u>rajouter un article</u></h1>
    <form action="/blogAdmin/{{$edit->id}}" method="post" enctype='multipart/form-data'>
    @method('PUT')
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50  d-flex flex-column'>
            <label for="">image Blog :</label>
            <input type="file" name="imageBlog" class='form-control'>
        </div>

        <div class='form-group w-50'>
            <label for="">titre blog :</label>
            <input type="text" name="titreBlog" class='form-control text-center' value='{{$edit->titreBlog}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">description blog :</label>
            <input type="text" name="descriptionBlog" class='form-control text-center' value='{{$edit->descriptionBlog}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">texte auteur :</label>
            <input type="text" name="textAuteur" class='form-control text-center' value='{{$edit->textAuteur}}'>
        </div>
        <div class='form-group w-50'>
            <label for="">textBlog :</label>
            <input type="text" name="textBlog" class='form-control text-center' value='{{$edit->textBlog}}'>
        </div>
        <select multiple="" class="form-control" name="tag[]">
            @foreach ($tag as $item)
                <option value="{{$item->id}}"  {{ in_array($item->id, old('tag') ?: []) ? 'selected' : '' }}>{{$item->tag}}</option>
            @endforeach
        </select>
        <select multiple="" class="form-control" name="categorie[]">
            @foreach ($cat as $item)
                <option value="{{$item->id}}"  {{ in_array($item->id, old('categorie') ?: []) ? 'selected' : '' }}>{{$item->categorie}}</option>
            @endforeach
        </select>
        <div class='form-group w-50'>
            <button type="submit" class='btn bg-orange'>modifier</button>
        </div>
    </div>
    </form>
    <hr>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
