<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'product' => 'Motor Sport A'],
            ['id' => 2, 'product' => 'Motor Sport B'],
            // Tambahkan data lain jika perlu
        ];

        return view('list_product11', ['data' => $products]);
    }
}
