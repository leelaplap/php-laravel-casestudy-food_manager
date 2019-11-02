<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table ='foods';
    protected $fillable=['id','name','desc','image','price'];
}
