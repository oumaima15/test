<?php

namespace App\Http\Controllers;
use App\Produit;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{

    public function index(){
        return response()->json(Produit::all(),200);
    }

    public function add(Request $request){
        $produit= new Produit();
        $produit->nom=$request->nom;
        $produit->description=$request->description;
        $produit->prix=$request->prix;
        $produit->quantite=$request->quantite;
        $produit->image=$request->image;
        $produit->id_c=$request->id_c;
        $produit->save();
        return response()->json(["message"=>"produit ajouter"],200);
    }
  public function destroy($id){
      if($produit= Produit::find($id)){
        $produit->delete();
        return response()->json(["message"=>"produit supprimer"],200);
      }
      return response()->json(["message"=>"produit non  trouver"],400);

  }
  public function update(Request $request,$id){
    $produit=  Produit::find($id);
    $produit->nom=$request->nom;
    $produit->description=$request->description;
    $produit->prix=$request->prix;
    $produit->quantite=$request->quantite;
    $produit->image=$request->image;
    $produit->id_c=$request->id_c;
        $produit->update();
        return response()->json(["message"=>"produit modifier"],200);
  }
  public function read($id){
      $produit= Produit::find($id);
      return response()->json($produit,200);

    
  }
    //
}
