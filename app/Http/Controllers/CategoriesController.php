<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return response()->json(Categorie::all(),200);
    }

    public function add(Request $request){
       $categorie= new Categorie();
       $categorie->nom=$request->nom;
       $categorie->description=$request->description;
       $categorie->save();
        return response()->json(["message"=>"categorie ajouter"],200);
    }
  public function destroy($id){
      if($categorie= Categorie::find($id)){
        $categorie->delete();
        return response()->json(["message"=>"categorie supprimer"],200);
      }
      return response()->json(["message"=>"categorie non  trouver"],400);

  }
  public function update(Request $request,$id){
    $categorie=  Categorie::find($id);
    $categorie->nom=$request->nom;
    $categorie->description=$request->description;
     $categorie->update();
        return response()->json(["message"=>"categorie modifier"],200);
  }
  public function read($id){
      $categorie=Categorie::find($id);
      // $categorie = Categorie::with('produits')->where('id',$id)->get();
      return response()->json($categorie,200);

    
  }
    //
}
