@extends('layout')
@section('main')
<main class="flex flex-col md:p-10 p-5 gap-10">

<!-- 

    <section class="flex lg:flex-row flex-col w-full gap-10 py-10">

        <div class="flex flex-col gap-3 lg:w-2/6">

            <h2 class="text-xl font-medium">
                Profile
            </h2>

            <p class="">
                This information will be shared publicly so be careful.
            </p>

            @if($errors)
            <div class="flex flex-col">
                @foreach($errors->all() as $error)
                <p class="text-red-500">{{$error}}</p>
                @endforeach
            </div>
            @endif

        </div>

        <form method="POST" action="{{route('updateProfile')}}"  class="flex flex-col lg:w-4/6 md:rounded-lg md:border">

            @csrf
            @method('PATCH')

            <div class="flex flex-col gap-10 md:p-10 ">

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="website" class="font-medium cursor-pointer">
                        Website
                    </label>
                    
                    <input type="text" id="website" class="px-3 py-1 border rounded w-full" placeholder="https://website.com">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="about" class="font-medium cursor-pointer">
                        About
                    </label>
                    
                    <textarea name="about" id="about" rows="7" class="px-3 py-1 border rounded w-full" placeholder="Hi !"></textarea>

                    <p class="text-sm">
                        Write a few sentences about yourself
                    </p>
                    
                </div>

                <div class="flex flex-col gap-3 md:items-start">
                    
                    <label class="font-medium cursor-pointer">
                        Photo
                    </label>

                    <div class="flex md:flex-row flex-col gap-3 items-center">
                        <img src="{{asset('storage/images/web/user-placeholder.svg')}}" alt="User Placeholder" class="w-20">

                        <input type="file" name="" class="text-slate-500 file:rounded file:bg-black file:text-white file:border-none file:px-3 file:py-1 file:font-medium file:mr-3 cursor-pointer file:cursor-pointer">

                    </div>
                    
                </div>

                <div class="flex flex-col gap-3 md:items-start">
                    
                    <label class="font-medium cursor-pointer">
                        Cover Photo
                    </label>

                    <div class="flex md:flex-row flex-col gap-3 items-center">

                        <img src="{{asset('storage/images/web/image-placeholder.svg')}}" alt="Image Placeholder" class="w-40">

                        <input type="file" name="" class="text-slate-500 file:rounded file:bg-black file:text-white file:border-none file:px-3 file:py-1 file:font-medium file:mr-3 cursor-pointer file:cursor-pointer">

                    </div>

                </div>
                
            </div>

            <div class="flex md:justify-end justify-center items-center gap-5 p-5 font-medium border-t mt-5 ">
                <button type="reset">Cancel</button>
                <button type="submit" class="text-white bg-black px-3 py-1 rounded">Save</button>
            </div>

        </form>

    </section>

    <section class="flex lg:flex-row flex-col w-full gap-10 py-10">

        <div class="flex flex-col gap-3 lg:w-2/6">

            <h2 class="text-xl font-medium">
                Personal Information
            </h2>

            <p class="">
                Use a permenant address where you can recieve mail.
            </p>

        </div>

        <form method="POST" action="{{route('updateProfile')}}"  class="flex flex-col lg:w-4/6 md:rounded-lg md:border">

            @csrf
            @method('PATCH')

            <div class="flex flex-col gap-10 md:p-10 ">

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="firstname" class="font-medium cursor-pointer">
                        First name
                    </label>
                    
                    <input type="text" id="firstname" class="px-3 py-1 border rounded w-full" placeholder="John">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="lastname" class="font-medium cursor-pointer">
                        Last name
                    </label>
                    
                    <input type="text" id="lastname" class="px-3 py-1 border rounded w-full" placeholder="Doe">
                    
                </div>
                
                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="country" class="font-medium cursor-pointer">
                        Country
                    </label>
                    
                    <input type="text" id="country" class="px-3 py-1 border rounded w-full" placeholder="Country #">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="mailAddress" class="font-medium cursor-pointer">
                        Email Address
                    </label>
                    
                    <input type="text" id="mailAddress" class="px-3 py-1 border rounded w-full" placeholder="House ##, Street #, State #">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="streetAddress" class="font-medium cursor-pointer">
                        Street Address
                    </label>
                    
                    <input type="text" id="streetAddress" class="px-3 py-1 border rounded w-full" placeholder="Street #">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="city" class="font-medium cursor-pointer">
                        City
                    </label>
                    
                    <input type="text" id="city" class="px-3 py-1 border rounded w-full" placeholder="City #">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="state" class="font-medium cursor-pointer">
                        State / Province
                    </label>
                    
                    <input type="text" id="state" class="px-3 py-1 border rounded w-full" placeholder="State #, Province #">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="postal" class="font-medium cursor-pointer">
                        Zip / Postal Code
                    </label>
                    
                    <input type="text" id="postal" class="px-3 py-1 border rounded w-full" placeholder="Postal #">
                    
                </div>

              
            </div>

            <div class="flex md:justify-end justify-center items-center gap-5 p-5 font-medium border-t mt-5 ">
                <button type="reset">Cancel</button>
                <button type="submit" class="text-white bg-black px-3 py-1 rounded">Save</button>
            </div>

        </form>

    </section>
-->

    <div class="flex justify-end">
        <a href="{{route('profilePage')}}" class="bg-black text-white font-medium px-3 py-1 rounded">View Profile</a>
    </div>

    @if($errors->any())
        <div class="flex flex-col items-center">
            @foreach($errors->all() as $error)
            <p class="text-red-500 font-medium px-3 py-1 rounded">{{$error}}</p>
            @endforeach
        </div>
    @endif

    <article class="flex lg:flex-row flex-col gap-5">

        <div class="flex flex-col gap-3 lg:w-2/6">

            <h2 class="text-xl font-medium">
                Contact Information
            </h2>

            <p class="">
                This information will be shared from your profile information.
            </p>

        </div>

        <form class="flex flex-col lg:w-4/6 md:rounded-lg md:border  gap-5 md:px-10 md:pt-10" action="{{route('updateProfile')}}" method="post">

            @csrf
            @method('patch')

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
                    First Name
                </p>
                
                <input type="text" name="firstname" value="{{$user->firstname ?? old('firstname')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="First Name">

                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Last Name
                </p>
                
                <input type="text" name="lastname" value="{{$user->lastname ?? old('lastname')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Last Name">
                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Phone Number
                </p>
                
                <input type="number" name="phone" value="{{$user->phone ?? old('phone')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Phone Number">
                
            </div>

            <div class="flex md:justify-end justify-center items-center gap-5 p-5 font-medium border-t mt-5 ">
                <button type="reset">Cancel</button>
                <button type="submit" class="text-white bg-black px-3 py-1 rounded">Save</button>
            </div>

        </form>

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

        <form class="flex flex-col lg:w-4/6 md:rounded-lg md:border gap-5 md:px-10 md:pt-10" action="{{route('updateProfile')}}" method="post">

            @csrf
            @method('patch')

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Apartment, House #
                </p>
                
                <input type="text" name="house" value="{{$user->house ?? old('house')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="House No ###">
                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Street Address
                </p>
                
                <input type="text" name="address" value="{{$user->address ?? old('address')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Address">
                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Postal Code
                </p>
                
                <input type="number" name="postal" value="{{$user->postal ?? old('postal')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Postal Code">

            </div>

            @if($user->state == null)
            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    State
                </p>
                <div class="flex flex-col" x-data="{
                    open: false,
                    toggle(){this.open = !this.open},
                    state: '',
                    state_id: '',
                    setValue(e){
                        this.toggle()
                        this.state = e.target.textContent
                        this.state_id = e.target.id
                    }
                }">

                    <input type="text" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="State" x-model="state">

                    <input type="hidden" name="state_id" class="px-3 py-1 border rounded w-full text-slate-500" x-model="state_id">

                
                    <div class="border rounded px-5 py-1 flex justify-between text-slate-500 cursor-pointer items-center" @click="toggle()">
                        <p>Select A State</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                        </svg>
                    </div>
                    <div class="border rounded px-5 py-1 text-slate-500 cursor-pointer divide-y" x-show="open" x-transition>
                        @foreach($state as $each)
                        <p @click="setValue" id="{{$each->id}}">{{$each->title}}</p>
                        @endforeach
                    </div>

                </div>

                @else 

                <p class="font-medium">
                    State
                </p>

                <p class="px-3 py-1 border rounded w-full text-slate-500">
                    {{$user->state->title}}
                </p>

            </div>
            @endif

            @if($user->state != null)
                @if($user->country == null)

                <div class="flex flex-col gap-2">

                    <p class="font-medium">
                        Country
                    </p>

                    <div class="flex flex-col" x-data="{
                        open: false,
                        toggle(){this.open = !this.open},
                        country: '',
                        country_id: '',
                        setValue(e){
                            this.toggle()
                            this.country = e.target.textContent
                            this.country_id = e.target.id
                        }
                    }">

                        <input type="text" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Country" x-model="country">

                        <input type="hidden" name="country_id" class="px-3 py-1 border rounded w-full text-slate-500" x-model="country_id">

                    
                        <div class="border rounded px-5 py-1 flex justify-between text-slate-500 cursor-pointer items-center" @click="toggle()">
                            <p>Select A Country</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                        <div class="border rounded px-5 py-1 text-slate-500 cursor-pointer divide-y" x-show="open" x-transition>
                            @foreach($country as $each)
                            <p @click="setValue" id="{{$each->id}}">{{$each->title}}</p>
                            @endforeach
                        </div>

                    </div>
                </div>

                @else 

                    <p class="font-medium">
                        Country
                    </p>

                    <p class="px-3 py-1 border rounded w-full text-slate-500">
                        {{$user->country->title}}
                    </p>

                @endif

                @if($user->country != null)
                    @if($user->city == null)

                    <div class="flex flex-col gap-2">

                        <p class="font-medium">
                            City
                        </p>

                        <div class="flex flex-col" x-data="{
                            open: false,
                            toggle(){this.open = !this.open},
                            city: '',
                            city_id: '',
                            setValue(e){
                                this.toggle()
                                this.city = e.target.textContent
                                this.city_id = e.target.id
                            }
                        }">

                            <input type="text" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="City" x-model="city">

                            <input type="hidden" name="city_id" class="px-3 py-1 border rounded w-full text-slate-500" x-model="city_id">

                        
                            <div class="border rounded px-5 py-1 flex justify-between text-slate-500 cursor-pointer items-center" @click="toggle()">
                                <p>Select A City</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                </svg>
                            </div>
                            <div class="border rounded px-5 py-1 text-slate-500 cursor-pointer divide-y" x-show="open" x-transition>
                                @foreach($city as $each)
                                <p @click="setValue" id="{{$each->id}}">{{$each->title}}</p>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    @else 

                        <p class="font-medium">
                            City
                        </p>

                        <p class="px-3 py-1 border rounded w-full text-slate-500">
                            {{$user->city->title}}
                        </p>

                @endif
                @endif

            @endif

            <div class="flex md:justify-end justify-center items-center gap-5 p-5 font-medium border-t mt-5 ">
                <button type="reset">Cancel</button>
                <button type="submit" class="text-white bg-black px-3 py-1 rounded">Save</button>
            </div>


        </form>

    </article>

    <article class="flex lg:flex-row flex-col gap-5">

        <div class="flex flex-col gap-3 lg:w-2/6">

            <h2 class="text-xl font-medium">
                Stripe Information
            </h2>

            <p class="">
                This information will be shared from your profile information.
            </p>

        </div>

        <form class="flex flex-col lg:w-4/6 md:rounded-lg md:border gap-5 md:px-10 md:pt-10" action="{{route('updateProfile')}}" method="post">

            @csrf
            @method('patch')

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Card Number
                </p>
                
                <input type="number" name="stripe_number" value="{{$stripe->card_number ?? old('stripe_number')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Card Number">
                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Name on Card
                </p>
                
                <input type="text" name="stripe_name" value="{{$stripe->card_name ?? old('stripe_name')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Card Name">
                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Expiration Date (MM/YY)
                </p>
                
                <input type="text" name="stripe_expiration" value="{{$stripe->card_expiration ?? old('stripe_expiration')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Expiration Date">
                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Card Verfiaction Value / Code
                </p>
                
                <input type="text" name="stripe_cvc" value="{{$stripe->card_cvc ?? old('stripe_cvc')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Card Verification Code">
                
            </div>

            @if($stripe != null)

                @if($stripe->id != $user->card_id) 

                <div class="flex items-center gap-5" x-data="{
                    check:0,
                    toggle(){this.check == 0 ? this.check = 1 : this.check = 0}
                }">
                    
                    <p class="font-medium cursor-pointer" @click="toggle()">
                        Make Stripe Default Payment
                    </p>
                    
                    <p class="rounded p-1.5 border w-fit cursor-pointer outline outline-offset-1" @click="toggle()" :class="check ? 'bg-black' :  ''"></p>
                    
                    <input type="hidden" x-model="check" name="stripe_default">
                    
                </div>

                @endif
            @endif

            
            <div class="flex md:justify-end justify-center items-center gap-5 p-5 font-medium border-t mt-5 ">
                <button type="reset">Cancel</button>
                <button type="submit" class="text-white bg-black px-3 py-1 rounded">Save</button>
            </div>

        </form>

    </article>

    <article class="flex lg:flex-row flex-col gap-5">

        <div class="flex flex-col gap-3 lg:w-2/6">

            <h2 class="text-xl font-medium">
                Paypal Information
            </h2>

            <p class="">
                This information will be shared from your profile information.
            </p>

        </div>

        <form class="flex flex-col lg:w-4/6 md:rounded-lg md:border gap-5 md:px-10 md:pt-10" action="{{route('updateProfile')}}" method="post">

            @csrf
            @method('patch')

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Card Number
                </p>
                
                <input type="number" name="paypal_number" value="{{$paypal->card_number ?? old('paypal_number')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Card Number">
                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Name on Card
                </p>
                
                <input type="text" name="paypal_name" value="{{$paypal->card_name ?? old('paypal_name')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Card Name">
                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Expiration Date (MM/YY)
                </p>
                
                <input type="text" name="paypal_expiration" value="{{$paypal->card_expiration ?? old('paypal_expiration')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Expiration Date">
                
            </div>

            <div class="flex flex-col gap-2">
                
                <p class="font-medium">
                    Card Verfiaction Value / Code
                </p>
                
                <input type="text" name="paypal_cvc" value="{{$paypal->card_cvc ?? old('paypal_cvc')}}" class="px-3 py-1 border rounded w-full text-slate-500" placeholder="Card Verification Code">
                
            </div>

            @if($paypal != null)
            
                @if($paypal->id != $user->card_id) 

                <div class="flex items-center gap-5" x-data="{
                    check:0,
                    toggle(){this.check == 0 ? this.check = 1 : this.check = 0}
                }">
                    
                    <p class="font-medium cursor-pointer" @click="toggle()">
                        Make Paypal Default Payment
                    </p>
                    
                    <p class="rounded p-1.5 border w-fit cursor-pointer outline outline-offset-1" @click="toggle()" :class="check ? 'bg-black' :  ''"></p>
                    
                    <input type="hidden" x-model="check" name="paypal_default">
                    
                </div>
                
                @endif
            @endif

            
            <div class="flex md:justify-end justify-center items-center gap-5 p-5 font-medium border-t mt-5 ">
                <button type="reset">Cancel</button>
                <button type="submit" class="text-white bg-black px-3 py-1 rounded">Save</button>
            </div>

        </form>

    </article>

</main>
@endsection