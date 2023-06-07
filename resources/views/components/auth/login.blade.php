<aside x-data class="w-full flex md:p-10 lg:p-0 md:justify-center lg:justify-start bg-gradient-to-b from-black/10 to-white" x-show="$store.web.loginModal" x-transition>

    <form method="POST" action="{{route('login')}}" class="flex w-full gap-10 md:w-fit lg:w-full items-center justify-center bg-white md:rounded lg:rounded-none pb-5">

        @csrf

        <div class="flex flex-col gap-7 lg:w-1/2 p-5 md:p-10 lg:p-16">
                
            <div class="flex flex-col gap-3">
                    
                <h2 class="text-3xl font-bold">
                    Sign in to your account
                </h2>

                <div class="flex gap-3">

                    <p class="text-slate-500">
                        Not a member ?
                    </p>
                    
                    <a href="#" class="font-medium">
                        Create an account !
                    </a>
                    
                </div>
                
            </div>
            
            <div class="flex flex-col gap-3 items-start">
                
                <label for="emailL" class="font-medium cursor-pointer">
                    Email Address
                </label>
                
                <input type="email" id="emailL" class="px-3 py-1 border rounded w-full">
                
            </div>
            
            <div class="flex flex-col gap-3 items-start">

                <label for="passwordL" class="font-medium cursor-pointer">
                    Password
                </label>

                <input type="password" id="passwordL" class="px-3 py-1 border rounded w-full">
                
            </div>
            
            <div class="flex gap-3 justify-between">
                
                <div class="flex gap-3 items-center">
                    
                    <input type="checkbox" name="remember" id="rememberL">
                    
                    <label for="rememberL" class="cursor-pointer">
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
            
        </div>

        <img src="{{asset('storage/images/web/green-fire.jpg')}}" alt="Landing Login" class="hidden lg:block object-cover w-1/2 h-full rounded-tl rounded-bl">
        
    </form>
</aside>