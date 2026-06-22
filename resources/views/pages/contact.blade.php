@extends('layouts.app')
@section('title', 'Contact - Shabian Arsyl')
@section('meta_description', 'Get in touch with Shabian Arsyl Yonanta for web development, WordPress, or UI/UX design projects.')
@section('meta_keywords', 'contact Shabian Arsyl, hire web developer, WordPress freelancer, UI/UX designer contact')
@section('og_title', 'Contact - Shabian Arsyl Yonanta')
@section('og_description', 'Get in touch with Shabian Arsyl Yonanta for web development and design projects.')
@section('content')
<section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-accent font-mono text-sm mb-2">Get in Touch</p>
            <h1 class="section-title">Contact Me</h1>
            <p class="section-subtitle mt-3">Have a project or question? Let's talk.</p>
            <div class="section-divider w-24 mx-auto mt-6"></div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-4xl mx-auto">
            <div class="space-y-6">
                <div class="card p-6 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center">
                        <span class="text-accent text-lg">✉</span>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Email</p>
                        <p class="text-sm font-semibold">shabianarsyl@gmail.com</p>
                    </div>
                </div>
                <div class="card p-6 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center">
                        <span class="text-accent text-lg">📍</span>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Location</p>
                        <p class="text-sm font-semibold">Indonesia</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('contact.send') }}" method="POST" class="card p-8 space-y-5">
                @csrf
                @if (session('success'))
                    <div class="bg-green-500 text-white p-3 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="bg-red-500 text-white p-3 rounded-md">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div>
                    <label for="name" class="block text-sm font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full bg-dark border border-custom rounded-xl px-4 py-3 text-white focus:outline-none focus:border-accent transition" placeholder="Your name">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full bg-dark border border-custom rounded-xl px-4 py-3 text-white focus:outline-none focus:border-accent transition" placeholder="your@email.com">
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required class="w-full bg-dark border border-custom rounded-xl px-4 py-3 text-white focus:outline-none focus:border-accent transition" placeholder="Subject of your message">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium mb-2">Message</label>
                    <textarea id="message" name="message" required rows="5" class="w-full bg-dark border border-custom rounded-xl px-4 py-3 text-white focus:outline-none focus:border-accent transition" placeholder="Tell me about your project...">{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn-accent w-full">Send Message</button>
            </form>
        </div>
    </div>
</section>
@endsection
