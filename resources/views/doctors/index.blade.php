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
    {{-- FILTER BAR --}}
    <div class="max-w-[1200px] mx-auto px-4 mt-10 flex flex-wrap gap-4 items-center justify-between">

        <form method="GET" action="{{ route('doctors.index') }}" class="flex flex-wrap gap-4 items-center w-full lg:w-auto">

            {{-- LOCATION DROPDOWN --}}
            <div class="relative w-48">
                <select name="location" class="w-full pill appearance-none pr-10 cursor-pointer">
                    @php $location = request('location', 'All'); @endphp
                    <option value="All" {{ $location == 'All' ? 'selected' : '' }}>All Locations</option>
                    <option value="Both" {{ $location == 'Both' ? 'selected' : '' }}>Both Locations</option>
                    <option value="Uttarahalli" {{ $location == 'Uttarahalli' ? 'selected' : '' }}>Uttarahalli</option>
                    <option value="Hulimavu" {{ $location == 'Hulimavu' ? 'selected' : '' }}>Hulimavu</option>
                </select>
            </div>

            {{-- SPECIALTY DROPDOWN --}}
            <div class="relative w-56">
                <select name="specialty" class="w-full pill appearance-none pr-10 cursor-pointer">
                    <option value="All">All Specialties</option>
                    @foreach ($specialities as $spec)
                        <option value="{{ $spec->name }}" {{ request('specialty') == $spec->name ? 'selected' : '' }}>
                            {{ $spec->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- SEARCH INPUT --}}
            <div class="relative w-64">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search doctor name..."
                    class="pill w-full pl-4 pr-4" />
            </div>

            {{-- SUBMIT BUTTON --}}
            <button type="submit" class="pill pill-red">
                Search
            </button>

        </form>
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
