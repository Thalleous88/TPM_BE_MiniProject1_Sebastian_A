<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'CategoryName' => 'Tes1'
        ]);

        Category::create([
            'CategoryName' => 'Tes2'
        ]);

        Category::create([
            'CategoryName' => 'Tes3'
        ]);
    }
}