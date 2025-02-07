<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/transaksi', function () {
    return view('transaksi');
})->name('transaksi');