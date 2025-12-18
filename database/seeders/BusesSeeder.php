<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buses;

class BusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buses::insert([
            [
                'matricula' => 'ABC-123',
                'capacidad' => 40,
                'kilometraje' => 120000,
                'compania' => 'Transporte Uno',
            ],
            [
                'matricula' => 'DEF-456',
                'capacidad' => 30,
                'kilometraje' => 80000,
                'compania' => 'MoviBus',
            ],
            [
                'matricula' => 'GHI-789',
                'capacidad' => 50,
                'kilometraje' => 200000,
                'compania' => 'Linea Grande',
            ],
        ]);
    }
}
