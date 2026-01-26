@extends('layouts.app')

@section('content')
    <section class="w-full bg-[#E6E6E6] relative  overflow-visible  ">
        <div class="container mx-auto px-4 sm:px-6 xl:px-8  ">

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-10 relative">

                <div class="relative flex justify-center xl:block">
                    <img src="{{ asset('storage/' . $doctor->photo) }}" alt="{{ $doctor->name }}"
                        class="w-[220px] sm:w-[260px] xl:w-[300px] relative xl:absolute xl:top-14 xl:left-60 xl:-translate-x-1/2 z-40" />
                </div>

                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-800">{{ $doctor->name }}</h2>

                    <p class="text-sm text-gray-600 mt-2">{{ $doctor->designation }}</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6 max-w-full xl:max-w-[820px]">
                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">Qualification:</p>
                            <p class="text-sm text-gray-600 mt-1">{{ $doctor->qualification }}</p>
                        </div>

                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">Speciality:</p>
                            <p class="text-sm text-gray-600 mt-1">{{ $doctor->speciality->name }}</p>
                        </div>

                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">Experience:</p>
                            <p class="text-sm text-gray-600 mt-1">{{ $doctor->experience_years }} years</p>
                        </div>

                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">Location:</p>
                            <p class="text-sm text-gray-600 mt-1">{{ $doctor->location }}</p>
                        </div>

                        <div class="bg-white rounded-xl px-5 py-4">
                            <p class="text-sm font-semibold text-gray-700">KMC Number:</p>
                            <p class="text-sm text-gray-600 mt-1">{{ $doctor->kmc_number }}</p>
                        </div>
                    </div>

                    <div class="mt-8 bg-white p-6 rounded-xl">
                        <h3 class="font-semibold mb-3">About Doctor</h3>
                        <p class="text-gray-600">{{ $doctor->about }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
