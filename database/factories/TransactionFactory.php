<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'UserIdPetugas' => mt_rand(0,3),
            'UserIdPeminjam' => mt_rand(4,9),
            'tanggalPinjam' => $this->faker->date(),
            // 'tanggalSelesai' => $this->faker->date()
        ];
    }
}
