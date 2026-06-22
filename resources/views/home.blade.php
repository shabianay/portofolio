@extends('layouts.app')
@section('title', 'Shabian Arsyl Yonanta - Web Developer & UI/UX Designer')
@section('meta_description', 'Portfolio Shabian Arsyl Yonanta - Junior Web Developer, WordPress Developer & UI/UX
    Designer. Crafting digital experiences with clean code and creative design.')
@section('meta_keywords', 'Shabian Arsyl, portfolio, web developer, WordPress, UI/UX designer, Laravel, PHP, Surabaya')
@section('og_title', 'Shabian Arsyl Yonanta - Web Developer & UI/UX Designer')
@section('og_description', 'Junior Web Developer, WordPress Developer & UI/UX Designer. Crafting digital experiences
    with clean code and creative design.')
@section('content')
    {{-- Hero --}}
    <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-accent/5 to-transparent pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-accent font-mono text-sm mb-2">Hello, I am</p>
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight">Shabian Arsyl</h1>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-400 mt-2" x-data="{ roles: ['Web Developer', 'WordPress Developer', 'UI/UX Designer', 'Product Digital Designer'], current: 0 }"
                        x-init="setInterval(() => current = (current + 1) % roles.length, 2000)">
                        <span x-text="roles[current]" class="text-accent"></span>
                    </h2>
                    <h1 class="text-4xl md:text-6xl font-bold mt-2 italic">Yonanta S.Tr.Kom</h1>
                    <p class="mt-6 text-lg text-gray-400 leading-relaxed max-w-xl">
                        I'm a <strong class="text-white">Junior Website & WordPress Developer</strong> with a strong passion
                        for UI/UX design. I turn ideas into responsive, user-centered websites blending code, creativity,
                        and communication.
                    </p>
                    <div class="flex flex-wrap gap-4 mt-8">
                        <a href="{{ route('portfolios') }}" class="btn-accent">View Portfolio</a>
                        <a href="{{ route('contact') }}"
                            class="btn-accent !bg-transparent !text-white border border-custom hover:border-accent">Contact
                            Me</a>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square rounded-2xl overflow-hidden border border-custom max-w-md mx-auto">
                        <img src="{{ asset('storage/portfolio/shabian-profile-6a38887f811e0.webp') }}" alt="Shabian Arsyl Yonanta"
                            class="w-full h-full object-cover" width="500" height="500" loading="eager">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-accent font-mono text-sm mb-2">Services</p>
                <h2 class="section-title">Personalized solutions built around what makes your needs unique.</h2>
                <div class="section-divider w-24 mx-auto mt-6"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @php
                    $homeServices = [
                        [
                            'num' => '01',
                            'title' => 'Web Developer',
                            'desc' =>
                                'Transforming design ideas into fully functional, user-friendly websites is what I do best.',
                        ],
                        [
                            'num' => '02',
                            'title' => 'WordPress Developer',
                            'desc' => 'I create flexible, scalable WordPress sites optimized for performance and SEO.',
                        ],
                        [
                            'num' => '03',
                            'title' => 'Product Digital Designer',
                            'desc' =>
                                'I connect business goals with user needs to design meaningful product experiences.',
                        ],
                        [
                            'num' => '04',
                            'title' => 'UI/UX Designer',
                            'desc' =>
                                'Designing user-centered experiences that feel natural, functional, and memorable.',
                        ],
                    ];
                @endphp
                @foreach ($homeServices as $svc)
                    <div class="card p-8 group">
                        <span
                            class="text-5xl font-bold text-gray-600 group-hover:text-accent transition">{{ $svc['num'] }}</span>
                        <h3 class="text-2xl font-semibold mt-4 group-hover:text-accent transition">{{ $svc['title'] }}</h3>
                        <p class="text-gray-400 mt-3 leading-relaxed">{{ $svc['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Portfolio Highlights --}}
    @if (isset($portfolios) && $portfolios->count())
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <p class="text-accent font-mono text-sm mb-2">Portfolio Highlights</p>
                    <h2 class="section-title">A portfolio of projects demonstrating my knowledge and design flair.</h2>
                    <div class="section-divider w-24 mx-auto mt-6"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($portfolios as $portfolio)
                        <a href="{{ route('portfolios.show', $portfolio->slug) }}" class="card overflow-hidden group">
                            <div class="aspect-video bg-dark-2 overflow-hidden">
                                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    loading="lazy" width="640" height="360">
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mt-1 group-hover:text-accent transition">
                                    {{ $portfolio->title }}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="text-center mt-10">
                    <a href="{{ route('portfolios') }}" class="btn-accent">View All Projects</a>
                </div>
            </div>
        </section>
    @endif

    {{-- The Story So Far --}}
    <section class="py-20 border-t border-custom">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-accent font-mono text-sm mb-2">The Story So Far</p>
                <h2 class="section-title">Discover the mindset and principles that shape my work.</h2>
                <div class="section-divider w-24 mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr] gap-8 items-stretch mb-8">
                <div class="card p-8 flex flex-col justify-between">
                    <div>
                        <p class="text-accent font-mono text-sm mb-2">Hello, I am</p>
                        <h3 class="text-3xl md:text-4xl font-bold leading-tight">Shabian Arsyl</h3>
                        <h3 class="text-3xl md:text-4xl font-bold italic text-gray-400">Yonanta S.Tr.Kom</h3>
                        <div class="border-t border-custom mt-6 pt-5">
                            <div class="flex items-center justify-between gap-4">
                                <span class="text-gray-500">Working since</span>
                                <span class="font-semibold text-accent">2023</span>
                            </div>
                        </div>
                        <div class="border-t border-custom mt-5 pt-5">
                            <p class="text-gray-500 mb-2">Introduction</p>
                            <p class="text-gray-300 leading-relaxed text-justify">I merge design thinking with technical
                                skills to build responsive WordPress websites, craft user-focused interfaces, and deliver
                                meaningful digital experiences. With a passion for both aesthetics and functionality, I help
                                bring ideas to life whether it's a custom website, intuitive UI/UX, or a visual concept that
                                speaks.</p>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="btn-accent inline-block text-center mt-8 w-fit">Discover More</a>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <div class="card p-6">
                        <h4 class="text-xl font-semibold mb-5">Work Experience</h4>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark border border-custom">
                                <img src="/storage/portfolio/wp/logo_TSI_white-removebg-preview.png" alt="The Solution ID"
                                    class="w-12 h-12 object-contain bg-white rounded p-1">
                                <div>
                                    <h5 class="font-semibold">Full Time Freelancing @The Solution ID</h5>
                                    <p class="text-xs text-gray-500">Feb 2023 - Current</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark border border-custom">
                                <img src="/storage/portfolio/wp/channels4_profile-removebg-preview-e1749042810174.png"
                                    alt="Bangkit Academy" class="w-12 h-12 object-contain bg-white rounded p-1">
                                <div>
                                    <h5 class="font-semibold">Cloud Computing & UI/UX Designer @Bangkit Academy</h5>
                                    <p class="text-xs text-gray-500">Aug 2023 - Jan 2024</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark border border-custom">
                                <img src="/storage/portfolio/wp/soca_ai_logo-removebg-preview.png" alt="SOCA AI"
                                    class="w-12 h-12 object-contain bg-white rounded p-1">
                                <div>
                                    <h5 class="font-semibold">Back End Developer @SOCA AI</h5>
                                    <p class="text-xs text-gray-500">Feb - Jun 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-6">
                        <h4 class="text-xl font-semibold mb-5">Education</h4>
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-dark border border-custom">
                            <img src="/storage/portfolio/wp/Group-3-1-150x150.png" alt="UNESA"
                                class="w-12 h-12 object-contain bg-white rounded p-1">
                            <div>
                                <h5 class="font-semibold">Bachelor of Applied Computer Science @Surabaya State University
                                </h5>
                                <p class="text-xs text-gray-500 mb-2">GPA 3.86/4.00</p>
                                <p class="text-sm text-gray-400"><strong>Thesis (Diploma):</strong> <a
                                        href="https://ejournal.unesa.ac.id/index.php/jurnal-manajemen-informatika/article/view/60964"
                                        target="_blank" class="text-accent underline">Web-Based Decision Support System
                                        for Mental Health Screening Using AHP Method.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="card p-8 text-center">
                    <span class="text-4xl font-bold text-accent">2+</span>
                    <p class="text-gray-500 mt-2">Years of experience</p>
                </div>
                <div class="card p-8 text-center">
                    <span class="text-4xl font-bold text-accent">55+</span>
                    <p class="text-gray-500 mt-2">Projects completed</p>
                </div>
                <div class="card p-8 text-center">
                    <span class="text-4xl font-bold text-accent">99.9%</span>
                    <p class="text-gray-500 mt-2">Client retention rate</p>
                </div>
            </div>

        </div>
    </section>

    {{-- Partners --}}
    <section class="py-20 border-t border-custom">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-accent font-mono text-sm mb-2">The Partners</p>
                <h2 class="section-title">Discover the partnerships that empower</h2>
                <div class="section-divider w-24 mx-auto mt-6"></div>
            </div>
            @php
                $partners = [
                    ['Lateevadinamika', 'Group-17-6a3889d289aa8.webp'],
                    ['Vokasi UNESA', 'Logo-vokasi-unesa-6a3889d37c48a.webp'],
                    ['UPN Jatim', 'Group-17-1-6a3889d257a5b.webp'],
                    ['Masa Depan Hukum', 'Group-15-2-6a3889d213dce.webp'],
                    ['RS Sampang', 'Group-22-6a3889d2d8ed8.webp'],
                    ['Arsip Surat', 'Group-15-3-6a3889d228366.webp'],
                    ['Berdonor', 'Group-16-1-6a3889d241efc.webp'],
                    ['Shellfish', 'Logo-Shellfish-6a3889d352cae.webp'],
                    ['SMN TAX', 'SMN-TAX-6a3889d38d579.webp'],
                    ['Cibrievco', 'Group-17-2-6a3889d26e39f.webp'],
                    ['Sepatu Andalas', 'Group-18-6a3889d29eb15.webp'],
                    ['UD Sumber Bangunan', 'Group-19-1-6a3889d2b0bf3.webp'],
                    ['Koepilihanku', 'Group-20-6a3889d2c52d5.webp'],
                    ['Mindful', 'Logo-Mindful-2-6a3889d32a7bc.webp'],
                    ['Serenity', 'Group-23-6a3889d2edf0e.webp'],
                    ['Sibatur', 'Logo-Sibatur-6a3889d368a33.webp'],
                    ['Bismika Interior', 'Logo-Bismika-Interior-6a3889d3108ac.webp'],
                    ['Seroom.id', 'Logo-Seroom.id_-6a3889d33e1a4.webp'],
                ];
            @endphp
            <div x-data="{ active: 0, total: {{ ceil(count($partners) / 3) }} }" x-init="setInterval(() => active = (active + 1) % total, 2500)" class="relative overflow-hidden">
                <div class="flex transition-transform duration-700 ease-in-out"
                    :style="`transform: translateX(-${active * 100}%)`">
                    @foreach (array_chunk($partners, 3) as $group)
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 min-w-full">
                            @foreach ($group as $partner)
                                <div
                                    class="bg-dark-2 border border-custom rounded-2xl flex items-center justify-center h-80 p-8">
                                    <img src="/storage/portfolio/partners/{{ $partner[1] }}" alt="{{ $partner[0] }}"
                                        class="max-h-64 max-w-full object-contain">
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center gap-2 mt-6">
                    @for ($i = 0; $i < ceil(count($partners) / 3); $i++)
                        <button type="button" @click="active = {{ $i }}"
                            class="w-3 h-3 rounded-full transition"
                            :class="active === {{ $i }} ? 'bg-accent' : 'bg-gray-600'"></button>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 border-t border-custom">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="section-title">Let's Work Together</h2>
            <p class="text-gray-400 mt-4 max-w-lg mx-auto">Have a project in mind? Let's discuss how we can bring your
                ideas to life.</p>
            <a href="{{ route('contact') }}" class="btn-accent inline-block mt-8">Get in Touch</a>
        </div>
    </section>
@endsection
