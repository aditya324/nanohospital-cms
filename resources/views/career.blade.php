@extends('layouts.app')

@section('title', 'carreers at nano hospital')

@push('styles')
@endpush

@section('content')


    <section class="relative w-full min-h-[650px]">
        <!-- Background Image -->
        <img src="./assets/banners/carrier-banner.webp" alt="Complete Health Packages"
            class="absolute inset-0 w-full h-full object-cover" />

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Content Wrapper -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 min-h-[420px]">

                <!-- LEFT CONTENT (CENTERED) -->
                <div class="flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                        Because Healthcare Is Personal So Is Your Career.
                    </h1>
                    <a href="#"
                        class="inline-block bg-[#FA424A] text-white
                 px-8 py-3 rounded-full
                 text-lg font-bold
                 hover:bg-red-600 transition">
                        Explore Jobs
                    </a>
                </div>

                <!-- RIGHT FORM -->


            </div>
        </div>
    </section>


  <section class="py-16 px-4">
    <h3 class="text-[#585858] text-center text-3xl font-semibold mb-12">
        Be Part of the Nano Family – We’re Hiring
    </h3>

    <div class="container mx-auto grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
        
        <!-- CARD -->
        <div class="bg-white rounded-3xl p-4 shadow-xl border border-dashed border-gray-300
                    transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-2xl hover:border-red-400 flex flex-col">

            <div class="rounded-2xl overflow-hidden">
                <img src="./assets/doctor.webp" alt="Doctors"
                     class="w-full h-56 object-cover" />
            </div>

            <div class="text-center mt-4 text-[#585858] flex flex-col flex-grow">
                <h3 class="text-lg font-semibold">Doctors</h3>

                <p class="mt-2 font-medium flex-grow">
                    Serve with Excellence – Join Nano Family as a Doctor Today.
                </p>

                <div class="mt-4">
                    <a href="#"
                       class="px-4 py-2 text-sm font-medium rounded-full bg-red-500 text-white hover:bg-red-600 transition">
                        Explore Jobs
                    </a>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white rounded-3xl p-4 shadow-xl border border-dashed border-gray-300
                    transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-2xl hover:border-red-400 flex flex-col">

            <div class="rounded-2xl overflow-hidden">
                <img src="./assets/nurse.webp" alt="Nurses"
                     class="w-full h-56 object-cover" />
            </div>

            <div class="text-center mt-4 text-[#585858] flex flex-col flex-grow">
                <h3 class="text-lg font-semibold">Nurses</h3>

                <p class="mt-2 font-medium flex-grow">
                    Nurses are the backbone of healthcare, delivering compassion every day.
                </p>

                <div class="mt-4">
                    <a href="#"
                       class="px-4 py-2 text-sm font-medium rounded-full bg-red-500 text-white hover:bg-red-600 transition">
                        Explore Jobs
                    </a>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white rounded-3xl p-4 shadow-xl border border-dashed border-gray-300
                    transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-2xl hover:border-red-400 flex flex-col">

            <div class="rounded-2xl overflow-hidden">
                <img src="./assets/paramedics.webp" alt="Paramedics"
                     class="w-full h-56 object-cover" />
            </div>

            <div class="text-center mt-4 text-[#585858] flex flex-col flex-grow">
                <h3 class="text-lg font-semibold">Paramedics</h3>

                <p class="mt-2 font-medium flex-grow">
                    Our paramedic staff are the first line of care—swift, skilled, and lifesaving.
                </p>

                <div class="mt-4">
                    <a href="#"
                       class="px-4 py-2 text-sm font-medium rounded-full bg-red-500 text-white hover:bg-red-600 transition">
                        Explore Jobs
                    </a>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white rounded-3xl p-4 shadow-xl border border-dashed border-gray-300
                    transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-2xl hover:border-red-400 flex flex-col">

            <div class="rounded-2xl overflow-hidden">
                <img src="./assets/admin.webp" alt="Administrative Staff"
                     class="w-full h-56 object-cover" />
            </div>

            <div class="text-center mt-4 text-[#585858] flex flex-col flex-grow">
                <h3 class="text-lg font-semibold">Administrative Staff</h3>

                <p class="mt-2 font-medium flex-grow">
                    Our administrative staff keep hospital operations seamless and organized.
                </p>

                <div class="mt-4">
                    <a href="#"
                       class="px-4 py-2 text-sm font-medium rounded-full bg-red-500 text-white hover:bg-red-600 transition">
                        Explore Jobs
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
  <section class="w-full py-24 bg-white">
        <div class="container mx-auto px-4">

            <!-- Heading -->
            <h2 class="text-center text-2xl font-semibold text-gray-600 mb-14">
                Life at Nano Hospitals
            </h2>

            <!-- GRID WRAPPER -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 items-center">



                <!-- MID LEFT COLUMN -->
                <div class="space-y-6">
                    <!-- New Strength -->
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="./assets/Frame (3).webp" class="w-full h-44 object-cover" />
                        <div class="absolute inset-0 "></div>


                    </div>
                </div>
                <!-- LEFT COLUMN -->
                <div class="space-y-6">
                    <!-- Healthy Start -->
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="./assets/Frame (6).webp" class="w-full h-56 object-cover" />
                        <div class="absolute inset-0 "></div>

                        <!-- Play -->

                    </div>

                    <!-- Pain Free -->
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="./assets/Frame (3).webp" class="w-full h-44 object-cover" />
                        <div class="absolute inset-0 "></div>


                    </div>
                </div>
                <!-- CENTER LARGE CARD -->
                <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                    <img src="./assets/Frame (2).webp" class="w-full h-[450px] object-cover" />
                    <div class="absolute inset-0 "></div>


                </div>

                <!-- MID RIGHT COLUMN -->
                <div class="space-y-6">
                    <!-- Cancer Free -->
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="./assets/Frame (1).webp" class="w-full h-56 object-cover" />
                        <div class="absolute inset-0 bg-black/25"></div>

                        <!-- Play -->

                    </div>

                    <!-- Pain Free -->
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="./assets/Frame (11).webp" class="w-full h-44 object-cover" />
                        <div class="absolute inset-0 bg-black/25"></div>


                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div>
                    <!-- Heart Healed -->
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="./assets/Frame (13).webp" class="w-full h-56 object-cover" />
                        <div class="absolute inset-0 bg-black/25"></div>


                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="mt-14 flex justify-center">
                <a href="#" class="flex items-center gap-2 text-red-500 font-medium">
                    View All Activities Stories
                    <span class="w-6 h-6 rounded-full bg-red-500 text-white flex items-center justify-center text-xs">
                        →
                    </span>
                </a>
            </div>

        </div>
    </section>
  <section class="w-full py-20 relative overflow-hidden">

        <!-- Dotted Background -->
        <div
            class="absolute inset-0
             bg-[#f5f5f5]
             bg-[radial-gradient(circle,_#bdbdbd_1px,_transparent_1px)]
             [background-size:22px_22px]">
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-3xl font-semibold text-gray-700 mb-14">
                Employees Speak: Inside Life at Nano Hospitals
            </h2>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 justify-items-center">

                <!-- Card 1 -->
                <div class="w-[355.13px] bg-white rounded-3xl p-3 shadow-xl  border border-dashed border-gray-300">
                    <!-- IMAGE -->
                    <div class="rounded-2xl overflow-hidden">
                        <img
                            src="./assets/suhas-gowda.webp"
                            alt="Basic Health Package"
                            class="   object-cover" />
                    </div>

                    <!-- CONTENT -->
                    <div class=" mt-4 px-2 text-[#585858]">
                        <h3 class="text-lg font-semibold text-[#585858] ">
                            Administrative Staff
                        </h3>

                        <!-- PRICE -->
                        <div class="flex justify-center items-center font-semibold gap-3 mt-2 text-[#585858]">
                            Nano Hospitals gives me structure, support, and purpose. It’s a workplace where people are valued and quality care comes first
                        </div>

                        <!-- ACTIONS -->

                    </div>
                    <div class="flex justify-center gap-4 mt-4">
                        <p class="text-[#FA424A] font-semibold">Continue Reading</p>


                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-[355.13px] bg-white rounded-3xl p-3 shadow-xl  border border-dashed border-gray-300">
                    <!-- IMAGE -->
                    <div class="rounded-2xl overflow-hidden">
                        <img
                            src="./assets/arpita-barne.webp"
                            alt="Basic Health Package"
                            class="   object-cover" />
                    </div>

                    <!-- CONTENT -->
                    <div class=" mt-4 px-2 text-[#585858]">
                        <h3 class="text-lg font-semibold text-[#585858] ">
                            Dr Arpita Bharne
                        </h3>

                        <!-- PRICE -->
                        <div class="flex justify-center items-center font-semibold gap-3 mt-2 text-[#585858]">
                            Nano Hospitals empowers me to focus on patient care with confidence and compassion </div>

                        <!-- ACTIONS -->

                    </div>
                    <div class="flex justify-center gap-4 mt-4">
                        <p class="text-[#FA424A] font-semibold">Continue Reading</p>


                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-[355.13px] bg-white rounded-3xl p-3 shadow-xl  border border-dashed border-gray-300">
                    <!-- IMAGE -->
                    <div class="rounded-2xl overflow-hidden">
                        <img
                            src="./assets/jhanvi.webp"
                            alt="Basic Health Package"
                            class="   object-cover" />
                    </div>

                    <!-- CONTENT -->
                    <div class=" mt-4 px-2 text-[#585858]">
                        <h3 class="text-lg font-semibold text-[#585858] ">
                            Ms Janhavi H S
                        </h3>

                        <!-- PRICE -->
                        <div class="flex justify-center items-center font-semibold gap-3 mt-2 text-[#585858]">
                            Nano Hospitals supports nurses with teamwork, training, and respect </div>

                        <!-- ACTIONS -->

                    </div>
                    <div class="flex justify-center gap-4 mt-4">
                        <p class="text-[#FA424A] font-semibold">Continue Reading</p>


                    </div>
                </div>

            </div>
        </div>
    </section>



      <section class="w-full py-20 relative overflow-hidden mt-20">

        <!-- Dotted Background -->
        <div
            class="absolute inset-0
             bg-[#f5f5f5]
             bg-[radial-gradient(circle,_#bdbdbd_1px,_transparent_1px)]
             [background-size:22px_22px]">
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-3xl font-semibold text-gray-700 mb-14">
                Awards & Recognition
            </h2>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 justify-items-center">

                <!-- Card 1 -->
                <div class="bg-white w-full max-w-md rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] px-8 py-6 flex items-center gap-6">
                    <img src="./assets/icons/Vector (1).png" class="w-10" alt="">
                    <div class="text-center flex-1">
                        <p class="text-red-500 font-medium">2023</p>
                        <p class="text-gray-600 mt-2">Times Health Excellence</p>
                        <p class="text-red-500 font-medium">
                            Excellence in Tertiary Care Hospital
                        </p>
                        <p class="text-gray-700 mt-1">Nano Hospitals</p>
                    </div>
                    <img src="./assets/icons/Vector (2).png" class="w-10" alt="">
                </div>

                <!-- Card 2 -->
                <div class="bg-white w-full max-w-md rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] px-8 py-6 flex items-center gap-6">
                    <img src="./assets/icons/Vector (1).png" class="w-10" alt="">
                    <div class="text-center flex-1">
                        <p class="text-red-500 font-medium">2023</p>
                        <p class="text-gray-600 mt-2">Radio City Business Titans</p>
                        <p class="text-red-500 font-medium">
                            Best Healthcare Facility
                        </p>
                        <p class="text-gray-700 mt-1">Nano Hospitals</p>
                    </div>
                    <img src="./assets/icons/Vector (2).png" class="w-10" alt="">
                </div>

                <!-- Card 3 -->
                <div class="bg-white w-full max-w-md rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] px-8 py-6 flex items-center gap-6">
                    <img src="./assets/icons/Vector (1).png" class="w-10" alt="">
                    <div class="text-center flex-1">
                        <p class="text-red-500 font-medium">2023</p>
                        <p class="text-gray-600 mt-2">Radio City Business Titans</p>
                        <p class="text-red-500 font-medium">
                            Best Healthcare Facility
                        </p>
                        <p class="text-gray-700 mt-1">Nano Hospitals</p>
                    </div>
                    <img src="./assets/icons/Vector (2).png" class="w-10" alt="">
                </div>

            </div>
        </div>
    </section>


     <section class="w-full bg-[#f4f4f4] py-20">
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-600 text-center p-5">
            Internship and Campus Programs
        </h2>
        <div class="container mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

                <!-- LEFT CONTENT -->
                <div class="max-w-xl space-y-6">



                    <p class="text-gray-500  font-semibold  md:text-xl">

                        Fellowships are period bound opportunities, for academic/ professional development. They can be focused on professional, academic and/or personal development. These programs typically last one to three years and require applicants to demonstrate exceptional skills, knowledge, and a commitment to their chosen field. Fellowships are sponsored by a specific association, organization, or institution, as per their set eligibility requirements. </p>

                    <a
                        href="#"
                        class="inline-block bg-[#FA424A] text-white
                 px-8 py-3 rounded-full
                 text-lg font-bold
                 hover:bg-red-600 transition">
                        Explore internships
                    </a>

                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative rounded-xl">

                    <div class="rounded-3xl overflow-hidden ">
                        <img
                            src="./assets/internship.webp"
                            alt="Patient First Care"
                            class="w-full h-[360px] object-cover block " />
                    </div>

                </div>



            </div>
        </div>
    </section>

@endsection
