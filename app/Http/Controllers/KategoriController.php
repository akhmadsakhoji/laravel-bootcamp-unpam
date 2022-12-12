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

    public function savedatabaru(Request $request)
    {
        $request->validate(
            [
                "kd_kategori" => "required|min:1|max:10|unique:tbl_kategori,kd_kategori"
            ],
            [
                "kd_kategori.required" => "Kode Kategori Harus di Isi",
                "Kd_kategori.min" => "Input Minimal 1",
                "Kd_kategori.max" => "Input Maximal 10",
                "Kd_kategori.unique" => "Kode Kategori Sudah Terdaftar"
            ]
        );
        KategoriProdukModel::create(
            [
                "kd_kategori" => $request->kd_kategori,
                "name_kategori" => $request->name_kategori,
            ]
        );
        return redirect('kategori');
    }
}
