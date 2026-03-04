<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\FoodCard;


use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;


class FoodCardController extends Controller

{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        // Ambil semua data dari model
        $food_cards = FoodCard::all();

        return view('daftarmakanan', [
            'food_cards' => $food_cards,
            'title' => 'Daftar Makanan'
        ]);
    }

    public function create()
    {
        return view('input'); // halaman form
    }public function store(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required',
            'foto_makanan' => 'required|image|mimes:jpg,jpeg,png',
            'deskripsi_makanan' =>'required',
            'Harga'=> 'required'
        ]);

{
           $path = $request->file('foto_makanan')->store('foto_makanan', 'public');
    
        // Simpan ke database
        FoodCard::create([
            'nama_makanan' => $request->nama_makanan,
            'foto_makanan' => $path,
            'deskripsi_makanan' => $request->deskripsi_makanan,
            'Harga'=> $request->Harga,
        ]);

        return redirect('/')->with('success', 'Data berhasil ditambahkan!');
    }
}
}

// public function create()
//     {
//         return view('input'); // halaman form
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'nama_makanan' => 'required',
//             'foto_makanan' => 'required|image|mimes:jpg,jpeg,png'
//         ]);

//         // Simpan file gambar
//         $path = $request->file('foto_makanan')->store('foto_makanan', 'public');

//         // Simpan ke database
//         FoodCard::create([
//             'nama_makanan' => $request->nama_makanan,
//             'foto_makanan' => $path
//         ]);

//         return redirect('/daftarmakanan')->with('success', 'Data berhasil ditambahkan!');
//     }
// }