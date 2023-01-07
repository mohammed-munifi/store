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

            'categories'=>$categories, //لتمرير الداتا الى الفيو
            'status'=>session('status'), // استداعاء قيمة ستايتس من السيشين
        ]);
    }
    public function create(){

        return view('dashboard.categories.create');
    }
    public function store(Request $request)
    {
        // dd($request->post());  //var_dump()
        DB::table('categories')->insert([
            //استدراج الداتا من السيدر عن طريق الريكوست دون تعريف ملف فيو

            'name' => $request->post('name'),
            'slug' => $request->post('slug'),
            'parent_id' => $request->post('parent_id'),
            'created_at' => now(),

        ]);
        //PRG  -POST REDIRECT GET +flash message
        return redirect()->route('dashboard.categories.index')
        ->with('status','category created!'); 
    }
    
}



