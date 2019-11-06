<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingController extends Controller
{
    public function addToCart($id)
    {
        $food = Food::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($food);
        Session::put('cart', $cart);
        Session::flash('success', 'Mua hàng thành công');
        return back();
    }
}
