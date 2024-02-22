@extends('layouts.master')

@section('title')
    Crear nueva cancion
@endSection

@section('content')

    <h2>Crear nueva cancion</h2>

    <form method="post" action="{{route('songs.store')}}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <label for="name">Nombre de la cancion</label>
        <input type="text" name="name" id="name">
        <br>
        <br>
        <label for="duration">Duracion de la cancion</label>
        <input type="number" name="duration" id="duration">
        <br>
        <br>
        <label for="album_id">Album</label>
        <select name="album_id" id="album_id">
            @foreach ($albums as $album)
                <option value="{{$album->id}}">{{$album->name}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input type="submit" value="Crear cancion">
    </form>
@endSection

