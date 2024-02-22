<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artists/{artist}', [ArtistController::class, 'show'])->name('artists.show');

Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/{album}', [AlbumController::class, 'show'])->name('albums.show');
Route::delete('/albums/{album}', [AlbumController::class, 'destroy'])->name('albums.destroy');
Route::get('/albums/{album}/songs', [AlbumController::class, 'songs'])->name('albums.songs');
Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
Route::post('songs', [SongController::class, 'store'])->name('songs.store');

Route::get('songs', [SongController::class, 'index'])->name('songs.index');
