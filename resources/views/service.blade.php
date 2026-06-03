@extends('layouts.app')
@section('title', 'Our Services & Assets | Apex Infrastructure')

@section('content')
<section class="pt-40 pb-32 max-w-7xl mx-auto px-6">
    <div class="border-l-4 border-amber-500 pl-6 mb-16">
        <span class="text-stone-500 text-xs font-bold uppercase tracking-widest">Full-Scale Capability</span>
        <h1 class="text-4xl md:text-6xl font-black tracking-tight mt-1">Equipment, Fleet & <br><span class="text-stone-500">Expert Manpower</span></h1>
    </div>

    <div class="grid gap-24">
        @php
            $services = [
                [
                    'title' => 'Heavy Equipment & Machinery',
                    'icon' => 'fa-tractor',
                    'img' => 'https://coastalkapital.com/wp-content/uploads/2022/08/heavy-equipment-financing.jpg',
                    'desc' => 'We own and maintain a modern fleet of excavators, JCBs, cranes, and heavy-duty rollers. By owning our machinery, we eliminate third-party delays and pass the cost savings directly to your project.',
                    'points' => ['Modern Excavators & JCB Fleet', 'On-Site Maintenance Mobile Units', '24/7 Asset Availability']
                ],
                [
                    'title' => 'Vetted  Manpower',
                    'icon' => 'fa-users-gear',
                    'img' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1000&q=80',
                    'desc' => 'Our greatest asset is our people. From certified site engineers and safety officers to skilled masonry and welding teams, we deploy a workforce that is trained, insured, and ready for 24/7 shifts.',
                    'points' => ['Licensed Site Supervisors', 'Certified Safety (OSHA) Officers', 'Skilled & Semi-Skilled Labor Grids']
                ],
                [
                    'title' => 'Logistics & Material Transport',
                    'icon' => 'fa-truck-moving',
                    'img' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1000&q=80',
                    'desc' => 'With our dedicated transport fleet, we handle the movement of heavy raw materials, pre-cast structures, and site debris. Our logistics team ensures that materials reach your site on a strict "Just-in-Time" schedule.',
                    'points' => ['Heavy-Duty Tipper Trucks', 'Raw Material Procurement', 'Fuel & Asset Logistics Support']
                ],
                [
                    'title' => 'Civil Construction',
                    'icon' => 'fa-trowel-bricks',
                    'img' => 'https://tse3.mm.bing.net/th/id/OIP.Yojdhhmi5oQlXt-1OeDqGwHaEF?rs=1&pid=ImgDetMain&o=7&rm=3',
                    'desc' => 'From land clearing and foundation work to structural completion. We handle small to medium-scale civil projects including boundary walls, industrial sheds, and road laying with precision.',
                    'points' => ['End-to-End Site Development', 'Concrete & Slab Foundation Work', 'Quality Control & Material Testing']
                ]
            ];
        @endphp

        @foreach($services as $index => $detail)
        <div class="flex flex-col lg:flex-row items-center gap-12 group {{ $index % 2 == 1 ? 'lg:flex-row-reverse' : '' }}">
            <!-- Image Container -->
            <div class="w-full lg:w-1/2 h-[450px] overflow-hidden rounded-3xl border border-stone-800 relative">
                <img src="{{ $detail['img'] }}" alt="{{ $detail['title'] }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-stone-950/20 group-hover:bg-transparent transition-colors duration-500"></div>
            </div>

            <!-- Content Container -->
            <div class="w-full lg:w-1/2 space-y-8">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-amber-500 rounded-2xl flex items-center justify-center text-stone-950 text-2xl shadow-lg shadow-amber-500/10">
                        <i class="fa-solid {{$detail['icon']}}"></i>
                    </div>
                    <span class="text-stone-600 font-black text-4xl opacity-20">0{{ $index + 1 }}</span>
                </div>

                <h2 class="text-3xl md:text-4xl font-black tracking-tight text-white">{{ $detail['title'] }}</h2>
                
                <p class="text-stone-400 text-base leading-relaxed">
                    {{ $detail['desc'] }}
                </p>

                <div class="grid gap-4">
                    @foreach($detail['points'] as $point)
                    <div class="flex items-center bg-stone-900/50 border border-stone-800/50 p-4 rounded-xl group-hover:border-amber-500/30 transition-colors">
                        <div class="mr-4 text-amber-500">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <span class="text-xs font-bold tracking-widest uppercase text-stone-200">{{ $point }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="pt-4">
                    <a href="#contact" class="inline-flex items-center gap-3 text-xs font-black uppercase tracking-widest text-amber-500 hover:text-white transition-colors">
                        Inquire About This Service <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Asset Counter Section for Trust -->
<section class="bg-stone-900/30 py-20 border-y border-stone-900">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
        <div>
            <p class="text-4xl font-black text-white">45+</p>
            <p class="text-[10px] font-bold uppercase tracking-widest text-amber-500 mt-2">Owned Machines</p>
        </div>
        <div>
            <p class="text-4xl font-black text-white">150+</p>
            <p class="text-[10px] font-bold uppercase tracking-widest text-amber-500 mt-2">Certified Personnel</p>
        </div>
        <div>
            <p class="text-4xl font-black text-white">12</p>
            <p class="text-[10px] font-bold uppercase tracking-widest text-amber-500 mt-2">Heavy Tippers</p>
        </div>
        <div>
            <p class="text-4xl font-black text-white">100%</p>
            <p class="text-[10px] font-bold uppercase tracking-widest text-amber-500 mt-2">Safety Record</p>
        </div>
    </div>
</section>
@endsection