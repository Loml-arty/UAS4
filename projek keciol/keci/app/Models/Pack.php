<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $table = 'packs';
    protected $fillable = ['id', 'nama_paket', 'foto_paket', 'deskripsi_paket', 'harga', 'created_at', 'updated_at'];
}
