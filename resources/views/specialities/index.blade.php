@extends('layouts.app')

@section('content')

<h1 class="flex justify-center text-[#676767] text-2xl font-semibold mt-10">
    All Specialities
</h1>

<div id="specialityGrid" class="flex flex-wrap justify-center gap-10 gap-y-10 mt-6 md:px-28"></div>

<script>
    const DEFAULT_IMAGE = "{{ asset('assets/specialities/default.webp') }}";
    const FRAME_BG = "{{ asset('assets/background/Frame 134.png') }}";

    // Data prepared in route
    const specialities = @json($specialities);
</script>

<script>
    const grid = document.getElementById("specialityGrid");

    grid.innerHTML = specialities.map(item => {
        const img = item.image || DEFAULT_IMAGE;

        

        return `
        <div class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

            <div class="absolute inset-0 bg-cover bg-no-repeat"
                 style="background-image: url('${FRAME_BG}');"></div>

            <!-- Default -->
            <img src="${img}" onerror="this.src='${DEFAULT_IMAGE}'"
                 class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                        transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

            <div class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                        transition-opacity duration-300 group-hover:opacity-0">
                <h3 class="text-red-500 font-semibold text-xl leading-snug">
                    ${item.shortTitle}
                </h3>
            </div>

            <!-- Hover -->
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                <div class="absolute inset-0 bg-red-600/80"></div>

                <img src="${img}" onerror="this.src='${DEFAULT_IMAGE}'"
                     class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                            object-contain opacity-30 pointer-events-none
                            filter brightness-200 saturate-0" />

                <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">${item.title}</h3>
                        <p class="text-sm leading-relaxed opacity-95">${item.desc.length > 90 ? item.desc.slice(0, 90) + '...' : item.desc}</p>
                    </div>

                    <a href="${item.url}">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        `;
    }).join("");
</script>

@endsection
