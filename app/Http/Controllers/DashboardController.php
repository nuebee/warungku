<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function transaksi()
    {
        return view('transaksi');
    }


    public function product()
    {
        return view('product');
    }


    public function laporan()
    {
        return view('laporan');
    }
}
