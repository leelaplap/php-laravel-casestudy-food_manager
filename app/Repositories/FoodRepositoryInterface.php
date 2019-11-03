<?php


namespace App\Repositories;


interface FoodRepositoryInterface
{
    public function getAll();

    public function findFoodById($id);

    public function save($object);

    public function delete($obj);

    public function search($object);

}
