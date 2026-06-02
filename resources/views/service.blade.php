@extends('layouts.app')
@section('title', 'Services Matrix | Apex Infrastructure')

@section('content')
<section class="pt-40 pb-32 max-w-7xl mx-auto px-6">
    <div class="border-l-4 border-amber-500 pl-6 mb-16">
        <span class="text-stone-500 text-xs font-bold uppercase tracking-widest">Deep Capabilities</span>
        <h1 class="text-4xl md:text-6xl font-black tracking-tight mt-1">Our Industrial Ecosystem</h1>
    </div>

    <div class="grid gap-16">
        @foreach([
            ['title' => 'Civil Infrastructure Megastructures', 'icon' => 'fa-city', 'img' => '4'],
            ['title' => 'Cross-Border Supply Chain Management', 'icon' => 'fa-route', 'img' => '5'],
            ['title' => 'Technical Human Capital Systems', 'icon' => 'fa-user-gear', 'img' => '6']
        ] as $index => $detail)
        <div class="flex flex-col lg:flex-row items-center gap-12 group {{ $index % 2 == 1 ? 'lg:flex-row-reverse' : '' }}">
            <div class="w-full lg:w-1/2 h-96 overflow-hidden rounded-3xl border border-stone-800">
                <img src="https://picsum.photos/1000/700?random={{$detail['img']}}" alt="Service Focus" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
            <div class="w-full lg:w-1/2 space-y-6">
                <div class="w-12 h-12 bg-amber-500/10 rounded-xl flex items-center justify-center text-amber-500 text-xl"><i class="fa-solid {{$detail['icon']}}"></i></div>
                <h2 class="text-2xl md:text-3xl font-black">{{ $detail['title'] }}</h2>
                <p class="text-stone-400 text-sm leading-relaxed">
                    Our engineering services deploy state-of-the-art predictive construction algorithms alongside veteran project managers to achieve safe execution metrics.
                </p>
                <ul class="space-y-2 text-xs font-bold tracking-wide uppercase text-stone-300">
                    <li><i class="fa-solid fa-circle-check text-amber-500 mr-2"></i> Phase 1 Automated Risk Feasibility Models</li>
                    <li><i class="fa-solid fa-circle-check text-amber-500 mr-2"></i> Environmental Lifecycle Compliance Verified</li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection