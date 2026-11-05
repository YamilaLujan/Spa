<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Turno;
use App\Models\Servicio;

class TurnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicios = Servicio::all();

        Turno::factory(20)
            ->create()
            ->each(function ($turno) use ($servicios) {
                $seleccionados = $servicios->random(rand(1, 3));

                $turno->servicios()->attach(
                    $seleccionados->pluck('id')
                );
            });
    }
}
