<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    public function produits(){
        return $this->hasMany("App\Produit","id_p","id");
    }
    public function categories(){
        return $this->hasMany("App\Categorie","id_a","id");
    }
    public function user(){
        return $this->belongsTo("App\User","id_us","id");
    }
    //
}
