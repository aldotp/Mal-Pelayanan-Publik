<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama'=>"Ani",
            'nomor_induk'=>"1000",
            'alamat'=>'jongklang',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>"Dadang",
            'nomor_induk'=>"1001",
            'alamat'=>'Jangkung',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>"Lenang",
            'nomor_induk'=>"1002",
            'alamat'=>'Mbantul',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
