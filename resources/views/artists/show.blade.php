@extends('layouts.master')

@section('title')
    Albumes del artista {{ $artist->name }}
@endSection

@section('content')

<h3> <a href="{{route('artists.index')}}">Volver a la lista de artistas</a></h3>

<ul>

@foreach($artist->albums as $album)
    <li>Nombre del album : {{$album->name}} | Año: {{$album->year}}</li>
@endforeach

</ul>

@endSection
