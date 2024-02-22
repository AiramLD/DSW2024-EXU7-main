@extends('layouts.master')

@section('title')
    Artistas
@endSection

@section('content')

    <h2>Lista de artistas</h2>

    <ul>
        @foreach ($artists as $artist)
        <dl>

            <dt><a href="{{route('artists.show', $artist->id)}}">{{$artist->name}}</a></dt>

            <dd>Numero de albums: {{count($artist->albums)}}</dd>
            <dd> Numero de canciones: {{$artist->songs->count()}}</dd>
        </dl>

        @endforeach
    </ul>
@endsection
