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
        $checkout = Cart::where('user_id', auth()->id())->get();

        return view('checkout.index', [
            'checkout' => $checkout,
            'user' => auth()->user()->load(['city', 'country', 'state', 'card']),
        ]);
    }
}
