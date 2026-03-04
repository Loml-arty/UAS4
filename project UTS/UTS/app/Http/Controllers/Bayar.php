<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Payment;
class Bayar extends Controller
{
        /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
        composer require midtrans/midtrans-php
                                    
        Alternatively, if you are not using **Composer**, you can download midtrans-php library 
        (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
        the file manually.   

        require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

        //SAMPLE REQUEST START HERE

    public function charge(Request $request)
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

    $grandTotal = Payment::sum('total');

    $invoice = 'INV-' . date('Ymd') . '-' . uniqid();

    $params = array (
        'transaction_details' => array(
            'order_id' => $invoice,
            'gross_amount' => (int) $grandTotal,
        ));


    $snapToken = Snap::getSnapToken($params);

    return response()->json([
        'token' => $snapToken
    ]);
    }
    public function index()
    {redirect('/')->with('sucsess','pembayaran selesai');
    }
}