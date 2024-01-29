<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukTable extends Controller
{
    public function index() {
        $data = Produk::all();

        return response()->json($data);
    }
}
