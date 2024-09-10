<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            [
                'nama' => 'Hydraulics',
            ],
            [
                'nama' => 'Concrete Technology',
            ],
            [
                'nama' => 'Soil Mechanics',
            ],
            [
                'nama' => 'Asphalt Technology',
            ],
            [
                'nama' => 'Aggregate Materials',
            ],
            [
                'nama' => 'Construction Management',
            ],
            [
                'nama' => 'Cement Technology',
            ],
            [
                'nama' => 'Geotechnical Engineering',
            ],
            [
                'nama' => 'Electrical Engineering',
            ],
            [
                'nama' => 'Mechanical Engineering',
            ],
            [
                'nama' => 'Materials Science',
            ],
            [
                'nama' => 'Industrial Engineering',
            ],
            [
                'nama' => 'Fisheries Technology',
            ],
            [
                'nama' => 'Marine Shipping',
            ],
            [
                'nama' => 'Railway Engineering',
            ],

        ]);
    }
}
