@extends('layout')
@section('main')
<section class="flex flex-col gap-10">

    <x-layout.heading-screen url="{{route('storePage')}}" title="Amazing and Elegant Shopping Cart" description="Lightweight and easy shopping cart, add items to it, and purchase anytime you want. We provide the best shopping services for our customers" image="{{asset('storage/images/web/basket.jpg')}}" btnText="Add More Items"/>

    <section class="flex flex-col gap-10 p-5 md:p-10">

        @if(count($cart->items()) == 0)
            <h2 class="text-xl md:text-3xl text-slate-300 font-semibold text-center">
                You have not added any products
            </h2>

        @endif

        <article class="grid grid-cols-1 lg:grid-cols-2 gap-x-10">

            @foreach($cart->items() as $each)
            <aside class="flex flex-col md:flex-row gap-5 justify-between py-5 border-b">

                <div class="flex flex-col md:flex-row gap-5">

                    <img src="{{asset('storage/products/'.$each->product->image->title)}}" alt="{{$each->product->image->title}}" class="object-cover w-full h-52 md:w-32 md:h-32">
                    
                    <div class="flex flex-col gap-3 justify-between">

                        <div class="flex flex-col">
                            <a href="{{route('showProduct', ['categorySlug' => $each->product->category->slug, 'productSlug' => $each->product->slug])}}" class="font-medium">
                                {{$each->product->title}}
                            </a>
                            <p class="text-slate-500 text-sm">
                                {{$each->product->category->title}}
                            </p>
                        </div>

                        <div class="flex items-center gap-5">

                            <img src="{{asset('storage/images/web/check.png')}}" alt="Check Icon" class="object-contain w-5 h-5">

                            <p class="text-slate-500 text-sm">
                                In Stock
                            </p>
                        </div>

                        
                    </div>
                    
                </div>

                <div class="flex md:flex-col justify-between items-center md:items-end">

                    <div class="rounded border flex items-center gap-3 px-3 py-1">
                        <p class="text-sm">{{$each->quantity}}</p>
                        <p class="text-slate-500">Qty</p>
                    </div>

                    <p class="font-medium">${{$each->product->price * $each->quantity}}</p>

                    <form action="{{route('deleteCart')}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="cart_id" value="{{$each->id}}">
                        <button type="submit" class="text-slate-500 font-medium text-sm">
                            Remove
                        </button>
                    </form>

                </div>
                
            </aside>
            @endforeach
            
        </article>
        
        <div class="flex flex-col border rounded-lg p-5 lg:w-3/4 lg:self-center">

            <h2 class="text-lg font-semibold">
                Order Summary
            </h2>
            
            <div class="flex justify-between border-b py-3">
                <p class="text-slate-500">
                    Subtotal
                </p>
                <p class="font-medium">
                    ${{$subtotal}}
                </p>
            </div>
            
            <div class="flex justify-between border-b py-3">
                <p class="text-slate-500">
                    Shipping Estimate
                </p>
                <p class="font-medium">
                    ${{$shipping_estimate}}
                </p>
            </div>
            
            <div class="flex justify-between border-b py-3">
                <p class="text-slate-500">
                    Tax Estimate
                </p>
                <p class="font-medium">
                    ${{$tax_estimate}}
                </p>
            </div>
            
            <div class="flex justify-between py-3">
                <p class="text-slate-500">
                    Order Total
                </p>
                <p class="font-medium">
                    ${{$total_price}}
                </p>
            </div>

            <a href="{{route('checkoutPage')}}" class="bg-black font-medium text-center py-3 rounded text-white">
                Checkout
            </a>

        </div>
        
        {{$cart->links()}}

    </section>
    
    
</section>
@endsection