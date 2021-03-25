<?php

namespace App\Http\Controllers;

use App\Achat;
use Illuminate\Http\Request;

class AchatsController extends Controller
{

    public function index(){
        return response()->json(Achat::all(),200);

    }

    public function add(Request $request){
        $achat= new Achat();
        $achat->id_ut=$request->id_ut;
        $achat->id_produit=$request->id_produit;
        $achat->save();
        return response()->json(["message"=>"achat ajouter"],200);
    }
    public function destroy($id){
        if($achat= Achat::find($id)){
            $achat->delete();
            return response()->json(["message"=>"achat supprimer"],200);
        }
            return response()->json(["message"=>"achat non trouver"],400);

     }
    public function update(Request $request,$id){
        $achat= Achat::find($id);
        $achat->id_ut=$request->id_ut;
        $achat->id_produit=$request->id_produit;
         $achat->ipdate();
         return response(["message"=>"achat modifier"],200);
    }
    public function read($id){
        $achat= Achat::find($id);
        return response()->json($achat,200);
    }


    

    //
}
