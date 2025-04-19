<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data dummy yang diubah jadi warna dan stok
        $userCount = 125;
        $warna = "Merah, Biru, Hitam";
        $stok = 58;
    
        return view('dashboard', compact('userCount', 'warna', 'stok'));
    }
    
}
