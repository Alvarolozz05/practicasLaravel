@extends('layouts.master')
@vite(['resources/css/show.css'])

@section('title', $article->title)

@section('content')
    <h2>{{ $article->title }}</h2>

    <p><strong>Autor:</strong> {{ $article->user_id }}</p>
    <p><strong>Fecha:</strong> {{ $article->date }}</p>

    <hr>

    <p>{{ $article->body }}</p>

    <br>
    <a href="{{ route('articles.index') }}">← Volver al listado</a>
@endsection