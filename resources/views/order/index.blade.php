@extends('layout')
@section('main')
<section class="flex flex-col">

    <x-layout.heading-screen url="{{route('orderPage')}}" title="All transactions at Laracamps orders page for Users Ease" description="Browse thorugh your personal orders to make sure you have the most efficient products to make your life easy" image="{{asset('storage/images/web/order.jpg')}}" btnText="View Orders"/>

    @if(count($orders_group->items()) == 0)
    <h2 class="text-3xl font-bold text-slate-400 text-center">
        No Orders Placed
    </h2>
    @endif
    
    <section class="flex flex-col gap-10 mb-10 md:px-5">

    @foreach($orders_group->items() as $each)
        <article class="flex flex-col md:rounded-lg overflow-hidden border">

            <div class="flex md:flex-row flex-col justify-between gap-5 py-5 md:px-10 px-5 border-b">

                <div class="flex flex-col">
                    <p class="font-medium">
                        Order Number
                    </p>
                    <p class="">
                        #{{$each->id}}
                    </p>
                </div>

                <div class="flex flex-col">
                    <p class="font-medium">
                        Date Placed
                    </p>
                    <p class="">
                        {{$each->updated_at}}
                    </p>
                </div>

                <div class="flex flex-col">
                    <p class="font-medium">
                        Total Amount
                    </p>
                    <p class="">
                        ${{$each->total}}
                    </p>
                </div>

            </div>

            <div class="flex flex-col divide-y">
                @foreach($each->orders as $order)
                <div class="flex md:flex-row flex-col gap-5 p-5">
                    <img src="{{asset('storage/products/'.$order->product->image->title)}}" alt="{{$order->product->title}}" class="object-cover md:w-2/6 h-64 rounded-lg">

                    <div class="flex flex-col lg:flex-row gap-5 md:w-4/6">
                        
                        <div class="flex flex-col gap-5 lg:w-1/3 xl:w-1/2">
                            
                            <div class="flex lg:flex-col gap-3 justify-between">
                                <p class="font-medium">
                                    {{$order->product->title}}
                                </p>
                                <p class="text-lg font-medium">
                                    ${{$order->price}}
                                </p>
                            </div>
                            
                            <p class="text-slate-500 text-sm">
                                {{-- $order->product->description --}}
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur quaerat facilis similique, aliquam
                            </p>
                        </div>

                        <div class="flex md:flex-row flex-col gap-5 text-sm lg:w-2/3 xl:w-1/2">

                            <div class="flex flex-col">
                                <p class="font-medium mb-2">
                                    Delivery Address
                                </p>
                                <p class="text-slate-500">
                                    {{$order->house}}
                                </p>
                                <p class="text-slate-500">
                                    {{$order->address}}
                                </p>
                                <p class="text-slate-500">
                                    {{$order->city->title}}
                                </p>
                                <p class="text-slate-500">
                                    {{$order->country->title}}
                                </p>
                                <p class="text-slate-500">
                                    {{$order->state->title}}
                                </p>
                            </div>

                            <div class="flex flex-col">
                                <p class="font-medium mb-2">
                                    Shipping Info
                                </p>
                                <p class="text-slate-500">
                                    Quantity: {{$order->quantity}}
                                </p>
                                <p class="text-slate-500">
                                    Subtotal: ${{$order->subtotal}}
                                </p>
                                <p class="text-slate-500">
                                    Shipping: ${{$order->shipping}}
                                </p>
                                <p class="text-slate-500">
                                    Tax: ${{$order->tax}}
                                </p>
                                <p class="text-slate-500">
                                    Total: ${{$order->total}}
                                </p>
                            </div>

                            <div class="flex flex-col">
                                <p class="font-medium mb-2">
                                    Card Info
                                </p>
                                <p class="text-slate-500">
                                    User: {{$order->card->card_name}}
                                </p>
                                <p class="text-slate-500">
                                    Pay: {{$order->card->card_title}}
                                </p>
                                <p class="text-slate-500">
                                    Card: {{$order->card->card_number}}
                                </p>
                            </div>
                            
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

            <div class="flex px-5 py-5 md:px-10 border-t justify-between">

                @if($each->status == 'delivered')
                <p class="font-medium flex items-center gap-3">
                    <img src="{{asset('storage/images/web/check.png')}}" alt="Check Icon" class="w-5 h-5">
                    <span>Delivered on Jan 5, 2021</span>
                </p>
                @elseif($each->status == 'pending')
                <p class="font-medium flex items-center gap-3">
                    <img src="{{asset('storage/images/web/clock.png')}}" alt="Clock Icon" class="w-5 h-5">
                    <span>Pending</span>
                </p>

                <form action="{{route('updateOrder')}}" method="post">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="id" value="{{$each->id}}">
                    <input type="hidden" name="status" value="cancel">
                    <button class="bg-red-500 text-white text-sm px-3 py-1 rounded">Cancel</button>
                </form>
                @elseif($each->status == 'cancelled')
                <p class="font-medium flex items-center gap-3">
                    <img src="{{asset('storage/images/web/cancel.png')}}" alt="Cancel Icon" class="w-5 h-5">
                    <span>Cancelled</span>
                </p>

                <div class="flex gap-1">

                    <form action="{{route('updateOrder')}}" method="post">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="id" value="{{$each->id}}">
                        <input type="hidden" name="status" value="pending">
                        <button class="bg-blue-500 text-white text-sm px-3 py-1 rounded">Renew</button>
                    </form>

                    <form action="{{route('deleteOrder')}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$each->id}}">
                        <input type="hidden" name="delete" value="delete">
                        <button class="bg-black text-white text-sm px-3 py-1 rounded">Delete</button>
                    </form>
                </div>

                @endif
            </div>
                
        </article>
    @endforeach

    </section>

    {{$orders_group->links()}}
        
</section>

@endsection