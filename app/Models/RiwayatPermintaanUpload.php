<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPermintaanUpload extends Model
{
    use HasFactory;
    protected $table = "riwayat_permintaan_upload";
    protected $fillable = ['id_syarat_layanan',	'id_permintaan_layanan'];
}
