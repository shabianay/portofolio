@extends('layouts.app')
@section('title', 'Portfolio - Shabian Arsyl Yonanta')
@section('content')
<section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-accent font-mono text-sm mb-2">My Work</p>
            <h1 class="section-title">A portfolio of projects demonstrating my knowledge and design flair.</h1>
            <div class="section-divider w-24 mx-auto mt-6"></div>
        </div>

            <div class="flex flex-wrap justify-center gap-4 mb-12" x-data="{ filter: 'all' }">
            @php
                $categories = \App\Models\Portfolio::whereNotNull('category')->distinct()->pluck('category');
            @endphp
            @foreach($categories as $cat)
            <button @click="filter = '{{ $cat }}'" :class="filter === '{{ $cat }}' ? 'bg-accent !text-dark' : ''" class="btn-accent !py-2 !px-6 !bg-transparent !text-white border border-custom hover:border-accent">{{ $cat }}</button>
            @endforeach
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6" x-data="{ filter: 'all' }">
            @foreach($portfolios as $portfolio)
            <div x-show="filter === 'all' || filter === '{{ $portfolio->category }}'" x-transition.duration.300ms>
                <a href="{{ route('portfolios.show', $portfolio->slug) }}" class="card overflow-hidden group block">
                    <div class="aspect-video bg-dark-2 overflow-hidden">
                        <img src="/storage/portfolio/{{ $portfolio->image ? str_replace('storage/portfolio/', '', $portfolio->image) : '' }}" alt="{{ $portfolio->title }}" class="w-full h-full object-contain bg-white transition duration-300" loading="lazy">
                    </div>
                    <div class="p-5">
                        <span class="text-xs text-accent font-mono">{{ $portfolio->category }}</span>
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
