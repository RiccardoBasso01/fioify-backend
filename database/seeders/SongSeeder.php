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
            ['title' => 'Shultz', 'album_id' => 1, 'file_path' => config('app.app_url') . 'path/to/song.mp3', 'play_count' => 1000, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Tarzanelli & Champagne', 'album_id' => 1, 'file_path' => config('app.app_url') . 'path/to/song1.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Piede di Piombo', 'album_id' => 1, 'file_path' => config('app.app_url') . 'path/to/song1.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Ballata del Luppolo', 'album_id' => 1, 'file_path' => config('app.app_url') . 'path/to/song1.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Sborrata Colorata', 'album_id' => 1, 'file_path' => config('app.app_url') . 'path/to/song1.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],

            ['title' => 'Se stea mejo', 'album_id' => 2, 'file_path' => config('app.app_url') . 'path/to/song2.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],

            ['title' => 'Una scusa', 'album_id' => 3, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Tua mamma puttana', 'album_id' => 3, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
        
            ['title' => 'Pesce fuor d\'acqua', 'album_id' => 4, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'American Idiot', 'album_id' => 4, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Diss', 'album_id' => 4, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Nico ha lasciato la barca', 'album_id' => 5, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => 'Questa è la storia della nave Battis,<br>Che a stento galleggia sopra al mar,<br>Questa è la storia dei Battis,<br>di Nico e anche un po\' di max<br><br>Di acqua ormai la nave è colma<br>e ahimè sta per affondar<br>secchiate gettiam da prua a poppa<br>Se ci si ferma finiam per annegar<br><br>Scialuppe non ve ne son,<br>il destino è uno sol<br>Ma Nico a questo dice no<br>E ci lascia qui da sol<br><br>Nico ha lasciato la barca<br>wooooo<br>Nico ha lasciato la barca<br>woooooooooo<br><br>Nico ha lasciato la barca<br>wooooo<br>Nico ha lasciato la barca<br>woooooooooo<br><br>O signore fa che Nico<br>Ritorni presto sulla barca<br>O signore fa che Nico<br>ritorni presto sulla barca<br><br>Nella Battis non si pesca<br>Ci manca amo e lenza<br>Un tarlo nella coscienza<br>ora L\'amor è la violenza<br><br>Il mare è sempre grigio<br>non v\'è l\'ombra di un sorriso<br>basterebbe un litigio<br>per affondar senza preavviso<br><br>Collaborando si resta a galla<br>se ognuno tappa una falla<br>Ma Nico a questo ha detto no<br>E ci ha lasciati qui da sol<br><br>Nico ha lasciato la barca<br>wooooo<br>Nico ha lasciato la barca<br>woooooooooo<br><br>Nico ha lasciato la barca<br>wooooo<br>Nico ha lasciato la barca<br>woooooooooo<br><br>O signore fa che Nico<br>Ritorni presto sulla barca<br>O signore fa che Nico<br>ritorni presto sulla barca<br><br>Questa è la storia della nave Battis,<br>Che a stento galleggiava sopra al mar,<br>Questa è la storia dei Battis,<br>di Nico e anche un po\' di max<br><br>ora il mare è piatto<br>Anche il cielo si risana<br>ma la Battis si trova sotto<br>Nico figlio di puttana', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Salperò (feat. Zero Assoluto)', 'album_id' => 5, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Donne', 'album_id' => 6, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Freestyle', 'album_id' => 7, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'No go schei', 'album_id' => 8, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Freestyle 2', 'album_id' => 9, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'China', 'album_id' => 10, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Piedini', 'album_id' => 11, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Sborro Controvoglia', 'album_id' => 12, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Goodnight Sara', 'album_id' => 13, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Fat Boy', 'album_id' => 14, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Ma quale idea (feat. Mochakk)', 'album_id' => 15, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Il laboratorio di Wolf (feat. Braida)', 'album_id' => 16, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Charlie', 'album_id' => 17, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Dux', 'album_id' => 18, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Skit', 'album_id' => 19, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
            
            ['title' => 'Yume', 'album_id' => 20, 'file_path' => config('app.app_url') . 'path/to/song3.mp3', 'play_count' => 0, 'lyrics' => '', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
