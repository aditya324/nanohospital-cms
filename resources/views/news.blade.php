@extends('layouts.app')

@section('title', 'news and media nano hospital')

@push('styles')
@endpush

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <img src="./assets/banners/news-media.png" class="w-full" alt="">
    <section class="w-full py-20 bg-[#f9f9f9]">
        <div class="container mx-auto px-4">

            <!-- Section Heading -->
            <h2 class="text-center text-2xl font-semibold text-[#737373] mb-14">
                Featured News & Media Articles
            </h2>

            <!-- MAIN GRID -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-stretch">

                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img src="./assets/news/hpl.webp" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-base font-semibold text-[#737373] mb-2">
                                The Hospital Premier League (HPL) Season 3 brings...
                            </h3>

                        </div>


                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img src="./assets/news/sunil-shetty.webp" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-base font-semibold text-[#737373] mb-2">
                                Nano Hospitals: Excellence in Tertiary Care, Recognized in Bangalore!
                            </h3>

                        </div>


                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col">
                    <img src="./assets/news/biopsy.webp" class="w-full h-52 object-cover" />

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <h3 class="text-base font-semibold text-[#737373] mb-2">
                                A biopsy is a medical test where a small sample..
                            </h3>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="w-full py-12 relative bg-white container mx-auto">

        <!-- Swiper -->
        <div class="swiper storySwiper px-16">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 1.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 2.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 3.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 4.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide !w-[230px]">
                    <div class="relative rounded-3xl overflow-hidden lg:col-span-1">
                        <img src="./assets/news/hpl/Instagram story - 5.webp" class="w-full h-[389px] object-cover" />
                        <div class="absolute inset-0 bg-black/20"></div>

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-14 h-14 rounded-full bg-red-500 flex items-center justify-center text-white text-xl">
                                ▶
                            </div>
                        </div>

                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="font-semibold text-lg">Cardiac care</p>
                            <p class="text-sm opacity-90">Mrs Sudha Kumar</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Navigation -->
        <div class="swiper-button-prev !w-10 !h-10 !rounded-full !bg-white !shadow-md after:!text-sm">
        </div>

        <div class="swiper-button-next !w-10 !h-10 !rounded-full !bg-white !shadow-md after:!text-sm">
        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        new Swiper(".storySwiper", {
            slidesPerView: "auto",
            spaceBetween: 24,
            loop: true,
            grabCursor: true,

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        });
    </script>

@endsection
