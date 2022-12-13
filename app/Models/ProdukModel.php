<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $table = "produk_models";
    protected $fillable = [
        "kd_produk",
        "name_produk",
        "harga",
        "jml_stok"
    ];
}
