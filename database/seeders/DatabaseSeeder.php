<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\KategoriController;
use Illuminate\Database\Seeder;
use App\Models\KategoriProdukModel;
use App\Models\ProdukModel;
use App\Models\User;
use GuzzleHttp\Promise\Create;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::Create(
            [
                "name" => "Akhmad Sakhoji Jamaludin",
                "email" => "akhmadsakhoji@gmail.com",
                "password" => bcrypt("Admin123"),
                "isAdmin" => true
            ]
        );

        User::factory(10)->create();

        KategoriProdukModel::Create(
            [
                "kd_kategori" => "0004a",
                "name_kategori" => "Elektronik"
            ]
        );
        KategoriProdukModel::Create(
            [
                "kd_kategori" => "0004b",
                "name_kategori" => "Gadget & Laptop"
            ]
        );
        KategoriProdukModel::Create(
            [
                "kd_kategori" => "0004c",
                "name_kategori" => "Aksesoris Gadget & Laptop"
            ]
        );
        ProdukModel::factory(50)->create();
    }
}
