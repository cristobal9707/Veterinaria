<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //datos enviados a la base de datos
        $this->call(ClientesTableSeeder::class);
        $this->call(FarmacosTableSeeder::class);
        $this->call(MascotasTableSeeder::class);
        $this->call(RecetasTableSeeder::class);
    }
}
