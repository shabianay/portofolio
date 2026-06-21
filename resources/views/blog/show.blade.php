@extends('layouts.app')
@section('title', $post->title . ' - Blog')
@section('content')
<article class="pt-32 pb-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('blog') }}" class="text-accent text-sm hover:underline mb-8 inline-block">← Back to Blog</a>
        <div class="aspect-video rounded-2xl overflow-hidden border border-custom mb-10">
            <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
        </div>
        <div class="flex items-center gap-3 text-sm text-gray-500 mb-4">
            <span class="text-accent font-mono">{{ $post->category }}</span>
            <span>·</span>
            <span>{{ $post->published_at->format('M d, Y') }}</span>
            <span>·</span>
            <span>{{ $post->user->name }}</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ $post->title }}</h1>
        <div class="text-gray-300 leading-relaxed space-y-4">
            {{ nl2br(e($post->body)) }}
        </div>
    </div>
</article>
@endsection
