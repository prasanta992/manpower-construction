@extends('layouts.app')
@section('title', 'Home | Apex Infrastructure Logistics')

@section('content')

<!-- <section class="relative min-h-screen flex items-center overflow-hidden">
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
        <source src="/videos/construction.mp4" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-gradient-to-r from-stone-950 via-stone-950/80 to-transparent"></div>

    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl animate-pulse"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12 pt-24 w-full">
        <span class="text-xs uppercase font-black tracking-widest text-amber-500 bg-amber-500/10 px-4 py-2 rounded-full border border-amber-500/20">
            Industrial Engineering Redefined
        </span>
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black tracking-tight mt-6 leading-tight max-w-4xl">
            Building The Future <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-orange-500">
                With Precision.
            </span>
        </h1>
        <p class="mt-8 max-w-2xl text-base md:text-xl text-stone-400 leading-relaxed">
            Professional construction engineering, heavy equipment asset logistics, and highly qualified workforce deployments across five continents.
        </p>
        <div class="mt-10 flex flex-wrap gap-4">
            <a href="#projects" class="px-8 py-4 bg-amber-500 hover:bg-amber-400 text-black font-bold uppercase tracking-wider text-xs rounded-xl shadow-xl shadow-amber-500/20 transition-all duration-300 transform hover:-translate-y-1">
                Explore Portfolio
            </a>
            <a href="#services" class="px-8 py-4 bg-stone-900 hover:bg-stone-800 border border-stone-800 text-white font-bold uppercase tracking-wider text-xs rounded-xl transition-all duration-300">
                Our Capabilities
            </a>
        </div>
    </div>
</section> -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    
    <!-- YouTube Background Wrapper -->
    <div class="absolute inset-0 w-full h-full pointer-events-none">
        <iframe 
            class="absolute top-1/2 left-1/2 w-[100vw] h-[56.25vw] min-h-[100vh] min-w-[177.77vh] -translate-x-1/2 -translate-y-1/2"
            src="https://www.youtube.com/embed/mZL1gnlKTeQ?autoplay=1&mute=1&loop=1&playlist=mZL1gnlKTeQ&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>

    <!-- Dark High-Contrast Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-stone-950 via-stone-950/80 to-stone-900/40"></div>

    <!-- Content Layer -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12 pt-24 w-full">
        <span class="inline-block text-xs uppercase font-black tracking-[0.3em] text-amber-500 bg-amber-500/10 px-4 py-2 rounded-full border border-amber-500/20 mb-6">
            Global Infrastructure Excellence
        </span>
        
        <h1 class="text-5xl md:text-8xl font-black tracking-tighter leading-[0.9] max-w-4xl">
            BUILDING THE <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-orange-500 to-amber-600">
                FUTURE NOW.
            </span>
        </h1>

        <p class="mt-8 max-w-xl text-lg md:text-xl text-stone-300 leading-relaxed font-medium">
            Deploying world-class manpower and logistics solutions to solve the most complex construction challenges on the planet.
        </p>

        <div class="mt-12 flex flex-wrap gap-5">
            <a href="#contact" class="px-10 py-5 bg-amber-500 hover:bg-white text-black font-black uppercase tracking-widest text-xs rounded-full transition-all duration-500 transform hover:scale-105 shadow-2xl shadow-amber-500/20">
                Start a Project
            </a>
            <button class="flex items-center gap-4 group">
                <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-amber-500 group-hover:border-amber-500 transition-all duration-500">
                    <i class="fa-solid fa-play text-xs"></i>
                </div>
                <span class="text-xs font-bold uppercase tracking-widest">Watch Reels</span>
            </button>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
        <i class="fa-solid fa-chevron-down text-stone-500"></i>
    </div>
</section>
<section class="relative z-20 -mt-16 max-w-7xl mx-auto px-6 grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
    @foreach([
        ['stat' => '320+', 'label' => 'Megaprojects Delivered', 'icon' => 'fa-city'],
        ['stat' => '12K', 'label' => 'Global Active Personnel', 'icon' => 'fa-users-gear'],
        ['stat' => '99.4%', 'label' => 'Safety Compliance Index', 'icon' => 'fa-shield-halved'],
        ['stat' => '$2.4B', 'label' => 'Asset Infrastructure Valuation', 'icon' => 'fa-chart-line']
    ] as $item)
    <div class="bg-stone-900/90 backdrop-blur-xl border border-stone-800 p-6 rounded-2xl flex items-center gap-5 shadow-2xl">
        <div class="w-12 h-12 bg-amber-500/10 rounded-xl flex items-center justify-center text-amber-500 text-xl">
            <i class="fa-solid {{ $item['icon'] }}"></i>
        </div>
        <div>
            <h3 class="text-2xl md:text-3xl font-black tracking-tight">{{ $item['stat'] }}</h3>
            <p class="text-stone-500 text-xs font-semibold mt-1 uppercase tracking-wide">{{ $item['label'] }}</p>
        </div>
    </div>
    @endforeach
</section>

<section id="services" class="py-32 max-w-7xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-20">
        <span class="text-amber-500 text-xs uppercase font-bold tracking-widest">Capabilities Matrix</span>
        <h2 class="text-3xl md:text-5xl font-black tracking-tight mt-3">What We Do Best</h2>
        <div class="w-16 h-1 bg-amber-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        @foreach([
            ['icon' => 'fa-trowel-bricks', 'title' => 'Civil Infrastructure Engineering', 'desc' => 'High-scale industrial parks, transport pipeline grids, and smart energy hubs.'],
            ['icon' => 'fa-truck-ramp-box', 'title' => 'Strategic Logistics Operations', 'desc' => 'Heavy asset fleet allocation and cross-border project logistics support.'],
            ['icon' => 'fa-person-digging', 'title' => 'High-Skilled Technical Force', 'desc' => 'Rigorous screening programs supplying vetted technical field operators.']
        ] as $index => $srv)
        <div class="bg-stone-900 border border-stone-800/60 p-8 rounded-3xl hover:border-amber-500/40 transition-all duration-500 group relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 text-stone-950/40 font-black text-9xl group-hover:text-stone-950 transition-colors duration-500">
                0{{ $index+1 }}
            </div>
            <div class="w-14 h-14 bg-amber-500 rounded-2xl flex items-center justify-center text-black text-2xl font-bold mb-8 shadow-lg shadow-amber-500/10">
                <i class="fa-solid {{ $srv['icon'] }}"></i>
            </div>
            <h3 class="text-xl font-bold group-hover:text-amber-500 transition-colors duration-300 relative z-10">{{ $srv['title'] }}</h3>
            <p class="text-stone-400 text-sm mt-4 leading-relaxed relative z-10">{{ $srv['desc'] }}</p>
            <a href="{{ route('service.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-amber-500 mt-6 tracking-wider uppercase group-hover:underline relative z-10">
                Learn Strategy <i class="fa-solid fa-arrow-right-long text-xs"></i>
            </a>
        </div>
        @endforeach
    </div>
</section>

<section id="projects" class="py-32 bg-stone-900/40 border-y border-stone-900 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-20">
            <div>
                <span class="text-amber-500 text-xs uppercase font-bold tracking-widest">Global Implementations</span>
                <h2 class="text-3xl md:text-5xl font-black tracking-tight mt-3">Recent Megaprojects</h2>
            </div>
            <a href="{{ route('projects.index') }}" class="text-xs uppercase font-black tracking-widest text-amber-500 border border-amber-500/20 bg-amber-500/5 px-6 py-3.5 rounded-xl hover:bg-amber-500 hover:text-black transition-all duration-300 mt-6 md:mt-0">
                View Entire Portfolio
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @for($i=1; $i<=3; $i++)
            <div class="overflow-hidden rounded-3xl bg-stone-950 border border-stone-900 group shadow-xl">
                <div class="relative overflow-hidden h-72">
                    <img src="https://picsum.photos/800/600?random={{$i}}" alt="Project Image" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-950 via-transparent to-transparent opacity-80"></div>
                    <span class="absolute top-4 left-4 bg-stone-900/90 backdrop-blur-md border border-white/10 text-stone-300 text-[10px] font-bold tracking-widest px-3 py-1.5 uppercase rounded-lg">
                        Infrastructure
                    </span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold group-hover:text-amber-500 transition-colors">Global Logistics Distribution Hub</h3>
                    <p class="text-stone-500 text-xs mt-2 flex items-center gap-2"><i class="fa-solid fa-location-dot text-amber-500"></i> Region North Asset Division</p>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<section id="testimonials" class="py-32 max-w-5xl mx-auto px-6">
    <div class="text-center mb-16">
        <i class="fa-solid fa-quote-left text-5xl text-amber-500/20"></i>
    </div>
    
    <div class="overflow-hidden relative w-full">
        <div id="testimonial-slider" class="flex transition-transform duration-700 ease-out">
            <div class="min-w-full text-center px-4">
                <p class="text-xl md:text-3xl font-medium leading-relaxed italic text-stone-200">
                    "Apex Infra flawlessly executed our warehouse corridor construction framework on budget and ahead of time. Their safety control and engineering expertise are unmatched globally."
                </p>
                <h4 class="mt-8 text-sm uppercase font-black tracking-widest text-amber-500">Marcus Sterling</h4>
                <p class="text-stone-500 text-xs mt-1">VP Development, Nexus Global Logistics</p>
            </div>
            <div class="min-w-full text-center px-4">
                <p class="text-xl md:text-3xl font-medium leading-relaxed italic text-stone-200">
                    "Their tactical engineering capabilities solved unique structural constraints seamlessly. Highly collaborative workforce solutions across multi-billion-dollar investments."
                </p>
                <h4 class="mt-8 text-sm uppercase font-black tracking-widest text-amber-500">Elena Rostova</h4>
                <p class="text-stone-500 text-xs mt-1">Chief Procurement Officer, Velo Energy Systems</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-24 bg-stone-900/60 border-t border-stone-900 px-6">
    <div class="max-w-4xl mx-auto bg-stone-950 p-8 md:p-12 rounded-3xl border border-stone-800 shadow-2xl">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-4xl font-black tracking-tight">Initiate Blueprint Discussion</h2>
            <p class="text-stone-400 text-sm mt-2">Get in touch with an expert consultant about your next megaproject.</p>
        </div>
        <form class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs uppercase tracking-widest font-bold text-stone-400 mb-2">Corporate Entity</label>
                    <input type="text" placeholder="e.g. Acme Corp" class="w-full bg-stone-900 border border-stone-800 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500">
                </div>
                <div>
                    <label class="block text-xs uppercase tracking-widest font-bold text-stone-400 mb-2">Project Classification</label>
                    <select class="w-full bg-stone-900 border border-stone-800 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500 text-stone-400">
                        <option>Civil Infrastructure</option>
                        <option>Logistics Pipeline</option>
                        <option>Technical Workforce Supply</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="block text-xs uppercase tracking-widest font-bold text-stone-400 mb-2">Scope Blueprint Requirements</label>
                <textarea rows="4" placeholder="Briefly describe your timeline and asset requirements..." class="w-full bg-stone-900 border border-stone-800 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amber-500"></textarea>
            </div>
            <button type="submit" class="w-full py-4 bg-amber-500 hover:bg-amber-400 text-black text-xs font-black uppercase tracking-widest rounded-xl shadow-xl shadow-amber-500/10 transition-colors">
                Submit Consultation Request
            </button>
        </form>
    </div>
</section>

@endsection