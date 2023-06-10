@extends('../layout')
@section('main')
<main class="p-5 flex flex-col gap-10">

<section class="flex gap-5 items-center py-10 md:py-0">

    <aside class="flex flex-col gap-5 md:w-1/2 md:items-start items-center lg:pl-10">
        <h1 class="text-5xl font-bold text-center md:text-left">
            Focus what matters
        </h1>
        <p class="text-slate-500 md:w-4/5 text-center md:text-left">
            Best buyer experience is neccessary for a store to grow healthy with wealth.
        </p>

        <a href="{{route('productPage')}}" class="mt-10 px-5 py-3 font-medium text-white bg-black rounded">
            Shop Productivity
        </a>
    </aside>

    <img src="{{asset('storage/images/web/shop-p.jpg')}}" class="w-1/2 object-cover h-[40rem] rounded-lg hidden md:block" alt="Shop Productive">

</section>

<x-store.trending />

<x-store.reviews />

<x-store.category />

<section class="flex flex-col py-20 gap-5 items-center">

    <h1 class="text-5xl font-bold text-center">
        Level up your Game
    </h1>
    <p class="text-slate-500 md:w-4/5 text-center">
        Make your life beautiful and organized. Post a picture to social media and watch it get more likes than life-changing announcements. Reflect on the shallow nature of existence. At least you have a really nice desk setup.
    </p>

    <a href="#" class="mt-10 px-5 py-3 font-medium text-white bg-black rounded">
        Shop Workspace
    </a>

</section>

<x-store.collection />

<section class="flex flex-col py-20 gap-5 items-center">

    <h1 class="text-5xl font-bold text-center">
        Simple & Productive
    </h1>
    <p class="text-slate-500 md:w-4/5 text-center">
        Endless tasks, limited hours, a single piece of paper. Not really a haiku, but we're doing our best here. No kanban boards, burndown charts, or tangled flowcharts with our Focus system. Just the undeniable urge to fill empty circles.
    </p>

    <a href="#" class="mt-10 px-5 py-3 font-medium text-white bg-black rounded">
        Shop Focus
    </a>

</section>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    
    <a href="#">
        <article class="flex relative h-96 rounded-lg overflow-hidden">

            <img src="{{asset('storage/images/web/houses.jpg')}}" alt="New Arrivals And Houses" class="w-full h-full absolute top-0 object-cover">

            <div class="flex flex-col z-10 bg-black/20 hover:bg-black/10 transition duration-150 ease-in-out w-full h-full text-white items-end justify-end p-5">

                <h1 class="text-2xl font-bold">
                    New Arrivals
                </h1>
                <p class="font-medium">
                    Shop New
                </p>
                
            </div>

        </article>
    </a>
    
    <a href="#">
        <article class="flex relative h-96 rounded-lg overflow-hidden">

            <img src="{{asset('storage/images/web/jwellery.jpg')}}" alt="Jwellery" class="w-full h-full absolute top-0 object-cover">

            <div class="flex flex-col z-10 bg-black/20 hover:bg-black/10 transition duration-150 ease-in-out w-full h-full text-white items-end justify-end p-5">

                <h1 class="text-2xl font-bold">
                    Jwellers Fashion
                </h1>
                <p class="font-medium">
                    Shop New
                </p>
                
            </div>

        </article>
    </a>
    
    <a href="#">
        <article class="flex relative h-96 rounded-lg overflow-hidden">

            <img src="{{asset('storage/images/web/car-ship.jpg')}}" alt="Cars and Ships" class="w-full h-full absolute top-0 object-cover">

            <div class="flex flex-col z-10 bg-black/20 hover:bg-black/10 transition duration-150 ease-in-out w-full h-full text-white items-end justify-end p-5">

                <h1 class="text-2xl font-bold">
                    Wind And Sea
                </h1>
                <p class="font-medium">
                    Shop New
                </p>
                
            </div>

        </article>
    </a>
    
    <a href="#">
        <article class="flex relative h-96 rounded-lg overflow-hidden">

            <img src="{{asset('storage/images/web/art-design.jpg')}}" alt="Arts and Design" class="w-full h-full absolute top-0 object-cover">

            <div class="flex flex-col z-10 bg-black/20 hover:bg-black/10 transition duration-150 ease-in-out w-full h-full text-white items-end justify-end p-5">

                <h1 class="text-2xl font-bold">
                    Arts And Design
                </h1>
                <p class="font-medium">
                    Shop New
                </p>
                
            </div>

        </article>
    </a>
        
</section>

<section class="flex flex-col py-20 gap-5 items-center">

    <h1 class="text-5xl font-bold text-center">
        Long Term Thinking
    </h1>
    <p class="text-slate-500 md:w-4/5 text-center">
        We're committed to responsible, sustainable, and ethical manufacturing. Our small-scale approach allows us to focus on quality and reduce our impact. We're doing our best to delay the inevitable heat-death of the universe.
    </p>

    <a href="#" class="mt-10 px-5 py-3 font-medium text-white bg-black rounded">
        Read our story
    </a>

</section>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

    <article class="flex flex-col items-center gap-3">

        <img src="{{asset('storage/images/web/return.png')}}" alt="Return Icon" class="w-44">

        <p class="text-lg font-medium">
            Free Returns
        </p>
        
        <p class="text-slate-500 text-center">
            Not what you expected? Place it back in the parcel and attach the pre-paid postage stamp.
        </p>
        
    </article>

    <article class="flex flex-col items-center gap-3">

        <img src="{{asset('storage/images/web/calender.png')}}" alt="Calender Icon" class="w-44">

        <p class="text-lg font-medium">
            Same Day Delivery
        </p>
        
        <p class="text-slate-500 text-center">
            We offer a delivery service that has never been done before. Checkout today and receive your products within hours.
        </p>
        
    </article>

    <article class="flex flex-col items-center gap-3">

        <img src="{{asset('storage/images/web/discount.png')}}" alt="Discount Icon" class="w-44">

        <p class="text-lg font-medium">
            All Year Discount
        </p>
        
        <p class="text-slate-500 text-center">
            Looking for a deal? You can use the code "ALLYEAR" at checkout and get money off all year round.
        </p>
        
    </article>

    <article class="flex flex-col items-center gap-3">

        <img src="{{asset('storage/images/web/store.png')}}" alt="Store Icon" class="w-44">

        <p class="text-lg font-medium">
            Amazing Experience
        </p>
        
        <p class="text-slate-500 text-center">
            We love that our customers are satisfied with our services and care about attraction from people.
        </p>
        
    </article>
</section>
    
</main>
@endsection