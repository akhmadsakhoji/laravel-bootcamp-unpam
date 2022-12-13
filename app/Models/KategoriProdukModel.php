<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProdukModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_kategori';
    protected $fillable = [
        "kd_kategori",
        "name_kategori"
    ];
}

// KategoriProdukModel::create(
//     [
//         "kd_kategori"=> "110q",
//         "name_kategori"=> "Elektronik"
//     ]
// );

// KategoriProdukModel::create(
//     [
//         "kd_kategori"=> "111a",
//         "name_kategori"=> "ATK"
//     ]
// );
