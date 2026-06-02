<footer class="bg-stone-950 border-t border-stone-900 pt-20 pb-10 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
        
        <div class="md:col-span-1">
            <div class="flex items-center gap-3 mb-6">
                <i class="fa-solid fa-helmet-safety text-amber-500 text-2xl"></i>
                <span class="font-black tracking-widest text-lg">APEX <span class="text-amber-500">INFRA</span></span>
            </div>
            <p class="text-stone-400 text-sm leading-relaxed mb-6">
                Engineering next-generation global logistics and infrastructure pipelines with absolute precision.
            </p>
            <div class="flex gap-4 text-stone-500">
                <a href="#" class="hover:text-amber-500 transition-colors"><i class="fa-brands fa-linkedin text-lg"></i></a>
                <a href="#" class="hover:text-amber-500 transition-colors"><i class="fa-brands fa-twitter text-lg"></i></a>
                <a href="#" class="hover:text-amber-500 transition-colors"><i class="fa-brands fa-instagram text-lg"></i></a>
            </div>
        </div>

        <div>
            <h4 class="text-xs uppercase tracking-widest text-amber-500 font-bold mb-6">Quick Navigation</h4>
            <ul class="space-y-3 text-sm text-stone-400 font-medium">
                <li><a href="{{ route('service.index') }}" class="hover:text-white transition-colors">Core Capabilities</a></li>
                <li><a href="{{ route('projects.index') }}" class="hover:text-white transition-colors">Portfolio</a></li>
                <li><a href="{{ route('careers.index') }}" class="hover:text-white transition-colors">Careers pipeline</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-xs uppercase tracking-widest text-amber-500 font-bold mb-6">Global HQ</h4>
            <p class="text-sm text-stone-400 leading-relaxed mb-4">
                Apex Towers, Suite 400<br>
                Financial District, Industrial Zone
            </p>
            <p class="text-sm text-stone-300 font-semibold"><i class="fa-solid fa-phone text-xs text-amber-500 mr-2"></i> +1 (800) 555-APEX</p>
        </div>

        <div>
            <h4 class="text-xs uppercase tracking-widest text-amber-500 font-bold mb-6">Industry Insights</h4>
            <div class="relative mt-2 rounded-xl shadow-sm">
                <input type="email" placeholder="Enter corporate email" class="w-full bg-stone-900 border border-stone-800 rounded-xl px-4 py-3 text-xs text-stone-200 placeholder-stone-500 focus:outline-none focus:border-amber-500 transition-all">
                <button class="absolute right-2 top-2 px-3 py-1.5 bg-amber-500 hover:bg-amber-400 text-black text-xs font-bold rounded-lg transition-colors">
                    Join
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto border-t border-stone-900/60 pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-stone-500">
        <p>&copy; 2026 Apex Infrastructure Logistics. All Rights Reserved.</p>
        <div class="flex gap-6 mt-4 sm:mt-0">
            <a href="#" class="hover:underline">Privacy Policy</a>
            <a href="#" class="hover:underline">Terms of Service</a>
        </div>
    </div>
</footer>