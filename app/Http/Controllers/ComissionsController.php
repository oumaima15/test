<?php

namespace App\Http\Controllers;

use App\Comission;
use Illuminate\Http\Request;

class ComissionsController extends Controller
{
    public function index(){
        return response()->json(Comission::all(),200);

    }
    public function add(Request $request){
        $Comission= new Comission();
        $Comission->id_ach=$request->id_ach;
        $Comission->id_u=$request->id_u;
        $Comission->type=$request->type;
        $Comission->save();
        return response()->json(["message"=>"comission ajouter"],200);
    }
  public function destroy($id){
      if($comission= Comission::find($id)){
        $comission->delete();
        return response()->json(["message"=>"comission supprimer"],200);
      }
      return response()->json(["message"=>"comission non  trouver"],400);

  }
  public function update(Request $request,$id){
    $comission=  Comission::find($id);
    $comission->id_ach=$request->id_ach;
    $comission->id_u=$request->id_u;
    $comission->type=$request->type;
        $comission->update();
        return response()->json(["message"=>"comission modifier"],200);
  }
  public function read($id){
      $comission= Comission::find($id);
      return response()->json($comission,200);

    
  }
    //
}
