<?php

use Illuminate\Database\Seeder;

class MascotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos de prueba
        DB::table('mascotas')->insert([
            'nombre' => 'Chichi',
            'edad' => 3,
            'especie' => 'Gato',
            'genero' => 'Hembra',
            'cliente_id' => 1,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('mascotas')->insert([
            'nombre' => 'Chicho',
            'edad' => 1,
            'especie' => 'Perro',
            'genero' => 'Macho',
            'cliente_id' => 1,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('mascotas')->insert([
            'nombre' => 'Chichu',
            'edad' => 2,
            'especie' => 'Gato',
            'genero' => 'Macho',
            'cliente_id' => 1,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('mascotas')->insert([
            'nombre' => 'Edu',
            'edad' => 5,
            'especie' => 'Raton',
            'genero' => 'Macho',
            'cliente_id' => 2,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('mascotas')->insert([
            'nombre' => 'Jotaro',
            'edad' => 10,
            'especie' => 'Perro',
            'genero' => 'Macho',
            'cliente_id' => 3,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('mascotas')->insert([
            'nombre' => 'Dio',
            'edad' => 10,
            'especie' => 'Perro',
            'genero' => 'Macho',
            'cliente_id' => 3,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
    }
}
