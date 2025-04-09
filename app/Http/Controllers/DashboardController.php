<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard ($nama, $warna, $harga, $stok){
        return view('dashboard', ['nama' => $nama, 'warna' => $warna, 'harga' => $harga, 'stok' => $stok]);
    }
}
