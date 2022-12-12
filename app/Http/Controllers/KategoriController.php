<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProdukModel;

class KategoriController extends Controller
{
    public function index()
    {
        $param = [
            'title' => 'Halaman Kategori',
            'moduleName' => 'kategori',
            'daftarKategori' => KategoriProdukModel::all()
        ];
        return view('kategori', $param);
    }

    public function databaru()
    {
        $param = [
            "title" => "Menambah Kategori Produk"
        ];
        return view('kategoribaru', $param);
    }

    public function savedatabaru()
    {
    }
}
