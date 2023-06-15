@extends('../layout')
@section('main')
<main class="p-5 flex flex-col gap-10">

<x-layout.heading-screen url="{{route('storePage')}}" title="Focus what matters, Shop what you like, Fun you deserve" description="Best buyer experience is neccessary for a store to grow healthy with wealth" image="{{asset('storage/images/web/shop-p.jpg')}}" btnText="Shop Productivity"/>

<div class="flex flex-col gap-5">

    <div class="flex flex-col md:flex-row md:justify-between items-center gap-2">
        <p class="text-2xl font-medium">
            Featured Products
        </p>
        <a href="#" class="flex gap-1 items-center">
            <p class="text-slate-500">What's trending</p>
            <img src="{{asset('storage/images/web/left-arrow.svg')}}" class="w-5" alt="Left Arrow">
        </a>
    </div>
    
    <x-store.product-grid :products="$featured"/>
</div>

<x-store.reviews />

<x-layout.heading-screen url="{{route('storePage')}}" title="Level up your Game with amazing designers Choices" description="Simple & Productive Collections to boost your lifestyle. Make your life beautiful and organized. Reflect on the shallow nature of existence" image="{{asset('storage/images/web/shop-focus.jpg')}}" btnText="Shop Collection"/>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
    
    @foreach($collection as $each)
    <article class="flex relative h-96 rounded-lg overflow-hidden">
        
        <img src="{{asset('storage/collection/'.$each->image->title)}}" alt="$each->image->title" class="w-full h-full absolute top-0 object-cover">
        
        <div class="flex flex-col z-10 bg-black/20 hover:bg-black/10 transition duration-150 ease-in-out w-full h-full text-white items-end justify-end p-5">
            
            <a href="#" class="text-2xl font-bold">
                {{$each->title}}
            </a>
            <p class="text-xs text-right">
                {{$each->description}}
            </p>
            <p class="font-medium">
                Shop New
            </p>
            
        </div>

    </article>
    @endforeach
    
</section>

<x-layout.heading-screen url="{{route('storePage')}}" title="Long Term Thinking to provide better results" description="EWe're committed to responsible, sustainable, and ethical manufacturing. Our small-scale approach allows us to focus on quality and reduce our impact" image="{{asset('storage/images/web/our-story.jpg')}}" btnText="Read our story"/>
    
</main>
@endsection