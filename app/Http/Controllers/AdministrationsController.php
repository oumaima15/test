<?php

namespace App\Http\Controllers;
use App\Administration;
use Illuminate\Http\Request;

class AdministrationsController extends Controller
{
    public function index(){
        return response()->json(Administration::all(),200);
    }
    public function add(Request $request){
        $administration= new Administration();
        $administration->quantité=$request->quantité;
        $administration->type=$request->type;
        $administration->save();
        return response()->json(["message"=>"administartion ajouter"],200);
    }
    public function destroy($id){
        if($administration= Administration::find($id)){
          $administration->delete();
          return response()->json(["message"=>"administration supprimer"],200);
        }
        return response()->json(["message"=>"administration non  trouver"],400);
  
    }
    public function update(Request $request,$id){
      $administration=  Administration::find($id);
      $administration->quantité=$request->quantité;
      $administration->type=$request->type;
          $administration->update();
          return response()->json(["message"=>"administration modifier"],200);
    }
    public function read($id){
        $administration= Administration::find($id);
        return response()->json($administration,200);
  
      
    }

    //
}
