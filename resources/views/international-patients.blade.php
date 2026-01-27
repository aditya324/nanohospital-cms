@extends('layouts.app')

@section('title', 'second opinion')

@push('styles')
@endpush

@section('content')


    <section class="w-full  bg-[#EFEFEF]">
        <div class="max-w-fit mx-auto lg:px-10 px-5">

            <!-- Red Wrapper -->
            <div class="relative rounded-3xl overflow-hidden
             bg-[#f24b4b] p-10 md:p-14">

                <!-- Dotted Pattern -->
                <div
                    class="absolute inset-0 opacity-30
               bg-[radial-gradient(#ffffff_1px,transparent_1px)]
               [background-size:16px_16px]">
                </div>

                <div class="relative grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                    <!-- LEFT: WORLD MAP -->
                    <div class="flex justify-center lg:justify-start flex-col">
                        <h2 class="lg:text-5xl md:text-3xl text-2xl font-semibold text-center text-white">International
                            Patients</h2>
                        <img src="./assets/banners/map.png" alt="Global Patients" class="max-w-full h-auto" />
                    </div>

                    <!-- RIGHT: FORM CARD -->
                    <div class="flex justify-center lg:justify-end">
                        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">

                            <h3 class="text-2xl font-semibold text-gray-700 mb-6">
                                Request An Estimate
                            </h3>

                            <!-- <form class="space-y-4">

                    <div>
                      <label class="text-sm text-gray-500">Name *</label>
                      <input
                        type="text"
                        placeholder="Enter Your Name"
                        class="w-full border-b border-gray-300 focus:border-red-500
                         outline-none py-2 text-sm" />
                    </div>

                    <div>
                      <label class="text-sm text-gray-500">Mobile Number *</label>
                      <input
                        type="text"
                        placeholder="Enter Your Mobile Number"
                        class="w-full border-b border-gray-300 focus:border-red-500
                         outline-none py-2 text-sm" />
                    </div>

                    <div>
                      <label class="text-sm text-gray-500">Email *</label>
                      <input
                        type="email"
                        placeholder="Enter Your Email"
                        class="w-full border-b border-gray-300 focus:border-red-500
                         outline-none py-2 text-sm" />
                    </div>

                    <div>
                      <label class="text-sm text-gray-500">Message *</label>
                      <textarea rows="2" placeholder="Enter Your Message"
                          class="w-full border-b border-gray-300 focus:border-red-500
                         outline-none py-2 text-sm resize-none"></textarea>
                    </div>

                    <div>
                      <label class="text-sm text-gray-500">
                        Upload Prescription*
                        <span class="text-xs">(accepted only pdf, docx)</span>
                      </label>
                      <input
                        type="file"
                        class="w-full text-sm mt-1" />
                    </div>

                    <button
                      type="submit"
                      class="w-full mt-4 bg-red-500 hover:bg-red-600
                       text-white font-medium py-3 rounded-full transition">
                      Submit
                    </button>

                  </form> -->
                            <x-contact-form />
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="w-full bg-[#F3F3F3] py-20">
        <div class="container mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-center text-2xl md:text-3xl font-bold text-gray-600 mb-10">
                International Patients Services
            </h2>

            <!-- Main Card -->
            <div class="bg-white rounded-md overflow-hidden shadow-sm">

                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2">

                    <!-- Block 1 -->
                    <div class="grid grid-cols-2">
                        <img src="./assets/international-patient-assistance.png" class="w-full h-full object-cover"
                            alt="" />
                        <div class="flex items-center justify-center px-6 text-center">
                            <p class="text-lg font-semibold text-gray-600 leading-snug">
                                Dedicated International Patient<br />
                                Assistance Team
                            </p>
                        </div>
                    </div>

                    <!-- Block 2 -->
                    <div class="grid grid-cols-2">
                        <img src="./assets/priority-appintments.png" class="w-full h-full object-cover" alt="" />
                        <div class="flex items-center justify-center px-6 text-center">
                            <p class="text-lg font-semibold text-gray-600 leading-snug">
                                Express Check-In &<br />
                                Priority Appointments
                            </p>
                        </div>
                    </div>

                    <!-- Block 3 -->
                    <div class="grid grid-cols-2">
                        <div class="flex items-center justify-center px-6 text-center">
                            <p class="text-lg font-semibold text-gray-600 leading-snug">
                                Language Interpretation<br />
                                Service
                            </p>
                        </div>
                        <img src="./assets/language-interpretation.png" class="w-full h-full object-cover" alt="" />
                    </div>

                    <!-- Block 4 -->
                    <div class="grid grid-cols-2">
                        <div class="flex items-center justify-center px-6 text-center">
                            <p class="text-lg font-semibold text-gray-600 leading-snug">
                                Insurance Tie-Ups &<br />
                                Billing Assistance
                            </p>
                        </div>
                        <img src="./assets/insurence.png" class="w-full h-full object-cover" alt="" />
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="w-full bg-[#F5F5F5] py-20">
    <div class="container mx-auto px-6">

      <!-- Heading -->
      <div class="text-center max-w-2xl mx-auto mb-14">
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-700">
          Begin Your Treatment Journey<br />
          At Nano Hospitals
        </h2>
        <p class="mt-3 text-sm text-gray-500">
          Here's what your treatment journey will look like at Nano Hospitals
        </p>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Card 01 -->
        <div class="bg-white rounded-xl shadow-md p-6 relative">

          <!-- Top Row -->
          <div class="flex items-start gap-4">
            <span class="bg-red-500 text-white text-2xl font-bold px-4 py-2 rounded-md shrink-0">
              01
            </span>

            <h3 class="font-semibold text-gray-700 leading-snug">
              Analysis of Your<br />Medical History
            </h3>
          </div>

          <!-- Description -->
          <p class="mt-4 text-sm text-gray-500 leading-relaxed">
            Our team of highly experienced medical specialists reviews your medical
            history to advise you on the best treatment options and plan your
            treatment journey.
          </p>

          <!-- Icon -->

        </div>

        <!-- Card 02 -->
        <div class="bg-white rounded-xl shadow-md p-6 relative">

          <!-- Top Row -->
          <div class="flex items-start gap-4">
            <span class="bg-red-500 text-white text-2xl font-bold px-4 py-2 rounded-md shrink-0">
              02
            </span>

            <h3 class="font-semibold text-gray-700 leading-snug">
              Pre-Arrival<br />Consultation
            </h3>
          </div>

          <!-- Description -->
          <p class="mt-4 text-sm text-gray-500 leading-relaxed">
            Traveling with a medical condition can be challenging. Nano Hospitals helps you schedule a telemedicine consultation to assess your health before your journey.
          </p>

          <!-- Icon -->

        </div>
        <!-- Card 03 -->
        <div class="bg-white rounded-xl shadow-md p-6 relative">

          <!-- Top Row -->
          <div class="flex items-start gap-4">
            <span class="bg-red-500 text-white text-2xl font-bold px-4 py-2 rounded-md shrink-0">
              03
            </span>

            <h3 class="font-semibold text-gray-700 leading-snug">
              Care Beyond Travel<br />Arrangements
            </h3>
          </div>

          <!-- Description -->
          <p class="mt-4 text-sm text-gray-500 leading-relaxed">
            Our care goes beyond your hospital visit. Nano Hospitals coordinates your appointments, tests, travel, and stay—so you can focus on your recovery. </p>

          <!-- Icon -->

        </div>

        <!-- Card 04 -->
        <div class="bg-white rounded-xl shadow-md p-6 relative">

          <!-- Top Row -->
          <div class="flex items-start gap-4">
            <span class="bg-red-500 text-white text-2xl font-bold px-4 py-2 rounded-md shrink-0">
              04
            </span>

            <h3 class="font-semibold text-gray-700 leading-snug">
              Hassle-Free<br />Health Journey
            </h3>
          </div>

          <!-- Description -->
          <p class="mt-4 text-sm text-gray-500 leading-relaxed">
            At Nano Hospitals, our international patient team guides you through admission, treatment, recovery, and ongoing care.
            <!-- Icon -->

        </div>

        <!-- Card 05 -->
        <div class="bg-white rounded-xl shadow-md p-6 relative">

          <!-- Top Row -->
          <div class="flex items-start gap-4">
            <span class="bg-red-500 text-white text-2xl font-bold px-4 py-2 rounded-md shrink-0">
              05
            </span>

            <h3 class="font-semibold text-gray-700 leading-snug">
              Post-Hospitalization<br />Care
            </h3>
          </div>

          <!-- Description -->
          <p class="mt-4 text-sm text-gray-500 leading-relaxed">
            We assist you with all of your post-hospitalization questions, arrange all of your medical reports, and guide you through the discharge process.
            <!-- Icon -->

        </div>

        <!-- Card 06 -->
        <div class="bg-white rounded-xl shadow-md p-6 relative">

          <!-- Top Row -->
          <div class="flex items-start gap-4">
            <span class="bg-red-500 text-white text-2xl font-bold px-4 py-2 rounded-md shrink-0">
              06
            </span>

            <h3 class="font-semibold text-gray-700 leading-snug">
              Nano Hospitals Travels<br />Back With You
            </h3>
          </div>

          <!-- Description -->
          <p class="mt-4 text-sm text-gray-500 leading-relaxed">
            Once you choose Nano Hospitals, you become part of our care family. After treatment, our team supports your recovery through medication guidance, post-operative care, and gentle follow-ups.
            <!-- Icon -->

        </div>

      </div>
    </div>
  </section>


  <section class="w-full bg-white py-20">
    <div class="container mx-auto px-6">

      <!-- Heading -->
      <div class="text-center max-w-3xl mx-auto mb-14">
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-700">
          Required Documents
        </h2>
        <p class="mt-3 text-sm text-gray-500 leading-relaxed">
          Ensuring a smooth and hassle-free experience during your medical journey
          to Nano Hospitals is our priority. To assist you in planning your trip,
          please make sure to have the following essential documents ready.
        </p>
      </div>

      <!-- Content -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">

        <!-- Left Image -->
        <div class="rounded-xl overflow-hidden ">
          <img
            src="./assets/required-documnets.png"
            alt="Required Documents"
            class="w-full h-full object-cover" />
        </div>

        <!-- Right Content -->
        <div class="space-y-8">

          <!-- Item 1 -->
          <div class="flex items-start gap-3 mt-12">

            <div>
              <h4 class="font-semibold text-gray-500">
                Passport and Visa:
              </h4>
              <p class="mt-1 text-sm text-gray-500 leading-relaxed">
                A valid passport with at least six months of validity beyond your
                intended stay. Obtain the necessary medical visa for your
                treatment. Ensure that you are aware of the visa processing times
                in your home country.
              </p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="flex items-start gap-3">

            <div>
              <h4 class="font-semibold text-gray-500">
                Medical Records:
              </h4>
              <p class="mt-1 text-sm text-gray-500 leading-relaxed">
                Bring detailed medical records, including diagnosis reports, test
                results, and any other relevant medical documentation. Ensure that
                these records are translated into English, if necessary, for better
                understanding by our medical team.
              </p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="flex items-start gap-3">

            <div>
              <p class="text-sm text-gray-500 leading-relaxed font-semibold">
                Passport and Visa are a must:
                check with our International Travel Desk regarding visa
                requirements, depending on the country you are traveling to.
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

   <section class="w-full py-20 bg-[#f9f9f9]">
    <div class="container mx-auto px-4">

      <!-- Section Heading -->
      <h2 class="text-center text-2xl font-semibold text-gray-700 mb-14">
        Our Medical Services
      </h2>

      <!-- MAIN GRID -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-stretch">

        <!-- LEFT CARD (Tall) -->
        <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
          <img src="./assets/Frame 84.png" class="w-full h-52 object-cover" />

          <div class="p-6 flex flex-col justify-between flex-1">
            <div>
              <h3 class="text-lg font-semibold text-gray-700 mb-2">
                Health Checkups
              </h3>
              <p class="text-sm text-gray-500 leading-relaxed">
                take charge of your well being with a health experience customized for you
              </p>
            </div>

            <div class="flex justify-between">
              <a href="#" class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                Know More
                <span class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
              </a>
              <img src="./assets/icons/stethescope.png" alt="">
            </div>
          </div>
        </div>

        <!-- CENTER COLUMN (2 STACKED CARDS) -->
        <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
          <img src="./assets/Frame 84.png" class="w-full h-52 object-cover" />

          <div class="p-6 flex flex-col justify-between flex-1">
            <div>
              <h3 class="text-lg font-semibold text-gray-700 mb-2">
                Second Opinion
              </h3>
              <p class="text-sm text-gray-500 leading-relaxed">
                Confirm diagnosis and take informed decision about your treatment plan
              </p>
            </div>

            <div class="flex justify-between">
              <a href="#" class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                Know More
                <span class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
              </a>
              <img src="./assets/icons/msg.png" alt="">
            </div>
          </div>
        </div>

        <!-- RIGHT CARD (Tall) -->
        <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
          <img src="./assets/Frame 84.png" class="w-full h-52 object-cover" />

          <div class="p-6 flex flex-col justify-between flex-1">
            <div>
              <h3 class="text-lg font-semibold text-gray-700 mb-2">
                Second Opinion
              </h3>
              <p class="text-sm text-gray-500 leading-relaxed">
                Confirm diagnosis and take informed decision about your treatment plan
              </p>
            </div>

            <div class="flex justify-between">
              <a href="#" class="flex items-center gap-2 text-lg font-semibold text-gray-600 mt-6">
                Know More
                <span class="w-6 h-6 flex items-center justify-center rounded-full bg-red-500 text-white text-xs">→</span>
              </a>
              <img src="./assets/icons/msg.png" alt="">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="w-full bg-white py-20">
    <div class="container mx-auto px-6">

      <!-- Heading -->
      <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-600 mb-12">
        FAQ’s
      </h2>

      <!-- FAQ Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

        <!-- COLUMN -->
        <div class="space-y-2">

          <details class="group rounded-xl transition bg-gray-50 hover:bg-gray-100">
            <summary
              class="flex items-center justify-between cursor-pointer px-6 py-4 text-gray-600 font-medium text-sm md:text-base">
              <span>What is the purpose of seeking a Second Opinion at Nano Hospitals?</span>

              <span
                class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300
                     text-gray-400 group-open:rotate-90 transition-transform">
                ›
              </span>
            </summary>

            <div class="px-6 pb-4 text-gray-500 text-sm leading-relaxed">
              A second opinion helps confirm diagnosis, explore alternate treatments,
              and gain confidence before proceeding with care.
            </div>
          </details>

          <details class="group rounded-xl transition bg-gray-50 hover:bg-gray-100">
            <summary class="flex items-center justify-between cursor-pointer px-6 py-4 text-gray-600 font-medium">
              <span>How long does it take to get a Second Opinion?</span>
              <span class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300
                         text-gray-400 group-open:rotate-90 transition-transform">›</span>
            </summary>
            <div class="px-6 pb-4 text-gray-500 text-sm leading-relaxed">
              Typically within a few working days after reviewing your medical records.
            </div>
          </details>

          <details class="group rounded-xl transition bg-gray-50 hover:bg-gray-100">
            <summary class="flex items-center justify-between cursor-pointer px-6 py-4 text-gray-600 font-medium">
              <span>How many questions can I ask the expert?</span>
              <span class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300
                         text-gray-400 group-open:rotate-90 transition-transform">›</span>
            </summary>
            <div class="px-6 pb-4 text-gray-500 text-sm leading-relaxed">
              You may ask all relevant questions related to diagnosis, treatment, and recovery.
            </div>
          </details>

        </div>

        <!-- COLUMN -->
        <div class="space-y-2">

          <details class="group rounded-xl transition bg-gray-50 hover:bg-gray-100">
            <summary class="flex items-center justify-between cursor-pointer px-6 py-4 text-gray-600 font-medium">
              <span>How can I request a Second Opinion at Nano Hospitals?</span>
              <span class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300
                         text-gray-400 group-open:rotate-90 transition-transform">›</span>
            </summary>
            <div class="px-6 pb-4 text-gray-500 text-sm leading-relaxed">
              You can request a second opinion through consultation or by submitting
              your medical records online.
            </div>
          </details>

          <details class="group rounded-xl transition bg-gray-50 hover:bg-gray-100">
            <summary class="flex items-center justify-between cursor-pointer px-6 py-4 text-gray-600 font-medium">
              <span>Can I get a second opinion if treatment has already started?</span>
              <span class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300
                         text-gray-400 group-open:rotate-90 transition-transform">›</span>
            </summary>
            <div class="px-6 pb-4 text-gray-500 text-sm leading-relaxed">
              Yes. A second opinion can still provide valuable insights and reassurance.
            </div>
          </details>

        </div>

      </div>
    </div>
  </section>


  <section class="relative w-full h-[450px] md:h-[450px] overflow-hidden">

    <!-- Background Image -->
    <div
      class="absolute inset-0 bg-cover bg-center"
      style="background-image: url('./assets/banners/international-banner.png');">
    </div>

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Content -->
    <div class="relative z-10 h-full flex items-center justify-center text-center px-6">
      <div class="space-y-4">

        <!-- Icon + Text -->
        <div class="flex items-center justify-center gap-3">
          <span class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 text-white"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 5a2 2 0 012-2h2.28a1 1 0 01.95.68l1.5 4.49a1 1 0 01-.5 1.21l-1.7.85a11.04 11.04 0 005.52 5.52l.85-1.7a1 1 0 011.21-.5l4.49 1.5a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C9.72 21 3 14.28 3 6V5z" />
            </svg>
          </span>

          <h3 class="text-white text-lg md:text-xl font-semibold">
            Get In Touch With Us
          </h3>
        </div>

        <!-- Phone Numbers -->
        <p class="text-white text-xl md:text-2xl font-semibold tracking-wide">
          +91 89295 00500&nbsp;&nbsp;/&nbsp;&nbsp;+91 087672 00300
        </p>

      </div>
    </div>

  </section>

@endsection
