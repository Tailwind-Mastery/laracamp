@extends('../layout')
@section('main')
<main class="p-5 flex flex-col gap-10">

<section class="flex flex-col py-20 gap-5 items-center">

    <div class="flex gap-3 text-slate-500">
        <a href="{{route('categoryPage')}}">Categories</a>
        <p>/</p>
        <p class="font-medium">{{$category->title}}</p>
    </div>

    <h1 class="text-5xl font-bold text-center">
        {{$category->title}}
    </h1>
    <p class="text-slate-500 md:w-4/5 text-center">
        Explore multiple products, browse through our collections of {{$category->title}} and search for the best you like. 
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

<x-store.product-grid :products="$products"/>

</main>
@endsection