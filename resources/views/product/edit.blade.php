@extends('layout')
@section('main')
<main class="">

    <section class="flex lg:flex-row flex-col w-full gap-10 py-10">

        <div class="flex flex-col gap-3 lg:w-2/6">

            <h2 class="text-xl font-medium">
                Profile
            </h2>

            <p class="">
                This information will be shared publicly so be careful.
            </p>

        </div>

        <form method="POST" action="{{route('updateProfile')}}"  class="flex flex-col lg:w-4/6 md:rounded-lg md:border">

            @csrf
            @method('PATCH')

            <div class="flex flex-col gap-10 md:p-10 ">

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="website" class="font-medium cursor-pointer">
                        Website
                    </label>
                    
                    <input type="text" id="website" class="px-3 py-1 border rounded w-full" placeholder="https://website.com">
                    
                </div>

                <div class="flex flex-col gap-3 items-start">
                    
                    <label for="about" class="font-medium cursor-pointer">
                        About
                    </label>
                    
                    <textarea name="about" id="about" rows="7" class="px-3 py-1 border rounded w-full" placeholder="Hi !"></textarea>

                    <p class="text-sm">
                        Write a few sentences about yourself
                    </p>
                    
                </div>

                <div class="flex flex-col gap-3 md:items-start">
                    
                    <label class="font-medium cursor-pointer">
                        Photo
                    </label>

                    <div class="flex md:flex-row flex-col gap-3 items-center">
                        <img src="{{asset('storage/images/web/user-placeholder.svg')}}" alt="User Placeholder" class="w-20">

                        <input type="file" name="" class="text-slate-500 file:rounded file:bg-black file:text-white file:border-none file:px-3 file:py-1 file:font-medium file:mr-3 cursor-pointer file:cursor-pointer">

                    </div>
                    
                </div>

                <div class="flex flex-col gap-3 md:items-start">
                    
                    <label class="font-medium cursor-pointer">
                        Cover Photo
                    </label>

                    <div class="flex md:flex-row flex-col gap-3 items-center">

                        <img src="{{asset('storage/images/web/image-placeholder.svg')}}" alt="Image Placeholder" class="w-40">

                        <input type="file" name="" class="text-slate-500 file:rounded file:bg-black file:text-white file:border-none file:px-3 file:py-1 file:font-medium file:mr-3 cursor-pointer file:cursor-pointer">

                    </div>

                </div>
                
            </div>

            <div class="flex md:justify-end justify-center items-center gap-5 p-5 font-medium border-t mt-5 ">
                <button type="reset">Cancel</button>
                <button type="submit" class="text-white bg-black px-3 py-1 rounded">Save</button>
            </div>

        </form>

    </section>
    
</main>
@endsection