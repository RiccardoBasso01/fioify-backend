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
            ['name' => 'Basso', 'profile_image' => config('app.app_url') . 'assets/images/artists/basso.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Braida', 'profile_image' => config('app.app_url') . 'assets/images/artists/braida.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jack-In', 'profile_image' => config('app.app_url') . 'assets/images/artists/techno-bunker.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
