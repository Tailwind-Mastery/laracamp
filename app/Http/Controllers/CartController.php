<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }

    public function index()
    {
        $cart = Cart::where('user_id', auth()->id())->with(['product', 'product.image', 'product.category'])->paginate(10);

        $total = Cart::where('user_id', auth()->id())->with(['product'])->get();

        $total_price = 0;
        foreach ($total as $value) {
            $total_price += $value->product->price;
        }

        $total_price_clean = number_format($total_price);

        return view('cart.index', [
            'cart' => $cart,
            'total_price' => $total_price_clean
        ]);
    }
}
