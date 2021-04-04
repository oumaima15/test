<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    public function comissions(){
        return $this->hasMany("App\Comission","id_ach","id");
    }
    public function produit(){
        return $this->belongsTo("App\Produit","id_ach","id");
    }
    public function utilisateur(){
        return $this->belongsTo("App\Utilisateur","id_ut","id");
    }
    //
}
