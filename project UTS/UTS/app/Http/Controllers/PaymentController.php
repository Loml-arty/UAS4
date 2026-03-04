<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
class PaymentController extends Controller
{
    public function store(Request $request)
    {
        Payment::create([
        'nama_makanan' => $request->nama_makanan,
        'harga' => $request->harga,
        'jumlah' => $request->jumlah,
        'total' => $request->harga * $request->jumlah,
        'invoice_number' => $invoice = '#INV-' . time().'-UECA',

        ]);
        return redirect('/')->with('success','Masuk ke Keranjang');
    }
    public function index()
    {
        $Payments = Payment::all();
        $grandTotal = $Payments->sum('total');

        return view('pembayaran', [
            'Payments' => $Payments,
            'title' => 'Pembayaran',
            'grandTotal' => $grandTotal,
        ]);
    }
}
