@extends('layout')
@section('main')
<section class="flex flex-col gap-10">

    <x-layout.heading-screen url="{{route('storePage')}}" title="Amazing and Elegant Shopping Cart" description="Lightweight and easy shopping cart, add items to it, and purchase anytime you want. We provide the best shopping services for our customers" image="{{asset('storage/images/web/basket.jpg')}}" btnText="Add More Items"/>

    <section class="flex flex-col gap-10 p-5 md:p-10">

        <article class="grid grid-cols-1 lg:grid-cols-2 gap-x-10">

            @foreach($cart->items() as $each)
            <aside class="flex flex-col md:flex-row gap-5 justify-between py-5 border-b">

                <div class="flex flex-col md:flex-row gap-5">

                    <img src="{{asset('storage/products/'.$each->product->image->title)}}" alt="{{$each->product->image->title}}" class="object-cover w-full h-52 md:w-32 md:h-32">
                    
                    <div class="flex flex-col gap-3 justify-between">

                        <div class="flex flex-col">
                            <p class="font-medium">
                                {{$each->product->title}}
                            </p>
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

                <div class="flex md:flex-col justify-between items-center md:items-end relative" x-data="{
                        open: false,
                        toggle(){this.open=!this.open},
                        list: [1,2,3,4,5,6,7,8,9],
                        items: 1,
                        totalPrice: 0,
                        setItems(each){
                            this.open=false; this.items=each;
                        },
                        setPrice(){
                            this.totalPrice = `$${this.items * $refs.itemPrice.value}`
                        }
                    }" x-effect="setPrice()">

                    <div class="flex flex-col md:items-center items-start">
                        
                        <div class="rounded border flex items-center gap-3 px-3 py-1 cursor-pointer" @click="toggle()">
                            <p class="text-sm" x-text="items"></p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>

                        <div class="rounded border flex items-center cursor-pointer absolute top-8 md:-left-[7.3rem] left-0 bg-white" x-show="open" x-transition>
                            <template x-for="each in list">
                                <p class="text-sm hover:bg-slate-200 px-1.5 py-1" x-text="each" @click="setItems(each)"></p>
                            </template>
                        </div>
                        
                    </div>

                    <input type="hidden" value="{{$each->product->price}}" x-ref="itemPrice">
                    <p class="font-medium" x-text="totalPrice"></p>

                    <button class="text-slate-500 font-medium text-sm">
                        Remove
                    </button>

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
                    ${{$total_price}}
                </p>
            </div>
            
            <div class="flex justify-between border-b py-3">
                <p class="text-slate-500">
                    Shipping Estimate
                </p>
                <p class="font-medium">
                    $5.00
                </p>
            </div>
            
            <div class="flex justify-between border-b py-3">
                <p class="text-slate-500">
                    Tax Estimate
                </p>
                <p class="font-medium">
                    $8.32
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