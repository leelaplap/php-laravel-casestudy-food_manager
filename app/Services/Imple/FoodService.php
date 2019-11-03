<?php


namespace App\Services\Imple;


use App\Food;
use App\Repositories\FoodRepositoryInterface;
use App\Services\FoodServiceInterface;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FoodService implements FoodServiceInterface
{
    protected $foodRepository;

    public function __construct(FoodRepositoryInterface $foodRepository)
    {
        $this->foodRepository = $foodRepository;
    }

    public function getAll()
    {
        return $this->foodRepository->getAll();
    }

    public function findFoodById($id)
    {
       return $this->foodRepository->findFoodById($id);
    }

    public function add($object)
    {
        $food = new Food();
        $food->name = $object->name;
        $food->desc = $object->desc;
        $food->price = $object->price;
        if (!$object->hasFile('image')) {
            $food->image = $object->image;
        } else {
            $image = $object->File('image');
            $path = $image->store('image', 'public');
            $food->image = $path;
        }
        return $this->foodRepository->save($food);
    }

    public function delete($id)
    {
        $food = $this->foodRepository->findFoodById($id);
//        Storage::disk('public')->delete($food->image);
        File::delete(storage_path("app/public/$food->image"));
        $this->foodRepository->delete($food);
    }

    public function edit($id, $object)
    {
        $food = $this->foodRepository->findFoodById($id);
        $food->name = $object->name;
        $food->desc = $object->desc;
        $food->price = $object->price;
        if ($object->image) {
            File::delete(storage_path("app/public/$food->image"));
            $image = $object->File('image');
            $path = $image->store('image', 'public');
            $food->image = $path;
        }
        return $this->foodRepository->save($food);
    }
}
