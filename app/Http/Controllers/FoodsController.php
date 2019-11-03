<?php

namespace App\Http\Controllers;

use App\Food;
use App\Services\FoodServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

    public function store(Request $request)
    {
//        $food = new Food();
//        $food->name = $request->name;
//        $food->desc = $request->desc;
//        $food->price = $request->price;
//        if (!$request->hasFile('image')) {
//            $food->image = $request->image;
//        } else {
//            $image = $request->file('image');
//            $path = $image->store('image', 'public');
//            $food->image = $path;
//        }
//
//        $food->save();

        $this->foodService->add($request);
        return redirect()->route('foods.index');
    }

    public function destroy($id)
    {
//        $food = Food::findOrFail($id);
//        Storage::disk('public')->delete("$food->image");
//        $food->delete();
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
//        $food = Food::findOrFail($id);
//        $food->name = $request->name;
//        $food->desc = $request->desc;
//        $food->price = $request->price;
//        if ($request->image) {
//            File::delete(storage_path("app/public/$food->image"));
//            $image = $request->file('image');
//            $path = $image->store('image', 'public');
//            $food->image = $path;
//        }
//
//        $food->save();
        $this->foodService->edit($id, $request);
        return redirect()->route('foods.index');
    }

    public function search(Request $request)
    {
        $foods = $this->foodService->search($request);
        return view('food.index', compact('foods'));

    }
}
