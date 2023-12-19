<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
 */
class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $prefixes = ['Misteri', 'Petualangan', 'Fantasi', 'Ilmiah', 'Cinta', 'Pemikiran', 'Sejarah', 'Kuliner'];
        $adjectives = ['Misterius', 'Eksotis', 'Ajaib', 'Epic', 'Romantis', 'Futuristik', 'Inspiratif', 'Kuliner'];
        $nouns = ['Petualangan', 'Mimpi', 'Keajaiban', 'Pendekar', 'Pemberani', 'Rahasia', 'Kuliner', 'Pikiran'];

        $randomPrefix = $prefixes[array_rand($prefixes)];
        $randomAdjective = $adjectives[array_rand($adjectives)];
        $randomNoun = $nouns[array_rand($nouns)];

        $randomCollectionName = "{$randomPrefix} {$randomAdjective} {$randomNoun}";

        return [
            'namaKoleksi' => $randomCollectionName,
            'jenisKoleksi' => mt_rand(1,3),
            'jumlahKoleksi' => $this->faker->randomNumber(3, false)
        ];
    }
}
