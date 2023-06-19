@extends('layout')
@section('main')
<section class="flex flex-col">


    <article class="flex flex-col gap-5 p-5 md:p-10">

        <div class="flex gap-3 text-slate-500">
            <a href="{{route('showCategory', ['slug' => $product->category->slug])}}">{{$product->category->title}}</a>
            <p>/</p>
            <p class="font-medium">{{$product->title}}</p>
        </div>

        <h1 class="text-2xl md:text-3xl font-semibold">
            {{$product->title}}
        </h1>

        <div class="flex gap-3 items-center">
            <p class="text-xl font-medium border-r pr-2">${{$product->price}}</p>
            <div class="flex gap-1">
                <p class="font-semibold">4.7</p>
                <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7">
            </div>
            <p class="text-slate-500 font-medium">1624 Reviews</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-5 items-center" x-data="{
                changeImage(e) {
                    $refs.myImage.src = e.target.src
                }
            }">

            <img src="{{asset('storage/products/'.$product->image->title)}}" alt="{{$product->title}}" class="object-cover w-full lg:w-3/4 h-96 md:h-[40rem] lg:h-[50rem] xl:h-[60rem] rounded" x-ref="myImage">

            <div class="overflow-auto scrollbar w-full lg:w-72 lg:h-[50rem] xl:h-[60rem]">

                <div class="flex lg:items-center flex-row lg:flex-col gap-5 min-w-max">
                    
                    @foreach($allProducts->products as $each)
                    <img src="{{asset('storage/products/'.$each->image->title)}}" alt="{{$each->image->title}}" class="object-cover w-44 h-44 rounded cursor-pointer" @click="changeImage">
                    @endforeach
                    
                </div>
            </div>
                
        </div>
        
        <div class="flex flex-col divide-y md:w-3/4 border rounded-lg" x-data="{open:false, toggle(){this.open=!this.open}}">
            <div class="flex justify-between gap-3 p-3  cursor-pointer" @click="toggle()">
                <p class="font-medium">Owner</p>
                <img src="{{asset('storage/images/web/info.png')}}" alt="Info Icon" class="w-7">
            </div>
            <div class="flex flex-col md:flex-row gap-5 md:items-center justify-center p-3" x-transition x-show="open">
                <div class="flex flex-col gap-1">
                    <h2 class="text-lg font-medium mt-1">
                        {{$product->user->name}}
                    </h2>
                    <p class="text-slate-500">
                        I hope you like my product
                    </p>
                </div>

                <img src="{{asset('storage/users/'.$product->user->image->title)}}" alt="{{$product->user->name}}" class="w-full md:w-1/2 object-cover rounded">
            </div>
            

        </div>
        
        <div class="flex flex-col divide-y md:w-3/4 border rounded-lg" x-data="{open:false, toggle(){this.open=!this.open}}">
            <div class="flex justify-between gap-3 p-3  cursor-pointer" @click="toggle()">
                <p class="font-medium">Highlits</p>
                <img src="{{asset('storage/images/web/info.png')}}" alt="Info Icon" class="w-7">
            </div>
            <p class="text-slate-500 p-3" x-transition x-show="open">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quisquam, labore voluptatibus adipisci porro laborum, repellat veritatis quod facere, rerum numquam placeat ullam alias architecto sint eum itaque delectus ipsum ut perferendis? Cupiditate.
            </p>

        </div>

        <div class="flex flex-col divide-y md:w-3/4 border rounded-lg" x-data="{open:false, toggle(){this.open=!this.open}}">
            <div class="flex justify-between gap-3 p-3  cursor-pointer" @click="toggle()">
                <p class="font-medium">Details</p>
                <img src="{{asset('storage/images/web/info.png')}}" alt="Info Icon" class="w-7">
            </div>
            <p class="text-slate-500 p-3" x-transition x-show="open">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quisquam, labore voluptatibus adipisci porro laborum, repellat veritatis quod facere, rerum numquam placeat ullam alias architecto sint eum itaque delectus ipsum ut perferendis? Cupiditate.
            </p>

        </div>

        <div class="flex flex-col divide-y md:w-3/4 border rounded-lg" x-data="{open:false, toggle(){this.open=!this.open}}">
            <div class="flex justify-between gap-3 p-3  cursor-pointer" @click="toggle()">
                <p class="font-medium">License</p>
                <img src="{{asset('storage/images/web/info.png')}}" alt="Info Icon" class="w-7">
            </div>
            <p class="text-slate-500 p-3" x-transition x-show="open">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quisquam, labore voluptatibus adipisci porro laborum, repellat veritatis quod facere, rerum numquam placeat ullam alias architecto sint eum itaque delectus ipsum ut perferendis? Cupiditate.
            </p>

        </div>

        <div class="flex flex-col gap-3">
            <p class="font-medium">Color</p>

            <div class="flex flex-wrap gap-3 items-center">

                <p class="rounded-lg p-4 bg-black"></p>
                <p class="rounded-lg p-4 border"></p>
                <p class="rounded-lg p-4 bg-slate-700"></p>
                <p class="rounded-lg p-4 bg-red-700"></p>
                <p class="rounded-lg p-4 bg-green-700"></p>
                <p class="rounded-lg p-4 bg-blue-700"></p>
                <p class="rounded-lg p-4 bg-orange-700"></p>

            </div>

            <p class="text-slate-500">
                Which color favours me ?
            </p>
            
        </div>

        <div class="flex flex-col gap-3">
            <p class="font-medium">{{$product->category->group[0]['group_title']}}</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3" x-data="{
                items: [],
                getFocus(e){
                    if(!this.items.includes(e.target.id)){
                        this.items.push(e.target.id);
                    } else {
                        this.items = this.items.filter((item, pos)=> {
                            return item != e.target.id
                        })
                    }
                }
            }">
                <input type="hidden" name="groups" x-model="items">
                @foreach($product->category->group as $each)

                <div class="rounded p-3 border cursor-pointer" x-data="{focus:false}" :class="focus ? 'outline' : ''" @click="(e)=>{focus=!focus; getFocus(e)}" id="{{$each->id}}">
                    <p class="font-medium" id="{{$each->id}}">
                        {{$each->title}}
                    </p>
                    <p class="text-slate-500" id="{{$each->id}}">
                        {{$each->description}}
                    </p>
                </div>

                @endforeach
            </div>

            <p class="text-slate-500">
                {{$product->category->group[0]['description']}}
            </p>
            
        </div>

        <div class="flex gap-3">
            <img src="{{asset('storage/images/web/check.png')}}" alt="Check Icon" class="w-7">
            <p class="text-slate-500">
                In stock and ready to ship
            </p>
        </div>
        
        <div class="flex flex-col gap-3">

            <p class="font-medium">Delivery</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                <div class="flex flex-col gap-1 rounded-lg border items-center p-2">
                    <img src="{{asset('storage/images/web/delivery.png')}}" alt="Delivery Icon" class="w-7">
                    <p class="font-medium">
                        International Delivery
                    </p>
                    <p class="text-slate-500">
                        Get your order in a month
                    </p>
                </div>

                <div class="flex flex-col gap-1 rounded-lg border items-center py-2">
                    <img src="{{asset('storage/images/web/airplane.png')}}" alt="Airplane Icon" class="w-7">
                    <p class="font-medium">
                        Loyalty Reward
                    </p>
                    <p class="text-slate-500">
                        Take advantage of subscription
                    </p>
                </div>
                
            </div>
        
        </div>

        <form method="post" class="flex flex-col md:flex-row gap-3 mt-3">
            @csrf
            
            <button type="reset" class="text-white bg-black py-3 font-medium px-5 rounded md:w-1/2 text-center">
                Add to Bag
            </button>

            
            <button type="reset" class="text-white bg-black py-3 font-medium px-5 rounded md:w-1/2 text-center">
                Add to favoirte
            </button>

        </form>
        
        <div class="flex gap-1 self-center items-center">
            <img src="{{asset('storage/images/web/shield.png')}}" alt="Sheild Icon" class="w-7">
            <p class="text-slate-500">
                Life Time Guarantee
            </p>
        </div>
        
    </article>

    <article class="flex flex-col gap-10 p-5 items-center">

        <aside class="flex flex-col gap-5 md:w-3/4 w-full">
            <p class="text-xl font-medium text-center md:text-left ">
                Customer Reviews
            </p>

            <div class="flex flex-col md:flex-row items-center gap-3">

                <div class="flex items-center">
                    @for($i=0;$i < 5; $i++)
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">
                    @endfor
                </div>

                <p class="font-medium text-slate-500">
                    Based on 1642 reviews
                </p>
                
            </div>

            <div class="flex flex-col">

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg">5</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-10 rounded-full"></div>
                        <div class="col-span-2"></div>
                    </div>

                    <p class="">80%</p>
                </div>

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg">4</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-8 rounded-full"></div>
                        <div class="col-span-4"></div>
                    </div>

                    <p class="">60%</p>
                </div>

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg">3</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-6 rounded-full"></div>
                        <div class="col-span-6"></div>
                    </div>

                    <p class="">40%</p>
                </div>

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg">2</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-4 rounded-full"></div>
                        <div class="col-span-2"></div>
                    </div>

                    <p class="">20%</p>
                </div>

                <div class="flex gap-3 items-center">
                    <p class="font-medium text-lg w-3">1</p>
                    <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-7 h-7 object-contain">

                    <div class="grid grid-cols-12 rounded-full w-full h-4 overflow-hidden">
                        <div class="bg-yellow-400 col-span-2 rounded-full"></div>
                        <div class="col-span-2"></div>
                    </div>

                    <p class="">10%</p>
                </div>
                
            </div>
            
        </aside>

        <aside class="flex flex-col gap-5 md:w-3/4 w-full">
            <div class="flex flex-col gap-1">
                <p class="text-lg font-medium">
                    Share your thoughts
                </p>
                <p class="text-slate-500">
                    If you have used this product, share your thoughts
                </p>

                <div class="mt-3 rounded px-5 py-3 font-medium border w-fit">
                    Write a review
                </div>
            </div>

            @foreach($product->reviews as $each)
            <div class="flex flex-col gap-3">
                
                <div class="flex items-center gap-3">
                    <img src="{{asset('storage/users/'.$each->user->image->title)}}" alt="{{$each->user->name}}" class="w-16 h-16 object-cover rounded-full">

                    <div class="flex flex-col gap-1">

                        <p class="font-medium">{{$each->user->name}}</p>
                        
                        <div class="flex items-center">
                            @for($i=0;$i < 5; $i++)
                            <img src="{{asset('storage/images/web/star.png')}}" alt="Star Icon" class="w-5 h-5 object-contain">
                            @endfor
                        </div>
                    </div>
                </div>

                <p class="text-slate-500 text-lg tracking-tight">
                    {{$each->review}}
                </p>
            </div>
            @endforeach
            
        </aside>

    </article>

    <article class="flex flex-col gap-5 p-5 md:p-10">

        <h2 class="font-medium text-lg">
            Customers Also Purchased
        </h2>

        <aside class="grid md:grid-cols-3 grid-cols-1 gap-5 md:gap-10">

            @foreach($allProducts->products as $each)
            @if($each->id == $product->id) @continue @endif

            <div class="flex flex-col gap-3">

                <div class="flex relative rounded-xl overflow-hidden">
                    <img src="{{asset('storage/products/'.$each->image->title)}}" alt="{{$each->image->title}}" class="object-cover w-full h-60">

                    <div class="flex w-full h-full bg-gradient-to-b from-white/10 via-black/20 to-black/90 absolute top-0 left-0 items-end justify-end p-5">
                        <p class="text-white font-medium">
                            ${{$each->price}}
                        </p>
                    </div>
                </div>

                <div class="flex flex-col">
                    <p class="font-medium">
                        {{$each->title}}
                    </p>

                    <p class="text-slate-500 text-sm">
                        {{$allProducts->title}}
                    </p>
                </div>

                <button class="bg-black text-white text-center py-2 rounded font-medium text-sm">
                    Add to bag
                </button>
                
            </div>

            @endforeach

        </aside>
    </article>
    
</section>
@endsection