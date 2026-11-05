<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
  
    public function run(): void
    {
        $this->call([
            ServicioSeeder::class,
            TurnoSeeder::class,
        ]);

    }
}
