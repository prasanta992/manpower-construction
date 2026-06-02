@extends('layouts.app')
@section('title', 'Global Projects Portfolio | Apex Infrastructure')

@section('content')
<section class="pt-40 pb-32 max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-20">
        <span class="text-amber-500 text-xs font-bold uppercase tracking-widest">Case Records</span>
        <h1 class="text-4xl md:text-6xl font-black tracking-tight mt-2">Historical Footprint</h1>
        <p class="text-stone-400 text-sm mt-4">Review our verified project completions engineered across various terrains.</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @for($i=11; $i<=16; $i++)
        <div class="bg-stone-900 border border-stone-800/80 rounded-3xl overflow-hidden group shadow-xl">
            <div class="h-64 overflow-hidden relative">
                <img src="https://picsum.photos/800/600?random={{$i}}" alt="Portfolio Project" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute bottom-4 left-4 bg-stone-950/80 backdrop-blur-md border border-white/5 px-4 py-1.5 rounded-lg text-[10px] tracking-widest font-bold uppercase text-amber-500">
                    Completed 2025
                </div>
            </div>
            <div class="p-6 space-y-2">
                <h3 class="text-lg font-bold group-hover:text-amber-500 transition-colors">Aerospace Maintenance Complex</h3>
                <p class="text-stone-400 text-xs leading-relaxed">Integrated tactical delivery of heavy foundations spanning large-footprint structural hangars.</p>
            </div>
        </div>
        @endfor
    </div>
</section>
@endsection