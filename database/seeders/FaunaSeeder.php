<?php

namespace Database\Seeders;

use App\Models\Fauna;
use Illuminate\Database\Seeder;

class FaunaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Kasuari Gelambir Ganda',
                'nama_latin' => 'Casuarius casuarius',
                'kategori' => 'burung',
                'status_konservasi' => 'VU',
                'dilindungi' => true,
                'deskripsi' => 'Burung terbesar di TN Wasur yang tidak bisa terbang. Memiliki dua gelambir merah di leher dan casque tanduk di kepala. Herbivora pemakan buah hutan.',
            ],
            [
                'nama' => 'Cenderawasih Raja',
                'nama_latin' => 'Cicinnurus regius',
                'kategori' => 'burung',
                'status_konservasi' => 'LC',
                'dilindungi' => true,
                'deskripsi' => 'Burung cenderawasih terkecil dengan bulu merah-putih yang mencolok. Jantan memiliki ornamen bulu ekor berwirkan biru-hijau metalik yang khas saat menari memikat betina.',
            ],
            [
                'nama' => 'Nuri Bayan',
                'nama_latin' => 'Eclectus roratus',
                'kategori' => 'burung',
                'status_konservasi' => 'LC',
                'dilindungi' => true,
                'deskripsi' => 'Burung beo berukuran besar dengan dimorfisme seksual mencolok — jantan berwarna hijau cerah sementara betina berwarna merah-ungu.',
            ],
            [
                'nama' => 'Kanguru Agile',
                'nama_latin' => 'Macropus agilis',
                'kategori' => 'mamalia',
                'status_konservasi' => 'LC',
                'dilindungi' => false,
                'deskripsi' => 'Marsupial khas savana Wasur yang hidup berkelompok. Sering terlihat merumput di Savana Youram saat matahari terbit dan terbenam.',
            ],
            [
                'nama' => 'Kuskus Tutul Utara',
                'nama_latin' => 'Spilocuscus maculatus',
                'kategori' => 'mamalia',
                'status_konservasi' => 'NT',
                'dilindungi' => true,
                'deskripsi' => 'Marsupial arboreal nokturnal dengan corak bulu tutul unik. Hidup di kanopi hutan primer dan bergerak lambat sepanjang malam.',
            ],
            [
                'nama' => 'Buaya Muara',
                'nama_latin' => 'Crocodylus porosus',
                'kategori' => 'reptil',
                'status_konservasi' => 'LC',
                'dilindungi' => true,
                'deskripsi' => 'Buaya terbesar di dunia yang menghuni sungai dan rawa TN Wasur. Predator puncak ekosistem lahan basah dengan panjang dewasa bisa mencapai 6 meter.',
            ],
            [
                'nama' => 'Kadal Panana',
                'nama_latin' => 'Varanus panoptes',
                'kategori' => 'reptil',
                'status_konservasi' => 'LC',
                'dilindungi' => false,
                'deskripsi' => 'Biawak savana yang aktif di siang hari, memangsa telur, serangga, dan hewan kecil di sekitar padang savana dan tepi hutan.',
            ],
            [
                'nama' => 'Ikan Arwana Irian',
                'nama_latin' => 'Scleropages jardinii',
                'kategori' => 'ikan',
                'status_konservasi' => 'EN',
                'dilindungi' => true,
                'deskripsi' => 'Ikan air tawar bernilai ekonomi tinggi yang hidup di sungai dan danau kawasan TN Wasur. Populasinya terus menurun akibat penangkapan berlebih.',
            ],
            [
                'nama' => 'Gabus Papua',
                'nama_latin' => 'Oxyeleotris heterodon',
                'kategori' => 'ikan',
                'status_konservasi' => 'LC',
                'dilindungi' => false,
                'deskripsi' => 'Ikan predator air tawar yang umum ditemukan di Danau Rawa Biru dan anak-anak sungai kawasan konservasi.',
            ],
            [
                'nama' => 'Walabi Lapang',
                'nama_latin' => 'Dorcopsis muelleri',
                'kategori' => 'mamalia',
                'status_konservasi' => 'CR',
                'dilindungi' => true,
                'deskripsi' => 'Marsupial kecil endemik yang kini berstatus kritis akibat hilangnya habitat. Aktif pada malam hari di tepian hutan dan semak savana.',
            ],
        ];

        foreach ($data as $item) {
            Fauna::create($item);
        }
    }
}
