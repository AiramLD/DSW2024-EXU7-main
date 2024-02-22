<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function songs()
    {
        $albums = $this->albums;
        return $this->hasMany(Song::class, 'album_id')->whereIn('album_id', $albums->pluck('artist_id'));
    }
}
