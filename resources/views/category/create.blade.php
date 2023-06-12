@extends('layout')
@section('main')
<main class="flex lg:flex-row flex-col w-full gap-10 py-10 p-5">

        <div class="flex flex-col gap-3 lg:w-2/6">

            <h2 class="text-xl font-medium">
                Add your Category
            </h2>

            <p class="">
                Create your category with great Title.
            </p>

            <p class="">
                A unique slug. 
            </p>

            <p class="">
                A clear jpg, png thumbnail image. 
            </p>

            <p class="">
                Images will be refreshed after validation error. 
            </p>

            <p class="">
                Your category will process thorugh our validation checks to ensure value for users. 
            </p>

            @if($errors)
                @foreach($errors->all() as $error)
                <p class="text-red-500">{{$error}}</p>
                @endforeach
            @endif

        </div>

        <form method="POST" action="{{route('storeCategory')}}"  class="flex flex-col lg:w-4/6 md:rounded-lg md:border" enctype="multipart/form-data">

            @csrf

            <div class="flex flex-col gap-10 md:p-10 ">

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="title" class="font-medium cursor-pointer">
                        Title
                    </label>
                    
                    <input type="text" name="title" id="title" class="px-3 py-1 border rounded w-full" placeholder="My Category" value="{{old('title')}}">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="slug" class="font-medium cursor-pointer">
                        Slug
                    </label>
                    
                    <input type="text" name="slug" id="slug" class="px-3 py-1 border rounded w-full" placeholder="Unique Category" value="{{old('slug')}}">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="description" class="font-medium cursor-pointer">
                        Description
                    </label>
                    
                    <input type="text" name="description" id="description" class="px-3 py-1 border rounded w-full" placeholder="Category Description" value="{{old('description')}}">
                    
                </div>

                <div class="flex flex-col gap-3 md:items-start">
                    
                    <label class="font-medium cursor-pointer">
                        Thumbnail
                    </label>

                    <div class="flex md:flex-row flex-col gap-3 items-center">

                        <img src="{{asset('storage/images/web/image-placeholder.svg')}}" alt="Image Placeholder" class="w-40">

                        <input type="file" name="thumbnail" class="text-slate-500 file:rounded file:bg-black file:text-white file:border-none file:px-3 file:py-1 file:font-medium file:mr-3 cursor-pointer file:cursor-pointer">

                    </div>

                </div>

            </div>

            <div class="flex md:justify-end justify-center items-center gap-5 p-5 font-medium border-t mt-5 ">
                <button type="reset">Cancel</button>
                <button type="submit" class="text-white bg-black px-3 py-1 rounded">Add</button>
            </div>

        </form>

</main>
@endsection