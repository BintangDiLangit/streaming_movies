<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::create([
            'title' => 'Dilan dan Milea',
            'slug' => 'dilan-dan-milea',
            'description' => 'Dilan dan Milea adalah film drama romantis yang diadaptasi dari novel Dilan: Dia adalah Dilanku Tahun 1990 karya Pidi Baiq. Film ini disutradarai oleh Fajar Bustomi dan Pidi Baiq.',
            'total_minute' => 125,
            'path_thumbnail' => '/assets/images/thumbnails/dilan-dan-milea.jpg',
            'path_src_vidio' => 'https://drive.google.com/file/d/1fyul9mKH8ZCVRyAw4rtRGBRx4cyctBWM/preview',
        ]);

        Film::create([
            'title' => 'Fourius 7',
            'slug' => 'fourius-7',
            'description' => 'Fast & Furious 7 (juga dikenal sebagai Furious 7 atau Fast Seven) adalah sebuah film aksi Amerika Serikat tahun 2015 yang disutradarai oleh James Wan dan ditulis oleh Chris Morgan. Ini adalah film ketujuh dalam seri Fast & Furious.',
            'total_minute' => 179,
            'path_thumbnail' => '/assets/images/thumbnails/fourius-7.jpg',
            'path_src_vidio' => 'https://drive.google.com/file/d/17-q70Mm93sPixi8DOhhIaLmn1MDKRTIL/preview',
        ]);

        Film::create([
            'title' => 'Rebahin Milea Suara dari Dilan',
            'slug' => 'rebahin-milea-suara-dari-dilan',
            'description' => 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah sekolah menengah di Bandung pada tahun 1990. Film ini disutradarai oleh Fajar Bustomi dan Pidi Baiq.',
            'total_minute' => 99,
            'path_thumbnail' => '/assets/images/thumbnails/rebahin-milea-suara-dari-dilan.jpg',
            'path_src_vidio' => 'https://drive.google.com/file/d/1rYb4qBSRChbQsSG7WIKa6kb4ZbJ71udD/preview',
        ]);
    }
}
