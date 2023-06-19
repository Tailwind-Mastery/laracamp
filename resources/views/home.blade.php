@extends('layout')
@section('main')
<section class="">
    <x-layout.heading-screen url="{{route('homePage')}}" title="PHP Laravel, Intertia, Vue, Nuxt, React, Next and Tailwind CSS" description="Build your Application with the most Popular, Highly Scalable and Performant Frameworks" image="{{asset('storage/images/web/home.jpg')}}" btnText="Get Started"/>
</section>
@endsection