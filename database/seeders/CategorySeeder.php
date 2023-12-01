<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "category" => "Café"
        ]);

        Category::create([
            "category" => "Lanche"
        ]);

        Category::create([
            "category" => "Almoço"
        ]);

        Category::create([
            "category" => "Janta"
        ]);

        Category::create([
            "category" => "Sobremesa"
        ]);
    }
}
