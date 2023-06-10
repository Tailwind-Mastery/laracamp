<header class="flex justify-between px-5 py-3 border-b" x-data="{}">
    <nav class="flex gap-1">
        <a href="{{route('home')}}" class="">Laracamp</a>
        <a href="{{route('storePage')}}" class="">Store</a>
        @auth
        @endauth
    </nav>
    <nav class="flex gap-2 flex-wrap hidden">
        
        @guest
        <a href="{{route('loginPage')}}" class="">Login</a>
        <a href="{{route('registerPage')}}" class="">Register</a>
        @endguest
        
        
        @auth
        <!-- <a href="{{route('productPage')}}" class="">Products</a> -->
        <!-- <a href="{{route('profilePage')}}" class="">Profile</a> -->
        <form method="POST" action="{{route('postLogout')}}">
            @csrf <button>Logout</button>
        </form>
        @endauth
        
    </nav>

    <button class="" @click="">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>

</header>