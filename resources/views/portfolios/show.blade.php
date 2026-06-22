@extends('layouts.app')
@section('title', $portfolio->title . ' - Portfolio')
@section('meta_description', Str::limit(strip_tags($portfolio->description), 160))
@section('meta_keywords', $portfolio->title . ', web development, portfolio, Shabian Arsyl')
@section('og_title', $portfolio->title . ' - Shabian Arsyl Yonanta')
@section('og_description', Str::limit(strip_tags($portfolio->description), 160))
@section('og_image', $portfolio->image ? url('storage/' . $portfolio->image) : url('/favicon.png'))
@section('og_type', 'article')
@section('content')
<section class="pt-32 pb-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('portfolios') }}" class="text-accent text-sm hover:underline mb-8 inline-block">← Back to Portfolio</a>
        <div class="aspect-video rounded-2xl overflow-hidden border border-custom mb-10">
            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-full object-contain bg-white" width="800" height="450">
        </div>
        <h1 class="text-3xl md:text-4xl font-bold mt-2 mb-6">{{ $portfolio->title }}</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
            @if($portfolio->client)
            <div class="card p-4">
                <p class="text-xs text-gray-500">Client</p>
                <p class="text-sm font-semibold mt-1">{{ $portfolio->client }}</p>
            </div>
            @endif
            @if($portfolio->completion_date)
            <div class="card p-4">
                <p class="text-xs text-gray-500">Completed</p>
                <p class="text-sm font-semibold mt-1">{{ $portfolio->completion_date->format('M Y') }}</p>
            </div>
            @endif
            @if($portfolio->url)
            <div class="card p-4">
                <p class="text-xs text-gray-500">Live URL</p>
                <a href="{{ $portfolio->url }}" target="_blank" rel="noreferrer" class="text-sm font-semibold mt-1 text-accent hover:underline inline-block">Visit Site →</a>
            </div>
            @endif
        </div>
        <div class="text-gray-300 leading-relaxed space-y-4">
            {{ nl2br(e($portfolio->description)) }}
        </div>
    </div>
</section>
@endsection
