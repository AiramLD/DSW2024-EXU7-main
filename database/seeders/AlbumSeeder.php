<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums = [
            ["id" => 1, "artist_id" => 1, "name" => "Led Zepellin I", "year" => 1969],
            ["id" => 2, "artist_id" => 2, "name" => "Are you Experienced", "year" => 1967],
            ["id" => 3, "artist_id" => 5, "name" => "Quédate conmigo", "year" => 2022],
            ["id" => 4, "artist_id" => 1, "name" => "Led Zepellin IV", "year" => 1971],
            ["id" => 5, "artist_id" => 4, "name" => "Origin of Symmetry", "year" => 2001],
            ["id" => 6, "artist_id" => 4, "name" => "Absolution", "year" => 2003],
          ];

          Album::insert($albums);
    }
}
