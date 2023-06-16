@extends('layout')
@section('main')
<section class="flex flex-col">

    <article class="flex flex-col gap-5 p-5 md:p-10">

        <aside class="flex flex-col gap-5">

            <div class="flex gap-3 text-slate-500">
                <a href="{{route('showCategory', ['slug' => $product->category->slug])}}">{{$product->category->title}}</a>
                <p>/</p>
                <p class="font-medium">{{$product->title}}</p>
            </div>

            <h1 class="text-2xl md:text-3xl font-semibold">
                {{$product->title}}
            </h1>

            <div class="flex gap-3 items-center">
                <p class="text-xl font-medium border-r pr-2">${{$product->price}}</p>
                <div class="flex gap-1">
                    <p class="font-semibold">4.7</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7">
                </div>
                <p class="text-slate-500 font-medium">1624 Reviews</p>
            </div>

            <div class="flex flex-col lg:flex-row gap-5 items-center" x-data="{
                    changeImage(e) {
                        $refs.myImage.src = e.target.src
                    }
                }">

                <img src="{{asset('storage/products/'.$product->image->title)}}" alt="{{$product->title}}" class="object-cover w-full lg:w-3/4 h-96 md:h-[40rem] lg:h-[50rem] xl:h-[60rem] rounded" x-ref="myImage">

                <div class="overflow-auto scrollbar w-full lg:w-72 lg:h-[50rem] xl:h-[60rem]">

                    <div class="flex lg:items-center flex-row lg:flex-col gap-5 min-w-max">
                        
                        @foreach($allProducts->products as $each)
                        <img src="{{asset('storage/products/'.$each->image->title)}}" alt="{{$each->image->title}}" class="object-cover w-44 h-44 rounded cursor-pointer" @click="changeImage">
                        @endforeach
                        
                    </div>
                </div>
                    
            </div>
            
            <div class="flex flex-col divide-y md:w-3/4 border rounded-lg" x-data="{open:false, toggle(){this.open=!this.open}}">
                <div class="flex justify-between gap-3 p-3" @click="toggle()">
                    <p class="font-medium">Owner</p>
                    <img src="{{asset('storage/images/web/info.png')}}" alt="Info Icon" class="w-7">
                </div>
                <div class="flex flex-col md:flex-row gap-5 md:items-center justify-center p-3" x-transition x-show="!open">
                    <div class="flex flex-col gap-1">
                        <h2 class="text-lg font-medium mt-1">
                            {{$product->user->name}}
                        </h2>
                        <p class="text-slate-500">
                            I hope you like my product
                        </p>
                    </div>

                    <img src="{{asset('storage/users/'.$product->user->image->title)}}" alt="{{$product->user->name}}" class="w-full md:w-1/2 object-cover rounded">
                </div>
                

            </div>
            
            <div class="flex flex-col divide-y md:w-3/4 border rounded-lg" x-data="{open:false, toggle(){this.open=!this.open}}">
                <div class="flex justify-between gap-3 p-3" @click="toggle()">
                    <p class="font-medium">Highlits</p>
                    <img src="{{asset('storage/images/web/info.png')}}" alt="Info Icon" class="w-7">
                </div>
                <p class="text-slate-500 p-3" x-transition x-show="open">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quisquam, labore voluptatibus adipisci porro laborum, repellat veritatis quod facere, rerum numquam placeat ullam alias architecto sint eum itaque delectus ipsum ut perferendis? Cupiditate.
                </p>

            </div>

            <div class="flex flex-col divide-y md:w-3/4 border rounded-lg" x-data="{open:false, toggle(){this.open=!this.open}}">
                <div class="flex justify-between gap-3 p-3" @click="toggle()">
                    <p class="font-medium">Details</p>
                    <img src="{{asset('storage/images/web/info.png')}}" alt="Info Icon" class="w-7">
                </div>
                <p class="text-slate-500 p-3" x-transition x-show="open">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quisquam, labore voluptatibus adipisci porro laborum, repellat veritatis quod facere, rerum numquam placeat ullam alias architecto sint eum itaque delectus ipsum ut perferendis? Cupiditate.
                </p>

            </div>

            <div class="flex flex-col divide-y md:w-3/4 border rounded-lg" x-data="{open:false, toggle(){this.open=!this.open}}">
                <div class="flex justify-between gap-3 p-3" @click="toggle()">
                    <p class="font-medium">License</p>
                    <img src="{{asset('storage/images/web/info.png')}}" alt="Info Icon" class="w-7">
                </div>
                <p class="text-slate-500 p-3" x-transition x-show="open">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quisquam, labore voluptatibus adipisci porro laborum, repellat veritatis quod facere, rerum numquam placeat ullam alias architecto sint eum itaque delectus ipsum ut perferendis? Cupiditate.
                </p>

            </div>

            <div class="flex flex-col gap-3">
                <p class="font-medium">Color</p>

                <div class="flex flex-wrap gap-3 items-center">

                    <p class="rounded-lg p-4 bg-black"></p>
                    <p class="rounded-lg p-4 border"></p>
                    <p class="rounded-lg p-4 bg-slate-700"></p>
                    <p class="rounded-lg p-4 bg-red-700"></p>
                    <p class="rounded-lg p-4 bg-green-700"></p>
                    <p class="rounded-lg p-4 bg-blue-700"></p>
                    <p class="rounded-lg p-4 bg-orange-700"></p>

                </div>

                <p class="text-slate-500">
                    Which color favours me ?
                </p>
                
            </div>

            @if($categorySlug == 'airpods')
            <div class="flex flex-col gap-3">
                <p class="font-medium">Generation</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">1st</p>
                        <p class="text-slate-500">
                            75dB(SPL) 2hrs
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">2nd</p>
                        <p class="text-slate-500">
                            75dB(SPL) 4 hrs
                        </p>
                    </div>
                    <div class="rounded p-3 border">
                        <p class="font-medium">3rd</p>
                        <p class="text-slate-500">
                            75dB(SPL) 6 hrs
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which generation should I buy ?
                </p>
                
            </div>

            @elseif($categorySlug == 'bags')
            <div class="flex flex-col gap-3">
                <p class="font-medium">Size</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">18L</p>
                        <p class="text-slate-500">
                            Perfect for a reasonable amount of snacks
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">20L</p>
                        <p class="text-slate-500">
                            Enough room for a snacks and clothes backpack
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">22L</p>
                        <p class="text-slate-500">
                            Large room for picnic and lunch boxes for fun outing
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which size should I buy ?
                </p>
                
            </div>

            @elseif($categorySlug == 'boats')
            <div class="flex flex-col gap-3">
                <p class="font-medium">Passengers</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">5-6 People</p>
                        <p class="text-slate-500">
                            Size must be 15 - 20 ft
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">8-10 People</p>
                        <p class="text-slate-500">
                            Size must be 24 - 26 ft
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">12-14 People</p>
                        <p class="text-slate-500">
                            Size must be 27 - 30 ft
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Decide how many passengers ?
                </p>
                
            </div>

            @elseif($categorySlug == 'cars')
            <div class="flex flex-col gap-3">
                <p class="font-medium">Transmission</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Manual</p>
                        <p class="text-slate-500">
                            Hatch, Sedan, SUV, MUV, Coupe, Convert, Pickup
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Automatic</p>
                        <p class="text-slate-500">
                            Hatch, Sedan, SUV, MUV, Coupe, Convert, Pickup
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">CVT</p>
                        <p class="text-slate-500">
                            Hatch, Sedan, SUV, MUV, Coupe, Convert, Pickup
                        </p>
                    </div>

                </div>
                
                <p class="text-slate-500">
                    Which transmission should I prefer ?
                </p>
                
            </div>

            @elseif($categorySlug == 'chairs')
            <div class="flex flex-col gap-3">
                <p class="font-medium">Material</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Wood</p>
                        <p class="text-slate-500">
                            Wing, Arm, Chaise, Rocking, Windsor, Folding, Club, Reclincer, Office, Director, Leader, Ball
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Steel</p>
                        <p class="text-slate-500">
                            Wing, Arm, Chaise, Rocking, Windsor, Folding, Club, Reclincer, Office, Director, Leader, Ball
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Plastic</p>
                        <p class="text-slate-500">
                            Wing, Arm, Chaise, Rocking, Windsor, Folding, Club, Reclincer, Office, Director, Leader, Ball
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which material should I prefer ?
                </p>
                
            </div>

            @elseif($categorySlug == 'cycles')
            <div class="flex flex-col gap-3">
                <p class="font-medium">Tire</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Standard</p>
                        <p class="text-slate-500">
                            700C - 25mm
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Road</p>
                        <p class="text-slate-500">
                            700C - 23mm - 32mm
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Hybrid</p>
                        <p class="text-slate-500">
                            700C - 32 mm
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which tire suits my bike ?
                </p>
                
            </div>

            @elseif($categorySlug == 'glasses')
            <div class="flex flex-col gap-3">
                <p class="font-medium">Lens</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Small</p>
                        <p class="text-slate-500">
                            50mm or less
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Medium</p>
                        <p class="text-slate-500">
                            51mm to 54mm
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Large</p>
                        <p class="text-slate-500">
                            Wider then 55mm 
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which lens is best for my eyes ?
                </p>
                
            </div>

            @elseif($categorySlug == 'houses')
            <div class="flex flex-col gap-3">
                <p class="font-medium">Living</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Standard</p>
                        <p class="text-slate-500">
                            3 rooms, 1 kitchen, 2 bathrooms and 1 garden / gallery
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Modern</p>
                        <p class="text-slate-500">
                            5 rooms, 2 kitchen, 2 bathrooms and 1 garden / gallery
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Luxury</p>
                        <p class="text-slate-500">
                            7 rooms, 3 kitchen, 3 bathrooms and 1 garden / gallery
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which living should I prefer ?
                </p>
                
            </div>

            @elseif($categorySlug == 'jwellery') 
            <div class="flex flex-col gap-3">
                <p class="font-medium">Carrat</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">24K</p>
                        <p class="text-slate-500">
                            Perfect weight for pure Gold
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">18K</p>
                        <p class="text-slate-500">
                            Jwellerty contains 75 percent Gold
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">6K</p>
                        <p class="text-slate-500">
                            Copper or Silver with 25 percent gold
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    How many Carrat should I buy ?
                </p>
                
            </div>
            @elseif($categorySlug == 'mobiles') 
            <div class="flex flex-col gap-3">
                <p class="font-medium">Screen</p>

                <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Common</p>
                        <p class="text-slate-500">
                            720 x 1280, most common mobile size
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">4.7" - 7.7"</p>
                        <p class="text-slate-500">
                            480 x 800, 640 x 1136, 720 x 1280 
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">7.7" - 9.7"</p>
                        <p class="text-slate-500">
                            750 x 1334, 1080 x 1920, and 1440 x 2560
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which screen size should I choose ?
                </p>
                
            </div>
            @elseif($categorySlug == 'paintings') 
            <div class="flex flex-col gap-3">
                <p class="font-medium">Canvas</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Small</p>
                        <p class="text-slate-500">
                            4 to 7 inches canvas
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Medium</p>
                        <p class="text-slate-500">
                            8 to 16 inches canvas
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Large</p>
                        <p class="text-slate-500">
                            18 to 48 inches canvas
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which canvas should I paint with ?
                </p>
                
            </div>
            @elseif($categorySlug == 'perfumes') 
            <div class="flex flex-col gap-3">
                <p class="font-medium">Bottle</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Small</p>
                        <p class="text-slate-500">
                           0.05 - 0.8 Fluid Ounces, 1.5 - 25 mL, 15 - 250 sprays
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Medium</p>
                        <p class="text-slate-500">
                           1 - 2 Fluid Ounces, 40 - 60 mL, 300 - 600 sprays
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Large</p>
                        <p class="text-slate-500">
                           2.5 - 3.4 Fluid Ons, 75 - 100 mL, 750 - 100 sprays
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which bottle should I Use ?
                </p>
                
            </div>
            @elseif($categorySlug == 'plants') 
            <div class="flex flex-col gap-3">
                <p class="font-medium">Family</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Seed</p>
                        <p class="text-slate-500">
                            Herbs, Shrubs, Trees, Climbers, and Creepers
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Ferns</p>
                        <p class="text-slate-500">
                            Herbs, Shrubs, Trees, Climbers, and Creepers
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Mosses</p>
                        <p class="text-slate-500">
                            Herbs, Shrubs, Trees, Climbers, and Creepers
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which family should I grow ?
                </p>
                
            </div>
            @elseif($categorySlug == 'shirts') 
            <div class="flex flex-col gap-3">
                <p class="font-medium">Size</p>

                <div class="flex flex-wrap gap-3">

                    <p class="w-14 h-14 flex items-center justify-center font-medium rounded border">XXS</p>
                    <p class="w-14 h-14 flex items-center justify-center font-medium rounded border">XS</p>
                    <p class="w-14 h-14 flex items-center justify-center font-medium rounded border">S</p>
                    <p class="w-14 h-14 flex items-center justify-center font-medium rounded border">M</p>
                    <p class="w-14 h-14 flex items-center justify-center font-medium rounded border">L</p>
                    <p class="w-14 h-14 flex items-center justify-center font-medium rounded border">XL</p>
                    <p class="w-14 h-14 flex items-center justify-center font-medium rounded border">2XL</p>
                    <p class="w-14 h-14 flex items-center justify-center font-medium rounded border">3XL</p>

                </div>

                <p class="text-slate-500">
                    Which size should I buy ?
                </p>
                
            </div>
            @elseif($categorySlug == 'toys') 
            <div class="flex flex-col gap-3">
                <p class="font-medium">Age</p>

                <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-3">

                    <div class="rounded p-3 border">
                        <p class="font-medium">Infants</p>
                        <p class="text-slate-500">
                            Things to drop, build, push, roll, pull and play with
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Toddlers</p>
                        <p class="text-slate-500">
                            Things to solve, build, create, music and throwing
                        </p>
                    </div>

                    <div class="rounded p-3 border">
                        <p class="font-medium">Kindergarten</p>
                        <p class="text-slate-500">
                            Things to talk, build, create, computer, music and share
                        </p>
                    </div>

                </div>

                <p class="text-slate-500">
                    Which age group to select ?
                </p>
                
            </div>
            @endif

            <div class="flex gap-3">
                <img src="{{asset('storage/images/web/check.png')}}" alt="Check Icon" class="w-7">
                <p class="text-slate-500">
                    In stock and ready to ship
                </p>
            </div>
            
            <div class="flex flex-col gap-3">

                <p class="font-medium">Delivery</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <div class="flex flex-col gap-1 rounded-lg border items-center p-2">
                        <img src="{{asset('storage/images/web/delivery.png')}}" alt="Delivery Icon" class="w-7">
                        <p class="font-medium">
                            Internationl Delivery
                        </p>
                        <p class="text-slate-500">
                            Get your order in a month
                        </p>
                    </div>

                    <div class="flex flex-col gap-1 rounded-lg border items-center py-2">
                        <img src="{{asset('storage/images/web/airplane.png')}}" alt="Airplane Icon" class="w-7">
                        <p class="font-medium">
                            Loyalty Reward
                        </p>
                        <p class="text-slate-500">
                            Take advantage of subscription
                        </p>
                    </div>
                    
                </div>
            
            </div>

            <form method="post" class="flex flex-col md:flex-row gap-3 mt-3">
                @csrf
                
                <button type="reset" class="text-white bg-black py-3 font-medium px-5 rounded md:w-1/2 text-center">
                    Add to Bag
                </button>

                
                <button type="reset" class="text-white bg-black py-3 font-medium px-5 rounded md:w-1/2 text-center">
                    Add to favoirte
                </button>

            </form>
            
            <div class="flex gap-1 self-center items-center">
                <img src="{{asset('storage/images/web/shield.png')}}" alt="Sheild Icon" class="w-7">
                <p class="text-slate-500">
                    Life Time Guarantee
                </p>
            </div>
        </aside>
        
    </article>

    <artile class="flex flex-col gap-10 p-5 items-center">

        <aside class="flex flex-col gap-5 md:w-3/4 w-full">
            <p class="text-xl font-medium text-center md:text-left ">
                Customer Reviews
            </p>

            <div class="flex flex-col md:flex-row items-center gap-3">

                <div class="flex items-center">
                    @for($i=0;$i < 5; $i++)
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">
                    @endfor
                </div>

                <p class="font-medium text-slate-500">
                    Based on 1642 reviews
                </p>
                
            </div>

            <div class="flex flex-col">

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg">5</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-10 rounded-full"></div>
                        <div class="col-span-2"></div>
                    </div>

                    <p class="">80%</p>
                </div>

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg">4</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-8 rounded-full"></div>
                        <div class="col-span-4"></div>
                    </div>

                    <p class="">60%</p>
                </div>

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg">3</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-6 rounded-full"></div>
                        <div class="col-span-6"></div>
                    </div>

                    <p class="">40%</p>
                </div>

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg">2</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-4 rounded-full"></div>
                        <div class="col-span-2"></div>
                    </div>

                    <p class="">20%</p>
                </div>

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg w-3">1</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-2 rounded-full"></div>
                        <div class="col-span-2"></div>
                    </div>

                    <p class="">10%</p>
                </div>
                
            </div>
            
        </aside>

        <aside class="flex flex-col gap-5 md:w-3/4 w-full">
            <div class="flex flex-col gap-1">
                <p class="text-lg font-medium">
                    Share your thoughts
                </p>
                <p class="text-slate-500">
                    If you have used this product, share your thoughts
                </p>

                <div class="mt-3 rounded px-5 py-3 font-medium border w-fit">
                    Write a review
                </div>
            </div>

            @foreach($product->reviews as $each)
            <div class="flex flex-col gap-3">
                
                <div class="flex items-center gap-3">
                    <img src="{{asset('storage/users/'.$each->user->image->title)}}" alt="{{$each->user->name}}" class="w-16 h-16 object-cover rounded-full">

                    <div class="flex flex-col gap-1">

                        <p class="font-medium">{{$each->user->name}}</p>
                        
                        <div class="flex items-center">
                            @for($i=0;$i < 5; $i++)
                            <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-5 h-5 object-contain">
                            @endfor
                        </div>
                    </div>
                </div>

                <p class="text-slate-500 text-lg tracking-tight">
                    {{$each->review}}
                </p>
            </div>
            @endforeach
            
        </aside>

    </artile>
    
</section>
@endsection