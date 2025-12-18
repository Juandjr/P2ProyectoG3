<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ParadaBus;
use App\Models\Buses;
use App\Models\paradas;

class ParadasBusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asociaciones ejemplo: para cada bus crear una secuencia de paradas
        $bus1 = Buses::where('matricula', 'ABC-123')->first();
        $bus2 = Buses::where('matricula', 'DEF-456')->first();
        $bus3 = Buses::where('matricula', 'GHI-789')->first();

        $central = paradas::where('nombre_parada', 'Central')->first();
        $norte = paradas::where('nombre_parada', 'Norte')->first();
        $sur = paradas::where('nombre_parada', 'Sur')->first();
        $este = paradas::where('nombre_parada', 'Este')->first();

        if ($bus1 && $central && $norte) {
            ParadaBus::create(['bus_id' => $bus1->id, 'parada_id' => $central->id, 'orden_parada' => 1, 'duracion_minutos' => 0]);
            ParadaBus::create(['bus_id' => $bus1->id, 'parada_id' => $norte->id, 'orden_parada' => 2, 'duracion_minutos' => 5]);
            ParadaBus::create(['bus_id' => $bus1->id, 'parada_id' => $este->id, 'orden_parada' => 3, 'duracion_minutos' => 7]);
        }

        if ($bus2 && $sur && $central) {
            ParadaBus::create(['bus_id' => $bus2->id, 'parada_id' => $sur->id, 'orden_parada' => 1, 'duracion_minutos' => 0]);
            ParadaBus::create(['bus_id' => $bus2->id, 'parada_id' => $central->id, 'orden_parada' => 2, 'duracion_minutos' => 6]);
        }

        if ($bus3 && $este && $norte) {
            ParadaBus::create(['bus_id' => $bus3->id, 'parada_id' => $este->id, 'orden_parada' => 1, 'duracion_minutos' => 0]);
            ParadaBus::create(['bus_id' => $bus3->id, 'parada_id' => $norte->id, 'orden_parada' => 2, 'duracion_minutos' => 4]);
            ParadaBus::create(['bus_id' => $bus3->id, 'parada_id' => $sur->id, 'orden_parada' => 3, 'duracion_minutos' => 8]);
        }
    }
}
