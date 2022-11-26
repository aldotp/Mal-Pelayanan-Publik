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
            'nama'=>'Dinas Dukcapil',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>1,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Bappenda',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>2,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Bank Jateng',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>3,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Kesbangpol + Bappeda',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>4,
        ]);
        DB::table('opd')->insert([
            'nama'=>'BPJS Kesehatan',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>5,
        ]);
        DB::table('opd')->insert([
            'nama'=>'BPJS Ketenagakerjaan',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>1,
        ]);
        DB::table('opd')->insert([
            'nama'=>'DPU PR',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>2,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Dinas Perkim LH',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>3,
        ]);
        DB::table('opd')->insert([
            'nama'=>'PDAM',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>4,
        ]);
        DB::table('opd')->insert([
            'nama'=>'PLN',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>5,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Dishub',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>1,
        ]);
        DB::table('opd')->insert([
            'nama'=>'BPKAD',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>2,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Dinas Kesehatan',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>3,
        ]);
        DB::table('opd')->insert([
            'nama'=>'KPP Pratama',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>4,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Dislutkan',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>5,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Kemenag',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>1,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Samsat',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>2,
        ]);
        DB::table('opd')->insert([
            'nama'=>'DPMPTSP Provinsi Jateng',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>3,
        ]);
        DB::table('opd')->insert([
            'nama'=>'DPMPTSP Kebumen',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>4,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Disnaker KUKM',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>5,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Imigrasi',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>1,
        ]);
        DB::table('opd')->insert([
            'nama'=>'BP3TKI',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>2,
        ]);
        DB::table('opd')->insert([
            'nama'=>'Disarpus',
            'nip_kepala'=>'121312312314',
            'nama_kepala'=>'Suyono',
            'nama_pimpinan'=>'Sayoto',
            'id_wilayah'=>3,
        ]);
    }
}