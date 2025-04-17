<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    function tampilkan ($id, $nama_item){
        return view('list_barang', compact('id', 'nama_item'));
    }
}
