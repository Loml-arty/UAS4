<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopUp extends Model
{
    protected $table = 'informasi_menu';
    protected $fillable = ['nama_makanan', 'foto_makanan','deskripsi_makanan','Harga'];
}