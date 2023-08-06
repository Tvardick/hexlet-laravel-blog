<!-- Хранится в resources/views/about.blade.php -->

@extends('layouts.app')

@section('links')
    <a href={{route('articles.index')}}>Articles</a>
    <a href={{route('articles.create')}}>Create</a>
@endsection
<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'О блоге')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h1>О блоге</h1>
    <p>Эксперименты с Laravel на Хекслете</p>
@endsection
