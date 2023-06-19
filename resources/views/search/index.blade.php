@extends('layout')
@section('main')
<section class="flex flex-col gap-5 md:gap-10 p-5 md:p-10">

    <article class="flex flex-col gap-5 items-center my-10">
        <h2 class="text-5xl font-bold tracking-wide">
            Search What you love
        </h2>
        <p class="text-slate-500">
            Love to have products you wish for, Go ahead and search for a pleasent item
        </p>
    </article>

    <article class="flex gap-5">

        <aside class="flex">

            <div class="flex flex-col">

                <p class="font-medium mb-3">
                    Category
                </p>
                
                @foreach($categories as $each)
                <div class="flex items-center gap-3">
                    <input type="checkbox" name="{{$each->slug}}" id="{{$each->slug}}">    
                    <label for="{{$each->slug}}" class="cursor-pointer">{{$each->title}}</label>
                </div>
                @endforeach

            </div>
            
        </aside>

        <aside class="flex">

            <div class="flex flex-col">

                <p class="font-medium mb-3">
                    Size
                </p>
                
                @foreach($categories as $each)
                <div class="flex items-center gap-3">
                    <input type="checkbox" name="{{$each->slug}}" id="{{$each->slug}}">    
                    <label for="{{$each->slug}}" class="cursor-pointer">{{$each->title}}</label>
                </div>
                @endforeach

            </div>
            
        </aside>
        
    </article>
    
</section>
@endsection