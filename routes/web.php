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

          //      Route::get('/dashboard/categories',[categoriescontroller::class,'index'])->name('dashboard.categories.index');
           //     Route::get('/dashboard/categories/create',[categoriescontroller::class,'create'])->name('dashboard.categories.create');
           //     Route::post('/dashboard/categories/store',[categoriescontroller::class,'store'])->name('dashboard.categories.store');

           Route::group([                                                //تعريف الراوت عن طريق القروب
                'prefix'=>'/dashboard/categories',                       //اسم الروات المشترك
                'as'=>'dashboard.categories.',                            //الاسم التابع لروات المشترك
                'controller'=> categoriescontroller::class,               //LARAVEL 9            
          
            ],function(){
            
                        Route::get('/','index')->name('index');
                        Route::get('/create','create')->name('create');
                        Route::post('/store','store')->name('store');
                        Route::get('/{category}/edit','edit')->name('edit');
                        Route::put('/{category}','update')->name('update');     //PUT تستخدم في الابديت
                        Route::delete('/{category}','destroy')->name('destroy');


           } );

    

    


