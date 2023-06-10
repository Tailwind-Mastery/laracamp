@extends('layout')
@section('main')
<main class="w-full flex bg-white lg:items-center lg:py-5">

    <form method="POST" action="{{route('postLogin')}}" class="flex flex-col gap-7 lg:w-1/2 p-5 md:p-10 w-full gap-10">

        @csrf

        <div class="flex flex-col gap-3">
                
            <h2 class="text-3xl font-bold">
                Sign in to your account
            </h2>

            <div class="flex gap-3">

                <p class="text-slate-500">
                    Not a member ?
                </p>
                
                <a href="{{route('registerPage')}}" class="font-medium">
                    Create an account !
                </a>
                
            </div>
            
        </div>

        @if($errors)
        <div class="flex flex-col">
            @foreach($errors->all() as $error)
            <p class="text-red-500">{{$error}}</p>
            @endforeach
        </div>
        @endif
        
        <div class="flex flex-col gap-3 items-start">
            
            <label for="email" class="font-medium cursor-pointer">
                Email Address
            </label>
            
            <input type="email" id="email" name="email" class="px-3 py-1 border rounded w-full" value="{{old('email')}}">
            
        </div>
        
        <div class="flex flex-col gap-3 items-start">

            <label for="password" class="font-medium cursor-pointer">
                Password
            </label>

            <input type="password" id="password" name="password" class="px-3 py-1 border rounded w-full">
            
        </div>
        
        <div class="flex gap-3 justify-between">
            
            <div class="flex gap-3 items-center" x-data="{value: 0}">
                
                <input type="checkbox" id="remember" x-model="value">

                <input type="hidden" name="remember" :value="value == true ? 1 : 0">
                
                <label for="remember" class="cursor-pointer">
                    Remember me
                </label>
                
            </div>
            
            <a href="#" class="font-medium">
                Forgot password ?
            </a>
            
        </div>
        
        <button type="submit" class="bg-black px-5 py-3 text-center font-medium text-white rounded">
            Sign in
        </button>
        
        <div class="border rounded flex justify-center relative my-5">
            <p class="font-medium absolute top-[-0.8rem] bg-white px-5">Or continue with</p>
        </div>
    
        <div class="grid grid-cols-1 md:grid-cols-2 md:flex-wrap gap-3 md:justify-between">
            
            <button class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                <img src="{{asset('storage/images/web/google.png')}}" alt="Google Icon" class="w-7">
                <span class="">Google</span>
            </button>
            
            <button class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                <img src="{{asset('storage/images/web/github.png')}}" alt="Github Icon" class="w-7">
                <span class="">Github</span>
            </button>
            
            <button class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                <img src="{{asset('storage/images/web/twitter.png')}}" alt="Twitter Icon" class="w-7">
                <span class="">Twitter</span>
            </button>
            
            <button class="flex items-center md:gap-5 gap-10 border px-5 py-3 font-medium rounded">
                <img src="{{asset('storage/images/web/facebook.png')}}" alt="Facebook Icon" class="w-7">
                <span class="">Facebook</span>
            </button>
            
        </div>
            
    </form>

    <img src="{{asset('storage/images/web/login.jpg')}}" alt="Landing Login" class="hidden lg:block object-cover w-1/2 h-[50rem] rounded-tl-lg rounded-bl-lg">

</main>
@endsection