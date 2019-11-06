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

    public function findFoodById($id)
    {
        return Food::findOrFail($id);
    }

    public function save($object)
    {
        $object->save();
    }


    public function delete($obj)
    {
        $obj->delete();
    }

    public function search($object)
    {
        return Food::where('name', 'LIKE', "%$object%")->orwhere('price', '<', "%$object%")->get();
    }
}
