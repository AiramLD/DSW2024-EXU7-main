<?php
/*  
Copia y pega los siguientes arrays donde lo necesites 
y rellena las tablas de datos.
*/
$artists = [
  ["id" => 1, "name" => "Led Zeppelin"],
  ["id" => 2, "name" => "Jimi Hendrix"],
  ["id" => 3, "name" => "Paco de Lucía"],
  ["id" => 4, "name" => "Muse"],
  ["id" => 5, "name" => "Pepe Benavente"]
];

$albums = [
  ["id" => 1, "artist_id" => 1, "name" => "Led Zepellin I", "year" => 1969],
  ["id" => 2, "artist_id" => 2, "name" => "Are you Experienced", "year" => 1967],
  ["id" => 3, "artist_id" => 5, "name" => "Quédate conmigo", "year" => 2022],
  ["id" => 4, "artist_id" => 1, "name" => "Led Zepellin IV", "year" => 1971],
  ["id" => 5, "artist_id" => 4, "name" => "Origin of Symmetry", "year" => 2001],
  ["id" => 6, "artist_id" => 4, "name" => "Absolution", "year" => 2003],
];

$songs = [
  ["id" => 1, "album_id" => 1, "name" => "Good durations, Bad durations", "duration" => 187, "order" => 1],
  ["id" => 2, "album_id" => 1, "name" => "Babe I'm Gonna Leave You", "duration" => 403, "order" => 2],
  ["id" => 3, "album_id" => 1, "name" => "Danzed and Confused", "duration" => 396, "order" => 4],
  ["id" => 4, "album_id" => 1, "name" => "Your duration is Gonna Come", "duration" => 275, "order" => 5],
  ["id" => 5, "album_id" => 1, "name" => "You Shook Me", "duration" => 400, "order" => 3],
  ["id" => 6, "album_id" => 2, "name" => "Manic Depression", "duration" => 226, "order" => 2],
  ["id" => 7, "album_id" => 2, "name" => "Foxy Lady", "duration" => 202, "order" => 1],
  ["id" => 8, "album_id" => 3, "name" => "El Polvorete (Reggeaton)", "duration" => 176, "order" => 1],
  ["id" => 9, "album_id" => 3, "name" => "Quédate", "duration" => 242, "order" => 4],
  ["id" => 10, "album_id" => 3, "name" => "Enamórate de mí", "duration" => 251, "order" => 2],
  ["id" => 11, "album_id" => 4, "name" => "Stairway to Heaven", "duration" => 475, "order" => 4],
  ["id" => 12, "album_id" => 4, "name" => "Rock and Roll", "duration" => 220, "order" => 2],
  ["id" => 13, "album_id" => 4, "name" => "The Battle of Evermore", "duration" => 338, "order" => 3],
  ["id" => 14, "album_id" => 4, "name" => "Black Dog", "duration" => 295, "order" => 1]
];