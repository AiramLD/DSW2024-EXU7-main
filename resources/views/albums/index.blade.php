@extends('layouts.master')

@section('title')
    Albums
@endSection

@section('content')

    <h2>Lista de albums</h2>

    <a href="{{ route('songs.create') }}">Añadir cancion a un album</a>


    @foreach ($albums as $album)
        <dl>
            <dt><a href="{{ route('albums.show', $album->id) }}">{{ $album->name }}</a></dt>
            <dd>Año: {{ $album->year }}</dd>
            <dd>Artista: {{ $album->artist->name }}</dd>
            <dd>Numero de canciones: {{ count($album->songs) }}</dd>
        </dl>
    @endforeach
@endsection
