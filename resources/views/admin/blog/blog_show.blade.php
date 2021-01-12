@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Articles & tag & categorie</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>
    <h1><u>rajouter un article</u></h1>
    <form action="/blogAdmin" method="post" enctype='multipart/form-data'>
    @csrf
    <div class="card-body d-flex flex-column align-items-center">
        <div class='form-group w-50  d-flex flex-column'>
            <label for="">image Blog :</label>
            <input type="file" name="imageBlog" class='form-control'>
        </div>
        <div class='form-group w-50'>
            <label for="">date :</label>
            <input type="text" name="date" class='form-control text-center'>
        </div>
        <div class='form-group w-50'>
            <label for="">titre blog :</label>
            <input type="text" name="titreBlog" class='form-control text-center'>
        </div>
        <div class='form-group w-50'>
            <label for="">description blog :</label>
            <input type="text" name="descriptionBlog" class='form-control text-center'>
        </div>
        <div class='form-group w-50'>
            <label for="">auteur blog :</label>
            <input type="text" name="auteurBlog" class='form-control text-center'>
        </div>
        <div class='form-group w-50'>
            <label for="">photo auteur :</label>
            <input type="file" name="photoProfilAuteur" class='form-control text-center'>
        </div>
        <div class='form-group w-50'>
            <label for="">texte auteur :</label>
            <input type="text" name="textAuteur" class='form-control text-center'>
        </div>
        <div class='form-group w-50'>
            <label for="">textBlog :</label>
            <input type="text" name="textBlog" class='form-control text-center'>
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
            <button type="submit" class='btn bg-orange'>ajouter</button>
        </div>
    </div>
    </form>
    <hr>
    <div class='text-left ml-3'>
    <h1 class='text-center'><u>Les Articles</u></h1>
    @foreach($datas as $element)
    <form action="/blogAdmin/{{$element->id}}/edit" method="get">
    @csrf
        <h2 class='my-5'><u>article {{$element->id}}</u> :</h2>
        <u>image article</u> :<img src="{{asset('img/blog/'.$element->imageBlog)}}" alt="" height='100px'>
        <p><u>date</u> : {{$element->date}}</p>
        <p><u>titre</u> : {{$element->titreBlog}}</p>
        <p><u>description blog</u> :{{$element->descriptionBlog}}</p>
        <p><u>auteur</u> :{{$element->auteurBlog}}</p>
        <u>image article</u> : <img src="{{asset('img/avatar/'.$element->photoProfilAuteur)}}" alt="" height='100px'>
        <p><u>texte auteur</u> : {{$element->textAuteur}}</p>
        <p><u>text Blog-post</u> :{{$element->textBlog}}</p>
        <p><u>tags</u> :</p>
            @foreach($element->art_tag as $item)
                <p>- {{$item->tag->tag}}</p>
            @endforeach
        <p><u>categorie</u> :</p>
            @foreach($element->art_cat as $item)
                <p>- {{$item->categorie->categorie}}</p>
            @endforeach
        <button type="submit" class='btn btn-success mb-3'>modifier</button>
    </form>
    <form action="/blogAdmin/{{$element->id}}" method="post">
    @method('DELETE')
    @csrf
        <button type="submit" class='btn btn-danger'>Delete</button>
    </form>
        <hr class='my-5'>
    @endforeach
    </div>
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
