@extends('layouts.master')

@section('title')
    Canciones del album {{ $album->name }}
@endSection

@section('content')

<h3> <a href="{{route('albums.index')}}">Volver a la lista de albums</a></h3>
<ul>

    @foreach ($album->songs as $song)
    <li>Nombre de la cancion : {{$song->name}} | Duracion: {{$song->duration}}</li>
    @endforeach
</ul>

<form method="post" action="{{ route('albums.destroy', $album->id)}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="Eliminar album">
</form>
@endSection
