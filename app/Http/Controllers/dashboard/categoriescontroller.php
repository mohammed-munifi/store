<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriescontroller extends Controller
{
    //actions
    public function index(){
        
        //SQL : SELECT categories.*, parents.name as parent_name  FROM  categories

        //LEFT JOIN categories as parent ON parents.id = categories.parent_id  *****الموجود في جدول قاتوريز هيقابل الايدي الموجود في جدول البايرنتزلparrnt_id 

        //Return collection object (array)
        
        $categories=/*DB::table('categories')*/category::leftjoin( 'categories as parents','parents.id','=','categories.parent_id')->select([           // category  ستيم استبدال التابعة لطريقةالكويري بيلدر الى طريقة  الموديل باسمه DB:table
            'categories.*',
            'parents.name as parent_name',
        ])
        ->orderBy('categories.parent_id')->orderBy('categories.name','ASC')  
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
         
         //Mass Assignment

        /*DB::table('categories')->*/  category::create([   //  استبدال الى الموديل واستبدال ميثود انسيرت الى كريت
            
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

    public function edit($id){
        $category =category::findOrfill($id);  //orfill  تقوم نبفس وظيفة abort404
        
        return view('dashboard.categories.edit',[

            'category'=> $category, //لتمرير الداتا الى الفيو
            
        ]);
    }
    
}



