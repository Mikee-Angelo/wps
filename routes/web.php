<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\PaymentMethodController; 
use App\Http\Controllers\PaymentController; 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function(){ 
    Route::get('/payments',[PaymentController::class, 'index'] )->name('payment-method');
    Route::get('/payment-methods',[PaymentMethodController::class, 'index'] )->name('payment-methods');
});

require __DIR__.'/auth.php';
