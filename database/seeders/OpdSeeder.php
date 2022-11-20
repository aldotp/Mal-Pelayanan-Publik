<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opd')->insert([
            'nama' => 'Pegadaian',
            'nip_kepala' => '55151',
            'nama_kepala' => 'Ketua',
            'nama_pimpinan' => 'Zunan Zulfikri',
            'id_wilayah' => '4'
        ]);
        DB::table('opd')->insert([
            'nama' => 'Jamsoskes',
            'nip_kepala' => '55151',
            'nama_kepala' => 'Ketua',
            'nama_pimpinan' => 'Bagong Ahmad',
            'id_wilayah' => '4'
        ]);
    }
}
