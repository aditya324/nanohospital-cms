@extends('layouts.app')

@section('title', 'second opinion')

@push('styles')
@endpush

@section('content')

  <section class="relative w-full min-h-[520px] bg-gray-100">
    <!-- Background Image -->
    <div
      class="absolute inset-0 bg-cover bg-center"
      style="background-image: url('./assets/banners/second-opinion-banner.png');"></div>

    <!-- Overlay (optional light fade) -->
    <div class="absolute inset-0 bg-white/40"></div>

    <!-- Content Wrapper -->
    <div class="relative container mx-auto px-6 py-16 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-10">

      <!-- Left Text -->    
      <div class="max-w-xl">
        <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 leading-tight text-center">
          Get Expert Second<br />
          Opinions. On Demand.
        </h2>
      </div>

      <!-- Right Form Card -->
      <div class="w-full max-w-sm bg-white rounded-xl shadow-xl p-6">
        <h3 class="text-xl text-center font-semibold text-gray-800 mb-4">
          Request a Call Back
        </h3>

        <x-contact-form />
      </div>

    </div>
  </section>
 <section class="w-full bg-[#F5F5F5] py-6">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

        <!-- Left Title -->
        <h2 class="text-xl md:text-2xl font-bold text-gray-800 whitespace-nowrap">
          About Second Opinion
        </h2>

        <!-- Right Content -->
        <div class="flex-1 md:pl-10">
          <p class="text-gray-500 text-sm md:text-base leading-relaxed">
            Prioritising your health means understanding all aspects of the condition and proposed treatment before making any decisions.
            If you're concerned about interpreting your medical reports accurately, we…
          </p>

          <!-- Read More -->
          <a
            href="#"
            class="inline-flex items-center gap-2 mt-2 text-red-500 font-medium text-sm hover:underline">
            Read More
            <span
              class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-red-500 text-white text-xs">
              ›
            </span>
          </a>
        </div>

      </div>
    </div>
  </section>
    <section class="w-full py-20 bg-white">
    <div class="container mx-auto px-6">

      <!-- Section Heading -->
      <h2 class="text-center text-xl md:text-2xl font-semibold text-gray-600 mb-16">
        Here’s How You Can Avail a Second<br class="hidden md:block" />
        Opinion From Nano Hospitals
      </h2>

      <!-- Steps Wrapper -->
      <div class="relative">

        <!-- Horizontal Line -->
        <div class="absolute top-[22px] left-0 right-0 h-px bg-gray-200"></div>

        <!-- Steps Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16 relative">

          <!-- Step 1 -->
          <div class="text-center relative">
            <!-- Dot -->
            <span class="absolute top-[14px] left-1/2 -translate-x-1/2 w-3 h-3 bg-red-500 rounded-full"></span>

            <p class="mt-10 text-gray-500 font-medium">Step 1</p>

            <div class="mt-6 flex justify-center">
              <img src="./assets/icons/register.png" alt="Register" class="h-14" />
            </div>

            <h3 class="mt-4 font-semibold text-gray-700">
              Register
            </h3>

            <p class="mt-2 text-sm text-gray-400 max-w-xs mx-auto">
              Register by entering the caregiver or patient details
            </p>
          </div>

          <!-- Step 2 -->
          <div class="text-center relative">
            <!-- Dot -->
            <span class="absolute top-[14px] left-1/2 -translate-x-1/2 w-3 h-3 bg-red-500 rounded-full"></span>

            <p class="mt-10 text-gray-500 font-medium">Step 2</p>

            <div class="mt-6 flex justify-center">
              <img src="./assets/icons/submit-report.png" alt="Submit Report" class="h-14" />
            </div>

            <h3 class="mt-4 font-semibold text-gray-700">
              Submit Medical Report
            </h3>

            <p class="mt-2 text-sm text-gray-400 max-w-xs mx-auto">
              Scan the reports and upload them, connect with us for any issues
              related to registration/uploading
            </p>
          </div>

          <!-- Step 3 -->
          <div class="text-center relative">
            <!-- Dot -->
            <span class="absolute top-[14px] left-1/2 -translate-x-1/2 w-3 h-3 bg-red-500 rounded-full"></span>

            <p class="mt-10 text-gray-500 font-medium">Step 3</p>

            <div class="mt-6 flex justify-center">
              <img src="./assets/icons/doctor.png" alt="Get Opinion" class="h-14" />
            </div>

            <h3 class="mt-4 font-semibold text-gray-700">
              Get Personalised Plans in 2 Days
            </h3>

            <p class="mt-2 text-sm text-gray-400 max-w-xs mx-auto">
              Every case will be mapped to a specialist, who will share relevant
              advice after carefully studying the case reports
            </p>
          </div>

        </div>
      </div>
    </div>
  </section>

    <section class="w-full bg-white py-20">
    <div class="container mx-auto px-6">

      <!-- Heading -->
      <h2 class="text-center text-2xl md:text-3xl font-semibold text-gray-600 mb-12">
        Understand When to Take Second Opinion
      </h2>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-start">

        <!-- LEFT CONTENT -->
        <div class="max-w-xl space-y-6">

          <p class="text-gray-500 text-xl leading-relaxed font-semibold">
            When in doubt about a diagnosis or treatment plan, get assurance from
            our specialists.
          </p>

          <!-- Bullet List -->
          <ul class="space-y-3 text-gray-500 text-sm md:text-base">

            <li class="flex items-start gap-3">

              <span>Diagnosed with a critical ailment</span>
            </li>

            <li class="flex items-start gap-3">
              <span>Doctors have suggested an invasive surgery</span>
            </li>

            <li class="flex items-start gap-3">
              <span>
                If the recommended treatment is risky, invasive or has lifelong
                consequences
              </span>
            </li>

            <li class="flex items-start gap-3">
              <span>
                Diagnosed with cancer (false positive or false negative)
              </span>
            </li>

            <li class="flex items-start gap-3">
              <span>Diagnosed with a rare disease</span>
            </li>

            <li class="flex items-start gap-3">
              <span>
                Have a condition that isn’t improving or is getting worse,
                despite treatment
              </span>
            </li>

            <li class="flex items-start gap-3">
              <span>
                Need expert advice on deciding between multiple treatment options
              </span>
            </li>

          </ul>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="relative">
          <div class="rounded-3xl overflow-hidden shadow-lg">
            <img
              src="./assets/consultation.png"
              alt="Second Opinion Consultation"
              class="w-full h-[320px] object-cover block" />
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
