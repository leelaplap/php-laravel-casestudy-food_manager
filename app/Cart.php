<?php


namespace App;


class Cart
{
    public $items = null;
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    public function add($food)
    {
        $storeItem = [
            "item" => $food,
            "totalPrice" => 0,
            "totalQty" => 0
        ];

        if ($this->items) {
            if (array_key_exists($food->id, $this->items)) {
                $storeItem = $this->items[$food->id];
                $this->totalQty = count($this->items);
            } else {
                $this->totalQty++;
            }
        }
        $storeItem['totalQty']++;
        $storeItem['totalPrice'] = $storeItem['totalQty'] * $food->price;
        $this->items[$food->id] =$storeItem;
        $this->totalPrice += $storeItem['totalPrice'];
    }
}
