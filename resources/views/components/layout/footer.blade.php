<footer class="flex flex-col md:px-10 px-5">

    <section class="flex flex-col xl:flex-row xl:items-center gap-10 py-10 border-t">

        <aside class="flex flex-wrap gap-5 md:justify-between justify-around w-full text-slate-500">

            <nav class="flex flex-col gap-3">
                <p class="font-medium text-black text-lg">Store</p>
                <a href="#" class="hover:text-black">New Arrivals</a>
                <a href="#" class="hover:text-black">Featured</a>
                <a href="#" class="hover:text-black">Best Sold</a>
                <a href="#" class="hover:text-black">Loved Ones</a>
                <a href="#" class="hover:text-black">Best Budget</a>
            </nav>

            <nav class="flex flex-col gap-3">
                <p class="font-medium text-black text-lg">Category</p>
                <a href="#" class="hover:text-black">Cars</a>
                <a href="#" class="hover:text-black">Clothes</a>
                <a href="#" class="hover:text-black">Boats</a>
                <a href="#" class="hover:text-black">Houses</a>
                <a href="#" class="hover:text-black">Shoes</a>
            </nav>

            <nav class="flex flex-col gap-3">
                <p class="font-medium text-black text-lg">Technology</p>
                <a href="#" class="hover:text-black">Phone</a>
                <a href="#" class="hover:text-black">Laptop</a>
                <a href="#" class="hover:text-black">Screens</a>
                <a href="#" class="hover:text-black">Headphones</a>
                <a href="#" class="hover:text-black">Speakers</a>
            </nav>

            <nav class="flex flex-col gap-3">
                <p class="font-medium text-black text-lg">Courses</p>
                <a href="#" class="hover:text-black">Top Skills</a>
                <a href="#" class="hover:text-black">Instructors</a>
                <a href="#" class="hover:text-black">Pricing</a>
                <a href="#" class="hover:text-black">Dashboard</a>
                <a href="#" class="hover:text-black">Profile</a>
            </nav>

            <nav class="flex flex-col gap-3">
                <p class="font-medium text-black text-lg">Jobs</p>
                <a href="#" class="hover:text-black">Expensive</a>
                <a href="#" class="hover:text-black">Popular</a>
                <a href="#" class="hover:text-black">Most Bids</a>
                <a href="#" class="hover:text-black">Fixed</a>
                <a href="#" class="hover:text-black">Hourly</a>
            </nav>

            <nav class="flex flex-col gap-3">
                <p class="font-medium text-black text-lg">Laracmap</p>
                <a href="#" class="hover:text-black">Services</a>
                <a href="#" class="hover:text-black">About</a>
                <a href="#" class="hover:text-black">Legal</a>
                <a href="#" class="hover:text-black">Contracts</a>
                <a href="#" class="hover:text-black">Company</a>
            </nav>

        </aside>

        <aside class="flex flex-col gap-3 w-fit">

            <p class="font-medium">
                Subscribe to our newsletter
            </p>

            <p class="text-slate-500">
                The latest news, articles and resources sent to your inbox weekly.
            </p>

            <div class="flex flex-col md:flex-row gap-2 md:items-center">
                <input type="text" class="rounded border px-4 py-3" placeholder="Enter your email">
                <button class="bg-black text-white py-3 px-5 font-medium rounded">
                    Subscribe
                </button>
            </div>

        </aside>
        
    </section>

    <section class="flex md:flex-row flex-col-reverse justify-between items-center gap-5 py-10 border-t">

        <p class="text-slate-500 text-center" x-data="{year: new Date().getFullYear()}">
            &copy; <span x-text="year"></span> Laracamp, Inc. All rights reserved.
        </p>

        <aside class="flex gap-5 items-center">
            <img src="{{asset('storage/images/web/facebook.png')}}" alt="Facebook Icon" class="w-8">
            <img src="{{asset('storage/images/web/instagram.png')}}" alt="Instagram Icon" class="w-8">
            <img src="{{asset('storage/images/web/twitter.png')}}" alt="Twitter Icon" class="w-8">
            <img src="{{asset('storage/images/web/github.png')}}" alt="Github Icon" class="w-8">
            <img src="{{asset('storage/images/web/youtube.png')}}" alt="Youtube Icon" class="w-8">
        </aside>
        
    </section>

</footer>