<?php

use Illuminate\Database\Seeder;

class RecetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos de prueba
        DB::table('recetas')->insert([
            'cantidad' => 3,
            'comentario' => 'Para los michis, consumir una cucharada todas las noches',
            'cliente_id' => 1,
            'farmaco_id' => 3,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('recetas')->insert([
            'cantidad' => 2,
            'comentario' => 'Para el edu, una capsula antes de la hora del almuerzo',
            'cliente_id' => 2,
            'farmaco_id' => 1,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('recetas')->insert([
            'cantidad' => 4,
            'comentario' => 'Para los perros, una pastilla cada 8 horas',
            'cliente_id' => 3,
            'farmaco_id' => 4,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
    }
}
