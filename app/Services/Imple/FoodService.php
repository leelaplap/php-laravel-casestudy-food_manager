<?php


namespace App\Services\Imple;


use App\Repositories\FoodRepositoryInterface;
use App\Services\FoodServiceInterface;

class FoodService implements FoodServiceInterface
{
    protected $foodRepository;
    public function __construct(FoodRepositoryInterface $foodRepository)
    {
        $this->foodRepository=$foodRepository;
    }

    public function getAll()
    {
        return $this->foodRepository->getAll();
    }
}
