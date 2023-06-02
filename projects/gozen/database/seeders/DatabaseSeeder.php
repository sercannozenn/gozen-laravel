<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Passenger;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Passenger::factory(20)->create();

        $this->call([
            PassengerSeeder::class,
            PassengerSeeder::class,
            PassengerSeeder::class,
            PassengerSeeder::class,
            PassengerSeeder::class,
            PassengerSeeder::class,
        ]);
    }
}
