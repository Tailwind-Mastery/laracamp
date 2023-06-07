<header class="flex justify-between px-5 py-3" x-data>
    <nav>
        <a href="{{route('home')}}" class="">Home</a>
    </nav>
    <nav class="flex gap-2">
        <button class="" @click="$store.web.toggleLogin()">Login</button>
        <button class="" @click="$store.web.toggleRegister()">Register</button>
    </nav>
</header>