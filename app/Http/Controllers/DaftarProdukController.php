<?php

namespace App\Http\Controllers;

use App\Models\KategoriProdukModel;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use PDF;

class DaftarProdukController extends Controller
{
    public function index()
    {
        $data = ProdukModel::orderBy('id', 'asc')->paginate(10);
        $param = [
            'title' => 'Daftar Produk',
            'daftarproduk' => $data
        ];
        return view('daftarproduk', $param);
    }
    public function databaru()
    {
        $data = ProdukModel::orderBy('id', 'asc')->paginate(10);
        $param = [
            "title" => "Menambah Produk Baru",
            'daftarproduk' => KategoriProdukModel::all()

        ];
        return view('daftarprodukbaru', $param);
    }

    public function savedatabaru(Request $request)
    {
        $request->validate(
            [
                "kd_produk" => "required|min:1|max:10|unique:tbl_produk,kd_produk",
                "name_produk" => "required|min:3|max:50",
                "harga" => "required|min:1",
                "jml_stok" => "required|min:1|max:10000"
            ],
            [
                "kd_produk.required" => "Kode Produk Harus di Isi",
                "kd_produk.min" => "Input Minimal 1",
                "kd_produk.max" => "Input Maximal 10",
                "kd_produk.unique" => "Kode Produk Sudah Terdaftar",
                "name_produk.required" => "Nama Produk Harus di Isi",
                "name_produk.min" => "Input Minimal 1 karakter",
                "name_produk.max" => "Input Maximal 50",
                "harga.required" => "Harga Produk Harus di Isi",
                "harga.min" => "Input Minimal 1 karakter",
                // "harga.max" => "Input Maximal 10000",
                "jml_stok.required" => "Jumlah Stok Harus di Isi",
                "jml_stok.min" => "Input Minimal 1 karakter",
                "jml_stok.max" => "Input Maximal 20",
            ]
        );
        ProdukModel::create(
            [
                "kd_produk" => $request->kd_produk,
                "name_produk" => $request->name_produk,
                "harga" => $request->harga,
                "jml_stok" => $request->jml_stok,
                "kategoriid" => $request->kategoriid
            ]
        );
        return redirect('daftarproduk');
    }

    public function editproduk($id)
    {
        $data = KategoriProdukModel::all();
        $dataproduk = ProdukModel::find($id);
        $param = [
            "title" => "Edit Kategori Produk",
            "dataproduk" => $dataproduk,
            'daftarproduk' => $data

        ];
        return view("editdaftarproduk", $param);
    }

    public function saveeditproduk(Request $request)
    {
        // $param = [
        //     "title" => "Save Edit produk Produk"
        // ];
        $request->validate(
            [
                "kd_produk" => "required|min:1|max:10",
                "name_produk" => "required|min:2|max:50",
                "harga" => "required|min:1",
                "jml_stok" => "required|min:1|max:10000"
            ],
            [
                "kd_produk.required" => "Kode Produk Harus di Isi",
                "kd_produk.min" => "Input Minimal 1",
                "kd_produk.max" => "Input Maximal 10",
                // "kd_produk.unique" => "Kode Produk Sudah Terdaftar",

                "name_produk.required" => "Nama Produk Harus di Isi",
                "name_produk.min" => "Input Minimal 2 karakter",
                "name_produk.max" => "Input Maximal 50",
                "harga.required" => "Harga Produk Harus di Isi",
                "harga.min" => "Input Minimal 1 karakter",
                // "harga.max" => "Input Maximal 10000",
                "jml_stok.required" => "Jumlah Stok Harus di Isi",
                "jml_stok.min" => "Input Minimal 1 karakter",
                "jml_stok.max" => "Input Maximal 20",
            ]
        );
        // KategoriProdukModel::create(
        //     [
        //         "kd_kategori" => $request->kd_kategori,
        //         "name_kategori" => $request->name_kategori,
        //     ]
        // );

        // @dd($request->id);
        $databaru = [
            "kd_produk"     => $request->kd_produk,
            "name_produk"   => $request->name_produk,
            "harga"         => $request->harga,
            "jml_stok"      => $request->jml_stok,
            "kategoriid"    => $request->kategoriid
        ];
        ProdukModel::where('id', $request->id)->update($databaru);
        return redirect('daftarproduk');
    }
    public function hapusproduk(Request $request)
    {
        ProdukModel::destroy($request->id);
        return redirect('daftarproduk');
    }


    // PRINT LAPORANPDF MASIH ERROR

    // public function cetakpdf()
    // {
    //     $data = Produkmodel::all();
    //     $param = [
    //         'title'         => 'Cetak PDF',
    //         'modulName'     => 'produk',
    //         'daftarproduk'  => $data
    //     ];
    //     $pdf = PDF::loadview('laporanproduk', ['daftarproduk' => $data]);
    //     return $pdf->download('laporanproduk.pdf');
    // }
}
