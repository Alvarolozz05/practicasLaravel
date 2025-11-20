@extends('layouts.master')

@section('title', 'Lista de Artículos')

@section('content')
    <h1>Artículos:</h1>
    <p>ID: {{ $id }}</p>
    <p>Usuario: {{ $username }}</p>

    @foreach ($articles as $article)
        {{ $article }} <br>
    @endforeach
@endsection