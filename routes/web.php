<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;

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
// General Routes
Route::group(['middleware' =>'auth:web'], function (){
   
   Route::get('/local/{local?}', [HomeController::class, 'setLanguage'])->name('language.set');

   Route::get('/', function () {
      return view('index');
   });
   Route::get('/home', function (){
      return view('index');
   })->name('main.home');

   //Product Route
   Route::resource('products', ProductController::class);
   Route::post('delete-product', [ProductController::class, 'deleteProduct']);
});
