<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    // actions
    public function index()
    {
        $slides =[
            [
                'image'=>'https://via.placeholder.com/800x500',
                'title'=>'<span>No restocking fee ($35 savings)</span>
                M75 Sport Watch',
                'desc'=>'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                labore dolore magna aliqua',
                'price'=>'320.99',
                'link'=>'#',

            ],
            [
                'image'=>' https://via.placeholder.com/800x500',
                'title'=>'<span>big sale offer</span>get the best deal on cctv',
                'desc'=>'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                labore dolore magna aliqua',
                'price'=>'585.22',
                'link'=>'#',

            ],
            [
                
                'image'=>'https://via.placeholder.com/800x500',
                'title'=>'<span>No restocking fee ($35 savings)</span>
                M75 ',
                'desc'=>'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                labore dolore magna aliqua',
                'price'=>'100.99',
                'link'=>'#',
            ],

        ];

        return view(' front.index',[
            'title'=>'shop Home',
            'slides'=>$slides,

        ]);
    }
    public function show($name = 'default')


    {
        if (!view::exists("front.pages.$name")) {
            abort(404);
        }


        return view("front.pages.$name");
    }
}
