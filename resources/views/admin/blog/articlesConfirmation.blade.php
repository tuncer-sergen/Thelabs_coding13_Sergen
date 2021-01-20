@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Confirme Articles</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header bg-orange">
    </div>

    <h1 class='text-center'><u>Les Articles</u></h1>
    @foreach($datas as $element)
    @if($element->confirmer == false)
    <div class='card-body d-flex flex-column align-items-center'>
    <form action="/accepterArticle/{{$element->id}}" method="POST">
    @csrf
        <h2 class='my-5'><u>article {{$element->id}}</u> :</h2>
        <u>image article</u> :<img src="{{asset('img/blog/'.$element->imageBlog)}}" alt="" height='100px'>
        <p><u>date</u> : {{$element->date}}</p>
        <p><u>titre</u> : {{$element->titreBlog}}</p>
        <p><u>description blog</u> :{{$element->descriptionBlog}}</p>
        <p><u>auteur</u> :{{$element->auteurBlog}}</p>
        <u>image auteur</u> : <img src="{{asset('img/avatar/'.$element->photoProfilAuteur)}}" alt="" height='100px'>
        <p><u>texte auteur</u> : {{$element->textAuteur}}</p>
        <p><u>text Blog-post</u> :{{$element->textBlog}}</p>
        <p><u>tags</u> :</p>
            @foreach($element->tag as $item)
                <p>- {{$item->tag}}</p>
            @endforeach
        <p><u>categorie</u> :</p>
            @foreach($element->categorie as $item)
                <p>- {{$item->categorie}}</p>
            @endforeach
        <button type="submit" class='btn btn-success mb-3'>accepter</button>
    </form>
    <form action="/blogAdmin/{{$element->id}}" method="post">
    @method('DELETE')
    @csrf
        <button type="submit" class='btn btn-danger'>refus</button>
    </form>
    </div>
    <hr> 
    @endif
    @endforeach   
    <div class="card-footer bg-orange">
    </div>
</div>
@stop
