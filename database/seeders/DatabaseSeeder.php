<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Database\Factories\MahasiswaFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (Mahasiswa::count() == 0) {
            $this->call(MahasiswaTableSeeder::class);
        }
    }
}
