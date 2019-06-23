<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{   
    //relacionamos cliente con mascota
    public function mascotas(){
        return $this->hasMany('App\Mascota', 'cliente_id', 'id');
    }
    //relacionamos cliente con receta
    public function recetas(){
        return $this->hasMany('App\Receta', 'cliente_id', 'id');
    }
}
