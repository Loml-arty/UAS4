<?php

namespace App\Http\Controllers;

use App\Models\PopUp;
use Illuminate\Contracts\View\View as ContractsView;
use Illuminate\View\View;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;



class PopupController extends Controller
{
    /**
     * index
     * @return View
     */
        public function index(): View
    {
        $informasi_menu = PopUp::all();

        return view('daftarmakanan', [
            'PopUp' => $informasi_menu,
            'title' => 'informasi menu',
        ]);
    }
}
