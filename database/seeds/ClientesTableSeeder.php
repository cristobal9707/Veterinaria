<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos de prueba
        DB::table('clientes')->insert([
            'nombre' => 'Valentina',
            'apellido' => 'Villegas',
            'correo' => 'vale@mail.com',
            'telefono' => '90908080',
            'ciudad' => 'Temuco',
            'calle' => 'Av Italia',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Cristobal',
            'apellido' => 'Carrion',
            'correo' => 'cris@mail.com',
            'telefono' => '90907070',
            'ciudad' => 'Temuco',
            'calle' => 'Av Alemania',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Andres',
            'apellido' => 'Ramos',
            'correo' => 'andr@mail.com',
            'telefono' => '90906060',
            'ciudad' => 'Temuco',
            'calle' => 'Av Francia',
            'created_at' => '2019-06-22 00:00:00',
            'updated_at' => '2019-06-22 00:00:00',
        ]);
    }
}
