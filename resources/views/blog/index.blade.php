@extends('layouts.app')
@section('title', 'Blog - Shabian Arsyl')
@section('content')
<section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-accent font-mono text-sm mb-2">Thoughts & Insights</p>
            <h1 class="section-title">Blog</h1>
            <p class="section-subtitle mt-3">Articles about development, design, and technology</p>
            <div class="section-divider w-24 mx-auto mt-6"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="card overflow-hidden group">
                <div class="aspect-video bg-dark-2 overflow-hidden">
                    <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" loading="lazy">
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-500">
                        <span class="text-accent font-mono">{{ $post->category }}</span>
                        <span>·</span>
                        <span>{{ $post->published_at->format('M d, Y') }}</span>
                    </div>
                    <h3 class="text-lg font-semibold mt-2 group-hover:text-accent transition line-clamp-2">{{ $post->title }}</h3>
                    <p class="text-gray-400 text-sm mt-2 line-clamp-2">{{ $post->excerpt }}</p>
                </div>
            </a>
            @endforeach
        </div>
        <div class="mt-10">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection
