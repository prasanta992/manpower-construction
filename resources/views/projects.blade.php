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
        @php
            $projects = [
                [
                    'title' => 'Skyline Industrial Hub',
                    'location' => 'Dubai, UAE',
                    'image' => 'https://th.bing.com/th/id/OIP.A8WtdHv9qQWnog5VZmOIlwHaEm?w=272&h=185&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',
                    'points' => ['Steel Structure', '45,000 sq.ft', 'Seismic Grade']
                ],
                [
                    'title' => 'Metro Bridge Extension',
                    'location' => 'Mumbai, India',
                    'image' => 'https://th.bing.com/th/id/OIP.1Qyml2jdSCAMu6NvL3rfZAHaFc?w=245&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',
                    'points' => ['Pre-cast Concrete', 'Level 4 Safety', '24/7 Operations']
                ],
                [
                    'title' => 'Coastal Power Plant',
                    'location' => 'Singapore',
                    'image' => 'https://media.istockphoto.com/id/2194826024/photo/aerial-view-of-a-coastal-power-plant-in-the-philippines.jpg?s=170667a&w=0&k=20&c=PnupFxhyx-j2TiZvYWskWJH45om9bnSauDvkEzwYJ6o=',
                    'points' => ['Marine Foundations', 'Corrosion Resistant', 'ISO Certified']
                ],
                [
                    'title' => 'Urban Residential Plaza',
                    'location' => 'London, UK',
                    'image' => 'https://th.bing.com/th/id/OIP.uuJj-cPkVSe8PSmT694XogHaEK?w=323&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',
                    'points' => ['Glass Facade', 'LEED Gold', 'Deep Excavation']
                ],
                [
                    'title' => 'Logistics Freight Terminal',
                    'location' => 'Texas, USA',
                    'image' => 'https://th.bing.com/th/id/OIP.qZA83RvPYhN68wIq387EhwHaEa?w=279&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3',
                    'points' => ['Heavy Duty Paving', 'Automated Gates', 'Fast-track Delivery']
                ],
                [
                    'title' => 'Smart Corporate HQ',
                    'location' => 'Berlin, Germany',
                    'image' => 'data:image/webp;base64,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',
                    'points' => ['Smart HVAC', 'Sustainable Timber', 'Acoustic Buffers']
                ]
            ];
        @endphp

        @foreach($projects as $project)
        <div class="bg-stone-900 border border-stone-800/80 rounded-3xl overflow-hidden group shadow-xl flex flex-col">
            <div class="h-64 overflow-hidden relative">
                <!-- Construction Site Image -->
                <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                
                <!-- Status Badge -->
                <div class="absolute top-4 right-4 bg-green-500/90 text-white text-[9px] font-black px-3 py-1 rounded-full uppercase tracking-tighter shadow-lg">
                    Recently Completed
                </div>

                <!-- Location Overlay -->
                <div class="absolute bottom-4 left-4 bg-stone-950/80 backdrop-blur-md border border-white/5 px-4 py-1.5 rounded-lg text-[10px] tracking-widest font-bold uppercase text-amber-500">
                   <i class="fas fa-map-marker-alt mr-1"></i> {{ $project['location'] }}
                </div>
            </div>

            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-bold group-hover:text-amber-500 transition-colors">{{ $project['title'] }}</h3>
                    <p class="text-stone-400 text-xs mt-2 leading-relaxed">Delivered with precision engineering and high-grade safety standards.</p>
                </div>

                <!-- Project Specs (The "Believability" Points) -->
                <div class="mt-6 pt-6 border-t border-stone-800 grid grid-cols-2 gap-y-2">
                    @foreach($project['points'] as $point)
                    <div class="flex items-center text-stone-300 text-[10px] uppercase font-semibold">
                        <svg class="w-3 h-3 text-amber-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                        {{ $point }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection