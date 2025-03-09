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
            ['artist_id' => 2, 'song_id' => 2], // Song 2 ha due artisti
            ['artist_id' => 3, 'song_id' => 3],
        ]);
    }
}
