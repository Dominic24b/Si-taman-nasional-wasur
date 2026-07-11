<?php

namespace Database\Seeders;

use App\Models\Flora;
use Illuminate\Database\Seeder;

class FloraSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Anggrek Hitam Papua',
                'nama_latin' => 'Coelogyne pandurata',
                'kategori' => 'anggrek',
                'dilindungi' => true,
                'deskripsi' => 'Anggrek endemik Papua dengan kelopak bunga berwarna hitam khas yang unik. Tumbuh epifit pada batang pohon di hutan primer dan sekunder kawasan TN Wasur.',
            ],
            [
                'nama' => 'Anggrek Bulan Papua',
                'nama_latin' => 'Phalaenopsis amabilis',
                'kategori' => 'anggrek',
                'dilindungi' => true,
                'deskripsi' => 'Anggrek bunga nasional Indonesia yang ditemukan di hutan pantai dan dataran rendah TN Wasur. Bunga putih besar berumur panjang, sangat diminati kolektor.',
            ],
            [
                'nama' => 'Anggrek Tanah Raksasa',
                'nama_latin' => 'Grammatophyllum speciosum',
                'kategori' => 'anggrek',
                'dilindungi' => true,
                'deskripsi' => 'Anggrek terbesar di dunia dengan batang yang bisa mencapai 3 meter. Tumbuh di hutan tropis lembab dan tepi sungai kawasan Taman Nasional Wasur.',
            ],
            [
                'nama' => 'Kayu Besi',
                'nama_latin' => 'Intsia bijuga',
                'kategori' => 'pohon',
                'dilindungi' => true,
                'deskripsi' => 'Pohon kayu keras bernilai tinggi yang menjadi penyusun utama hutan primer TN Wasur. Kayunya sangat kuat dan tahan lama, namun populasinya terus menurun akibat penebangan.',
            ],
            [
                'nama' => 'Pohon Ketapang',
                'nama_latin' => 'Terminalia catappa',
                'kategori' => 'pohon',
                'dilindungi' => false,
                'deskripsi' => 'Pohon peneduh besar yang tumbuh di area savana dan tepi sungai. Daunnya lebar dan buahnya menjadi sumber pakan bagi berbagai satwa liar.',
            ],
            [
                'nama' => 'Palem Sagu',
                'nama_latin' => 'Metroxylon sagu',
                'kategori' => 'palem',
                'dilindungi' => false,
                'deskripsi' => 'Palem penghasil sagu yang menjadi sumber pangan pokok masyarakat adat sekitar TN Wasur. Tumbuh subur di kawasan rawa dan dataran basah.',
            ],
            [
                'nama' => 'Palem Nibung',
                'nama_latin' => 'Oncosperma tigillarium',
                'kategori' => 'palem',
                'dilindungi' => false,
                'deskripsi' => 'Palem berduri yang tumbuh berumpun di kawasan rawa air tawar. Batangnya sering dimanfaatkan sebagai bahan bangunan tradisional.',
            ],
            [
                'nama' => 'Bakau Hitam',
                'nama_latin' => 'Rhizophora mucronata',
                'kategori' => 'mangrove',
                'dilindungi' => true,
                'deskripsi' => 'Mangrove dominan di kawasan pesisir TN Wasur yang berperan penting menahan abrasi dan menjadi habitat pembibitan berbagai jenis ikan.',
            ],
            [
                'nama' => 'Api-Api',
                'nama_latin' => 'Avicennia marina',
                'kategori' => 'mangrove',
                'dilindungi' => false,
                'deskripsi' => 'Jenis mangrove pionir yang tumbuh di zona terdepan pesisir, memiliki akar napas khas yang mencuat di atas lumpur.',
            ],
            [
                'nama' => 'Rumput Kangkareo',
                'nama_latin' => 'Themeda triandra',
                'kategori' => 'lainnya',
                'dilindungi' => false,
                'deskripsi' => 'Rumput savana khas yang mendominasi lanskap padang savana TN Wasur dan menjadi sumber pakan utama satwa herbivora seperti rusa dan walabi.',
            ],
        ];

        foreach ($data as $item) {
            Flora::create($item);
        }
    }
}
