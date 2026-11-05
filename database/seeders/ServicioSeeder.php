<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        $servicios = [
            ['Masaje relajante', 'Masaje para aliviar tensiones.', 25000, 'Masajes'],
            ['Masaje descontracturante', 'Masaje muscular profundo.', 30000, 'Masajes'],
            ['Piedras calientes', 'Masaje con piedras volcánicas.', 35000, 'Masajes'],
            ['Limpieza facial', 'Limpieza profunda del rostro.', 22000, 'Faciales'],
            ['Hidratación facial', 'Tratamiento hidratante facial.', 20000, 'Faciales'],
            ['Tratamiento antiage', 'Tratamiento para cuidar la piel.', 40000, 'Faciales'],
            ['Exfoliación corporal', 'Renovación de la piel.', 28000, 'Corporales'],
            ['Envoltura de algas', 'Tratamiento corporal con algas.', 45000, 'Corporales'],
            ['Drenaje linfático', 'Masaje de drenaje corporal.', 32000, 'Corporales'],
            ['Reflexología', 'Masaje terapéutico en los pies.', 24000, 'Masajes'],
            ['Aromaterapia', 'Experiencia con aceites esenciales.', 27000, 'Masajes'],
            ['Circuito de aguas', 'Recorrido de relajación acuática.', 50000, 'Circuito de aguas'],
            ['Baño de vapor', 'Sesión de vapor relajante.', 18000, 'Circuito de aguas'],
            ['Masaje aromático', 'Masaje con aceites aromáticos.', 33000, 'Masajes'],
            ['Hidratación corporal', 'Tratamiento nutritivo corporal.', 29000, 'Corporales'],
        ];

        foreach ($servicios as $servicio) {
            Servicio::create([
                'nombre' => $servicio[0],
                'descripcion' => $servicio[1],
                'precio' => $servicio[2],
                'categoria' => $servicio[3],
            ]);
        }
    }
}