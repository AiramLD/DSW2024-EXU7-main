<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        $albums->load('artist');
        $albums->load('songs');
        return view('albums.index', compact('albums'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        $album->load('artist');
        $album->load('songs');
        return view('albums.show', compact('album'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        foreach ($album->songs as $song) {
            $song->delete();
        }

        $noSongs = Song::where('album_id', $album->id)->count();

        if($noSongs == null) {
            $album->delete();
            return redirect()->route('albums.index')->with('success', 'Album deleted successfully');
        } else {
            return redirect()->route('albums.index')->with('error', 'Album has songs, cannot delete');
        }
    }
}
