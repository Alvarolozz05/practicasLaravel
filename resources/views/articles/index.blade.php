@extends('layouts.master')

@section('title', 'Listado de Artículos')

@section('content')
    <h2>Listado de Artículos</h2>

    <a href="{{ route('articles.create') }}">Nuevo artículo</a>
    <br><br>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    @if($arts->isEmpty())
        <p>No hay artículos disponibles.</p>
    @else
        <table border="1" cellpadding="6">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arts as $article)
                <tr>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}">
                            {{ $article->title }}
                        </a>
                    </td>
                    <td>{{ $article->date }}</td>
                    <td>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este artículo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
