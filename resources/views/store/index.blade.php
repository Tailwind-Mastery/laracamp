@extends('../layout')
@section('main')
<main class="p-5 flex flex-col gap-10">

<x-layout.heading-screen url="{{route('storePage')}}" title="Focus what matters, Shop what you like, Fun you deserve" description="Best buyer experience is neccessary for a store to grow healthy with wealth" image="{{asset('storage/images/web/shop-p.jpg')}}" btnText="Shop Productivity"/>

<x-store.trending />

<x-store.reviews />

<x-layout.heading-screen url="{{route('storePage')}}" title="Level up your Game with amazing designers Choices" description="Make your life beautiful and organized. Post a picture to social media and watch it get more likes than life-changing announcements. Reflect on the shallow nature of existence" image="{{asset('storage/images/web/level-up.jpg')}}" btnText="Shop Workspace"/>

<x-store.collection />

<x-layout.heading-screen url="{{route('storePage')}}" title="Simple & Productive Collections to boost your lifestyle" description="Endless tasks, limited hours, a single piece of paper. Not really a haiku, but we're doing our best here. No kanban boards, burndown charts, or tangled flowcharts with our Focus system" image="{{asset('storage/images/web/shop-focus.jpg')}}" btnText="Shop Focus"/>

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

<x-layout.heading-screen url="{{route('storePage')}}" title="Long Term Thinking to provide better results" description="EWe're committed to responsible, sustainable, and ethical manufacturing. Our small-scale approach allows us to focus on quality and reduce our impact" image="{{asset('storage/images/web/our-story.jpg')}}" btnText="Read our story"/>


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