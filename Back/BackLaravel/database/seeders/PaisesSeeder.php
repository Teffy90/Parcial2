<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert([
            'nombre' => 'Colombia',
            'capital' => 'Bogota',
            'idioma_oficial' => 'Español',
            'poblacion' => '50,88 millones ',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'Argentina',
            'capital' => 'Buenos Aires',
            'idioma_oficial' => 'Español',
            'poblacion' => '45,38 millones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'México',
            'capital' => 'Ciudad de Mexico',
            'idioma_oficial' => 'Español',
            'poblacion' => '128,9 millones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'Canadá',
            'capital' => 'Ottawa',
            'idioma_oficial' => 'Español',
            'poblacion' => '38,01 millones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'Reino Unido',
            'capital' => 'Londres',
            'idioma_oficial' => 'Ingles',
            'poblacion' => '67,22 millones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'Países Bajos',
            'capital' => 'Ámsterdam',
            'idioma_oficial' => 'Neerlandés',
            'poblacion' => '17,44 millones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'República Popular China',
            'capital' => 'Pekín',
            'idioma_oficial' => '	Chino mandarín',
            'poblacion' => '1,402 miles de millones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'Japón',
            'capital' => 'Tokio',
            'idioma_oficial' => 'Japones',
            'poblacion' => '125,8 millones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'Austria',
            'capital' => 'Viena',
            'idioma_oficial' => 'Alemán',
            'poblacion' => '8,917 millones',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'Ciudad del Vaticano',
            'capital' => 'Ciudad del Vaticano',
            'idioma_oficial' => 'Italiano',
            'poblacion' => '825',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'Brasil',
            'capital' => 'Brasilia',
            'idioma_oficial' => 'Portugués',
            'poblacion' => '212,6 millones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
