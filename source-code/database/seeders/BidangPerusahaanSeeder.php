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
                'name' => 'High School',
            ],
            [
                'name' => 'Vocational High School',
            ],
            [
                'name' => 'State University',
            ],
            [
                'name' => 'Private University',
            ],
            [
                'name' => 'Government School',
            ],
            [
                'name' => 'Institute of Technology',
            ],
            [
                'name' => 'Medical Laboratory',
            ],
            [
                'name' => 'Research Laboratory',
            ],
            [
                'name' => 'Lab Equipment Industry',
            ],
            [
                'name' => 'Hospital',
            ],
            [
                'name' => 'Pharmacy',
            ],
            [
                'name' => 'Health Clinic',
            ],
            [
                'name' => 'Government',
            ],
            [
                'name' => 'Ministry',
            ],
            [
                'name' => 'Educational Institution',
            ],
            [
                'name' => 'Medical Equipment Distribution',
            ],
            [
                'name' => 'Scientific Research',
            ],
            [
                'name' => 'Chemical Engineering',
            ],
            [
                'name' => 'Biotechnology',
            ],
            [
                'name' => 'Testing Services',
            ]
        ]);
    }
}
