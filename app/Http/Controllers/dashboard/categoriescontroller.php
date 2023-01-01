<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriescontroller extends Controller
{
    //actions
    public function index(){
        
        //SQL : SELECT * FROM  categories
        //Return collection object (array)
        
        $categories=DB::table('categories')->orderBy('parent_id')->orderBy('name','ASC')
        ->get();


        return view('dashboard.categories.index',[

            'categories'=>$categories,
        ]);
    }
}



