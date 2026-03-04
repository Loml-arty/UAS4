<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCard extends Model
{
    protected $table = 'food_cards';
    protected $fillable = ['nama_makanan', 'foto_makanan','deskripsi_makanan','Harga'];
}
