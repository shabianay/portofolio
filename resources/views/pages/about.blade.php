@extends('layouts.app')
@section('title', 'About Me - Portfolio Shabian')
@section('content')
<section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-accent font-mono text-sm mb-2">About Me</p>
            <h1 class="section-title">Who I Am</h1>
            <div class="section-divider w-24 mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.2fr] gap-12 items-start mb-16">
            <div class="rounded-2xl overflow-hidden border border-custom">
                <img src="/storage/portfolio/shabian-profile.png" alt="Shabian Arsyl Yonanta" class="w-full h-auto object-cover">
            </div>
            <div>
                <p class="text-accent font-mono text-sm mb-2">Hello, I am</p>
                <h2 class="text-4xl md:text-5xl font-bold leading-tight">Shabian Arsyl</h2>
                <h2 class="text-4xl md:text-5xl font-bold italic text-gray-400 mb-6">Yonanta S.Tr.Kom</h2>
                <div class="border-t border-custom py-4">
                    <div class="grid grid-cols-2 gap-x-4">
                        <span class="text-gray-500">Working since</span>
                        <span class="font-semibold text-right">2023</span>
                    </div>
                </div>
                <div class="border-t border-custom py-4">
                    <div class="grid grid-cols-1 gap-2">
                        <span class="text-gray-500">Introduction</span>
                        <p class="text-gray-300 leading-relaxed text-justify">
                            I merge design thinking with technical skills to build responsive WordPress websites, craft user-focused interfaces, and deliver meaningful digital experiences. With a passion for both aesthetics and functionality, I help bring ideas to life — whether it's a custom website, intuitive UI/UX, or a visual concept that speaks.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <div class="border-r border-custom pr-8 lg:pr-12">
                <h4 class="text-xl font-semibold mb-6">Work Experience</h4>
                <div class="space-y-6">
                    <div class="card p-5 group hover:bg-accent hover:text-dark transition cursor-default">
                        <div class="flex items-center gap-4 mb-3">
                            <img src="/storage/portfolio/wp/logo_TSI_white-removebg-preview.png" alt="TSI" class="w-10 h-10 object-contain bg-white rounded p-1">
                            <div>
                                <h5 class="font-semibold group-hover:text-dark">Full Time Freelancing @The Solution ID</h5>
                                <p class="text-xs text-gray-500 group-hover:text-dark/70">Feb 2023 - Current</p>
                            </div>
                        </div>
                    </div>
                    <div class="card p-5 group hover:bg-accent hover:text-dark transition cursor-default">
                        <div class="flex items-center gap-4 mb-3">
                            <img src="/storage/portfolio/wp/channels4_profile-removebg-preview-e1749042810174.png" alt="Bangkit" class="w-10 h-10 object-contain bg-white rounded p-1">
                            <div>
                                <h5 class="font-semibold group-hover:text-dark">Cloud Computing & UI/UX Designer @Bangkit Academy</h5>
                                <p class="text-xs text-gray-500 group-hover:text-dark/70">Aug 2023 - Jan 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="card p-5 group hover:bg-accent hover:text-dark transition cursor-default">
                        <div class="flex items-center gap-4 mb-3">
                            <img src="/storage/portfolio/wp/soca_ai_logo-removebg-preview.png" alt="SOCA AI" class="w-10 h-10 object-contain bg-white rounded p-1">
                            <div>
                                <h5 class="font-semibold group-hover:text-dark">Back End Developer @SOCA AI</h5>
                                <p class="text-xs text-gray-500 group-hover:text-dark/70">Feb - Jun 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-xl font-semibold mb-6">Education</h4>
                <div class="card p-5 group hover:bg-accent hover:text-dark transition cursor-default">
                    <div class="flex items-center gap-4 mb-3">
                        <img src="/storage/portfolio/wp/Group-3-1-150x150.png" alt="UNESA" class="w-10 h-10 object-contain bg-white rounded p-1">
                        <div>
                            <h5 class="font-semibold group-hover:text-dark">Bachelor of Applied Computer Science @Surabaya State University</h5>
                            <p class="text-xs text-gray-500 group-hover:text-dark/70">GPA 3.86/4.00</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-400 group-hover:text-dark/80 mt-2">
                        <strong>Thesis (Diploma):</strong>
                        <a href="https://ejournal.unesa.ac.id/index.php/jurnal-manajemen-informatika/article/view/60964" target="_blank" class="underline">Web-Based Decision Support System for Mental Health Screening Using AHP Method at Informatics Management Study Program, Universitas Negeri Surabaya.</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="border-t border-custom pt-10 mb-16">
            <h4 class="text-xl font-semibold mb-6">Organization</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="card p-4 flex items-center gap-4">
                    <img src="/storage/portfolio/wp/Logo-Himafortic-150x150.png" alt="HIMAFORTIC" class="w-10 h-10 object-contain bg-white rounded p-1">
                    <div>
                        <p class="font-semibold text-sm">Association of Information Management Students (HIMAFORTIC)</p>
                        <p class="text-xs text-gray-500">Head of Department of Communication and Information Technology (KOMINFO)</p>
                    </div>
                </div>
                <div class="card p-4 flex items-center gap-4">
                    <img src="/storage/portfolio/wp/Logo-IMJ-UNESA-150x150.png" alt="IMJ UNESA" class="w-10 h-10 object-contain bg-white rounded p-1">
                    <div>
                        <p class="font-semibold text-sm">Jombang Student Association, Surabaya State University (IMJ UNESA)</p>
                        <p class="text-xs text-gray-500">Member of Cadre Development & Organizational Development Division (DPPO)</p>
                    </div>
                </div>
                <div class="card p-4 flex items-center gap-4">
                    <img src="/storage/portfolio/wp/Logo-AFO-150x150.png" alt="AFO" class="w-10 h-10 object-contain bg-white rounded p-1">
                    <div>
                        <p class="font-semibold text-sm">Photography Activity Club (AFO)</p>
                        <p class="text-xs text-gray-500">Members of Division C (Public Relations) & Division D (Journalism & Collection of Works)</p>
                    </div>
                </div>
                <div class="card p-4 flex items-center gap-4">
                    <img src="/storage/portfolio/wp/Logo-BEM-FT-UNESA-150x150.png" alt="BEM FT" class="w-10 h-10 object-contain bg-white rounded p-1">
                    <div>
                        <p class="font-semibold text-sm">Student Executive Board of the Faculty of Engineering (BEM FT)</p>
                        <p class="text-xs text-gray-500">Member of Communication and Information Staff (KOMINFO)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-custom pt-10 mb-16">
            <h4 class="text-xl font-semibold mb-6">Award Highlights</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/storage/portfolio/wp/Speak-1-150x150.png" alt="Talks" class="w-8 h-8 object-contain">
                        <h2 class="text-lg font-bold">Talks, Trainings & Guest Speaking</h2>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Trainer – Coaching Clinic Innovation Lab 2025</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Trainer – UI/UX Workshop at Gemastik Himafortic 2024</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Guest Speaker – UI/UX Introduction, Equilibre 2024</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Guest Speaker – Internship Socialization, Informatics Department 2023</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Guest Speaker – HAKI Registration Workshop, Informatics Department 2023</li>
                    </ul>
                </div>
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/storage/portfolio/wp/Award-150x150.png" alt="Awards" class="w-8 h-8 object-contain">
                        <h2 class="text-lg font-bold">Awards & National Competitions</h2>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> 2nd Place – GenBI Startup Competition 2023</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> 3rd Place – MAPRES (Most Outstanding Student) Main Category 2023</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> 4th Place Finalist – Mobile App Design, IT SPECTA 2023</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Finalist – Scientific Writing Competition GALAKSI 2022</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Top 10 Finalist – Indonesian Vocational Olympiad (Web Design) 2022</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Finalist – Triple-C Web Design Competition 2021</li>
                    </ul>
                </div>
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/storage/portfolio/wp/Startup-150x150.png" alt="Startup" class="w-8 h-8 object-contain">
                        <h2 class="text-lg font-bold">Startup & Innovation Highlights</h2>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Top 15 – KT&G SangSang Univ. Indonesia Startup School 2023</li>
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Awarded Funding – PMWV (Student Entrepreneurial Program) in IT Field, 2021</li>
                    </ul>
                </div>
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/storage/portfolio/wp/Social-Impact-150x150.png" alt="Social Impact" class="w-8 h-8 object-contain">
                        <h2 class="text-lg font-bold">Social Impact & Digital Advocacy</h2>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li class="flex items-start gap-2"><span class="w-2 h-2 rounded-full bg-accent shrink-0 mt-1.5"></span> Appointed – Behavior Change Ambassador, COVID-19 Task Force</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-custom pt-10 mb-16">
            <h4 class="text-xl font-semibold mb-6">Key Tools I Work With</h4>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                @php
                $tools = [
                    ['Figma', 'Design & UI/UX Design Tool', 'tools-symbl-1.png'],
                    ['Photoshop', 'Design & Edit Image Tool', 'tools-symbl-4.png'],
                    ['Canva', 'Design & Pitch Deck Tool', 'Group-4-scaled.png'],
                    ['Capcut PC', 'Video Edit Tool', 'Group-6-scaled.png'],
                    ['Notion', 'Notebook Archive', 'Group-2-1-scaled.png'],
                    ['Adobe Premiere Pro', 'Video Edit Tool', 'Group-5-scaled.png'],
                    ['Github', 'Version Control & Collaboration', 'Group-7-scaled.png'],
                    ['Dribble', 'Design Reference', 'Group-12-scaled.png'],
                    ['WordPress', 'Website & CMS builder', 'tools-symbl-9.png'],
                    ['HTML', 'Base Website Structure', 'tools-symbl-10.png'],
                    ['PHP', 'Build Website', 'Group-8-scaled.png'],
                    ['Trello', 'Project Timeline', 'Group-10-scaled.png'],
                    ['Microsoft Office', 'Writing, Presenting & Analyzing', 'Group-11-scaled.png'],
                    ['Google Search Console', 'SEO & Site Insights', 'Group-13-scaled.png'],
                    ['Articulate Storyline', 'Develop Interactive Learning', 'Group-14-scaled.png'],
                ];
                @endphp
                @foreach($tools as $tool)
                <div class="card p-4 text-center group hover:bg-accent hover:text-dark transition cursor-default">
                    <img src="/storage/portfolio/wp/{{ $tool[2] }}" alt="{{ $tool[0] }}" class="w-12 h-12 mx-auto mb-2 object-contain bg-white rounded p-1">
                    <p class="font-semibold text-sm group-hover:text-dark">{{ $tool[0] }}</p>
                    <p class="text-xs text-gray-500 mt-1 group-hover:text-dark/70">{{ $tool[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <div class="border-t border-custom pt-10 mb-16">
            <h4 class="text-xl font-semibold mb-6">Personal Skills</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <ul class="space-y-3">
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Communication Skills</li>
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Teamwork & Collaboration</li>
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Leadership</li>
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Time Management</li>
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Problem Solving</li>
                </ul>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Public Speaking</li>
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Adaptability</li>
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Creativity</li>
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Detail Oriented</li>
                    <li class="flex items-center gap-3"><span class="w-2.5 h-2.5 rounded-full bg-accent shrink-0"></span>Initiative & Self-Motivation</li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
@endsection
