<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{   
    //relacionamos mascota con cliente    
    public function clientes(){
        return $this->belongsTo('App\Cliente', 'cliente_id', 'id');
    }
}
