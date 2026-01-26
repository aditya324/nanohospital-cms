@extends('layouts.app')

@section('content')
    <style>
        .pill {
            padding: 8px 24px;
            border-radius: 9999px;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid #d1d5db;
            background: #fff;
            color: #374151;
            transition: .2s;
        }

        .pill:hover {
            border-color: #ef4444;
        }

        .pill.active {
            background: #ef4444;
            color: #fff;
            border-color: #ef4444;
        }

        .pill-red {
            background: #ef4444;
            color: #fff;
            border-color: #ef4444;
        }

        .specialty-option {
            padding: 8px 20px;
            cursor: pointer;
        }

        .specialty-option:hover {
            background: #fee2e2;
        }
    </style>

    {{-- FILTER BAR --}}
    <div class="max-w-[1200px] mx-auto px-4  flex justify-between px-20">
        <div class="flex items-center gap-3 flex-wrap">
            @php $location = request('location', 'All'); @endphp

            @foreach (['All', 'Both', 'Uttarahalli', 'Hulimavu'] as $loc)
                <a href="{{ route('doctors.index', ['location' => $loc, 'specialty' => request('specialty')]) }}"
                    class="pill {{ $location === $loc ? 'active' : '' }}">
                    {{ $loc === 'Both' ? 'Both Locations' : $loc }}
                </a>
            @endforeach
        </div>

        <div class="relative">
            <button id="specialtyBtn" class="pill pill-red flex items-center gap-2" type="button">
                <span id="specialtyLabel">
                    {{ request('specialty', 'All Specialty') }}
                </span>
                <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>

            <div id="specialtyDropdown"
                class="absolute left-0 mt-2 w-56 bg-white border rounded-xl shadow-xl hidden z-50 max-h-96 overflow-y-auto">

                <ul class="text-sm text-gray-700 py-2">
                    <li>
                        <a href="{{ route('doctors.index', ['location' => request('location'), 'specialty' => 'All']) }}"
                            class="block specialty-option">All Specialty</a>
                    </li>

                    @foreach ($specialities as $spec)
                        <li>
                            <a href="{{ route('doctors.index', ['location' => request('location'), 'specialty' => $spec->name]) }}"
                                class="block specialty-option">


                                {{ $spec->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

    {{-- GRID LAYOUT ONLY --}}
    <section class="w-full mt-28">
        <div class="max-w-[1200px] mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-32">

            @forelse($doctors as $doctor)
                <x-doctor-card :doctor="$doctor" />
            @empty
                <p class="col-span-3 text-center text-gray-500">No doctors found.</p>
            @endforelse

        </div>

        <div class="mt-16 flex justify-center">
            {{ $doctors->links() }}
        </div>
    </section>
@endsection


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("specialtyBtn");
        const dropdown = document.getElementById("specialtyDropdown");

        if (!btn || !dropdown) return;

        // Toggle dropdown
        btn.addEventListener("click", function(e) {
            e.stopPropagation();
            dropdown.classList.toggle("hidden");
        });

        // Close when clicking outside
        document.addEventListener("click", function(e) {
            if (!dropdown.contains(e.target) && !btn.contains(e.target)) {
                dropdown.classList.add("hidden");
            }
        });
    });
</script>
