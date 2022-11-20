<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanan')->insert([
            'nama_layanan' => 'Peminjaman Uang',
            'id_opd' => '1'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Kesehatan',
            'id_opd' => '2'
        ]);
    }
}
