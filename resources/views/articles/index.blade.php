@extends('layouts.master')

@section('title', 'Listado de Artículos')

@section('content')
    <h2>Listado de Artículos</h2>

    @if($arts->isEmpty())
        <p>No hay artículos disponibles.</p>
    @else
        <table border="1" cellpadding="6">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arts as $article)
                <tr>
                    <td>
                        <a href="{{ route('articles.show', $article) }}">
                            {{ $article->title }}
                        </a>
                    </td>

                    {{-- Si usas la columna "date" --}}
                    <td>{{ $article->date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection