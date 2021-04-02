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
     public function parrainnages_peres() {
        return $this->belongsTo("App\Parrainnage","id_pere","id");
    }
    public function parrainnages_parrains() {
        return $this->belongsTo("App\Parrainnage","id_parrai","id");
    }
    public function user(){
        return $this->belongsTo("App\User","id_us","id");
    }
    //
}
