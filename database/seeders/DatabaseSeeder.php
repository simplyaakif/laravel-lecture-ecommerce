<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Product::factory()->count(10)->create();
        Blog::factory()->count(10)->create();

        User::factory()->create([
            'name' => 'Aakif Raza',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
