<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // SQL: INSERTINTO  categories
        //(name,slug,parent_id) VALUES (?,?,?)
        //Query Builder

        DB::table('categories')->insert([
            'name'=>'Tv & Audios',
            'slug'=>'tv-audios',
            'created_at'=>now(), // لتحديد التاريخ والوقت تلقائي now
        ]);
        DB::table('categories')->insert([
            'name'=>'Smart Phones',
            'slug'=>'smart-phones',
            'created_at'=>now(),

        ]);
        DB::table('categories')->insert([
            'name'=>'Smart Television',
            'slug'=>'smart-television',
            'parent_id'=>1,
            'created_at'=>now(),
        ]);
    }
}
