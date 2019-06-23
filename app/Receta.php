<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //relacionamos la receta con farmaco
    public function farmacos(){
        return $this->belongsTo('App\Farmaco', 'farmaco_id', 'id');
    }
    //relacionamos la receta con cliente
    public function clientes(){
        return $this->belongsTo('App\Cliente', 'cliente_id', 'id');
    }
    
}
