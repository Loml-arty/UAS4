<?php

namespace App\Http\Controllers;

use App\Models\menu_makanan;
use Illuminate\Http\Request;

class Menu_cardController extends Controller
{
    public function index()
    {
        // ambil 5 data per halaman
        $makanan = menu_makanan::paginate(5);

        // kirim ke view
        return view('index', compact('makanan'));
    }
}
