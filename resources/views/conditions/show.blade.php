@extends('layouts.app')

@php
use Illuminate\Support\Str;

function renderConditionContent($data) {
    if (!$data) return;

    // If JSON string, decode
    if (is_string($data) && Str::startsWith(trim($data), '[')) {
        $decoded = json_decode($data, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            $data = $decoded;
        }
    }

    // If it's an array → render list
    if (is_array($data)) {
        echo '<ul class="list-disc pl-5 space-y-2 text-gray-700">';

        foreach ($data as $item) {

            // Case 1: Plain string
            if (is_string($item)) {
                echo "<li>{$item}</li>";
            }

            // Case 2: Array like ["text" => "..."] or ["value" => "..."]
            elseif (is_array($item)) {
                $text = $item['text'] ?? $item['value'] ?? implode(' ', $item);
                echo "<li>{$text}</li>";
            }

            // Case 3: Anything else
            else {
                echo "<li>{$item}</li>";
            }
        }

        echo '</ul>';
    }

    // Otherwise assume rich HTML
    else {
        echo $data;
    }
}
@endphp


{{-- SEO --}}
@section('seo_title', $condition->meta_title ?? $condition->name . ' Treatment | Nano Hospitals')
@section('seo_description', $condition->meta_description ?? Str::limit(strip_tags($condition->about_intro), 155))
@section('seo_keywords', $condition->meta_keywords ?? $condition->name . ', symptoms, causes, diagnosis, treatment')

@section('content')

<style>
.pill-btn {
    padding: 8px 18px;
    border-radius: 9999px;
    font-size: 14px;
    font-weight: 500;
    background: #f3f4f6;
    color: #374151;
    transition: .2s;
    cursor: pointer;
    white-space: nowrap;
}
.pill-btn:hover { background: #fee2e2; color: #dc2626; }
.pill-btn.active { background: #dc2626; color: #fff; }
</style>

{{-- HERO --}}
<section class="relative w-full min-h-[520px]">
    <img src="{{ asset('assets/banners/health-package-banner.png') }}"
         alt="{{ $condition->name }}"
         class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
        <div class="flex justify-center items-center text-center text-white min-h-[420px]">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                    {{ $condition->name }}
                </h1>
                <a href="#" class="inline-block bg-[#FA424A] text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-red-600 transition">
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
            <h2 class="text-xl md:text-2xl font-bold text-[#5E5E5E] whitespace-nowrap">
                About {{ $condition->name }}
            </h2>

            <div class="flex-1 md:pl-10">
                {!! $condition->about_intro !!}

                @if ($condition->about_more)
                    <div id="moreContent" class="hidden mt-2">
                        {!! $condition->about_more !!}
                    </div>

                    <button id="readMoreBtn" type="button"
                        class="inline-flex items-center gap-2 mt-2 text-red-500 font-medium text-sm hover:underline">
                        Read More
                        <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">›</span>
                    </button>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- NAV PILLS (only if content exists) --}}
<div class="sticky top-0 z-50 bg-white border-b">
    <div class="container mx-auto px-4 py-3">
        <div class="flex gap-3 overflow-x-auto" id="pillNav">
            @if($condition->overview)<button class="pill-btn active" data-target="overview">Overview</button>@endif
            @if($condition->symptoms)<button class="pill-btn" data-target="symptoms">Symptoms</button>@endif
            @if($condition->causes)<button class="pill-btn" data-target="causes">Causes</button>@endif
            @if($condition->risks)<button class="pill-btn" data-target="risks">Risks</button>@endif
            @if($condition->diagnosis)<button class="pill-btn" data-target="diagnosis">Diagnosis & Prevention</button>@endif
            @if($condition->treatment)<button class="pill-btn" data-target="treatment">Treatment</button>@endif
            @if($condition->recovery)<button class="pill-btn" data-target="recovery">Recovery</button>@endif
        </div>
    </div>
</div>

{{-- CONTENT SECTIONS --}}
@foreach([
    'overview' => 'Introduction to '.$condition->name,
    'symptoms' => 'Symptoms',
    'causes' => 'Causes',
    'risks' => 'Risks if Left Untreated',
    'diagnosis' => 'Diagnosis and Prevention',
    'treatment' => 'Treatment Options',
    'recovery' => 'Recovery and Outlook',
] as $field => $title)

    @if($condition->$field)
    <section id="{{ $field }}" class="scroll-mt-32 {{ $loop->even ? 'bg-[#f6f6f6]' : 'bg-white' }} py-14">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">{{ $title }}</h2>
            @php renderConditionContent($condition->$field); @endphp
        </div>
    </section>
    @endif

@endforeach

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

document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('readMoreBtn');
    const content = document.getElementById('moreContent');
    if (!btn || !content) return;

    btn.addEventListener('click', function () {
        const isHidden = content.classList.contains('hidden');
        content.classList.toggle('hidden');
        btn.innerHTML = isHidden
            ? `Read Less <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">‹</span>`
            : `Read More <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">›</span>`;
    });
});
</script>

@endsection
