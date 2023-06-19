<header class="flex flex-col gap-5 px-5 py-3 border-b" x-data="{
    open: false,
    toggle() {this.open = !this.open}
}">

    <div class="flex justify-between">

        <nav class="flex gap-1">
            <a href="{{route('homePage')}}" class="@if(url()->current() == route('homePage')) font-medium @endif">Laracamp</a>
        </nav>

        <nav class="hidden lg:flex gap-2">
            
            <a href="{{route('storePage')}}" class="@if(url()->current() == route('storePage')) font-medium @endif">Store</a>

            <a href="{{route('categoryPage')}}" class="@if(url()->current() == route('categoryPage')) font-medium @endif">Category</a>

            <a href="{{route('searchPage')}}" class="@if(url()->current() == route('searchPage')) font-medium @endif">Search</a>
            @auth
            <a href="{{route('cartPage')}}" class="@if(url()->current() == route('cartPage')) font-medium @endif">Cart</a>
            @endauth
            
        </nav>

        <nav class="gap-2 hidden lg:flex">
            
            @guest
            <a href="{{route('loginPage')}}" class="@if(url()->current() == route('loginPage')) font-medium @endif">Login</a>

            <a href="{{route('registerPage')}}" class="@if(url()->current() == route('registerPage')) font-medium @endif">Register</a>
            
            @endguest

            @auth
            <form method="POST" action="{{route('postLogout')}}">
                @csrf <button>Logout</button>
            </form>
            @endauth
            
        </nav>

        <button class="lg:hidden" @click="toggle()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        
    </div>

    <aside class="flex flex-col lg:hidden" x-show="open" x-transition>
        <div class="flex flex-col gap-1 py-2">

            <a href="{{route('storePage')}}" class="@if(url()->current() == route('storePage')) font-medium @endif">Store</a>
            <a href="{{route('categoryPage')}}" class="@if(url()->current() == route('categoryPage')) font-medium @endif">Category</a>
            <a href="{{route('searchPage')}}" class="@if(url()->current() == route('searchPage')) font-medium @endif">Search</a>
            @auth
            <a href="{{route('cartPage')}}" class="@if(url()->current() == route('cartPage')) font-medium @endif">Cart</a>
            @endauth

        </div>
        
        @guest
        <div class="flex gap-1 flex-col border-t py-2">
            
            <a href="{{route('loginPage')}}" class="@if(url()->current() == route('loginPage')) font-medium @endif">Login</a>
            <a href="{{route('registerPage')}}" class="@if(url()->current() == route('registerPage')) font-medium @endif">Register</a>
            
        </div>
        @endguest

    </aside>

</header>