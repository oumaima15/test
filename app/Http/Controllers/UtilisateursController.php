<?php

namespace App\Http\Controllers;
use App\Utilisateur;
use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    public function index(){
        return response()->json(Utilisateur::all(),200);
    }

    public function add(Request $request){
        $utilisateur= new Utilisateur();
        $utilisateur->nom=$request->nom;
        $utilisateur->prenom=$request->prenom;
        $utilisateur->num_tel=$request->num_tel;
        $utilisateur->adresse=$request->adresse;
        $utilisateur->lien_parrainnage=$request->lien_parrainnage;
       
        $utilisateur->save();
        return response()->json(["message"=>"utilisateur ajouter"],200);
    }
  public function destroy($id){
      if($utilisateur= Utilisateur::find($id)){
        $utilisateur->delete();
        return response()->json(["message"=>"utilisateur supprimer"],200);
      }
      return response()->json(["message"=>"utilisateur non  trouver"],400);

  }
  public function update(Request $request,$id){
    $utilisateur=  Utilisateur::find($id);
    $utilisateur->nom=$request->nom;
    $utilisateur->prenom=$request->prenom;
    $utilisateur->num_tel=$request->num_tel;
    $utilisateur->adresse=$request->adresse;
    $utilisateur->lien_parrainnage=$request->lien_parrainnage;
   
        $utilisateur->update();
        return response()->json(["message"=>"utilisateur modifier"],200);
  }
  public function read($id){
      $utilisateur= Utilisateur::find($id);
      return response()->json($utilisateur,200);

    
  }
  
    //
}
