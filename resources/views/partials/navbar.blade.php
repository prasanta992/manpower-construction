<nav id="master-nav" class="fixed w-full top-0 left-0 z-50 py-5 transition-all duration-500 px-6 md:px-12">
    <div class="max-w-7xl mx-auto flex items-center justify-between bg-stone-900/40 backdrop-blur-md border border-white/5 px-6 py-4 rounded-2xl shadow-2xl">
        
        <a href="{{ route('home.index') }}" class="flex items-center gap-3 group">
            <div class="p-2 bg-amber-500 rounded-lg text-black transition-transform group-hover:rotate-12 duration-300">
                <i class="fa-solid fa-helmet-safety text-xl"></i>
            </div>
            <span class="font-black tracking-widest text-sm md:text-base">
                APEX <span class="text-amber-500">INFRA</span>
            </span>
        </a>

        <div class="hidden md:flex items-center gap-8 text-xs uppercase font-bold tracking-widest">
            <a href="{{ route('home.index') }}" class="hover:text-amber-500 transition-colors duration-300">Home</a>
            <a href="{{ route('service.index') }}" class="hover:text-amber-500 transition-colors duration-300">Services</a>
            <a href="{{ route('projects.index') }}" class="hover:text-amber-500 transition-colors duration-300">Projects</a>
            <a href="{{ route('testimonials.index') }}" class="hover:text-amber-500 transition-colors duration-300">Testimonials</a>
            <a href="{{ route('careers.index') }}" class="hover:text-amber-500 transition-colors duration-300">Careers</a>
        </div>

        <div class="hidden lg:flex items-center">
            <a href="#contact" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-400 text-black text-xs font-black uppercase tracking-wider rounded-xl transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg shadow-amber-500/20">
                Get Consultation
            </a>
        </div>
    </div>
</nav>