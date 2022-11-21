<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = "riwayat_permintaan_layanan";
    protected $fillable = ['perihal', 'deskripsi', 'id_layanan','upload', 'status', 'id_syarat_layanan', 'id_user'];
}
