<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmaco extends Model
{   
    //relacionamos farmaco con receta
    public function recetas(){
        return $this->hasMany('App\Receta', 'farmaco_id', 'id');
    }    
}
