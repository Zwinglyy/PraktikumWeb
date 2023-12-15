<?php

use App\Http\Controllers\OrderController;
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

Route::get('/pesan', [OrderController::class,
'showFormPesan'])->name('show-form-pesan');
Route::post('/submit-order', [OrderController::class,
'submitOrder'])->name('submit-order');
Route::get('/', function () {
return redirect()->route('show-form-pesan'); // Ubah rute ke show-form-pesan
});

