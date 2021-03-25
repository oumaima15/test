<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{  public function index(){
    return response()->json(User::all(),200);
}

public function add(Request $request){
    $user= new User();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=$request->password;
    $user->remember_token=$request->remember_token;
    $user->save();
    return response()->json(["message"=>"user ajouter"],200);
}
public function destroy($id){
  if($user= User::find($id)){
    $user->delete();
    return response()->json(["message"=>"user supprimer"],200);
  }
  return response()->json(["message"=>"user non  trouver"],400);

}
public function update(Request $request,$id){
$user=  User::find($id);
$user->name=$request->name;
$user->email=$request->email;
$user->password=$request->password;
$user->remember_token=$request->remember_token;

    $user->update();
    return response()->json(["message"=>"user modifier"],200);
}
public function read($id){
  $user= User::find($id);
  return response()->json($user,200);


}
    //
}
