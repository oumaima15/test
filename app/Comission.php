<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comission extends Model
{
    public function achat(){
        return $this->belongsTo("App\Achat","id_ach","id");
        
    }
    public function utilisateur(){
        return $this->belongsTo("App\Utilisateur","id_ut","id");
        
    }
    //
}
