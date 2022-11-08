<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wilayah')->insert([
            'kode'=>'100',
            'nama'=>'Jebres',
            'level'=>'Kecamatan',
            'id_parent'=>'1',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('wilayah')->insert([
            'kode'=>'101',
            'nama'=>'Laweyan',
            'level'=>'Kecamatan',
            'id_parent'=>'2',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('wilayah')->insert([
            'kode'=>'102',
            'nama'=>'Banjarsari',
            'level'=>'Kecamatan',
            'id_parent'=>'3',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);
    }
}
