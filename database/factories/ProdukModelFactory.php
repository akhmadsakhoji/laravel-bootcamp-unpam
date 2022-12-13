<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProdukModel>
 */
class ProdukModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "kd_produk"     => $this->faker->numerify('###'),
            "name_produk"   => $this->faker->words(2,true),
            "harga"         => $this->faker->numerify("###000"),
            "jml_stok"      => $this->faker->numberBetween(10,100),
            "kategoriid"    => $this->faker->numberBetween(1,3)
        ];
    }
}
