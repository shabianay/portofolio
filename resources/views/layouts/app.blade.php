<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'Portfolio Shabian Arsyl Yonanta - Junior Web Developer, WordPress Developer & UI/UX Designer. Crafting digital experiences with clean code and creative design.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Shabian Arsyl Yonanta, portfolio, web developer, WordPress, UI/UX designer, Laravel, PHP, Surabaya')">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="/favicon.png">
    <title>@yield('title', 'Portfolio Shabian Arsyl Yonanta')</title>

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', 'Portfolio Shabian Arsyl Yonanta')">
    <meta property="og:description" content="@yield('og_description', 'Junior Web Developer, WordPress Developer & UI/UX Designer. Crafting digital experiences with clean code and creative design.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:image" content="@yield('og_image', url('/favicon.png'))">
    <meta property="og:site_name" content="Shabian Arsyl Yonanta">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Portfolio Shabian Arsyl Yonanta')">
    <meta name="twitter:description" content="@yield('og_description', 'Junior Web Developer, WordPress Developer & UI/UX Designer.')">
    <meta name="twitter:image" content="@yield('og_image', url('/favicon.png'))">

    {{-- Preconnect --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --color-dark: #080708;
            --color-dark-2: #151415;
            --color-light: #ffffff;
            --color-accent: #d8fe00;
            --color-border: #272627;
            --color-text: #ffffff;
        }
        * { scrollbar-width: thin; scrollbar-color: var(--color-accent) var(--color-dark-2); }
        body { background-color: var(--color-dark); color: var(--color-text); font-family: 'Inter', sans-serif; }
        .bg-dark-2 { background-color: var(--color-dark-2); }
        .bg-dark { background-color: var(--color-dark); }
        .bg-accent { background-color: var(--color-accent); }
        .text-accent { color: var(--color-accent); }
        .border-custom { border-color: var(--color-border); }
        .btn-accent { background-color: var(--color-accent); color: var(--color-dark); border-radius: 9999px; padding: 0.75rem 2rem; font-weight: 600; transition: all 0.3s; }
        .btn-accent:hover { opacity: 0.85; transform: translateY(-2px); box-shadow: 0 0 25px rgba(216,254,0,0.3); }
        .section-title { font-size: 2.25rem; font-weight: 700; letter-spacing: -0.02em; }
        .section-subtitle { color: #a0a0a0; }
        .card { background-color: var(--color-dark-2); border: 1px solid var(--color-border); border-radius: 1rem; transition: all 0.3s; }
        .card:hover { border-color: var(--color-accent); transform: translateY(-4px); }
        .nav-link { color: #a0a0a0; font-weight: 500; transition: color 0.3s; position: relative; }
        .nav-link:hover, .nav-link.active { color: var(--color-accent); }
        .nav-link::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: var(--color-accent); transition: width 0.3s; }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }
        .gradient-text { background: linear-gradient(135deg, var(--color-accent), #a0ff00); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .section-divider { height: 1px; background: linear-gradient(90deg, transparent, var(--color-accent), transparent); }
        @media (max-width: 768px) { .section-title { font-size: 1.75rem; } }

        .skip-link {
            position: absolute;
            top: -100%;
            left: 0;
            z-index: 1000;
            padding: 0.5rem 1rem;
            background: var(--color-accent);
            color: var(--color-dark);
            font-weight: 600;
            transition: top 0.2s;
        }
        .skip-link:focus {
            top: 0;
        }
        *:focus-visible {
            outline: 2px solid var(--color-accent);
            outline-offset: 2px;
        }
        button:focus-visible, a:focus-visible {
            outline: 2px solid var(--color-accent);
            outline-offset: 2px;
        }
        img {
            color: transparent;
        }
    </style>
    @stack('styles')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"></noscript>
</head>
<body class="antialiased">
    <a href="#main-content" class="skip-link">Skip to main content</a>
    @include('partials.header')
    <main id="main-content">
        @yield('content')
    </main>
    @include('partials.footer')
    @stack('scripts')
</body>
</html>
