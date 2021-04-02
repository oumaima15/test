<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parrainnage extends Model
{
    public function utilisateur(){
        return $this->belongsTo("App\Utilisateur","id_ut","id");
    }
    public function pere() {
        return $this->hasOne("App\Utilisateur","id_pere","id");
    }
    public function parrain() {
        return $this->hasOne("App\Utilisateur","id_parrai","id");
    }
    //
}
