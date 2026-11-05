<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Turno>
 */
class TurnoFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'nombre_cliente' => fake()->name(),
            'email' => fake()->safeEmail(),
            'telefono' => fake()->numerify('11########'),
            'fecha' => fake()->dateTimeBetween('today', '+30 days')->format('Y-m-d'),
            'hora' => fake()->randomElement([
                '09:00:00',
                '10:00:00',
                '11:00:00',
                '12:00:00',
                '14:00:00',
                '15:00:00',
                '16:00:00',
                '17:00:00',
            ]),
            'cantidad_personas' => fake()->numberBetween(1, 10),
            'observaciones' => fake()->optional()->sentence(),
        ];
    }
}
