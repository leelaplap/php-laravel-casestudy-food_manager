<?php


namespace App\Repositories\Eloquent;


use App\Food;
use App\Repositories\FoodRepositoryInterface;

class FoodRepository implements FoodRepositoryInterface
{

    public function getAll()
    {
        return Food::all();
    }
}
