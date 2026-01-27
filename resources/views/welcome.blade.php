@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <style>
        .orbit-ring {
            animation: rotate 30s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .feature-card {
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }
    </style>
@endpush

@section('content')

    <!-- DESKTOP HERO -->
    <section class="w-full hidden md:block ">
        <div class="relative w-full mx-auto h-auto bg-cover bg-center overflow-hidden"
            style="background-image: url('./assets/banners/blur.jpg');">

            <!-- TOP SEARCH BAR -->
            <div class="hidden md:flex justify-center w-full pt-3 z-50 relative">
                <div class="flex w-full max-w-[1020px] items-center bg-white shadow-md rounded-full p-3 mx-4">
                    <div class="relative w-full">
                        <input type="text" placeholder="Search for Doctors Specialty, Condition..."
                            class="w-full rounded-full border border-gray-200 py-3 pl-5 pr-12 text-sm md:text-base text-[#737373] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-400" />
                        <button
                            class="absolute right-2 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full bg-red-500 hover:bg-red-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- CONTENT WRAPPER -->
            <div
                class="relative z-20 px-4 lg:px-0 flex flex-col lg:flex-row items-center lg:items-start max-w-[1400px] mx-auto">

                <!-- LEFT CONTENT -->
                <div class="w-full lg:w-1/2 text-center lg:text-left flex flex-col justify-center h-full mt-10">
                    <p class="text-xl sm:text-2xl md:text-3xl text-[#555555] font-semibold uppercase mb-1">
                        World-Class Doctors
                    </p>

                    <h1
                        class="text-2xl sm:text-3xl md:text-3xl xl:text-4xl font-extrabold text-red-600 drop-shadow-lg leading-tight mb-1">
                        COMPLETE HEALTH CHECKUPS
                    </h1>

                    <p class="text-xl sm:text-2xl md:text-3xl font-semibold text-red-600 mb-6">
                        Total Peace of Mind
                    </p>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="w-full lg:w-1/2 flex items-end h-full">
                    <img src="./assets/banners/family-home (2).png"
                        class="w-full max-w-[420px] md:max-w-[520px] lg:max-w-[617px] h-auto object-contain" alt="Family">
                </div>

            </div>
        </div>
    </section>


    <!-- MOBILE HERO -->
    <section class="w-full md:hidden">
        <div class="relative w-full bg-cover bg-center overflow-hidden"
            style="background-image: url('./assets/banners/blur.jpg');">

            <p class="text-lg uppercase font-semibold text-[#666] text-center">
                World-Class Doctors
            </p>

            <h1 class="text-lg font-extrabold text-red-400 leading-tight mt-1 text-center">
                COMPLETE HEALTH CHECKUPS
            </h1>

            <p class="text-base font-semibold text-red-400 mt-0.5 text-center">
                Total Peace of Mind
            </p>

            <div class="relative z-10 h-full px-4 flex items-center justify-between">
                <div class="flex justify-end items-end w-full">
                    <img src="./assets/banners/family-home (2).png" alt="Family" class="h-full w-[398px] object-contain">
                </div>
            </div>

        </div>
    </section>


    <section class="w-full py-6 bg-[#F6F6F6] hidden md:block">
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 gap-x-5">

                <!-- Book Appointment (Primary Card) -->
                <a href="https://nanohospitals.karexpert.com/account-management/login"
                    class="group bg-[#FF4B4B] rounded-2xl p-6 flex justify-between items-center
                shadow-lg
                hover:-translate-y-2 hover:shadow-2xl
                transition-all duration-300 ease-out">

                    <div>
                        <h3 class="text-white text-xl font-semibold">
                            Book An Appointment
                        </h3>
                        <p class="text-white/90 text-sm mt-1">
                            Your health, just one step away
                        </p>
                    </div>

                    <div class="w-12 h-12 flex items-center justify-center">
                        <img src="./assets/icons/book-appointment (2).png" alt=""
                            class="group-hover:scale-110 transition-transform duration-300">
                    </div>
                </a>

                <!-- Doctors -->

                <a href="./doctor-profile.php">
                    <div
                        class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                        <div>
                            <h3 class="text-lg font-semibold">Doctors</h3>
                            <p class="text-sm mt-1">
                                Top Experts for your Health
                            </p>
                        </div>

                        <img src="./assets/icons/doctor.png" alt=""
                            class="group-hover:scale-110 transition-transform duration-300">
                    </div>
                </a>

                <!-- Specialities -->
                <a href="./specialties.php"
                    class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                    <div>
                        <h3 class="text-lg font-semibold">Specialities</h3>
                        <p class="text-sm mt-1">
                            Expert care across every Specialty
                        </p>
                    </div>

                    <img src="./assets/icons/specialities.png" alt=""
                        class="group-hover:scale-110 transition-transform duration-300">
                </a>

                <!-- Procedures -->
                <div
                    class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                    <div>
                        <h3 class="text-lg font-semibold">Procedures</h3>
                        <p class="text-sm mt-1">
                            Safe, Proven Medical Procedures
                        </p>
                    </div>

                    <img src="./assets/icons/procedures.png" alt=""
                        class="group-hover:scale-110 transition-transform duration-300">
                </div>

                <!-- Conditions -->
                <div
                    class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                    <div>
                        <h3 class="text-lg font-semibold">Conditions</h3>
                        <p class="text-sm mt-1">
                            Health Conditions and Ailments we Treat
                        </p>
                    </div>

                    <img src="./assets/icons/stethescope.png" alt=""
                        class="group-hover:scale-110 transition-transform duration-300">
                </div>

                <!-- Health Packages -->
                <a href="./health-packages.php">
                    <div
                        class="group bg-white rounded-2xl p-6 flex justify-between items-center
               shadow-md text-[#6A6A6A]
               bg-[radial-gradient(#e5e7eb_1px,transparent_1px)]
               [background-size:12px_12px]
               hover:-translate-y-2 hover:shadow-xl
               transition-all duration-300 ease-out cursor-pointer">

                        <div>
                            <h3 class="text-lg font-semibold">Health Packages</h3>
                            <p class="text-sm mt-1">
                                Health Conditions we Treat
                            </p>
                        </div>

                        <img src="./assets/icons/health-packages.png" alt=""
                            class="group-hover:scale-110 transition-transform duration-300">
                    </div>
                </a>

            </div>
        </div>
    </section>
    <section class="md:hidden w-full px-4 py-6 bg-white">
        <div class="flex flex-col gap-4 max-w-md mx-auto">

            <!-- Book Appointment -->
            <a href="https://nanohospitals.karexpert.com/account-management/login"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              bg-[#FF4B4B] text-white font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img src="./assets/icons/book-appointment (2).png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300  w-10 h-10">
                Book Appointments
            </a>

            <!-- Our Hospitals -->
            <!-- <a href="/hospitals"
            class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

            <img
              src="./assets/icons/doctor.png"
              alt=""
              class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
            Conditions
          </a> -->


            <!-- Doctors -->
            <a href="./doctor-profile.php"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img src="./assets/icons/doctor.png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
                Doctors
            </a>

            <!-- Specialities -->
            <a href="./specialties.php"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img src="./assets/icons/specialities.png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
                Specialities
            </a>



            <!-- Facilities -->
            <a href="#"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img src="./assets/icons/procedures.png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
                procedures
            </a>

            <!-- Second Opinion -->
            <a href="./health-packages.php"
                class="group flex items-center gap-4
              w-full h-14 px-6
              rounded-2xl border border-gray-300
              text-gray-500 font-medium
              transition-all duration-200 ease-out
              active:-translate-y-1 active:scale-[0.98]
              active:shadow-lg focus-visible:shadow-lg">

                <img src="./assets/icons/health-packages.png" alt=""
                    class="group-hover:scale-110 transition-transform duration-300 w-10 h-10">
                Health Package
            </a>

        </div>
    </section>


    <div class="hidden md:block">
        <section class=" flex items-center justify-center p-4  mt-10">
            <div class="max-w-5xl w-full ">

                <div class="text-center mb-8">
                    <h1 class="text-4xl md:text-3xl font-bold mb-3">
                        <span class="text-red-500">Nano.</span>
                        <span class="text-[#737373]"> The Patient's Choice</span>
                    </h1>
                    <p class="font-semibold text-[#737373] text-lg mb-1 ">World Class Infrastructure</p>
                    <a href="./why-nano.php"
                        class="inline-flex items-center gap-2 text-red-500 mt-2 hover:gap-3 transition-all">
                        Know More
                        <svg class="w-5 h-5 bg-red-500 text-white rounded-full p-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>


                <div class="relative w-full mx-auto" style="height: 600px; max-width: 700px;">

                    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                        <div class="w-[450px] h-[450px] rounded-full overflow-hidden shadow-2xl border-8 border-white">

                            <img loading="lazy" id="centerImage" src="./assets/banners/patients-choice.webp"
                                alt="Hospital" class="w-full h-full object-cover transition-opacity duration-500">
                        </div>
                    </div>


                    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
                        style="width: 560px; height: 560px;">
                        <svg class="w-full h-full" viewBox="0 0 560 560">
                            <circle cx="280" cy="280" r="275" fill="none" stroke="#d1d5db"
                                stroke-width="2" stroke-dasharray="10,10" />
                        </svg>
                    </div>

                    <div class="absolute left-1/2 -translate-x-1/2 z-20" style="top: 5px;">
                        <div class="flex flex-col items-center">
                            <button onclick="changeFeature(0)"
                                class="orb w-12 h-12 rounded-full bg-red-500 border-4 border-red-500 shadow-lg hover:scale-110 transition-all duration-300"></button>

                        </div>
                    </div>

                    <div class="absolute z-20" style="right: 50px; top: 50%; transform: translateY(-50%);">
                        <button onclick="changeFeature(1)"
                            class="orb w-12 h-12 rounded-full bg-white border-4 border-gray-300 shadow-lg hover:scale-110 transition-all duration-300"></button>
                        <div class="absolute left-16 top-1/2 -translate-y-1/2 text-left w-36">
                            <h3 class="font-semibold text-[#737373] text-lg mb-1 ">Leading Medical<br>Doctors</h3>
                            <a href="./doctor-profile.php"
                                class="inline-flex items-center gap-1 text-red-500 text-xs hover:gap-2 transition-all">
                                Know More
                                <svg class="w-4 h-4 bg-red-500 text-white rounded-full p-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="absolute z-20" style="right: 130px; bottom: 80px;">
                        <button onclick="changeFeature(2)"
                            class="orb w-12 h-12 rounded-full bg-white border-4 border-gray-300 shadow-lg hover:scale-110 transition-all duration-300"></button>
                        <div class="absolute left-16 top-1/2 -translate-y-1/2 text-left w-32">
                            <h3 class="font-semibold text-[#737373] text-lg mb-1">Latest high-end Facilities</h3>
                            <a href="./health-facilities.php"
                                class="inline-flex items-center gap-1 text-red-500 text-xs hover:gap-2 transition-all">
                                Know More
                                <svg class="w-4 h-4 bg-red-500 text-white rounded-full p-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="absolute z-20" style="left: 130px; bottom: 80px;">
                        <button onclick="changeFeature(3)"
                            class="orb w-12 h-12 rounded-full bg-white border-4 border-gray-300 shadow-lg hover:scale-110 transition-all duration-300"></button>
                        <div class="absolute right-16 top-1/2 -translate-y-1/2 text-right w-32">
                            <h3 class="font-semibold text-[#737373] text-lg mb-1">Patient-First<br>Care Team</h3>
                            <a href="./patient-testimonials.php"
                                class="inline-flex items-center justify-end gap-1 text-red-500 text-xs hover:gap-2 transition-all">
                                Know More
                                <svg class="w-4 h-4 bg-red-500 text-white rounded-full p-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="absolute z-20" style="left: 50px; top: 50%; transform: translateY(-50%);">
                        <button onclick="changeFeature(4)"
                            class="orb w-12 h-12 rounded-full bg-white border-4 border-gray-300 shadow-lg hover:scale-110 transition-all duration-300"></button>
                        <div class="absolute right-16 top-1/2 -translate-y-1/2 text-right w-36">
                            <h3 class="font-semibold text-[#737373] text-lg mb-1">Trusted Quality<br>Care</h3>
                            <a href="#"
                                class="inline-flex items-center justify-end gap-1 text-red-500 text-xs hover:gap-2 transition-all">
                                Know More
                                <svg class="w-4 h-4 bg-red-500 text-white rounded-full p-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>





        </section>
    </div>


    <!-- MOBILE ONLY -->
    <section class="md:hidden px-4 py-6 bg-white">

        <!-- ITEM 1 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(0)"
                class="w-full flex justify-between items-center py-4 text-[#737373] font-medium text-sm">
                World Class Infrastructure
                <span id="icon-0" class="text-xl">˄</span>
            </button>

            <div id="content-0" class="pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img src="./assets/banners/patients-choice.webp" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="./why-nano.php" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Know More
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(1)"
                class="w-full flex justify-between items-center py-4 text-gray-500 text-sm">
                Leading Medical Doctors
                <span id="icon-1" class="text-xl">˅</span>
            </button>

            <div id="content-1" class="hidden pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img src="./assets/banners/leading-doctors.webp" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="./why-nano.php" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Know More
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(2)"
                class="w-full flex justify-between items-center py-4 text-gray-500 text-sm">
                Latest high-end Facilities
                <span id="icon-2" class="text-xl">˅</span>
            </button>

            <div id="content-2" class="hidden pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img src="./assets/banners/high-end.jpg" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="./why-nano.php" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Know More
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ITEM 4 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(3)"
                class="w-full flex justify-between items-center py-4 text-gray-500 text-sm">
                Patient-First Care Team
                <span id="icon-3" class="text-xl">˅</span>
            </button>

            <div id="content-3" class="hidden pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img src="./assets/banners/patient-first.webp" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="./why-nano.php" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Know More
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- ITEM 5 -->
        <div class="border-b border-gray-300">
            <button onclick="toggleAccordion(4)"
                class="w-full flex justify-between items-center py-4 text-gray-500 text-sm">
                Trusted Quality Care
                <span id="icon-4" class="text-xl">˅</span>
            </button>

            <div id="content-4" class="hidden pb-6">
                <div class="flex justify-center my-6">
                    <div class="w-[260px] h-[260px] rounded-full overflow-hidden shadow-lg">
                        <img src="./assets/banners/trusted-quality-care.webp" class="w-full h-full object-cover" />
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="./why-nano.php" class="flex items-center gap-2 text-red-500 text-sm font-medium">
                        Know More
                        <span
                            class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">→</span>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <section class="w-full py-10">

        <!-- HEADING -->
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-semibold text-[#737373]">
                Nano Centers of
                <span class="text-red-500 font-semibold">Excellence</span>
            </h2>

            <!-- TABS -->
            <div class="flex justify-center flex-wrap gap-24 mt-6 border-b border-gray-200">

                <!-- SPECIALITIES (ACTIVE) -->
                <button class="tab-btn relative text-xl  pb-4 text-red-500 font-semibold hover:text-red-500 transition"
                    data-target="specialities">
                    Specialities

                    <!-- underline -->
                    <span
                        class="absolute left-1/2 -translate-x-1/2 bottom-0
             w-32 h-[2px] bg-red-500 rounded-full">
                    </span>
                </button>

                <!-- PROCEDURES -->
                <button class="tab-btn relative text-xl  pb-4 text-gray-500 font-semibold hover:text-red-500 transition"
                    data-target="procedures">
                    Procedures
                </button>

                <!-- CONDITIONS -->
                <button class="tab-btn relative text-xl  pb-4 text-gray-500 font-semibold hover:text-red-500 transition"
                    data-target="conditions">
                    Conditions
                </button>

            </div>


        </div>

        <!-- ================= SPECIALITIES ================= -->
        <div id="specialities"
            class="tab-content show flex flex-wrap justify-center gap-y-10 gap-10 justify-items-center mt-6 md:px-28">
            <!-- 1. Anaesthesia -->
            <a href="./bone-and-joint.php"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img src="./assets/specialities/bone-and-joint.webp"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        Bone &<br />Joint Care
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img src="./assets/specialities/bone-and-joint.webp"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Bone & Joint Care</h3>
                            <p class="text-sm leading-relaxed opacity-95">Advanced diagnosis and treatment for bone, joint
                                and musculoskeletal disorders.</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a> <!-- 2. Invasive & Non-Invasive Cardiology -->
            <a href="./child-care.php"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img src="./assets/specialities/child-care.webp"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        Child<br />Care
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img src="./assets/specialities/child-care.webp"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Child Care</h3>
                            <p class="text-sm leading-relaxed opacity-95">Compassionate pediatric care focused on the
                                health, growth, and well-being of children.</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a> <!-- 3. Cardiac Thoracic Surgery -->
            <a href="./women-care.php"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img src="./assets/specialities/women-care-removebg-preview.webp"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        Women’s<br />Care
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img src="./assets/specialities/women-care-removebg-preview.webp"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Women’s Care</h3>
                            <p class="text-sm leading-relaxed opacity-95">Comprehensive healthcare services addressing
                                women’s health needs across all life stages.</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a> <!-- 4. Critical Care Medicine -->
            <a href="./general-medicine.php"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img src="./assets/specialities/general-medicine.webp"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        General<br />Medicine
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img src="./assets/specialities/general-medicine.webp"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">General Medicine</h3>
                            <p class="text-sm leading-relaxed opacity-95">Comprehensive healthcare services addressing
                                women’s health needs across all life stages.</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>

            </a> <!-- 5. Dermatology -->
            <a href="./heart-care.php"
                class="group relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-lg cursor-pointer">

                <div class="absolute inset-0 bg-cover bg-no-repeat"
                    style="background-image: url('./assets/background/Frame 134.png');"></div>

                <!-- Default -->
                <img src="./assets/specialities/heart-care.webp"
                    class="absolute left-10 top-1/2 -translate-y-1/2 h-[300px] object-contain z-10
                  transition-all duration-300 group-hover:opacity-0 group-hover:scale-95" />

                <div
                    class="absolute left-6 top-1/2 -translate-y-1/2 z-10
                  transition-opacity duration-300 group-hover:opacity-0">
                    <h3 class="text-red-500 font-semibold text-xl leading-snug">
                        Heart<br />Care
                    </h3>
                </div>

                <!-- Hover -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="absolute inset-0 bg-red-600/80"></div>

                    <img src="./assets/specialities/heart-care.webp"
                        class="absolute right-0 top-1/2 -translate-y-1/2 h-[260px]
                    object-contain opacity-30 pointer-events-none
                    filter brightness-200 saturate-0" />

                    <div class="relative z-20 h-full p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold mb-4">Heart Care</h3>
                            <p class="text-sm leading-relaxed opacity-95">Advanced cardiac care with diagnostics,
                                interventions, and expert cardiologists.</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium">Read More</span>
                            <span
                                class="w-10 h-10 flex items-center justify-center rounded-full border border-white">→</span>
                        </div>
                    </div>
                </div>


            </a>

            <a href="./specialties.php"
                class="flex justify-center items-center font-semibold text-2xl text-[#848484] gap-2 pt-12">
                <h3>View all Specialities</h3>
                <img loading="lazy" src="./assets/arrow (2).png" alt="">
            </a>
        </div>

        <!-- ================= PROCEDURES ================= -->
        <div id="procedures"
            class="tab-content hidden grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1
           gap-6 justify-items-center mt-10 px-4">

            <div class="rounded-2xl border p-5 w-[260px] shadow bg-white text-center">
                <img loading="lazy" src="./assets/ct-scan.webp" class="h-40 w-full object-cover rounded-xl mb-4" />
                <h3 class="font-semibold text-[#5c2c20]">CT Scan</h3>
            </div>

            <div class="rounded-2xl border p-5 w-[260px] shadow bg-white text-center">
                <img loading="lazy" src="./assets/endoscopy.webp" class="h-40 w-full object-cover rounded-xl mb-4" />
                <h3 class="font-semibold text-[#5c2c20]">Endoscopy</h3>
            </div>

        </div>

        <!-- ================= CONDITIONS ================= -->
        <div id="conditions"
            class="tab-content hidden grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1
           gap-6 justify-items-center mt-10 px-4">

            <div class="rounded-2xl border p-5 w-[260px] shadow bg-white text-center">
                <h3 class="text-lg font-semibold text-[#5c2c20] mb-2">Arthritis</h3>
                <p class="text-sm text-gray-600">
                    Chronic joint inflammation causing pain and stiffness.
                </p>
            </div>

            <div class="rounded-2xl border p-5 w-[260px] shadow bg-white text-center">
                <h3 class="text-lg font-semibold text-[#5c2c20] mb-2">Hypertension</h3>
                <p class="text-sm text-gray-600">
                    High blood pressure requiring long-term management.
                </p>
            </div>

        </div>

    </section>


    <section class="w-full py-20 bg-[#f9f9f9]">
        <div class="container mx-auto px-4">

            <!-- Section Heading -->
            <h2 class="text-center text-2xl font-semibold text-[#737373] mb-14">
                Our Medical Services
            </h2>

            <!-- MAIN GRID -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-stretch">

                <!-- LEFT CARD (Tall) -->
                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img loading="lazy" src="./assets/Frame 84.png" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-lg font-semibold text-[#737373] mb-2">
                                Health Checkups
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                take charge of your well being with a health experience customized for you
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <a href="./doctor-profile.php"
                                class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                                Know More
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
                            </a>
                            <img loading="lazy" src="./assets/icons/stethescope.png" alt="">
                        </div>
                    </div>
                </div>

                <!-- CENTER COLUMN (2 STACKED CARDS) -->
                <div class="grid grid-rows-2 gap-10 lg:px-10">

                    <!-- Center Card Top -->
                    <div
                        class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] p-6 flex flex-col justify-between px-10">
                        <div>
                            <h3 class="text-lg font-semibold text-[#737373] mb-2">
                                24/7 Emergency Care
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                Round-the-clock emergency treatment when every second counts
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <a href="./twenty-four-seven-services.php"
                                class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                                Know More
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
                            </a>
                            <img loading="lazy" src="./assets/icons/syren.png" alt="">
                        </div>
                    </div>

                    <!-- Center Card Bottom -->
                    <div
                        class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] p-6 flex flex-col justify-between lg:px-10">
                        <div>
                            <h3 class="text-lg font-semibold text-[#737373] mb-2">
                                Specialized Surgical Care
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                Expert-led surgeries using modern techniques for faster recovery
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <a href="./specialties.php"
                                class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                                Know More
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
                            </a>
                            <img loading="lazy" src="./assets/icons/knife (2).png" alt="">
                        </div>
                    </div>

                </div>

                <!-- RIGHT CARD (Tall) -->
                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img loading="lazy" src="./assets/second-opineon.png" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-lg font-semibold text-[#737373] mb-2">
                                Second Opinion
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                Confirm diagnosis and take informed decision about your treatment plan
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <a href="./second-opinion.php"
                                class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                                Know More
                                <span
                                    class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
                            </a>
                            <img loading="lazy" src="./assets/icons/msg.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="relative w-full bg-[#E7484E] overflow-hidden h-[555px]">
        <!-- dotted pattern -->
        <div
            class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.25)_1px,transparent_1px)] bg-[size:14px_14px] opacity-40">
        </div>

        <div class="relative container mx-auto px-6 py-16 lg:py-20 flex flex-col lg:flex-row items-center gap-10">

            <!-- LEFT CONTENT -->
            <div class="w-full lg:w-1/2 text-white space-y-4">
                <p class="text-xl tracking-wide font-semibold">
                    Nano Care Beyond Boundaries
                </p>

                <h1 class="text-3xl lg:text-4xl xl:text-5xl font-semibold leading-tight">
                    Fostering health with <br>
                    cutting-edge medical <br>
                    services trusted <br>
                    internationally
                </h1>

                <a href="./international-patients.php"
                    class="inline-block mt-6 bg-white text-[#E7484E] font-medium px-6 py-3 rounded-full hover:bg-gray-100 transition">
                    Enquire Now
                </a>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <img src="./assets/banners/map.png" alt="Global Healthcare Network"
                    class="max-w-full h-auto object-contain" />
            </div>

        </div>
    </section>

    <section class="w-full py-24 bg-white">
        <div class="container mx-auto px-4">

            <!-- Heading -->
            <h2 class="text-center text-2xl font-semibold text-gray-600 mb-14">
                Patient Stories
            </h2>

            <!-- GRID WRAPPER -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 items-center">



                <!-- MID LEFT COLUMN -->
                <div class="space-y-6">
                    <!-- New Strength -->
                    <div class="relative rounded-2xl overflow-hidden cursor-pointer video-card"
                        data-instagram-url="https://www.instagram.com/reel/DQOIgt8E2Yq/">
                        <img loading="lazy" src="./assets/testimonials/Frame 747.png" class="w-full h-56 object-cover" />
                        <div class="absolute inset-0 bg-black/25"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-lg">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="font-semibold">Healthy Start</p>
                            <p class="text-sm opacity-90">Hegde Family</p>
                        </div>
                    </div>

                </div>
                <!-- LEFT COLUMN -->
                <div class="space-y-6">
                    <!-- Healthy Start -->
                    <div class="relative rounded-2xl overflow-hidden cursor-pointer video-card"
                        data-instagram-url="https://www.instagram.com/reel/DQOIgt8E2Yq/">
                        <img loading="lazy" src="./assets/testimonials/Frame 744.png" class="w-full h-56 object-cover" />
                        <div class="absolute inset-0 bg-black/25"></div>

                        <!-- Play -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-lg">
                                ▶
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="font-semibold">Healthy Start</p>
                            <p class="text-sm opacity-90">Hegde Family</p>
                        </div>
                    </div>

                    <!-- Pain Free -->
                    <div class="relative rounded-2xl overflow-hidden cursor-pointer video-card"
                        data-instagram-url="https://www.instagram.com/reel/C6_WCBbt13G">
                        <img loading="lazy" src="./assets/testimonials/Frame 745.png" class="w-full h-44 object-cover" />
                        <div class="absolute inset-0 bg-black/25"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center text-white">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-3 left-3 text-white text-sm">
                            <p class="font-semibold">Pain Free</p>
                            <p class="opacity-90">Ms Anju Nadkarni</p>
                        </div>
                    </div>
                </div>
                <!-- CENTER LARGE CARD -->
                <div class="relative rounded-3xl overflow-hidden lg:col-span-1 cursor-pointer video-card"
                    data-instagram-url="https://www.instagram.com/reel/DQOIgt8E2Yq">
                    <img loading="lazy" src="./assets/testimonials/Frame 743.png"
                        class="w-full h-[450px] object-cover" />
                    <div class="absolute inset-0 bg-black/20"></div>

                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                            ▶
                        </div>
                    </div>

                    <div class="absolute bottom-5 left-5 text-white">
                        <p class="font-semibold text-lg">Cardiac care</p>
                        <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                    </div>
                </div>

                <!-- MID RIGHT COLUMN -->
                <div class="space-y-6">
                    <!-- Cancer Free -->
                    <div class="relative rounded-2xl overflow-hidden cursor-pointer video-card"
                        data-instagram-url="https://www.instagram.com/reel/CrpafHty-Pz/">
                        <img loading="lazy" src="./assets/testimonials/Frame 746.png" class="w-full h-56 object-cover" />
                        <div class="absolute inset-0 bg-black/25"></div>

                        <!-- Play -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-lg">
                                ▶
                            </div>
                        </div>

                        <!-- Text -->
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="font-semibold">Healthy Start</p>
                            <p class="text-sm opacity-90">Hegde Family</p>
                        </div>
                    </div>

                    <!-- Pain Free -->
                    <div class="relative rounded-2xl overflow-hidden cursor-pointer video-card"
                        data-instagram-url="https://www.youtube.com/shorts/H-uw003ra-M">
                        <img loading="lazy" src="./assets/testimonials/Frame 748.png" class="w-full h-44 object-cover" />
                        <div class="absolute inset-0 bg-black/25"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center text-white">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-3 left-3 text-white text-sm">
                            <p class="font-semibold">Pain Free</p>
                            <p class="opacity-90">Ms Anju Nadkarni</p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div>
                    <!-- Heart Healed -->
                    <div class="relative rounded-2xl overflow-hidden cursor-pointer video-card"
                        data-instagram-url="https://www.instagram.com/reel/DLmn0CySkY2/">>
                        <img loading="lazy" src="./assets/testimonials/Frame 749.png" class="w-full h-56 object-cover" />
                        <div class="absolute inset-0 bg-black/25"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center text-white">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="font-semibold">Heart Healed</p>
                            <p class="text-sm opacity-90">Mr Gaurav Kamath</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="mt-14 flex justify-center">
                <a href="./patient-testimonials.php" class="flex items-center gap-2 text-red-500 font-medium">
                    View All Patient Stories
                    <span class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">
                        →
                    </span>
                </a>
            </div>

        </div>
    </section>



 <section class="w-full py-20 ">
    <h3 class="text-center text-2xl font-semibold text-gray-600 mb-14">
      Notable Faces. Nano Care.
    </h3>

    <div class="flex justify-center gap-10   flex-wrap ">
      <div class="max-w-sm  overflow-hidden shadow-lg rounded-2xl">
        <img loading="lazy" class="w-full" src="./assets/actor.png" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 text-[#FA424A]">Aasif Kshathriya</div>
          <p class="text-[#737373] text-base">
            Indian Film Actor, Director & Writer </p>
          <p class="text-[#737373] text-base mt-5">
            Nano Hospital feels like home. Dr. Mohan, Anand, Mahima, and the emergency team provide compassionate care with a healing touch. I vouch for Nano Hospitals. </p>
        </div>

      </div>
      <div class="max-w-sm  overflow-hidden shadow-lg rounded-2xl">
        <img loading="lazy" class="w-full" src="./assets/actor2.png" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 text-[#FA424A]">Shwetha Srinivasa</div>
          <p class="text-[#737373] text-base">
            Kannada Film Actor</p>
          <p class="text-[#737373] text-base mt-5">
            After my hand treatment with Dr. Mohan, I feel pain-free, confident, and truly cared for — forever grateful.</p>
        </div>

      </div>
      <div class="max-w-sm  overflow-hidden shadow-lg rounded-2xl">
        <img loading="lazy" class="w-full" src="./assets/actor-3.png" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 text-[#FA424A]">Aniish Tejeshwar</div>
          <p class="text-[#737373] text-base">
            Kannada Film Actor </p>
          <p class="text-[#737373] text-base mt-5">
            Grateful to experience care that’s honest, attentive, and truly human — Nano Hospital stands out. </p>
        </div>

      </div>
    </div>

  </section>



 <section class="w-full py-28 lg:mt-20 relative overflow-hidden">

    <!-- Dotted Background -->
    <div
      class="absolute inset-0
             bg-[#f5f5f5]
             bg-[radial-gradient(circle,_#bdbdbd_1px,_transparent_1px)]
             [background-size:22px_22px]">
    </div>

    <div class="relative max-w-7xl mx-auto px-6">

      <!-- Heading -->
      <h2 class="text-center text-3xl font-semibold text-[#737373] mb-14">
        Awards & Recognition
      </h2>

      <!-- Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 justify-items-center">

        <!-- Card 1 -->
        <div class="bg-white w-full max-w-md rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] px-8 py-6 flex items-center gap-6">
          <img loading="lazy" src="./assets/icons/Vector (1).png" class="w-10" alt="">
          <div class="text-center flex-1">
            <p class="text-red-500 font-medium">2023</p>
            <p class="text-gray-600 mt-2">Times Health Excellence</p>
            <p class="text-red-500 font-medium">
              Excellence in Tertiary Care Hospital
            </p>
            <p class="text-[#737373] mt-1">Nano Hospitals</p>
          </div>
          <img loading="lazy" src="./assets/icons/Vector (2).png" class="w-10" alt="">
        </div>

        <!-- Card 2 -->
        <div class="bg-white w-full max-w-md rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] px-8 py-6 flex items-center gap-6">
          <img loading="lazy" src="./assets/icons/Vector (1).png" class="w-10" alt="">
          <div class="text-center flex-1">
            <p class="text-red-500 font-medium">2023</p>
            <p class="text-gray-600 mt-2">Radio City Business Titans</p>
            <p class="text-red-500 font-medium">
              Best Healthcare Facility
            </p>
            <p class="text-[#737373] mt-1">Nano Hospitals</p>
          </div>
          <img loading="lazy" src="./assets/icons/Vector (2).png" class="w-10" alt="">
        </div>

        <!-- Card 3 -->
        <div class="bg-white w-full max-w-md rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] px-8 py-6 flex items-center gap-6">
          <img loading="lazy" src="./assets/icons/Vector (1).png" class="w-10" alt="">
          <div class="text-center flex-1">
            <p class="text-red-500 font-medium">2023</p>
            <p class="text-gray-600 mt-2">Radio City Business Titans</p>
            <p class="text-red-500 font-medium">
              Best Healthcare Facility
            </p>
            <p class="text-[#737373] mt-1">Nano Hospitals</p>
          </div>
          <img loading="lazy" src="./assets/icons/Vector (2).png" class="w-10" alt="">
        </div>

      </div>
    </div>
  </section>
 <section id="stats-section" class="w-full py-28">
    <div class="container mx-auto px-6">

      <h2 class="text-center text-2xl md:text-3xl font-semibold text-[#737373] mb-12">
        Nano Hospitals at a Glance
      </h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <div class="bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden">
          <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:12px_12px] opacity-60"></div>

          <div class="relative z-10 space-y-4">
            <img loading="lazy" src="./assets/icons/stethescope.png" class="mx-auto h-12" alt="">
            <div class="counter text-4xl font-bold text-red-500" data-target="10">0</div>

            <p class="text-red-500 text-xl font-medium">years</p>
            <p class="text-gray-400 text-xl">of Medical Experience</p>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden">
          <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:12px_12px] opacity-60"></div>

          <div class="relative z-10 space-y-4">
            <img loading="lazy" src="./assets/icons/doctor.png" class="mx-auto h-12" alt="">
            <div class="counter text-4xl font-bold text-red-500" data-target="100" data-suffix="+">0</div>

            <p class="text-red-500 text-xl font-medium">Medical Specialists</p>
            <p class="text-gray-400 text-xl">Caring for You</p>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden">
          <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:12px_12px] opacity-60"></div>

          <div class="relative z-10 space-y-4">
            <img loading="lazy" src="./assets/icons/knife (2).png" class="mx-auto h-12" alt="">
            <p class="counter text-4xl font-bold text-red-500" data-target="15000" data-suffix="+">0</p>

            <p class="text-red-500 text-xl font-medium">Surgeries</p>
            <p class="text-gray-400 text-xl">performed</p>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 text-center relative overflow-hidden">
          <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:12px_12px] opacity-60"></div>

          <div class="relative z-10 space-y-4">
            <img loading="lazy" src="./assets/icons/smile.png" class="mx-auto h-12" alt="">
            <p class="counter text-4xl font-bold text-red-500" data-target="500000" data-suffix="+">0</p>

            <p class="text-red-500 text-xl font-medium">Happy</p>
            <p class="text-gray-400 text-xl">Patients</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="w-full  py-24">
    <div class="container mx-auto px-6">

      <!-- Heading -->
      <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-600 mb-14">
        Nano Hospitals Near You
      </h2>

      <!-- Cards Wrapper -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

        <!-- Card 1 -->
        <div class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] overflow-hidden">
          <!-- Image -->
          <div class="h-[320px] overflow-hidden">
            <img
              src="./assets/uttarahalli.webp"
              alt="Nano Hospital Uttarahalli"
              class="w-full h-full object-cover" />
          </div>

          <!-- Content -->
          <div class="p-8 text-center space-y-4">
            <!-- Location -->
            <div class="flex justify-center items-center gap-2 text-gray-500 text-sm">
              <span>📍</span>
              <span>Uttarahalli, Bengaluru</span>
            </div>

            <!-- Title -->
            <h3 class="text-2xl font-semibold text-[#737373] leading-snug">
              Nano Hospitals,<br />Uttarahalli, Bengaluru
            </h3>

            <!-- CTA -->
            <a
              href="./uttarahalli.php"
              class="inline-flex items-center gap-3 text-gray-500 font-medium group">
              know more
              <span
                class="w-8 h-8 rounded-full bg-red-500 text-white flex items-center justify-center
                     transition-transform group-hover:translate-x-1">
                →
              </span>
            </a>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] overflow-hidden">
          <!-- Image -->
          <div class="h-[320px] overflow-hidden">
            <img
              src="./assets/hulimavu.webp"
              alt="Nano Hospital Hulimavu"
              class="w-full h-full object-cover" />
          </div>

          <!-- Content -->
          <div class="p-8 text-center space-y-4">
            <!-- Location -->
            <div class="flex justify-center items-center gap-2 text-gray-500 text-sm">
              <span>📍</span>
              <span>Hulimavu, Bengaluru</span>
            </div>

            <!-- Title -->
            <h3 class="text-2xl font-semibold text-[#737373] leading-snug">
              Nano Hospitals,<br />Hulimavu, Bengaluru
            </h3>

            <!-- CTA -->
            <a
              href="./hulimavu.php"
              class="inline-flex items-center gap-3 text-gray-500 font-medium group">
              know more
              <span
                class="w-8 h-8 rounded-full bg-red-500 text-white flex items-center justify-center
                     transition-transform group-hover:translate-x-1">
                →
              </span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

    <!-- Instagram Video Modal -->
    <!-- Video Modal -->
    <!-- Video Modal -->
    <div id="instaVideoModal" class="fixed inset-0 hidden z-50 bg-black/70 flex items-center justify-center">

        <div class="relative bg-white rounded-xl max-w-sm w-[90%] p-2">
            <button id="instaCloseBtn" class="absolute -top-3 -right-3 bg-black text-white w-8 h-8 rounded-full">
                ✕
            </button>

            <div id="instaEmbed"></div>
        </div>
    </div>

    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 bg-black/70 hidden z-50 flex items-center justify-center">

        <div class="relative w-[90%] max-w-3xl bg-black rounded-xl overflow-hidden">

            <!-- Close Button -->
            <button id="closeModal"
                class="absolute top-3 right-3 z-10 bg-white text-black
             w-9 h-9 rounded-full flex items-center justify-center text-xl font-bold">
                ×
            </button>

            <!-- Video -->
            <iframe id="youtubePlayer" class="w-full aspect-video" src="" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen>
            </iframe>

        </div>
    </div>

    <script>
        const ytModal = document.getElementById('videoModal');
        const ytPlayer = document.getElementById('youtubePlayer');
        const ytClose = document.getElementById('closeModal');

        const instaModal = document.getElementById('instaVideoModal');
        const instaEmbed = document.getElementById('instaEmbed');
        const instaClose = document.getElementById('instaCloseBtn');

        document.querySelectorAll('.video-card').forEach(card => {
            card.addEventListener('click', () => {

                /* ---------- YOUTUBE ---------- */
                if (card.dataset.videoId) {
                    const videoId = card.dataset.videoId;

                    ytPlayer.src =
                        `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1&rel=0`;

                    ytModal.classList.remove('hidden');
                    return;
                }

                /* ---------- INSTAGRAM ---------- */
                if (card.dataset.instagramUrl) {
                    const url = card.dataset.instagramUrl;

                    instaEmbed.innerHTML = `
          <blockquote class="instagram-media"
            data-instgrm-permalink="${url}"
            data-instgrm-version="14"
            style="margin:0 auto; width:100%;">
          </blockquote>
        `;

                    instaModal.classList.remove('hidden');
                    processInstagram();
                }
            });
        });

        function processInstagram() {
            if (window.instgrm?.Embeds) {
                window.instgrm.Embeds.process();
            } else {
                setTimeout(processInstagram, 300);
            }
        }

        /* ---------- CLOSE HANDLERS ---------- */
        ytClose.addEventListener('click', closeYT);
        ytModal.addEventListener('click', e => e.target === ytModal && closeYT());

        function closeYT() {
            ytModal.classList.add('hidden');
            ytPlayer.src = '';
        }

        instaClose.addEventListener('click', closeInsta);
        instaModal.addEventListener('click', e => e.target === instaModal && closeInsta());

        function closeInsta() {
            instaModal.classList.add('hidden');
            instaEmbed.innerHTML = '';
        }
    </script>

    <script>
        const features = [{
                title: "World Class Infrastructure",
                image: "./assets/banners/patients-choice.webp"
            },
            {
                title: "Leading Medical Doctors",
                image: "./assets/banners/leading-doctors.webp"
            },
            {
                title: "Latest high-end Facilities",
                image: "./assets/banners/high-end.jpg"
            },
            {
                title: "Patient-First Care Team",
                image: "./assets/banners/patient-first.webp"
            },
            {
                title: "Trusted Quality Care",
                image: "./assets/banners/trusted-quality-care.webp"
            }
        ];

        function changeFeature(index) {
            const centerImage = document.getElementById('centerImage');
            const orbs = document.querySelectorAll('.orb');

            // Fade out
            centerImage.style.opacity = '0';

            setTimeout(() => {
                centerImage.src = features[index].image;
                centerImage.alt = features[index].title;
                centerImage.style.opacity = '1';
            }, 250);

            // Update orbs
            orbs.forEach((orb, i) => {
                if (i === index) {
                    orb.classList.remove('bg-white', 'border-gray-300', 'w-10', 'h-10');
                    orb.classList.add('bg-red-500', 'border-red-500', 'w-10', 'h-10');
                } else {
                    orb.classList.remove('bg-red-500', 'border-red-500', 'w-10', 'h-10');
                    orb.classList.add('bg-white', 'border-gray-300', 'w-10', 'h-10');
                }
            });
        }
    </script>

    <script>
        const tabs = document.querySelectorAll(".tab-btn");
        const contents = document.querySelectorAll(".tab-content");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                const target = tab.dataset.target;

                // reset tabs
                tabs.forEach(t => {
                    t.classList.remove("text-red-500", "font-medium");
                    t.classList.add("text-gray-500");
                    const underline = t.querySelector("span");
                    if (underline) underline.remove();
                });

                // hide contents
                contents.forEach(c => c.classList.add("hidden"));

                // activate tab
                tab.classList.remove("text-gray-500");
                tab.classList.add("text-red-500", "font-medium");

                const underline = document.createElement("span");
                underline.className =
                    "absolute left-0 -bottom-[1px] w-full h-[2px] bg-red-500 rounded-full";
                tab.appendChild(underline);

                // show content
                document.getElementById(target).classList.remove("hidden");
            });
        });
    </script>

    <script>
        function toggleAccordion(index) {
            const contents = document.querySelectorAll('[id^="content-"]');
            const icons = document.querySelectorAll('[id^="icon-"]');

            contents.forEach((el, i) => {
                if (i === index) {
                    el.classList.toggle('hidden');
                    icons[i].textContent = el.classList.contains('hidden') ? '˅' : '˄';
                } else {
                    el.classList.add('hidden');
                    icons[i].textContent = '˅';
                }
            });
        }
    </script>


    <script>
        const counters = document.querySelectorAll(".counter");
        const section = document.getElementById("stats-section");
        let hasAnimated = false;

        const startCounters = () => {
            if (hasAnimated) return;
            hasAnimated = true;

            counters.forEach(counter => {
                const target = +counter.dataset.target;
                const suffix = counter.dataset.suffix || "";
                let current = 0;

                const duration = 1500; // animation time in ms
                const increment = target / (duration / 16);

                const updateCounter = () => {
                    current += increment;

                    if (current >= target) {
                        counter.innerText = target + suffix;
                    } else {
                        counter.innerText = Math.floor(current) + suffix;
                        requestAnimationFrame(updateCounter);
                    }
                };

                updateCounter();
            });
        };

        const observer = new IntersectionObserver(
            entries => {
                if (entries[0].isIntersecting) {
                    startCounters();
                    observer.disconnect();
                }
            }, {
                threshold: 0.4
            }
        );

        observer.observe(section);
    </script>
@endsection
