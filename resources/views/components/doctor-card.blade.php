@props(['doctor'])

@php
    $defaultImage = asset('images/doctor-default.webp');
    $imgSrc = $doctor->photo ? asset('storage/' . $doctor->photo) : $defaultImage;
@endphp

<div class="doctor-card relative w-[300px] mx-auto"
     data-location="{{ $doctor->location }}"
     data-specialty="{{ optional($doctor->speciality)->name }}">

    <div class="absolute -top-28 left-1/2 -translate-x-1/2 z-20">
        <img src="{{ $imgSrc }}"
             alt="{{ $doctor->name }}"
             class="w-52 h-52 object-cover rounded-full"
             onerror="this.src='{{ $defaultImage }}'" />
    </div>

    <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm text-center pt-28 overflow-hidden">
        <button class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
            </svg>
        </button>

        <div class="px-5 pb-6">
            <h3 class="text-lg font-semibold text-gray-900">{{ $doctor->name }}</h3>
            <p class="text-sm text-gray-500 mt-1 line-clamp-1">{{ $doctor->qualification }}</p>
            <p class="text-xs text-gray-400 mt-1">KMC: {{ $doctor->kmc_number }}</p>
            <p class="text-sm text-red-500 font-medium mt-3 leading-snug">{{ $doctor->designation }}</p>
        </div>

        <div class="flex border-t border-gray-200">
            <a href="#" class="w-1/2 bg-red-500 text-white text-sm font-medium py-3 hover:bg-red-600">Book Appointment</a>
            <a href="{{ route('doctors.show', $doctor->slug) }}" class="w-1/2 text-red-500 text-sm font-medium py-3 hover:bg-red-50">View Profile</a>
        </div>
    </div>
</div>
