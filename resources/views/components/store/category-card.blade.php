<article class="flex flex-col rounded-lg overflow-hidden shadow">
    <img src="{{$image}}" alt="Car Category" class="transition duration-150 ease-in-out hover:brightness-110 object-cover h-56 md:h-96 w-full">

    <div class="flex flex-col gap-1 p-3">
        <a href="{{$url}}" class="text-xl uppercase font-semibold tracking-wide">
            {{$title}}
        </a>
        <p class="text-slate-500">
            {{$description}}
        </p>
    </div>
</article>