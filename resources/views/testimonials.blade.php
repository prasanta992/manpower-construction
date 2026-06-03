@extends('layouts.app')
@section('title', 'Verified Enterprise Endorsements | Apex Infrastructure')

@section('content')
<section class="pt-40 pb-32 max-w-7xl mx-auto px-6">
    <!-- Header -->
    <div class="text-center mb-20">
        <span class="text-amber-500 text-xs font-bold uppercase tracking-widest bg-amber-500/10 px-4 py-2 rounded-full border border-amber-500/20">Client Trust Index</span>
        <h1 class="text-4xl md:text-6xl font-black tracking-tight mt-6">Verified Enterprise <br><span class="text-stone-500">Endorsements</span></h1>
        <p class="text-stone-400 text-sm mt-4 max-w-xl mx-auto">Global engineering standards met with local precision. Here is what our partners say about Apex Infrastructure.</p>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @php
            $reviews = [
                [
                    'name' => 'David Richardson',
                    'role' => 'Head of Infrastructure, EuroLink Port',
                    'text' => 'The technical workforce supplied by Apex was of the highest caliber. Zero safety incidents over 18 months.',
                    'project' => 'Port Expansion',
                    'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&h=150&q=80'
                ],
                [
                    'name' => 'Sarah Al-Maktoum',
                    'role' => 'Operations Director, NexGen Energy',
                    'text' => 'Their real-time logistics dashboard reduced our downtime by 22% in the first quarter of operations.',
                    'project' => 'Solar Grid B-12',
                    'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&h=150&q=80'
                ],
                [
                    'name' => 'Julian Vancore',
                    'role' => 'Chief Engineer, Metro-Bridge Corp',
                    'text' => 'Delivered specialized deep-foundation machinery ahead of schedule, saving our urban skyway timeline.',
                    'project' => 'Urban Skyway',
                    'img' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&h=150&q=80'
                ],
                [
                    'name' => 'Michael Chen',
                    'role' => 'Supply Chain VP, Global Freight',
                    'text' => 'Transparency is surgical. Their site leads were professional and their safety compliance is the best in class.',
                    'project' => 'Distribution Hub',
                    'img' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=150&h=150&q=80'
                ],
                [
                    'name' => 'Arjun Patnaik',
                    'role' => 'Project Lead, Kalinga Steel Works',
                    'text' => 'Apex provided heavy asset support that helped us scale our production line logistics within record time.',
                    'project' => 'Kalinganagar Plant',
                    'img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&h=150&q=80'
                ],
                [
                    'name' => 'Linda Groff',
                    'role' => 'Director, Urban Dev Group',
                    'text' => 'Reliable, efficient, and technically sound. They are our go-to partner for all high-rise structural cores.',
                    'project' => 'Skyline Plaza',
                    'img' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=150&h=150&q=80'
                ]
            ];
        @endphp

        @foreach($reviews as $review)
        <div class="bg-stone-900 border border-stone-800/80 p-8 rounded-[2rem] relative flex flex-col justify-between group hover:border-amber-500/30 transition-all duration-500 shadow-xl">
            <div>
                <div class="flex items-center justify-between mb-6">
                    <span class="text-[9px] font-black uppercase tracking-widest text-amber-500 bg-amber-500/10 px-3 py-1 rounded border border-amber-500/20">
                        {{ $review['project'] }}
                    </span>
                    <div class="flex text-amber-500 text-[10px]">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p class="text-stone-300 text-sm leading-relaxed italic mb-8">"{{ $review['text'] }}"</p>
            </div>
            <div class="flex items-center gap-4 border-t border-stone-800/60 pt-6">
                <img src="{{ $review['img'] }}" class="w-12 h-12 rounded-xl object-cover grayscale group-hover:grayscale-0 transition-all">
                <div>
                    <h4 class="text-xs uppercase font-black text-white group-hover:text-amber-500 transition-colors">{{ $review['name'] }}</h4>
                    <p class="text-[10px] text-stone-500 font-bold uppercase tracking-tighter">{{ $review['role'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- STRATEGIC PARTNERS SECTION -->
   <div class="mt-32 pt-20 border-t border-stone-900">
        <div class="flex flex-col md:flex-row items-center justify-between mb-16">
            <div class="text-left">
                <h2 class="text-3xl font-black tracking-tight text-white">Odisha Strategic <span class="text-amber-500">Partners</span></h2>
                <p class="text-stone-500 text-sm mt-1">Providing engineering and manpower solutions to Odisha's industrial pillars.</p>
            </div>
            <div class="h-px flex-1 bg-stone-900 mx-10 hidden md:block"></div>
            <span class="text-xs font-bold text-stone-600 uppercase tracking-[0.3em]">Regional Authority</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
            @php
                $partners = [
                    [
                        'name' => 'Tata Steel',
                        'type' => 'Industrial Lead',
                        'logo' => 'https://th.bing.com/th/id/OIP.q_7gj5zdrk3g-9vde-kgvAAAAA?w=184&h=115&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',
                        'url' => 'https://www.tatasteel.com'
                    ],
                    [
                        'name' => 'MCL',
                        'type' => 'Mining & Logistics',
                        'logo' => 'https://th.bing.com/th/id/OIP.78yaoLGmwbvVJofLiXUWGwHaHa?w=200&h=200&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',
                        'url' => 'https://www.mahanadicoal.in'
                    ],
                    [
                        'name' => 'OMC',
                        'type' => 'State Enterprise',
                        'logo' => 'https://dg1ya6cdc7ief.cloudfront.net/assets/images/OMC-New-Logo.svg',
                        'url' => 'https://omcltd.in'
                    ],
                    [
                        'name' => 'Paradip Port',
                        'type' => 'Maritime Infra',
                        'logo' => 'https://th.bing.com/th/id/OIP.VqFN3sY0p8g5wFvSCCKfOQHaFj?w=200&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',
                        'url' => 'https://paradipport.gov.in'
                    ],
                    [
                        'name' => 'Jindal Steel',
                        'type' => 'Metal & Power',
                        'logo' => 'https://th.bing.com/th/id/OIP.0LApAbByiKcGTp3ry-XW-wHaHa?w=178&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',
                        'url' => 'https://www.jindalsteelpower.com'
                    ],
                    [
                        'name' => 'Vedanta',
                        'type' => 'Aluminium Lead',
                        'logo' => 'https://th.bing.com/th/id/OIP.xs8ltw3G7G-EU6aBDtJ8WQHaBj?w=314&h=73&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',
                        'url' => 'https://vedantaaluminium.com'
                    ]
                ];
            @endphp

            @foreach($partners as $partner)
            <a href="{{ $partner['url'] }}" target="_blank" class="bg-stone-900/40 border border-stone-800 p-6 rounded-2xl hover:border-amber-500/50 transition-all group flex flex-col items-center text-center">
                <!-- Logo Container -->
                <div class="w-full h-20 bg-white rounded-xl mb-4 flex items-center justify-center p-3 transition-transform group-hover:scale-105">
                    <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }} Logo" class="max-w-full max-h-full object-contain">
                </div>
                
                <h4 class="text-[11px] font-black text-white uppercase tracking-widest">{{ $partner['name'] }}</h4>
                <p class="text-[9px] text-stone-500 font-bold mt-1 uppercase tracking-tighter">{{ $partner['type'] }}</p>
                
                <div class="mt-4 flex items-center gap-1 text-amber-500 text-[8px] font-black uppercase opacity-0 group-hover:opacity-100 transition-opacity">
                    Visit Site <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    <!-- Award Badges -->
    <div class="mt-24 py-12 border-y border-stone-900/50 flex flex-wrap justify-center items-center gap-16 grayscale opacity-30 hover:opacity-100 transition-opacity duration-700">
        <div class="flex flex-col items-center">
            <i class="fa-solid fa-award text-3xl mb-2 text-stone-400"></i>
            <span class="text-[10px] font-black uppercase tracking-[0.2em]">Safety First Award</span>
        </div>
        <div class="flex flex-col items-center">
            <i class="fa-solid fa-certificate text-3xl mb-2 text-stone-400"></i>
            <span class="text-[10px] font-black uppercase tracking-[0.2em]">ISO 9001:2015</span>
        </div>
        <div class="flex flex-col items-center">
            <i class="fa-solid fa-earth-asia text-3xl mb-2 text-stone-400"></i>
            <span class="text-[10px] font-black uppercase tracking-[0.2em]">Odisha Industrial Partner</span>
        </div>
    </div>
</section>
@endsection