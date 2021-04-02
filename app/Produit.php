<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function categorie(){
        return $this->belongsTo("App\Categorie","id_c","id");
        
    }
    public function administration(){
        return $this->belongsTo("App\Administration","id_a","id");
        
    }
    //public function achat(){
      //  return $this->belongsTo("App\Achat","id_ach","id");
        
   // }
    //
}
