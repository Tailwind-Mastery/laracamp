<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }
    
    public function index()
    {
        // $orders = Order::where('user_id', auth()->id())->orderBy('updated_at', 'desc')->with(['product', 'product.image', 'product.category', 'country', 'state', 'city'])->paginate(10);
        $orders_group = OrderGroup::where('user_id', auth()->id())->orderBy('updated_at', 'desc')->with(['orders', 'orders.product', 'orders.product.image', 'orders.country', 'orders.state', 'orders.state', 'orders.city'])->paginate(10);

        // dd($orders_group);

        return view('order.index', [
            'orders_group' => $orders_group,
            'user' => auth()->user()
        ]);
    }
    
    public function store()
    {
        $carts = Cart::where('user_id', auth()->id())->with(['product', 'product.tax'])->get();

        if(count($carts) == 0){
            return to_route('cartPage');
        }
        
        $grand_total = 0;
        $subtotal_g = 0;
        $shipping_price_g = 0;
        $tax_price_g = 0;
        foreach ($carts as $value) {
            $subtotal_g += $value->product->price * $value->quantity;
            $shipping_price_g += $value->product->tax->shipping * $value->quantity;
            $tax_price_g += $value->product->tax->tax * $value->quantity;
            
            $grand_total += $subtotal_g + $shipping_price_g + $tax_price_g;
        }
        $order_group = new OrderGroup();
        $order_group->user_id = auth()->id();
        $order_group->total = $grand_total;
        $order_group->status = 'pending';
        $order_group->save();
        
        foreach ($carts as $value) {
            $subtotal = $value->product->price * $value->quantity;
            $shipping_price = $value->product->tax->shipping * $value->quantity;
            $tax_price = $value->product->tax->tax * $value->quantity;
            $total = $subtotal + $shipping_price + $tax_price;
                        
            $order = new Order();
            $order->order_group_id = $order_group->id;
            $order->user_id = auth()->id();
            $order->card_id = auth()->user()->card_id;
            $order->state_id = auth()->user()->state_id;
            $order->country_id = auth()->user()->country_id;
            $order->city_id = auth()->user()->city_id;
            $order->product_id = $value->product_id;
            $order->quantity = $value->quantity;
            $order->price = $value->product->price;
            $order->subtotal = $subtotal;
            $order->total = $total;
            $order->tax = $tax_price;
            $order->shipping = $shipping_price;
            $order->house = auth()->user()->house;
            $order->address = auth()->user()->address;
            $order->save();

            $value->delete();
        }
                
        return to_route('orderPage');
    }
    
    public function update()
    {
        $order_group = OrderGroup::find(request()->id);

        if(request()->has('status')){
            if(request()->status == 'pending'){
                $order_group->status = 'pending';
            } else if (request()->status == 'cancel'){
                $order_group->status = 'cancelled';
            }
        }
        $order_group->save();

        return to_route('orderPage');
    }

    public function delete()
    {
        $order_group = OrderGroup::find(request()->id);
        $orders = Order::where('order_group_id', request()->id)->get();
        if(request()->has('delete')){

            foreach($orders as $each){
                $each->delete();
            }
            
            $order_group->delete();
        }

        return to_route('orderPage');
    }
}
