@extends('layout')
@section('main')
<main class="w-full flex bg-white lg:items-center lg:py-5">

    <form method="POST" action="{{route('postRegister')}}" class="flex flex-col gap-7 lg:w-1/2 p-5 md:p-10 lg:p-16 w-full gap-10">

        @csrf

        <div class="flex flex-col gap-3">
                
            <h2 class="text-3xl font-bold">
                Create your new account
            </h2>

            <div class="flex gap-3">

                <p class="text-slate-500">
                    Already a member ?
                </p>
                
                <a href="{{route('loginPage')}}" class="font-medium">
                    Sign in  !
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
        
        <div class="flex flex-col gap-3 items-start">

            <label for="username" class="font-medium cursor-pointer">
                Username
            </label>

            <input type="text" id="username" name="username" class="px-3 py-1 border rounded w-full" value="{{old('username')}}">
            
        </div>
        
        <button type="submit" class="bg-black px-5 py-3 text-center font-medium text-white rounded">
            Sign up
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

    <img src="{{asset('storage/images/web/blue-fire.jpg')}}" alt="Landing Register" class="hidden lg:block object-cover w-1/2 h-full rounded-tl rounded-bl">

</main>
@endsection