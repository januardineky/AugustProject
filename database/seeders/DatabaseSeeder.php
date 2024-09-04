<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'abc',
            'email' => 'abc@gmail.com',
            'password' => bcrypt('abc'),
            'no' => '082156747865',
            'level' => 'admin',
            'kab' => 'Kab. Tasikmalaya',
        ]);

        User::create([
            'name' => 'def',
            'email' => 'def@gmail.com',
            'password' => bcrypt('def'),
            'no' => '082156747864',
            'level' => 'pelanggan',
            'kab' => 'Kota Tasikmalaya',
        ]);

        Produk::factory(30)->create();
    }
}
