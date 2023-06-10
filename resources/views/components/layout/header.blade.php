<header class="flex justify-between px-5 py-3 border-b">
    <nav class="flex gap-1">
        <a href="{{route('home')}}" class="">Home</a>
        <a href="{{route('storePage')}}" class="">Store</a>
        @auth
        @endauth
    </nav>
    <nav class="flex gap-2 flex-wrap">
        
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
</header>