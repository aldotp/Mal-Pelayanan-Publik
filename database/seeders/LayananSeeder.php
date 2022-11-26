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
            'nama_layanan' => 'Dokumen kependudukan',
            'id_opd' => '1'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pencatatan Sipil',
            'id_opd' => '1'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Konsolidasi data',
            'id_opd' => '1'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Local tax',
            'id_opd' => '2'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Payment Point',
            'id_opd' => '3'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Rekomendasi izin penilitian',
            'id_opd' => '4'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Izin penelitian',
            'id_opd' => '4'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pendaftaran',
            'id_opd' => '5'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Perubahan data',
            'id_opd' => '5'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Informasi',
            'id_opd' => '5'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Penanganan Pengaduan',
            'id_opd' => '5'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pendaftaran (perusahaan, informasi, jasa konstruksi)',
            'id_opd' => '6'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pembinaan',
            'id_opd' => '6'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Informasi',
            'id_opd' => '6'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Informasi tata ruang',
            'id_opd' => '7'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Rekomendasi IMB',
            'id_opd' => '7'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Rekomendasi izin lingkungan',
            'id_opd' => '8'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pendaftaran',
            'id_opd' => '9'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pembayaran tagihan',
            'id_opd' => '9'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pendaftaran',
            'id_opd' => '10'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pembayaran Tagihan',
            'id_opd' => '10'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pembayaran Tagihan',
            'id_opd' => '10'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'SK izin trayek, kartu pengawasan, kartu jam pemberangkatan',
            'id_opd' => '11'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Andalalin',
            'id_opd' => '11'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Klim',
            'id_opd' => '12'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Non Klim',
            'id_opd' => '12'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Surat izin praktek',
            'id_opd' => '13'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Rekomendasi izin kesehatan',
            'id_opd' => '13'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Rekomendasi izin kesehatan',
            'id_opd' => '14'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pendaftaran (STDK, Pendaftaran Perikanan)',
            'id_opd' => '15'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pernikahan',
            'id_opd' => '16'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Penelitiain ulang STNK 1 tahun',
            'id_opd' => '17'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Semua layanan perizinan yang menjadi kewenangan Pemprov Jateng',
            'id_opd' => '18'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Semua layanan perizinan yang menjadi kewenangan Pemkab Kebumen',
            'id_opd' => '19'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Rekomendasi BBM UMK',
            'id_opd' => '20'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Permohonan Paspor (khusus tenaga kerja)',
            'id_opd' => '21'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Pelayanan terkait penempatan dan perlindungan Tenaga Kerja Indonesia',
            'id_opd' => '22'
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Layanan baca di tempat',
            'id_opd' => '23'
        ]);

    }
}
