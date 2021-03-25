<?php

namespace App\Http\Controllers;
use App\Parrainage;

use Illuminate\Http\Request;
class ParrainnagesController extends Controller
{
   public function index(){
       return response()->json(Parrainage::all(),200);
   }
   public function add(Request $request){
       $parrainage= new Parrainage();
       $parrainage->id_pere=$request->id_pere;
       $parrainage->id_parrai=$request->id_parrai;
       $parrainage->save();
       return response()->json(["message"=>"parrainage ajouter"],200);
   }
   public function destroy($id){
    if($parrainage= Parrainage::find($id)){
      $parrainage->delete();
      return response()->json(["message"=>"parrainage supprimer"],200);
    }
    return response()->json(["message"=>"parrainage non  trouver"],400);

}
public function update(Request $request,$id){
  $parrainage=  Parrainage::find($id);
  $parrainage->id_pere=$request->id_pere;
  $parrainage->id_parrai=$request->id_parrai;
      $parrainage->update();
      return response()->json(["message"=>"parrainage modifier"],200);
}
public function read($id){
    $parrainage= Parrainage::find($id);
    return response()->json($parrainage,200);

  
}
    //
}
