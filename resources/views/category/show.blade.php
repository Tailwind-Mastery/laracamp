@extends('../layout')
@section('main')
<main class="p-5 flex flex-col gap-10">

<section class="flex flex-col py-20 gap-5 items-center">

    <h1 class="text-5xl font-bold text-center">
        {{ucfirst($slug)}}
    </h1>
    <p class="text-slate-500 md:w-4/5 text-center">
        Explore multiple products, browse through our collections of {{$slug}} and search for the best you like. 
    </p>
    <p class="text-lg font-medium">
        Total Products {{$products_count}}
    </p>

    <form method="get" class="flex mt-10 rounded shadow overflow-hidden md:w-1/2 divide-x">
        <div class="flex gap-1 p-3 w-full">
            <label for="search">
                <img src="{{asset('storage/images/web/search.svg')}}" alt="Search Icon" class="w-7">
            </label>
            <input type="text" id="search" name="search" class=" outline-none w-full" value="{{request()->get('search')}}">
        </div>

        <button type="submit" class="px-5 py-3 font-medium hover:text-white hover:bg-black">
            Search
        </button>
    </form>

</section>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10">

@foreach($products as $each)
<article class="">

    <article class="flex flex-col gap-3">
        
        <img src="{{asset('storage/'.$slug.'/'.$each->image->title)}}" alt="{{$each->slug}}" class="transition duration-150 ease-in-out hover:brightness-110 object-cover w-full h-56 rounded-lg">
        
        <div class="flex flex-col items-center gap-1 p-5 transition duration-150 ease-in-out hover:bg-slate-50 rounded-lg">
            
            <p class="text-sm">
                {{$category->title}}
            </p>

            <a href="{{--route('showCategory', ['slug' => $category->slug])--}}">
                <div class="flex items-center gap-2">
                    <p class="text-lg font-medium">
                        {{$each->title}}
                    </p>
                    <img src="{{asset('storage/images/web/arrow-left-b.svg')}}" alt="Left Arrow" class="w-7">
                </div>
            </a>

            <p class="font-medium">
                ${{$each->price}}
            </p>

            <div class="flex gap-3 mt-5 cursor-pointer">

                <span class="rounded-full bg-black p-2"></span>
                <span class="rounded-full bg-blue-500 p-2"></span>
                <span class="rounded-full bg-red-500 p-2"></span>
                
            </div>
        </div>

    </article>
</article>

@endforeach
    
</section>
    
</main>
@endsection