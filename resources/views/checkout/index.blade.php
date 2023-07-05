@extends('layout')
@section('main')
<section class="flex flex-col">

    <x-layout.heading-screen url="{{route('cartPage')}}" title="Happy Delivery Services by Laracamp LTD" description="We care for our customers to have an amazing experince during every purchase they make. Thank you !" image="{{asset('storage/images/web/credit.jpg')}}" btnText="View Cart"/>

    <section class="flex flex-col px-5 md:px-10 mb-10 gap-5">

        <article class="flex lg:flex-row flex-col gap-5">

            <div class="flex flex-col gap-3 lg:w-2/6">

                <h2 class="text-xl font-medium">
                    Contact Information
                </h2>

                <p class="">
                    This information will be shared from your profile information.
                </p>

            </div>

            <aside class="flex flex-col lg:w-4/6 md:rounded-lg md:border  gap-5 md:p-10">

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Email Address
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->email}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Phone Number
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->phone}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Firstname
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->firstname}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Lastname
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->lastname}}
                    </p>
                    
                </div>
            </aside>

        </article>

        <article class="flex lg:flex-row flex-col gap-5">

            <div class="flex flex-col gap-3 lg:w-2/6">

                <h2 class="text-xl font-medium">
                    Shipping Information
                </h2>

                <p class="">
                    This information will be shared from your profile information.
                </p>

            </div>

            <aside class="flex flex-col lg:w-4/6 md:rounded-lg md:border gap-5 md:p-10">

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Apartment, House #
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->house}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Address
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->address}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Postal Code
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->postal}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        City
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->city->title}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Country
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->country->title}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        State
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->state->title}}
                    </p>
                    
                </div>

            </aside>

        </article>

        <article class="flex lg:flex-row flex-col gap-5">

            <div class="flex flex-col gap-3 lg:w-2/6">

                <h2 class="text-xl font-medium">
                    Payment Information
                </h2>

                <p class="">
                    This information will be shared from your profile information.
                </p>

            </div>

            <aside class="flex flex-col lg:w-4/6 md:rounded-lg md:border gap-5 md:p-10">

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Card Number
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->card->card_number}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Name on Card
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->card->card_name}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Expiration Date (MM/YY)
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->card->card_expiration}}
                    </p>
                    
                </div>

                <div class="flex flex-col gap-2">
                    
                    <p class="font-medium">
                        Card Verfiaction Value / Code
                    </p>
                    
                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->card->card_cvc}}
                    </p>
                    
                </div>

            </aside>

        </article>

        <article class="flex lg:flex-row flex-col gap-5">

            <div class="flex flex-col gap-3 lg:w-2/6">

                <h2 class="text-xl font-medium">
                    Order Summary
                </h2>

                <p class="">
                    This information will be shared from your profile information.
                </p>

            </div>

            <aside class="flex flex-col lg:w-4/6 md:rounded-lg md:border gap-5 md:p-10">

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Total Items
                    </p>
                    <p class="text-lg font-medium">
                        {{$total_items}}
                    </p>
                </div>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Subtotal
                    </p>
                    <p class="text-lg font-medium">
                        ${{$subtotal}}
                    </p>
                </div>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Shipping Fees
                    </p>
                    <p class="text-lg font-medium">
                        ${{$shipping_estimate}}
                    </p>
                </div>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Discount 10%
                    </p>
                    <p class="text-lg font-medium">
                        $10
                    </p>
                </div>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Discount Coupon
                    </p>
                    <p class="text-lg font-medium">
                        Laracamp
                    </p>
                </div>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Taxes
                    </p>
                    <p class="text-lg font-medium">
                        ${{$tax_estimate}}
                    </p>
                </div>

                <div class="flex items-center justify-between py-3">
                    <p class="text-slate-500">
                        Total
                    </p>
                    <p class="text-lg font-medium">
                        ${{$total_price}}
                    </p>
                </div>

                <form action="{{route('storeOrder')}}" method="post" class="flex">
                    @csrf
                    <button type="submit" class="bg-black py-3 text-center text-white font-medium rounded w-full">
                        Confirm Order
                    </button>
                </form>

            </aside>

        </article>

    </section>
        
</section>

<!-- 

            <div class="flex flex-col gap-5">

                <h2 class="text-xl font-medium">
                    Delivery Method
                </h2>

                <aside class="flex flex-col md:flex-row gap-3">
                    
                    <div class="rounded-lg flex flex-col gap-1 border p-3 items-center md:w-1/2">
                        <p class="font-medium">
                            Standard
                        </p>
                        <p class="text-slate-500 text-sm">
                            4-10 buisness days
                        </p>
                        <p class="font-medium mt-3">
                            $5.00
                        </p>
                    </div>
                    
                    <div class="rounded-lg flex flex-col gap-1 border p-3 items-center md:w-1/2">
                        <p class="font-medium">
                            Express
                        </p>
                        <p class="text-slate-500 text-sm">
                            2-5 buisness days
                        </p>
                        <p class="font-medium mt-3">
                            $16.00
                        </p>
                    </div>
                    
                </aside>

            </div>
    
    
 -->




@endsection