<?php

namespace Database\Seeders;

use App\Models\Ekowisata;
use Illuminate\Database\Seeder;

class EkowisataSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Danau Rawa Biru',
                'deskripsi' => 'Danau air tawar dengan kejernihan luar biasa dan warna biru toska alami yang memukau. Dikelilingi savana tropis dan hutan di tepiannya, menjadikannya spot fotografi alam terbaik di Papua.',
                'fasilitas' => ['Fotografi Alam', 'Birdwatching', 'Memancing', 'Piknik'],
                'aksesibilitas' => '15 km dari Kota Merauke',
                'urutan' => 1,
            ],
            [
                'nama' => 'Savana Youram',
                'deskripsi' => 'Hamparan padang sabana seluas ribuan hektare yang menjadi habitat alami kanguru agile (walabi) Papua. Saksikan gerombolan walabi liar di habitat aslinya saat matahari terbit dan terbenam.',
                'fasilitas' => ['Safari Satwa', 'Fotografi Alam', 'Trekking', 'Sunrise'],
                'aksesibilitas' => '20 km dari Kota Merauke',
                'urutan' => 2,
            ],
            [
                'nama' => 'Musamus',
                'deskripsi' => 'Koloni rumah rayap raksasa (Nasutitermes sp.) setinggi 2-5 meter yang tersebar di padang savana. Fenomena alam unik ini menjadi ikon Taman Nasional Wasur dan destinasi wisata edukasi favorit.',
                'fasilitas' => ['Wisata Edukasi', 'Fotografi', 'Interpretasi Alam'],
                'aksesibilitas' => '22 km dari Kota Merauke',
                'urutan' => 3,
            ],
            [
                'nama' => 'Sungai Kumbe',
                'deskripsi' => 'Sungai besar yang mengalir membelah kawasan TN Wasur, menjadi habitat buaya muara dan jalur transportasi tradisional masyarakat adat setempat.',
                'fasilitas' => ['Wisata Sungai', 'Fotografi Alam', 'Budaya Lokal'],
                'aksesibilitas' => '30 km dari Kota Merauke',
                'urutan' => 4,
            ],
            [
                'nama' => 'Hutan Mangrove Ndalir',
                'deskripsi' => 'Kawasan hutan mangrove lebat di pesisir TN Wasur yang menjadi habitat penting berbagai burung air dan ikan. Cocok untuk susur mangrove menggunakan perahu tradisional.',
                'fasilitas' => ['Susur Mangrove', 'Birdwatching', 'Fotografi Alam'],
                'aksesibilitas' => '35 km dari Kota Merauke',
                'urutan' => 5,
            ],
        ];

        foreach ($data as $item) {
            Ekowisata::create($item);
        }
    }
}
