<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }

    public function index()
    {
        $checkout = Cart::where('user_id', auth()->id())->get();

        // $total_price_clean = number_format($total_price);

        return view('checkout.index', [
            'checkout' => $checkout,
        ]);
    }
}
