<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KategoriProdukModel;

class ProdukModel extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $table = "tbl_produk";
    protected $fillable = [
        "kd_produk",
        "name_produk",
        "harga",
        "jml_stok",
        "kategoriid"
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriProdukModel::class, 'kategoriid', 'id');
    }
}
