<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\paradas;

class ParadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        paradas::insert([
            [
                'nombre_parada' => 'Central',
                'calle' => 'Av. Principal 100',
            ],
            [
                'nombre_parada' => 'Norte',
                'calle' => 'Calle Norte 45',
            ],
            [
                'nombre_parada' => 'Sur',
                'calle' => 'Calle Sur 12',
            ],
            [
                'nombre_parada' => 'Este',
                'calle' => 'Calle Este 7',
            ],
        ]);
    }
}
