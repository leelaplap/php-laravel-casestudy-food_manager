<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable = ['id', 'name', 'desc', 'image', 'price','customer_id'];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
