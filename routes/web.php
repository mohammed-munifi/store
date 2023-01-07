<?php

use App\Http\Controllers\dashboard\categoriescontroller;
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
   // Route::view('/dashboard','layouts.dashboard');

   Route::get('/dashboard/categories',[categoriescontroller::class,'index'])->name('dashboard.categories.index');
   Route::get('/dashboard/categories/create',[categoriescontroller::class,'create'])->name('dashboard.categories.create');
   Route::post('/dashboard/categories/store',[categoriescontroller::class,'store'])->name('dashboard.categories.store');

    

    


