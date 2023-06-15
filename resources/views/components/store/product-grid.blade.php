<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

@foreach($products as $each)
<article class="">

    <article class="flex flex-col gap-3">
        
        <img src="{{asset('storage/products/'.$each->image->title)}}" alt="{{$each->slug}}" class="transition duration-150 ease-in-out hover:brightness-110 object-cover w-full h-56 md:h-96 rounded-lg">
        
        <div class="flex flex-col items-center gap-1 p-5 transition duration-150 ease-in-out hover:bg-slate-50 rounded-lg">
            
            <p class="text-sm">
                {{$each->category->title}}
            </p>

            <a href="{{route('showProduct', ['categorySlug'=> $each->category->slug, 'productSlug' => $each->slug]) }}">
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