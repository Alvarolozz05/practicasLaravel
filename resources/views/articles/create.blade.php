@auth

@extends('layouts.master')
@vite(['resources/css/crear_articulos.css'])

@section('title', 'Nuevo artículo')

@section('content')
    <h2>Crear nuevo artículo</h2>

    {{-- Errores de validación --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($article) ? route('articles.update', $article->id) : route('articles.store') }}" method="POST">
        @csrf
        @if(isset($article))
            @method('PUT')
        @endif

        <p>
            <label>Título:</label><br>
            <input type="text" name="title" value="{{ old('title', $article->title ?? '') }}">
        </p>

        <p>
            <label>Contenido:</label><br>
            <textarea name="body" rows="5">{{ old('body', $article->body ?? '') }}</textarea>
        </p>

        <p>
            <label>Fecha:</label><br>
            <input type="date" name="date" value="{{ old('date', isset($article) ? $article->date : '') }}">
        </p>

        <button type="submit">{{ isset($article) ? 'Actualizar artículo' : 'Guardar artículo' }}</button>
    </form>

@endsection
@endauth