<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Servicio>
 */
class ServicioFactory extends Factory
{
    public function definition(): array
    {
        $servicios = [
            'Masaje relajante',
            'Masaje descontracturante',
            'Masaje con piedras calientes',
            'Limpieza facial profunda',
            'Hidratación facial',
            'Exfoliacion corporal',
            'Envoltura de algas',
            'Drenaje linfático',
            'Reflexologia',
            'Aromaterapia',
            'Circuito de aguas',
            'Baño de vapor',
            'Tratamiento antiedad',
            'Masaje con Aromaterapia',
            'Tratamiento hidratante corporal',
        ];

        $categorias = [
            'Masajes',
            'Faciales',
            'Corporales',
            'Circuito de aguas',
        ];

        return [
            'nombre' => fake()->unique()->randomElement($servicios),
            'descripcion' => fake()->sentence(12),
            'precio' => fake()->numberBetween(15000, 65000),
            'categoria' => fake()->randomElement($categorias),
        ];
    }
}
