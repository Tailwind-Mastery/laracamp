@extends('layout')
@section('main')
<section class="flex flex-col">

    <x-layout.heading-screen url="{{route('cartPage')}}" title="Happy Delivery Services by Laracamp LTD" description="We care for our customers to have an amazing experince during every purchase they make. Thank you !" image="{{asset('storage/images/web/credit.jpg')}}" btnText="View Cart"/>

    <form class="flex flex-col md:flex-row gap-10 p-5 md:p-10" method="POST">
    @csrf

        <article class="flex flex-col gap-10 md:w-1/2">

            <div class="flex flex-col gap-5">

                <h2 class="text-xl font-medium">
                    Contact Information
                </h2>

                <div class="flex flex-col gap-1">
                    <label for="email" class="font-medium text-sm cursor-pointer">
                        Email Address
                    </label>
                    <input id="email" type="email" class="border rounded px-3 py-1" placeholder="Email">
                </div>
                
            </div>

            <div class="flex flex-col gap-5">

                <h2 class="text-xl font-medium">
                    Shipping Information
                </h2>

                <div class="flex flex-col gap-1">
                    <label for="firstname" class="font-medium text-sm cursor-pointer">
                        First Name
                    </label>
                    <input id="firstname" type="text" class="border rounded px-3 py-1" placeholder="John">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="lastname" class="font-medium text-sm cursor-pointer">
                        Last Name
                    </label>
                    <input id="lastname" type="text" class="border rounded px-3 py-1" placeholder="Doe">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="company" class="font-medium text-sm cursor-pointer">
                        Company
                    </label>
                    <input id="company" type="text" class="border rounded px-3 py-1" placeholder="Company LTD">
                </div>
                
                <div class="flex flex-col gap-1">
                    <label for="address" class="font-medium text-sm cursor-pointer">
                        Address
                    </label>
                    <input id="address" type="text" class="border rounded px-3 py-1" placeholder="Address">
                </div>
                
                <div class="flex flex-col gap-1">
                    <label for="location" class="font-medium text-sm cursor-pointer">
                        Appartment, suite, house
                    </label>
                    <input id="location" type="text" class="border rounded px-3 py-1" placeholder="House No #000">
                </div>
                
                <div class="flex flex-col gap-1">
                    <label for="city" class="font-medium text-sm cursor-pointer">
                        City
                    </label>
                    <input id="city" type="text" class="border rounded px-3 py-1" placeholder="Karachi">
                </div>
                
                <div class="flex flex-col gap-1">
                    <label for="Country" class="font-medium text-sm cursor-pointer">
                        Country
                    </label>
                    <input id="Country" type="text" class="border rounded px-3 py-1" placeholder="Paksitan">
                </div>
                
                <div class="flex flex-col gap-1">
                    <label for="state" class="font-medium text-sm cursor-pointer">
                        State / Province
                    </label>
                    <input id="state" type="text" class="border rounded px-3 py-1" placeholder="Sindh">
                </div>
                
                <div class="flex flex-col gap-1">
                    <label for="postal" class="font-medium text-sm cursor-pointer">
                        Postal Code
                    </label>
                    <input id="postal" type="text" class="border rounded px-3 py-1" placeholder="74800">
                </div>
                
                <div class="flex flex-col gap-1">
                    <label for="phone" class="font-medium text-sm cursor-pointer">
                        Phone Number
                    </label>
                    <input id="phone" type="number" class="border rounded px-3 py-1" placeholder="+923110000000">
                </div>
                
            </div>

        </article>

        <article class="flex flex-col gap-10 md:w-1/2">

            <div class="flex flex-col gap-5">

                <h2 class="text-xl font-medium">
                    Payment Information
                </h2>

                <div class="flex flex-col gap-1">
                    <label for="card-number" class="font-medium text-sm cursor-pointer">
                        Card Number
                    </label>
                    <input id="card-number" type="text" class="border rounded px-3 py-1" placeholder="424242#######">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="card-name" class="font-medium text-sm cursor-pointer">
                        Name on card
                    </label>
                    <input id="card-name" type="text" class="border rounded px-3 py-1" placeholder="John Doe">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="exp-date" class="font-medium text-sm cursor-pointer">
                        Expiration Date (MM/YY)
                    </label>
                    <input id="exp-date" type="text" class="border rounded px-3 py-1" placeholder="John Doe">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="cvc" class="font-medium text-sm cursor-pointer">
                        Card Verification Value/Code
                    </label>
                    <input id="cvc" type="text" class="border rounded px-3 py-1" placeholder="John Doe">
                </div>
                
            </div>
                    
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

            <div class="flex flex-col">

                <h2 class="text-xl font-medium">
                    Order Summary
                </h2>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Total Items
                    </p>
                    <p class="text-lg font-medium">
                        12
                    </p>
                </div>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Subtotal
                    </p>
                    <p class="text-lg font-medium">
                        $1354
                    </p>
                </div>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Shipping Fees
                    </p>
                    <p class="text-lg font-medium">
                        $15
                    </p>
                </div>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Discount 10%
                    </p>
                    <p class="text-lg font-medium">
                        $8
                    </p>
                </div>

                <div class="flex items-center justify-between py-3 border-b">
                    <p class="text-slate-500">
                        Taxes
                    </p>
                    <p class="text-lg font-medium">
                        $10
                    </p>
                </div>

                <div class="flex items-center justify-between py-3">
                    <p class="text-slate-500">
                        Total
                    </p>
                    <p class="text-lg font-medium">
                        $10056
                    </p>
                </div>

                <div class="flex flex-col gap-1 py-3">
                    <label for="coupon" class="font-medium text-sm cursor-pointer">
                        Discount Coupon
                    </label>
                    <input id="coupon" type="text" class="border rounded px-3 py-1" placeholder="Laracamp-Happy">
                </div>

                <a href="#" class="bg-black py-3 text-center text-white font-medium rounded">
                    Confirm Order
                </a>
                
            </div>

        </article>

    </form>
    
</section>

@endsection