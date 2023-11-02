<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Collection;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'elyasa',
            'fullname' => 'Amri Elyasa',
            'email' => 'elyasa@mail.com',
            'password' => bcrypt('elyasa'),
            'address' => 'San Fierro',
            'phoneNumber' => 234323,
            'birthdate' => '1998-01-01',
            'agama' => 'islam ktp',
            'gender' => '0'
        ]);

        User::factory(9)->create();
        Collection::factory(5)->create();
        Transaction::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
