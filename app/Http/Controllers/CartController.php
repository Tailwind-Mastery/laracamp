<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }

    public function index()
    {
        $cart = Cart::where('user_id', auth()->id())->orderBy('updated_at', 'desc')->with(['product', 'product.image', 'product.category'])->paginate(10);

        $total = Cart::where('user_id', auth()->id())->with(['product', 'product.tax'])->get();

        $total_price = 0;
        $shipping_price = 0;
        $tax_price = 0;
        foreach ($total as $value) {
            $total_price += $value->product->price * $value->quantity;
            $shipping_price += $value->product->tax->shipping * $value->quantity;
            $tax_price += $value->product->tax->tax * $value->quantity;
        }
        $subtotal = number_format($total_price);
        $shipping_estimate_clean = number_format($shipping_price);
        $tax_estimate_clean = number_format($tax_price);
        $total_price_clean = number_format($total_price + $shipping_price + $tax_price);

        return view('cart.index', [
            'cart' => $cart,
            'subtotal' => $subtotal,
            'total_price' => $total_price_clean,
            'shipping_estimate' => $shipping_estimate_clean,
            'tax_estimate' => $tax_estimate_clean,
        ]);
    }

    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'product_id' => 'required|exists:products,id',
        ]);
 
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $res = $validator->validated();

        $old_cart = Cart::where([
            ['user_id', auth()->id()],
            ['product_id', $res['product_id']],
        ])->first();

        if($old_cart == null) {
            $cart = new Cart();
            $cart->user_id = auth()->id();
            $cart->product_id = $res['product_id'];
            $cart->save();
        } else {
            $old_cart->quantity = $old_cart->quantity + 1;
            $old_cart->save();
        }

        return to_route('cartPage');
    }

    public function delete()
    {
        $validator = Validator::make(request()->all(), [
            'cart_id' => 'required|exists:carts,id',
        ]);
 
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $res = $validator->validated();
        
        $cart = Cart::find($res['cart_id']);
        if($cart->quantity == 1 ) {
            $cart->delete();
        } else {
            $cart->quantity = $cart->quantity -1;
            $cart->save();
        }
        
        return to_route('cartPage');
    }
}
