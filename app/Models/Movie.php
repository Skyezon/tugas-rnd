<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
   protected $fillable =[
    'title','sinopsis','director','date', 'image', 'movie'
    ];
}
