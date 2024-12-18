<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->numberBetween(1000000000, 9999999999),
            'nama' => fake()->sentence(),
            'alamat' => fake()->sentence(),
            'no_hp' => fake()->unique()->phoneNumber(),
            'jenis_kelamin' => fake()->sentence(),
            'hobi' => fake()->sentence()
        ];
    }
}
