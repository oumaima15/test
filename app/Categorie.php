<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function produits(){
        return $this->hasMany("App\Produit","id_c","id");
    }
    public function administration(){
        return $this->belongsTo("App\Administration","id_a","id");
    }
    //
}
