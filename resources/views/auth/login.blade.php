@extends('layout')
@section('main')
<main class="w-full flex bg-white lg:items-center lg:py-5">

    <form method="POST" action="{{route('postLogin')}}" class="flex flex-col gap-7 lg:w-1/2 p-5 md:p-10 lg:p-16 w-full gap-10">

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
        
        <div class="flex gap-3">
            
            <button class="bg-black px-5 py-3 text-center font-medium text-white rounded w-1/2">
                Google
            </button>
            

            <button class="bg-black px-5 py-3 text-center font-medium text-white rounded w-1/2">
                Github
            </button>

        </div>
            
        
    </form>

    <img src="{{asset('storage/images/web/green-fire.jpg')}}" alt="Landing Login" class="hidden lg:block object-cover w-1/2 h-full rounded-tl rounded-bl">

</main>
@endsection