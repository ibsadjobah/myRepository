<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articlesController;


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

Route::get('/welcom', function () {
    return view('welcome');
});

/**Route::get('moi', function (){
    return 'me too';
}); 


Route::get('metoo', function(){
   return view('me');
});
*/

Route::get('/', [articlesController::class, 'index']);
Route::get('/article/{id}', [articlesController::class, 'show'])->whereNumber('id');
Route::get('/contact', [articlesController::class, 'contact']);
