@extends('layouts.master')
@vite(['resources/css/articulos.css'])

@section('title', 'Listado de Artículos')

@section('content')
    <h2>Listado de Artículos</h2>

    @auth
        <a href="{{ route('articles.create') }}">Nuevo artículo</a>
        <br><br>
    @endauth

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
                    @auth
                    <th>Acciones</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach($arts as $article)
                    @auth
                        @if($article->user_id === auth()->user()->id)
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
                                    
                                    <form action="{{ route('articles.edit', $article->id) }}" method="GET">
                                        <button type="submit">Editar</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @else
                        <tr>
                            <td>
                                <a href="{{ route('articles.show', $article->id) }}">
                                    {{ $article->title }}
                                </a>
                            </td>
                            <td>{{ $article->date }}</td>
                        </tr>
                    @endauth
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
