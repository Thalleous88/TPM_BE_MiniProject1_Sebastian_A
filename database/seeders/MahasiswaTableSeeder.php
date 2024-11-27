<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        Mahasiswa::factory(20)->create();
    }
}
