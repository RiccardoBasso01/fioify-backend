<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('artist_song')->insert([
            ['artist_id' => 1, 'song_id' => 1],
            ['artist_id' => 1, 'song_id' => 2],
            ['artist_id' => 1, 'song_id' => 3],
            ['artist_id' => 1, 'song_id' => 4],
            ['artist_id' => 1, 'song_id' => 5],
            ['artist_id' => 1, 'song_id' => 6],
            ['artist_id' => 1, 'song_id' => 7],
            ['artist_id' => 1, 'song_id' => 9],
            ['artist_id' => 1, 'song_id' => 10],
            ['artist_id' => 1, 'song_id' => 11],

            ['artist_id' => 2, 'song_id' => 8],
            ['artist_id' => 2, 'song_id' => 11],
            ['artist_id' => 2, 'song_id' => 12],
            ['artist_id' => 2, 'song_id' => 13],
            ['artist_id' => 2, 'song_id' => 14],
            ['artist_id' => 2, 'song_id' => 15],
            ['artist_id' => 2, 'song_id' => 16],
            ['artist_id' => 2, 'song_id' => 17],
            ['artist_id' => 2, 'song_id' => 18],
            ['artist_id' => 2, 'song_id' => 19],
            ['artist_id' => 2, 'song_id' => 20],
            ['artist_id' => 2, 'song_id' => 21],
            ['artist_id' => 2, 'song_id' => 22],

            ['artist_id' => 3, 'song_id' => 23],
            ['artist_id' => 3, 'song_id' => 24],
            ['artist_id' => 3, 'song_id' => 25],
            ['artist_id' => 3, 'song_id' => 26],
            ['artist_id' => 3, 'song_id' => 27],
            ['artist_id' => 3, 'song_id' => 28],
        ]);
    }
}
