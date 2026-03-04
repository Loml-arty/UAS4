<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'pembayarans';
     protected $fillable = ['nama_makanan', 'harga', 'jumlah', 'total','invoice_number'];
}
