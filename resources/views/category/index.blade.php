@extends('../layout')
@section('main')
<main class="p-5 flex flex-col gap-10">

<section class="flex flex-col py-20 gap-5 items-center">

    <h1 class="text-5xl font-bold text-center">
        What do you like
    </h1>
    <p class="text-slate-500 md:w-4/5 text-center">
        Explore multiple categories, browse through our collections and search for the best you like. 
    </p>
    <p class="text-lg font-medium">
        Total Products 567
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

<section class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">

@foreach($categories as $category)

<aside class="flex items-end relative h-96 rounded overflow-hidden">
    <img src="{{asset('storage/category/'.$category->image->title)}}" alt="Bag Category" class="object-cover w-full h-full transition duration-150 ease-in-out hover:brightness-110 absolute top-0">
    <div class="flex flex-col gap-1 z-10 bg-black/70 w-full text-white p-3">
        <div class="flex items-center gap-2">
            <a href="{{route('showCategory', ['slug' => $category->slug])}}" class="font-medium text-xl">
                {{$category->title}}
            </a>
            <img src="{{asset('storage/images/web/arrow-left-w.svg')}}" alt="Left Arrow" class="w-7">
        </div>
        <p class="">
            80 Products
        </p>
        <p class="">
            {{$category->description}}
        </p>
    </div>
</aside>
@endforeach
    
</section>
    
</main>
@endsection