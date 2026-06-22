@extends('layouts.app')
@section('title', 'Certificate - Shabian Arsyl')
@section('meta_description', 'View certificates and credentials of Shabian Arsyl Yonanta including Google Cloud, Coursera, and Dicoding certifications.')
@section('meta_keywords', 'certificates, Google Cloud, Coursera, Dicoding, Shabian Arsyl, credentials')
@section('og_title', 'Certificates - Shabian Arsyl Yonanta')
@section('og_description', 'View certificates and credentials of Shabian Arsyl Yonanta.')
@section('content')
<section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-accent font-mono text-sm mb-2">Credentials</p>
            <h1 class="section-title">Every certificate, academic or not, is part of how I create meaningful work.</h1>
            <div class="section-divider w-24 mx-auto mt-6"></div>
        </div>

        <div class="mb-16">
            <h4 class="text-xl font-semibold mb-8">Certified Learning Journey (E-Course)</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                @foreach($courses as $course)
                <a href="{{ $course->url }}" target="_blank" rel="noreferrer" class="card p-5 group hover:border-accent transition">
                    <div class="flex items-center gap-3 mb-3">
                        <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->provider }}" class="w-10 h-10 object-contain" width="40" height="40">
                        <span class="text-xs text-gray-500">{{ $course->provider }}</span>
                    </div>
                    <h5 class="font-semibold text-sm group-hover:text-accent transition">{{ $course->title }}</h5>
                </a>
                @endforeach
            </div>
        </div>

        <div class="border-t border-custom pt-12">
            <h4 class="text-xl font-semibold mb-8">Academic and non-academic certificates</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($certificates as $cert)
                <a href="{{ asset('storage/' . $cert->image) }}" target="_blank" rel="noreferrer" class="card overflow-hidden group">
                    <div class="aspect-video bg-dark-2 overflow-hidden">
                        <img src="{{ asset('storage/' . $cert->image) }}" alt="{{ $cert->title }}" class="w-full h-full object-contain bg-white transition duration-300" loading="lazy" width="640" height="360">
                    </div>
                </a>
                @endforeach
            </div>
            <div class="mt-10">
                {{ $certificates->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
