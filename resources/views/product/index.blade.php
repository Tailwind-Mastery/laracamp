@extends('layout')
@section('main')
<section class="flex flex-col p-5">
    <a href="{{route('createProduct')}}" class="hidden">
        Add Your Product
    </a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">

        
        @for($i=0;$i< 12;$i++)
    
        <article class="flex flex-col rounded-lg overflow-hidden shadow">
            
            <img src="{{asset('storage/images/web/shirt.jpg')}}" class="h-96 object-cover hover:brightness-110 transition-all duration-150 ease-in-out" alt="Shirt">
            
            <div class="flex flex-col gap-2 p-5 hover:bg-slate-50 transition-all duration-150 ease-in-out">

                <aside class="flex justify-between mb-3">
                    <a href="#" class="font-medium text-lg">
                        Basic 3 Pack Shirt
                    </a>

                    <p class="text-lg font-medium lining-nums">
                        $256
                    </p>
                </aside>

                <p class="font-medium text-slate-500">
                    Clothes
                </p>
                                
                <p class="text-slate-500">
                    The best shirt in the market that we have presented infront of your.
                </p>
                
                <div class="flex gap-5 items-center justify-between">

                    <aside class="flex gap-2 items-center">
                        <img src="{{asset('storage/images/web/swatches.png')}}" alt="Swatch Icon" class="w-7">
                        
                        <div class="flex gap-2 cursor-pointer">
                            <span class="p-2 rounded-full bg-black"></span>
                            <span class="p-2 rounded-full bg-blue-500"></span>
                            <span class="p-2 rounded-full bg-red-500"></span>
                        </div>
                    </aside>

                    <aside class="flex gap-1 items-center">
                        <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-8">
                        <p class="font-medium text-lg">4.1</p>
                    </aside>
                    
                </div>

                <button class="bg-black text-white px-5 py-3 font-medium rounded">
                    Add to bag
                </button>

                    
            </div>
            
        </article>
        @endfor
    </div>
    
</section>
@endsection