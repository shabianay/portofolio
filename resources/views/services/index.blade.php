@extends('layouts.app')
@section('title', 'Services - Portfolio Shabian')
@section('content')
<section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-accent font-mono text-sm mb-2">What I Offer</p>
            <h1 class="section-title">I offer customized services designed to meet your unique needs</h1>
            <div class="section-divider w-24 mx-auto mt-6"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php
                $allServices = [
                    ['num' => '01', 'title' => 'Visual Design', 'desc' => 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form.'],
                    ['num' => '02', 'title' => 'Digital Branding', 'desc' => 'Creating comprehensive brand identities that resonate with your target audience and stand out in the digital landscape.'],
                    ['num' => '03', 'title' => 'Art Direction', 'desc' => 'Providing creative direction and visual storytelling to elevate your brand\'s presence across all media channels.'],
                    ['num' => '04', 'title' => 'UX Research', 'desc' => 'Conducting thorough user research to understand behaviors, needs, and motivations through observation and feedback.'],
                    ['num' => '05', 'title' => 'E-Commerce', 'desc' => 'Building robust online stores with seamless checkout experiences and optimized product presentations.'],
                    ['num' => '06', 'title' => 'Product Design', 'desc' => 'Designing digital products that balance user needs with business goals for maximum impact and usability.'],
                ];
            @endphp
            @foreach($allServices as $svc)
            <div class="card p-8 group">
                <span class="text-5xl font-bold text-gray-600 group-hover:text-accent transition">{{ $svc['num'] }}</span>
                <h3 class="text-2xl font-semibold mt-4 group-hover:text-accent transition">{{ $svc['title'] }}</h3>
                <p class="text-gray-400 mt-3 leading-relaxed">{{ $svc['desc'] }}</p>
                <a href="#" class="inline-block mt-4 text-accent text-sm font-medium hover:underline">Learn more →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
