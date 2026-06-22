@extends('layouts.app')
@section('title', 'Portfolio - Shabian Arsyl Yonanta')
@section('meta_description', 'Explore the portfolio of Shabian Arsyl Yonanta showcasing web development, WordPress, and UI/UX design projects.')
@section('meta_keywords', 'portfolio, web development projects, WordPress websites, UI/UX design portfolio, Shabian Arsyl')
@section('og_title', 'Portfolio - Shabian Arsyl Yonanta')
@section('og_description', 'Explore web development, WordPress, and UI/UX design projects by Shabian Arsyl Yonanta.')
@section('content')
<section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-accent font-mono text-sm mb-2">My Work</p>
            <h1 class="section-title">A portfolio of projects demonstrating my knowledge and design flair.</h1>
            <div class="section-divider w-24 mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
            @foreach($portfolios as $portfolio)
            <div>
                <a href="{{ route('portfolios.show', $portfolio->slug) }}" class="card overflow-hidden group block">
                    <div class="aspect-video bg-dark-2 overflow-hidden">
                        <img src="{{ $portfolio->image ? asset('storage/' . $portfolio->image) : '' }}" alt="{{ $portfolio->title }}" class="w-full h-full object-contain bg-white transition duration-300" loading="lazy" width="640" height="360">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold mt-1 group-hover:text-accent transition">{{ $portfolio->title }}</h3>
                        <p class="text-gray-400 text-sm mt-2 line-clamp-2">{{ str($portfolio->description)->limit(100) }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="mt-10">
            {{ $portfolios->links() }}
        </div>
    </div>
</section>
@endsection
