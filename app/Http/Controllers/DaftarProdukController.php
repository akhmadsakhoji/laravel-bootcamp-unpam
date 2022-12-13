<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;

class DaftarProdukController extends Controller
{
    public function index()
    {
        $data = ProdukModel::orderBy('kategoriid', 'asc')->paginate(10);
        $param = [
            'title' => 'Daftar Produk',
            'daftarproduk' => $data
        ];
        return view('daftarproduk', $param);
    }
}
