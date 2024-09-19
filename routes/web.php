<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/test/{nom}', function ($nom) {
  echo "hello" . $nom ;
});
Route::get("/welcome" , [\App\Http\Controllers\HomeController::class , 'index']) ;
Route::get('/page1', function()
{
    return view('page1' , ["titre"=> 'my first page']) ;
});
Route::get('/page2/{nom?}/{id?}', function($nom=null , $id )
{
    if ($nom === null)
    {$msg = "good Bye"  ; }
    else
    {
        $msg = "Bonjour" . $nom ;
    }
    return view('page2' , ["msg"=> $msg ]) ;
})->where('nom','[a-zA-Z]+')
    ->where('id' , '[0-9]+');
Route::get("/show/{nom}" , [\App\Http\Controllers\HomeController::class , 'show']) ;
Route::get("/contact2" , [\App\Http\Controllers\HomeController::class , 'index'])
    ->name('mycontact') ;
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'showForm'])
    ->name('contact.form');

Route::post('contact', [\App\Http\Controllers\HomeController::class, 'submitForm'])
    ->name('contact.submit');
Route::get('/restricted', function()
{
    return "You have access to this page !!" ;
})->middleware('verif.age');
