<?php

use App\Http\Controllers\Homecontroller;

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

    /* Route::get('/', function () {
        return view('welcome');
    });*/


    Route::get('/',[Homecontroller::class,'index']) ->name ('home') ;

   // Route::view('/about-us','front.pages.about-us');
   // Route::view('/contact','front.pages.contact');

    Route::get('/pages/{name}',[Homecontroller::class,'show']) ->name ('pages');
    Route::view('/dashboard','layouts.dashboard');
    

    


