<?php


namespace App\Services;


interface FoodServiceInterface
{
    public function getAll();

    public function findFoodById($id);

    public function add($object);

    public function delete($id);

    public function edit($id, $object);
}
