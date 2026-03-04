<?php

use App\Http\Controllers\Bayar;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\FoodCardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/',function () {
// return view(view:'daftarmakanan', [UserController::class, 'daftarmakanan'] data: ['title'=> 'Daftar Makanan']);
// });


Route::get('/', [FoodCardController::class, 'index']);
Route::post('/', [PaymentController::class, 'store'])->name('pembayaran.store');

Route::prefix('admin')->group(function () {

    Route::get('/input', [FoodCardController::class, 'create'])->name('makanan.create');

    Route::post('/input', [FoodCardController::class, 'store'])->name('makanan.store');
});

// Route::get('/daftarmakanan', [PopupController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});



Route::get('/payment', [PaymentController::class, 'index'])
    ->name('payment.index');

Route::get('/payment/charge', [BayarController::class, 'charge']);


Route::get('/user/aw', function () {
    // ...
})->name('profile');







Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return "Halaman Admin Dashboard";
    });

    Route::get('/users', function () {
        return "Halaman Admin Users";
    });

});