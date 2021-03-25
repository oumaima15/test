<?php

namespace App\Http\Controllers;
use App\Parrainnage;

use Illuminate\Http\Request;
class ParrainnagesController extends Controller
{
   public function index(){
       return response()->json(Parrainnage::all(),200);
   }
   public function add(Request $request){
       $parrainnage= new Parrainnage();
       $parrainnage->id_pere=$request->id_pere;
       $parrainnage->id_parrai=$request->id_parrai;
       $parrainnage->save();
       return response()->json(["message"=>"parrainnage ajouter"],200);
   }
   public function destroy($id){
    if($parrainnage= Parrainnage::find($id)){
      $parrainnage->delete();
      return response()->json(["message"=>"parrainnage supprimer"],200);
    }
    return response()->json(["message"=>"parrainnage non  trouver"],400);

}
public function update(Request $request,$id){
  $parrainnage=  Parrainnage::find($id);
  $parrainnage->id_pere=$request->id_pere;
  $parrainnage->id_parrai=$request->id_parrai;
  $parrainnage->update();
      return response()->json(["message"=>"parrainnage modifier"],200);
}
public function read($id){
    $parrainnage= Parrainnage::find($id);
    return response()->json($parrainnage,200);

  
}
    //
}
