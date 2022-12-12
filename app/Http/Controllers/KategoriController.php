<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProdukModel;

class KategoriController extends Controller
{
    public function index(){
        $param =[
            'title' => 'Halaman Kategori',
            'moduleName' => 'kategori',
            'daftarKategori' => KategoriProdukModel::all()
        ];
        return view('kategori', $param);
    }
}
