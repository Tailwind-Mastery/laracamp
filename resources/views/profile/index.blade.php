@extends('layout')
@section('main')
<section class="flex flex-col p-5 md:p-10 mb-10 gap-5">

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
                Default Payment Information: {{$user->card->card_title}}
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
                    Card Verification Value / Code
                </p>
                
                <p class="px-3 py-1 border rounded w-full text-slate-500">
                    {{$user->card->card_cvc}}
                </p>
                
            </div>

        </aside>

    </article>

    <div class="flex flex-col gap-3 md:flex-row justify-between lg:w-4/6 lg:self-center">
        <p class="text-slate-500">
            Update your profile for any changes you require
        </p>
        <a href="{{route('editProfile')}}" class="bg-black text-white font-medium px-3 py-2 rounded text-center">Update Profile</a>
    </div>

</section>
@endsection