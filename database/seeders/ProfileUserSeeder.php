<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil_user')->insert([
            'nama' => 'admin',
            'alamat' => 'Surakarta',
            'no_telp' => '081213123',
            'id_user' => '1',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
        DB::table('profil_user')->insert([
            'nama' => 'admin2',
            'alamat' => 'Surakarta',
            'no_telp' => '081224135',
            'id_user' => '2',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
