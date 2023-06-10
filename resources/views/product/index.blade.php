@extends('layout')
@section('main')
<section class="flex flex-col p-5">
    <a href="{{route('createProduct')}}" class="hidden">
        Add Your Product
    </a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">

        
        @for($i=0;$i< 12;$i++)
    
        <a href="#" class="flex flex-col rounded-lg overflow-hidden">
            
            <img src="{{asset('storage/images/web/shirt.jpg')}}" class="h-96 object-cover hover:brightness-110 transition-all duration-150 ease-in-out" alt="Shirt">
            
            <div class="flex flex-col gap-3 p-5 border rounded-lg hover:bg-slate-50  transition-all duration-150 ease-in-out">
                <h2 class="font-medium text-lg">
                    Basic 3 Pack Shirt
                </h2>
                
                <p class="text-slate-500">
                    The best shirt in the market that we have presented infront of your.
                </p>
                
                <div class="flex flex-col gap-1">
                    
                    <p class="text-slate-500">
                        41 reviews
                    </p>

                    <p class="italic text-slate-500">
                        8 colors
                    </p>
                    
                    <p class="text-lg font-medium lining-nums">
                        $256
                    </p>
                    
                </div>
            </div>
            
        </a>
        @endfor
    </div>
    
</section>
@endsection