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
            ['title' => 'Nà Fotografia', 'artist_id' => 1, 'cover_image' => config('app.app_url') . 'assets/images/covers/spagna2024.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Beata Gioventù', 'artist_id' => 1, 'cover_image' => config('app.app_url') . 'assets/images/covers/beata-gioventu.png', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Rapp Underground vol.1', 'artist_id' => 1, 'cover_image' => config('app.app_url') . 'assets/images/covers/rap.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Eccomi', 'artist_id' => 1, 'cover_image' => config('app.app_url') . 'assets/images/covers/default.png', 'created_at' => now(), 'updated_at' => now()],

            ['title' => 'A Nico', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/battis.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Donne', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/donne.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Freestyle', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/freestyle.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'No go Schei', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/no-go-schei.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Freestyle 2', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/freestyle-2.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'China', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/china.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Piedini', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/piedini.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Sborro Controvoglia', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/sborro-controvoglia.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Goodnight', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/goodnight-sara.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Fat Boy', 'artist_id' => 2, 'cover_image' => config('app.app_url') . 'assets/images/covers/fat-boy.jpg', 'created_at' => now(), 'updated_at' => now()],

            ['title' => 'Ma quale idea', 'artist_id' => 3, 'cover_image' => config('app.app_url') . 'assets/images/covers/che-idea.png', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Il laboratorio di wolf', 'artist_id' => 3, 'cover_image' => config('app.app_url') . 'assets/images/covers/laboratorio.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Charlie', 'artist_id' => 3, 'cover_image' => config('app.app_url') . 'assets/images/covers/charlie.png', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Dux', 'artist_id' => 3, 'cover_image' => config('app.app_url') . 'assets/images/covers/dux.png', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Skit', 'artist_id' => 3, 'cover_image' => config('app.app_url') . 'assets/images/covers/skit.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Yume', 'artist_id' => 3, 'cover_image' => config('app.app_url') . 'assets/images/covers/yume.png', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
