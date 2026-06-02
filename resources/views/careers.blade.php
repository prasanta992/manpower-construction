@extends('layouts.app')
@section('title', 'Careers Pipeline | Apex Infrastructure')

@section('content')
<section class="pt-40 pb-32 max-w-4xl mx-auto px-6">
    <div class="text-center mb-16">
        <span class="text-amber-500 text-xs font-bold uppercase tracking-widest">Join The Vanguard</span>
        <h1 class="text-4xl md:text-5xl font-black tracking-tight mt-2">Global Careers</h1>
        <p class="text-stone-400 text-sm mt-4">We actively search for precision field engineers and tactical operational planners.</p>
    </div>

    <div class="space-y-4">
        @foreach([
            ['role' => 'Senior Infrastructure Layout Engineer', 'loc' => 'On-Site / Global Deployment Matrix', 'type' => 'Full-Time Corporate Senior'],
            ['role' => 'Heavy Assets Site Logistics Director', 'loc' => 'Regional Outpost East', 'type' => 'Contract High-Scale Deployment'],
            ['role' => 'EHS Safety Pipeline Assurance Controller', 'loc' => 'Remote Operations Focus', 'type' => 'Full-Time']
        ] as $job)
        <div class="bg-stone-900 border border-stone-800/60 p-6 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 hover:border-stone-700 transition-colors">
            <div>
                <h3 class="text-base font-bold text-stone-100">{{ $job['role'] }}</h3>
                <div class="flex gap-4 text-xs text-stone-500 font-medium mt-1">
                    <span><i class="fa-solid fa-location-dot mr-1 text-amber-500"></i> {{ $job['loc'] }}</span>
                    <span><i class="fa-solid fa-briefcase mr-1 text-amber-500"></i> {{ $job['type'] }}</span>
                </div>
            </div>
            <button class="px-5 py-2.5 bg-stone-800 hover:bg-amber-500 hover:text-black text-xs font-bold rounded-xl tracking-wider uppercase text-stone-300 transition-all self-stretch sm:self-auto">
                Apply for Role
            </button>
        </div>
        @endforeach
    </div>
</section>
@endsection