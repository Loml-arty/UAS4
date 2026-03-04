<?php

namespace App\Http\Controllers;
use app\Models\pack;
use Illuminate\Http\Request;
use Illuminate\View\View;

class packController extends Controller
{
    public function index(): View
    {
        $packs = Pack::all();

        return view( 'beranda', [
            'packs' => $packs
        ]);
    }
}