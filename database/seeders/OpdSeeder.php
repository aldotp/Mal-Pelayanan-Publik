<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OPDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opd')->insert([
            'nama'=>'Dinas Pendidikan',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>1,
        ]);
    }
}