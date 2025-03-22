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
            ['title' => 'Shultz', 'album_id' => 1, 'file_path' => 'path/to/song1.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Tarzanelli & Champagne', 'album_id' => 1, 'file_path' => 'path/to/song1.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Piede di Piombo', 'album_id' => 1, 'file_path' => 'path/to/song1.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Ballata del Luppolo', 'album_id' => 1, 'file_path' => 'path/to/song1.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Sborrata Colorata', 'album_id' => 1, 'file_path' => 'path/to/song1.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],

            ['title' => 'Se stea mejo', 'album_id' => 2, 'file_path' => 'path/to/song2.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],

            ['title' => 'Una scusa', 'album_id' => 3, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Tua mamma puttana', 'album_id' => 3, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
        
            ['title' => 'Pesce fuor d\'acqua', 'album_id' => 4, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'American Idiot', 'album_id' => 4, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Diss', 'album_id' => 4, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Nico ha lasciato la barca', 'album_id' => 5, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Salperò (feat. Zero Assoluto)', 'album_id' => 5, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Donne', 'album_id' => 6, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Freestyle', 'album_id' => 7, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'No go schei', 'album_id' => 8, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Freestyle 2', 'album_id' => 9, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'China', 'album_id' => 10, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Piedini', 'album_id' => 11, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Sborro Controvoglia', 'album_id' => 12, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Goodnight Sara', 'album_id' => 13, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Fat Boy', 'album_id' => 14, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Ma quale idea (feat. Mochakk)', 'album_id' => 15, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Il laboratorio di Wolf (feat. Braida)', 'album_id' => 16, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Charlie', 'album_id' => 17, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Dux', 'album_id' => 18, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Skit', 'album_id' => 19, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Yume', 'album_id' => 20, 'file_path' => 'path/to/song3.mp3', 'play_count' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
