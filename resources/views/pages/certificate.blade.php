@extends('layouts.app')
@section('title', 'Certificate - Shabian Arsyl')
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
                @php
                    $courses = [
                        ['title' => 'Build and Secure Networks in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'logo' => 'Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4962250'],
                        ['title' => 'Create and Manage Cloud Resources', 'provider' => 'Google Cloud Skill Boost', 'logo' => 'Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4958923'],
                        ['title' => 'Google Cloud Computing Foundations: Data, ML, and AI in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'logo' => 'Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4955691'],
                        ['title' => 'Perform Foundational Data, ML, and AI Tasks in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'logo' => 'Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4962963'],
                        ['title' => 'Perform Foundational Infrastructure Tasks in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'logo' => 'Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4959606'],
                        ['title' => 'Google Cloud Computing Foundations: Cloud Computing Fundamentals', 'provider' => 'Google Cloud Skill Boost', 'logo' => 'Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4885818'],
                        ['title' => 'Google Cloud Computing Foundations: Infrastructure in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'logo' => 'Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4905577'],
                        ['title' => 'Google Cloud Computing Foundations: Networking & Security in Google Cloud', 'provider' => 'Google Cloud Skill Boost', 'logo' => 'Logo-GCSB-150x150.png', 'url' => 'https://www.cloudskillsboost.google/public_profiles/ba4b4434-448a-474b-b16b-f1153201bb05/badges/4942534'],
                        ['title' => 'System Administration and IT Infrastructure Services', 'provider' => 'Coursera', 'logo' => 'LOGO-COURSERA-150x150.png', 'url' => 'https://www.coursera.org/account/accomplishments/certificate/6GQTAEP8B5MG'],
                        ['title' => 'The Bits and Bytes of Computer Networking', 'provider' => 'Coursera', 'logo' => 'LOGO-COURSERA-150x150.png', 'url' => 'https://www.coursera.org/account/accomplishments/certificate/DRWRWDUPDA6V'],
                        ['title' => 'Menjadi Google Cloud Engineer', 'provider' => 'Dicoding Indonesia', 'logo' => 'LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/JLX1WQ485P72'],
                        ['title' => 'Belajar Membuat Aplikasi Back-End untuk Pemula dengan Google Cloud', 'provider' => 'Dicoding Indonesia', 'logo' => 'LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/98XWV50DJPM3'],
                        ['title' => 'Belajar Dasar Pemrograman JavaScript', 'provider' => 'Dicoding Indonesia', 'logo' => 'LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/1OP816Q1VZQK'],
                        ['title' => 'Belajar Dasar Pemrograman Web', 'provider' => 'Dicoding Indonesia', 'logo' => 'LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/MRZMLG6M0XYQ'],
                        ['title' => 'Belajar Dasar Git dengan GitHub', 'provider' => 'Dicoding Indonesia', 'logo' => 'LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/0LZ090500Z65'],
                        ['title' => 'Memulai Dasar Pemrograman untuk Menjadi Pengembang Software', 'provider' => 'Dicoding Indonesia', 'logo' => 'LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/1RXY6V3E3ZVM'],
                        ['title' => 'Pengenalan ke Logika Pemrograman (Programming Logic 101)', 'provider' => 'Dicoding Indonesia', 'logo' => 'LOGO-DICODING-150x150.png', 'url' => 'https://www.dicoding.com/certificates/1OP80OM78XQK'],
                    ];
                @endphp
                @foreach($courses as $course)
                <a href="{{ $course['url'] }}" target="_blank" class="card p-5 group hover:border-accent transition">
                    <div class="flex items-center gap-3 mb-3">
                        <img src="/storage/portfolio/certs/{{ $course['logo'] }}" alt="{{ $course['provider'] }}" class="w-8 h-8 object-contain bg-white rounded p-1">
                        <span class="text-xs text-gray-500">{{ $course['provider'] }}</span>
                    </div>
                    <h5 class="font-semibold text-sm group-hover:text-accent transition">{{ $course['title'] }}</h5>
                </a>
                @endforeach
            </div>
        </div>

        <div class="border-t border-custom pt-12">
            <h4 class="text-xl font-semibold mb-8">Academic and non-academic certificates</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($certificates as $img)
                <a href="/storage/portfolio/certs/{{ $img }}" target="_blank" class="card overflow-hidden group">
                    <div class="aspect-video bg-dark-2 overflow-hidden">
                        <img src="/storage/portfolio/certs/{{ $img }}" alt="Certificate" class="w-full h-full object-contain bg-white transition duration-300" loading="lazy">
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
