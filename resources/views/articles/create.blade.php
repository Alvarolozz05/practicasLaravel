@auth

@extends('layouts.master')

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

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf

        <p>
            <label>Título:</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>

        <p>
            <label>Contenido:</label><br>
            <textarea name="body" rows="5">{{ old('body') }}</textarea>
        </p>

        <p>
            <label>Fecha:</label><br>
            <input type="date" name="date" value="{{ old('date') }}">
        </p>

        <button type="submit">Guardar artículo</button>
    </form>

@endsection
@endauth