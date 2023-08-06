@extends('layouts.app')

@section('links')
    <a href={{route('articles.index')}}>Articles</a>
    <a href={{route('articles.edit', $article->id)}}>Edit</a>
    <a href={{route('articles.destroy', $article->id)}} data-confirm="Ви впевненні?" data-method="delete" rel="nofollow">Удалить</a>
@endsection

@section('content')
    <h1>Atricle</h1>
        <h2>{{$article->name}}</h2>
        <div>{{Str::limit($article->body, 200)}}</div>
@endsection
