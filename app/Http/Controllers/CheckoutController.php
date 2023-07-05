<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
        $this->middleware('incomplete_user');
    }

    public function index()
    {
        $carts = Cart::where('user_id', auth()->id())->with(['product', 'product.tax'])->get();

        $total_price = 0;
        $shipping_price = 0;
        $tax_price = 0;
        $total_items = 0;
        foreach ($carts as $value) {
            $total_price += $value->product->price * $value->quantity;
            $shipping_price += $value->product->tax->shipping * $value->quantity;
            $tax_price += $value->product->tax->tax * $value->quantity;
            $total_items += $value->quantity;
        }
        $subtotal = number_format($total_price);
        $shipping_estimate_clean = number_format($shipping_price);
        $tax_estimate_clean = number_format($tax_price);
        $total_price_clean = number_format($total_price + $shipping_price + $tax_price);

        return view('checkout.index', [
            'user' => auth()->user()->load(['city', 'country', 'state', 'card']),
            'total_items' => $total_items,
            'subtotal' => $subtotal,
            'total_price' => $total_price_clean,
            'shipping_estimate' => $shipping_estimate_clean,
            'tax_estimate' => $tax_estimate_clean,
        ]);
    }
}
