<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compro_parameter')->insert([
            [
                'email' => 'info@labtek.id',
                'no_telepon' => '(021) 85850913',
                'no_wa' => '+62 852-1791-1213',
                'alamat' => 'Jl. Matraman Raya No.148, RT.1/RW.4, Kb. Manggis, Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13150',
                'maps' => 'https://www.google.com/maps/place/PT.+Arkamaya+Guna+Saharsa/@-6.2114159,106.8600596,15z/data=!4m2!3m1!1s0x0:0x1bc64c80b9328ca6?sa=X&ved=1t:2428&ictx=111',
                'visi' => 'The technology start-up  that provide any  innovative solutions for  growing up and give the value added your industry.',
                'misi' => 'By providing the best service through innovation so that you get the right solution in meeting every need in detail orientation and also a reliable guarantee.',
                'instagram' => 'None',
                'linkedin' => 'https://www.linkedin.com/company/arkamaya-guna-saharsa/?originalSubdomain=id',
                'ekatalog' => 'https://e-katalog.lkpp.go.id/info/penyedia/444815?komoditasId=812',
                'nama_perusahaan' => 'PT Arkamaya Guna Saharsa',
                'sejarah_singkat' => 'Arkamaya Guna Saharsa is a technology start-up driven by innovation, dedicated to empowering industries with transformative solutions. We specialize in optimizing industry performance through our brands, Labtek and Labverse. These products are designed to enhance effectiveness, efficiency, and quality, providing added value through cutting-edge technology. Our mission is to deliver superior results by either introducing new technological advancements or reimagining existing solutions to meet evolving industry needs..',
            ]
        ]);
    }
}
