@extends('layouts.app')

@section('links')
    <a href={{route('articles.index')}}>Articles</a>
    <a href={{route('articles.create')}}>Create</a>
@endsection

@section('content')
    <h1>Atricle List</h1>
    @foreach($articles as $article)
        <h2>
            <a href={{route('articles.show', $article->id)}}>{{$article->name}}</a>
        </h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
