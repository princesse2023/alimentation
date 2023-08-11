<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\connectController;
use Illuminate\Support\Facades\Route;


//Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


  Route::get('/', function () {
  return view('welcome');
 });
 Route::get('connect',[adminController::class ,'login']);
 Route::get('index',[adminController::class ,'ajoutgerant']);
 Route::post('ajtgrt',[adminController::class ,'ajoutegerant'])->name('formgerant');
 
 Route::get('liste',[adminController::class ,'bord'])->name('liste');
 Route::get('liste2',[adminController::class ,'bord2'])->name('liste2');

 Route::post('/connexiontraitement',[adminController::class ,'authenticate'])->name('traitement_login');
 Route::post('/verifconect',[connectController::class ,'verifconect'])->name('verifconect');

 Route::get('ajp',[adminController::class ,'form']);
 Route::get('mdf',[adminController::class ,'modform']);
 Route::post('traitement',[adminController::class ,'traitement'])->name('traitement_formajp');
 Route::get('modif/{produit}',[adminController::class ,'traitement_modf']);
 Route::post('validmodif/{produit}',[adminController::class ,'valid_modf']); 
 Route::get('delete/{produit}', [adminController::class, 'delete'])->name('produit.delete');

 Route::get('category',[adminController::class ,'categorie_affiche']);
 Route::get('cat',[adminController::class ,'formcat']);

 Route::post('cate',[adminController::class ,'form_cat'])->name('cat_formulaire');

 Route::get('accueil',[adminController::class ,'cueillle']);
 Route::get('details/{produit}',[adminController::class ,'imagedetails']);
 Route::get('retour',[adminController::class ,'retour'])->name('accueil');

//  Route::get('/accueil', function () {
//   return view('pageaccueil');
//  });