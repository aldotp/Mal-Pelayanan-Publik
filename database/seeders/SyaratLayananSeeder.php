<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SyaratLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('syarat_layanan')->insert([
            'id'=> 1,
            'nama' => 'Upload Izin Keramaian',
        ]);
        DB::table('syarat_layanan')->insert([
            'id'=> 2,
            'nama' => 'Upload Surat izin Gangguan',
        ]);
        DB::table('syarat_layanan')->insert([
            'id'=> 3,
            'nama' => 'Upload Surat izin UMKM',
        ]);
        DB::table('syarat_layanan')->insert([
            'id'=> 4,
            'nama' => 'Upload Surat Mendirikan Bangunan',
        ]);
    }
}
