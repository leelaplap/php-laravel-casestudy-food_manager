<?php

namespace App\Http\Controllers;

use App\Food;
use App\Http\Requests\RequestFoodValidation;
use App\Services\FoodServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class FoodsController extends Controller
{
    protected $foodService;

    public function __construct(FoodServiceInterface $foodService)
    {
        $this->foodService = $foodService;
    }


    public function getAll()
    {
            $foods = $this->foodService->getAll();
            return view('food.index', compact('foods'));


    }

    public function create()
    {
        return view('food.create');
    }

    public function store(RequestFoodValidation $request)
    {
        $this->foodService->add($request);
        return redirect()->route('foods.index');
    }

    public function destroy($id)
    {
        $this->foodService->delete($id);
        return redirect()->route('foods.index');
    }

    public function edit($id)
    {
        $food = $this->foodService->findFoodById($id);
        return view('food.edit', compact('food'));
    }

    public function update(Request $request, $id)
    {
        $this->foodService->edit($id, $request);
        return redirect()->route('foods.index');
    }

    public function search(Request $request)
    {
        $foods = $this->foodService->search($request);
        return view('food.index', compact('foods'));
    }
}
