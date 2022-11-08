<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;
    protected $table = "opd";
    protected $fillable = ['nama', 'nip_kepala', 'nama_kepala', 'nama_pimpinan', 'id_wilayah'];
}
