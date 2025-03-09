<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Artist::insert([
            ['name' => 'Basso', 'profile_image' => 'path/to/image1.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Braida', 'profile_image' => 'path/to/image2.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jack-In', 'profile_image' => 'path/to/image2.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
