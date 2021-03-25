<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//*produit
Route::post ('/produit/add', 'ProduitsController@add');
Route::get ('/produit/delete/{id}', 'ProduitsController@destroy');
Route::post ('/produit/update/{id}', 'ProduitsController@update');
Route::get ('/produit/show/{id}', 'ProduitsController@read');
Route::get ('/produits', 'ProduitsController@index');
//administartion
Route::post('/administration/add','AdministrationsController@add');
Route::get ('/administration/delete/{id}', 'AdministrationsController@destroy');
Route::post ('/administration/update/{id}', 'AdministrationsController@update');
Route::get ('/administration/show/{id}', 'AdministrationsController@read');
Route::get ('/administrations', 'AdministrationsController@index');
//*categorie
Route::post ('/categorie/add', 'CategoriesController@add');
Route::get ('/categorie/delete/{id}', 'CategoriesController@destroy');
Route::post ('/categorie/update/{id}', 'CategoriesController@update');
Route::get ('/categorie/show/{id}', 'CategoriesController@read');
Route::get ('/categories', 'CategoriesController@index');
//*achat
Route::post ('/achat/add', 'AchatsController@add');
Route::get ('/achat/delete/{id}', 'AchatsController@destroy');
Route::post ('/achat/update/{id}', 'AchatsController@update');
Route::get ('/achat/show/{id}', 'AchatsController@read');
Route::get ('/achats', 'AchatsController@index');
//*comission
Route::post ('/comission/add', 'ComissionsController@add');
Route::get ('/comission/delete/{id}', 'ComissionsController@destroy');
Route::post ('/comission/update/{id}', 'ComissionsController@update');
Route::get ('/comission/show/{id}', 'ComissionsController@read');
Route::get ('/comissions', 'ComissionsController@index');
//users
Route::post ('/user/add', 'UsersController@add');
Route::get ('/user/delete/{id}', 'UsersController@destroy');
Route::post ('/user/update/{id}', 'UsersController@update');
Route::get ('/user/show/{id}', 'UsersController@read');
Route::get ('/users', 'UsersController@index');
//parrainnage
Route::post('/parrainnage/add','ParrainnagesController@add');
Route::get ('/parrainnage/delete/{id}', 'ParrainnagesController@destroy');
Route::post ('/parrainnage/update/{id}', 'ParrainnagesController@update');
Route::get ('/parrainnage/show/{id}', 'ParrainnagesController@read');
Route::get ('/parrainnages', 'ParrainnagesController@index');
//*utilisateur
Route::post ('/utilisateur/add', 'UtilisateursController@add');
Route::get ('/utilisateur/delete/{id}', 'UtilisateursController@destroy');
Route::post ('/utilisateur/update/{id}', 'UtilisateursController@update');
Route::get ('/utilisateur/show/{id}', 'UtilisateursController@read');
Route::get ('/utilisateurs', 'UtilisateursController@index');
