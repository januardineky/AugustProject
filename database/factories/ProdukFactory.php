<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    protected $model = Produk::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $fileName = ['dumy1.jfif', 'dumy2.jpg', 'dumy3.jfif', 'dumy4.png', 'dumy5.jfif'];

        return [
            'name' => fake()->word(),
            'kategori' => fake()->word(),
            'harga' => fake()->numberBetween(1000, 100000),
            'stok' => fake()->numberBetween(0, 100),
            'gambar' => fake()->randomElement($fileName),
        ];
    }
}
