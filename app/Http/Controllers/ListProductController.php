<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function show()
    {
        $data = [
            ['id' => '001', 'produk' => 'Yamaha R15'],
            ['id' => '002', 'produk' => 'Honda CBR'],
        ];
        return view('list_product', compact('data'));
    }
}
