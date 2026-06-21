<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/favicon.png">
    <title>@yield('title', 'Portfolio Shabian Arsyl Yonanta')</title>
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
    </style>
    @stack('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @stack('scripts')
</body>
</html>
