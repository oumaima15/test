<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use Auth;
use App\User;
use Hash;
class AuthController extends Controller
{
    // //
    public function register(Request $request){

    
        $validator = Validator::make($request->all(), [
            'email' => 'required', 
            'username' => 'required',
            'password' => 'required',
                 
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->first(), 201);
        }
        
        $user = new User();
        $user->name =$request->username;
        $user->role = "user";
        $user->email =$request->email;
        $user->password = Hash::make($request->password);

        if($user->save()){
            return response()->json([
                'message' => 'Utilisateur cree avec succes',
                'status_code' => 200
             ], 200);

        }

        return response()->json([
            'message' => 'Creation echouee',
            'status_code' => 500

        ], 500);
    
    }

    public function login(Request $request){

        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string',
        ]);
  
        if($validator->fails()){
            return response()->json($validator->errors()->first(), 201);
        }
        
       if (!Auth::attempt(['email' => $request->login, 'password' => $request->password]) && !Auth::attempt(['name' => $request->login, 'password' => $request->password])  ){
           return response()->json([
               'message' => 'Invalid username/password',
               'status_code' => 401
           ], 401);
       }
       //$user = $request->user();
       $user = Auth::user();
       //return response()->json($user, 200);
       $tokenData = $user->createToken('Personal Acces Token');
       
      

       $token = $tokenData->token;
       
       if ($request->remember_me ){
           $token->expires_at = Carbon::now()->addWeeks(1);

       }

       if ($token->save()){
           return response()->json([
               'user' => $user ,
               'access_token' => $tokenData->accessToken,
               'token_type' => 'Bearer',
               'exipres_at' => Carbon::parse($tokenData->token->expires_at)->toDateTimeString(),
               'status_code' => 200
           ], 200);

       }else{
           return response()->json([
               'message'=> 'Erreur d\'authentification ',
               'status_code' => 500

           ], 500);
       }

    }
}
