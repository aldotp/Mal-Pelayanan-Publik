<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'is_admin'=>'1',
            'password'=>Hash::make('admin1234')
        ]);
        DB::table('users')->insert([
            'name'=>'user',
            'email'=>'user1@gmail.com',
            'is_admin'=>'0',
            'password'=>Hash::make('user1234')
        ]);
    }
}
