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
            'nim' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'nama' => $this->faker->unique()->name(),
            'alamat' => $this->faker->address(),
            'no_hp' => $this->faker->unique()->phoneNumber('id_ID'),
            'jurusan_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
