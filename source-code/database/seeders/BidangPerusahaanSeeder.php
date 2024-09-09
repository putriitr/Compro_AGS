<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangPerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bidang_perusahaan')->insert([
            [
                'name' => 'Sekolah Menengah Atas',
            ],
            [
                'name' => 'Sekolah Menengah Kejuruan',
            ],
            [
                'name' => 'Perguruan Tinggi Negeri',
            ],
            [
                'name' => 'Perguruan Tinggi Swasta',
            ],
            [
                'name' => 'Sekola Kedinasan',
            ],
            [
                'name' => 'Institut Teknologi',
            ],
            [
                'name' => 'Laboratorium Medis',
            ],
            [
                'name' => 'Laboratorium Riset',
            ],
            [
                'name' => 'Industri Peralatan Lab',
            ],
            [
                'name' => 'Rumah Sakit',
            ],
            [
                'name' => 'Farmasi',
            ],
            [
                'name' => 'Klinik Kesehatan',
            ],
            [
                'name' => 'Pemerintah',
            ],
            [
                'name' => 'Kementrian',
            ],
            [
                'name' => 'Lembaga Pendidikan',
            ],
            [
                'name' => 'Distribusi Alat Kesehatan',
            ],
            [
                'name' => 'Penelitian Ilmiah',
            ],
            [
                'name' => 'Teknik Kimia',
            ],
            [
                'name' => 'Bio Teknologi',
            ],
            [
                'name' => 'Layanan Pengujian',
            ]
        ]);
    }
}
