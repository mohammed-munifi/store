<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

//Mass Assignment

    protected $fillable =[        //properte

        'name','slug','parent_id','image_path',
    ];
}
