@extends('layouts.app')

@section('title', $speciality->meta_title ?? $speciality->name)

@section('content')

<style>
    .pill-btn {
        padding: 8px 18px;
        border-radius: 9999px;
        font-size: 14px;
        font-weight: 500;
        background: #f3f4f6;
        color: #374151;
        transition: all 0.2s ease;
        cursor: pointer;
        white-space: nowrap;
    }
    .pill-btn:hover { background: #fee2e2; color: #dc2626; }
    .pill-btn.active { background: #dc2626; color: #ffffff; }
</style>

{{-- HERO --}}
<section class="relative w-full min-h-[520px]">
    <img src="{{ asset('storage/' . $speciality->banner_image) }}"
         alt="{{ $speciality->name }}"
         class="absolute inset-0 w-full h-full object-cover" />

    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">
            <div class="flex flex-col justify-center items-center text-center text-white">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                    {{ $speciality->name }}
                </h1>

                <a href="#"
                   class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
                    Consult Specialist
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ABOUT --}}
<section class="w-full bg-[#F5F5F5] py-6">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
            <p class="text-xl md:text-2xl font-bold text-[#5E5E5E] whitespace-nowrap">
                About {{ $speciality->name }}
            </p>

            <div class="flex-1 md:pl-10 text-gray-600 leading-relaxed">
                {!! $speciality->about_intro !!}

                @if($speciality->about_more)
                <div id="moreContent" class="hidden mt-2">
                    {!! $speciality->about_more !!}
                </div>

                <button id="readMoreBtn" type="button"
                    class="inline-flex items-center gap-2 mt-2 text-red-500 font-medium text-sm hover:underline focus:outline-none">
                    Read More
                    <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">›</span>
                </button>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- NAV PILLS --}}
<div class="sticky top-0 z-50 bg-white border-b">
    <div class="container mx-auto px-4 py-3">
        <div class="flex gap-3 overflow-x-auto" id="pillNav">
            <button class="pill-btn active" data-target="overview">Overview</button>
            <button class="pill-btn" data-target="workflow">Treatments</button>
            <button class="pill-btn" data-target="delivery">Facilities</button>
            <button class="pill-btn" data-target="benefits">Conditions</button>
            <button class="pill-btn" data-target="risks">Challenges</button>
            <button class="pill-btn" data-target="advantages">Sub-specialties</button>
            <button class="pill-btn" data-target="faqs">FAQs</button>
        </div>
    </div>
</div>

{{-- OVERVIEW --}}
<section id="overview" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Overview of {{ $speciality->name }}
        </h2>
        <div class="space-y-4 text-gray-700 leading-relaxed">
            {!! $speciality->overview_content !!}
        </div>
    </div>
</section>

{{-- TREATMENTS --}}
<section id="workflow" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Procedures and Treatments
        </h2>
        <div class="space-y-6 text-gray-700 leading-relaxed">
            {!! $speciality->treatments_content !!}
        </div>
    </div>
</section>

{{-- FACILITIES --}}
<section id="delivery" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Facilities and Technologies Used
        </h2>
        {!! $speciality->facilities_content !!}
    </div>
</section>

{{-- CONDITIONS --}}
<section id="benefits" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Conditions and Ailments Treated
        </h2>
        {!! $speciality->conditions_content !!}
    </div>
</section>

{{-- RISKS --}}
<section id="risks" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Risks and Challenges
        </h2>
        {!! $speciality->risks_content !!}
    </div>
</section>

{{-- SUB-SPECIALTIES --}}
<section id="advantages" class="scroll-mt-32 bg-[#f6f6f6] py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            Sub-specialties in {{ $speciality->name }}
        </h2>
        {!! $speciality->subspecialties_content !!}
    </div>
</section>

{{-- FAQ --}}
<section id="faqs" class="scroll-mt-32 bg-white py-14">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-semibold mb-6">
            FAQs – {{ $speciality->name }}
        </h2>

        <div class="space-y-3 text-gray-700">
            @foreach($speciality->faqs as $faq)
                <p><strong>{{ $faq->question }}</strong><br>{{ $faq->answer }}</p>
            @endforeach
        </div>
    </div>
</section>

{{-- JS --}}
<script>
const buttons = document.querySelectorAll('.pill-btn');
const sections = [...buttons].map(btn => document.getElementById(btn.dataset.target));

buttons.forEach(btn => {
    btn.addEventListener('click', () => {
        document.getElementById(btn.dataset.target).scrollIntoView({ behavior: 'smooth' });
    });
});

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        if (window.scrollY >= section.offsetTop - 160) current = section.id;
    });
    buttons.forEach(btn => btn.classList.toggle('active', btn.dataset.target === current));
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('readMoreBtn');
    const content = document.getElementById('moreContent');
    if (!btn || !content) return;

    btn.addEventListener('click', function() {
        const isHidden = content.classList.contains('hidden');
        content.classList.toggle('hidden');

        btn.innerHTML = isHidden
            ? `Read Less <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">‹</span>`
            : `Read More <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">›</span>`;
    });
});
</script>

@endsection
