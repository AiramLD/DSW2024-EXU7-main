@extends('layouts.master')

@section('title')
    Canciones
@endSection

@section('content')

    <h2>Lista de canciones</h2>

    <ul>
        @foreach ($songs as $song)
        <dl></dl>

            <dt>{{$song->name}}</dt>
            <dd>Artista: {{$song->album->artist->name}}</dd>
            <dd>Album: {{$song->album->name}}</dd>
            <dd> Duracion: {{$song->duration}}</dd>
            <dd> Orden: {{$song->order}}</dd>
        </dl>
        @endforeach
    </ul>
@endSection
