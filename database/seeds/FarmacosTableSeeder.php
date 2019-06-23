<?php

use Illuminate\Database\Seeder;

class FarmacosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos de prueba
        DB::table('farmacos')->insert([
            'nombre' => 'Tiopental sódico',
            'categoria' => 'Pastillas',
            'comprimido' => 10,
            'contenido_neto' => 100,
            'precio' => 5000,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('farmacos')->insert([
            'nombre' => 'Triamcol ',
            'categoria' => 'Capsula',
            'comprimido' => 6,
            'contenido_neto' => 300,
            'precio' => 12000,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('farmacos')->insert([
            'nombre' => 'Recombitek C6 ',
            'categoria' => 'Liquido',
            'comprimido' => 1,
            'contenido_neto' => 500,
            'precio' => 6000,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('farmacos')->insert([
            'nombre' => 'Lactotropina',
            'categoria' => 'Pastillas',
            'comprimido' => 12,
            'contenido_neto' => 1000,
            'precio' => 18000,
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
    }
}
