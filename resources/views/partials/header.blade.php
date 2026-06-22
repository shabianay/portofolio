<header class="fixed top-0 left-0 right-0 z-50 bg-dark/90 backdrop-blur-md border-b border-custom" style="background-color: rgba(8,7,8,0.9);">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <a href="/" class="text-xl font-bold tracking-tight">
                <span class="text-accent">&lt;</span>
                <span class="text-white">Shabian</span>
                <span class="text-accent">/&gt;</span>
            </a>
            <div class="hidden lg:flex items-center gap-8" x-data>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('portfolios') }}" class="nav-link {{ request()->routeIs('portfolios*') ? 'active' : '' }}">Portfolio</a>
                <a href="{{ route('certificate') }}" class="nav-link {{ request()->routeIs('certificate') ? 'active' : '' }}">Certificate</a>
                <a href="{{ route('contact') }}" class="btn-accent !py-2 !px-5">Contact</a>
            </div>
            <button class="lg:hidden text-white text-2xl" x-data @click="$refs.mobileMenu.classList.toggle('hidden')" aria-label="Toggle navigation menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
        <div x-ref="mobileMenu" class="hidden lg:hidden pb-4 border-t border-custom pt-4">
            <div class="flex flex-col gap-3">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('portfolios') }}" class="nav-link">Portfolio</a>
                <a href="{{ route('certificate') }}" class="nav-link">Certificate</a>
                <a href="{{ route('contact') }}" class="btn-accent text-center mt-2">Contact</a>
            </div>
        </div>
    </nav>
</header>
