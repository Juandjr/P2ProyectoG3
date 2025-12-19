<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BusesSeeder;
use Database\Seeders\ParadasSeeder;
use Database\Seeders\ParadasBusSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Seeda usuario de prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed data for buses, paradas and their relaciones
            $this->call([
                BusesSeeder::class,
                ParadasSeeder::class,
                ParadasBusSeeder::class,
                AdminUserSeeder::class,
            ]);
    }
}
