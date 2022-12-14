<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = "profil_user";
    protected $fillable = ['name', 'alamat', 'no_telp','id_user', 'created_at', 'updated_at'];
}
