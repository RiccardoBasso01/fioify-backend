<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Album::insert([
            ['title' => 'Nà Fotografia', 'artist_id' => 1, 'cover_image' => 'path/to/cover1.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'A Nico', 'artist_id' => 2, 'cover_image' => 'path/to/cover2.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Ma quale idea', 'artist_id' => 3, 'cover_image' => 'path/to/cover2.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
