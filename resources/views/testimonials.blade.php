@extends('layouts.app')
@section('title', 'Verified Enterprise Endorsements | Apex Infrastructure')

@section('content')
<section class="pt-40 pb-32 max-w-5xl mx-auto px-6">
    <div class="text-center mb-20">
        <span class="text-amber-500 text-xs font-bold uppercase tracking-widest">Verified Endorsements</span>
        <h1 class="text-4xl md:text-5xl font-black tracking-tight mt-2">Enterprise Client Testimonials</h1>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        @for($i = 1; $i <= 4; $i++)
        <div class="bg-stone-900 border border-stone-800/80 p-8 rounded-3xl relative flex flex-col justify-between">
            <i class="fa-solid fa-quote-right text-4xl text-stone-800 absolute right-6 top-6"></i>
            <div>
                <div class="flex text-amber-500 text-xs gap-1 mb-4">
                    @for($j=0; $j<5; $j++)<i class="fa-solid fa-star"></i>@endfor
                </div>
                <p class="text-stone-300 text-sm leading-relaxed italic">
                    "The operational precision Apex Infra applied to our project allowed us to deliver ahead of schedule. Their workforce is exceptional, and their communication dashboard is incredibly transparent."
                </p>
            </div>
            <div class="mt-8 flex items-center gap-4 border-t border-stone-800 pt-4">
                <div class="w-10 h-10 rounded-full bg-stone-800 overflow-hidden">
                    <img src="https://i.pravatar.cc/100?img={{$i}}" alt="Client Face">
                </div>
                <div>
                    <h4 class="text-xs uppercase font-black tracking-wider text-amber-500">Executive Stakeholder {{$i}}</h4>
                    <p class="text-[11px] text-stone-500 font-medium">Director of Global Project Operations</p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</section>
@endsection