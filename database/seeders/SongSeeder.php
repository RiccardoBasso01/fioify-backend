<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Song::insert([
            ['title' => 'Song 1', 'album_id' => 1, 'file_path' => 'path/to/song1.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Song 2', 'album_id' => 2, 'file_path' => 'path/to/song2.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Song 3', 'album_id' => 3, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
