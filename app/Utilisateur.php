<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    public function comissions() {
        return $this->hasMany("App\Comission","id_ut","id");
    }
    public function achats() {
        return $this->hasMany("App\Achat","id_ut","id");
    }
    public function parrainnage() {
        return $this->hasMany("App\Parrainnage","id_ut","id");
    }
    //
}
