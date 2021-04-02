<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parrainnage extends Model
{
    public function utilisateur(){
        return $this->belongsTo("App\Utilisateur","id_ut","id");
    }
    //
}
