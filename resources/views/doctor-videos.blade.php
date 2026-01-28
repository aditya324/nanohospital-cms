@extends('layouts.app')

@section('title', 'doctor videos nano hospital')

@push('styles')
@endpush

@section('content')


    <div id="videoModal" class="fixed inset-0 bg-black/70 hidden flex items-center justify-center z-[9999] px-4">


        <div class="relative bg-black rounded-xl shadow-2xl w-full max-w-3xl" style="animation: scaleIn .25s ease-out">

            <button id="closeModal"
                class="absolute -top-4 -right-4 bg-white w-10 h-10 rounded-full
                       text-black text-2xl shadow-lg z-50">
                &times;
            </button>

            <div class="relative w-full aspect-video">
                <iframe id="videoIframe" class="absolute inset-0 w-full h-full rounded-xl" src="" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <section class="w-full py-16">
        <div class="container mx-auto px-4">

            <h2 class="text-center text-2xl font-semibold text-neutral-500 mb-14">
                All Doctor Videos
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="allDoctorVideos">

                <!-- CARD -->
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="mau8AAEBKS8" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>

                <!-- CARD -->
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="P0yS5rBA3w4" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>

                <!-- CARD -->
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="C-3mgs7F5UM" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Early Signs of Labor | Dr. Ramya K S
                        </h3>
                    </div>
                </div>


                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="d-FG4SB_IjM" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Do's and don'ts of diabetic foot care tips
                        </h3>
                    </div>
                </div>

                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="EejmaXLn_XM" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Common Back Pain Causes|Prevention|Treatment
                        </h3>
                    </div>
                </div>

                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="65xvUjzZsA0" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Explanation on Migraine by Dr.Krishnan
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="peFE2VsY878" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Covid -19 Effects on Children
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="kMywKZn3HP8" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Soft tissue injuries - causes, symptoms, and top treatments
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="r25_nyQDlcc" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Hair loss: Causes, Prevention & Treatment |Dr. Shashikiran
                        </h3>
                    </div>
                </div>

                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="-vqTINq_j4w" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Explanation on Acute Gastrophageal Reflux Disease and Gastritis
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="WDwR9JRtHmQ" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Explanation on Allergies by Dr.Aishwarya
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="xWXTVt16oAU" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Explanation on Cancer by Dr.Syed Jeshan
                        </h3>
                    </div>
                </div>

                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="N870AviIEvQ" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Explanation on the Importance of HBOT Therapy
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="Mer3-bg9lnY" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Hearing loss in children | Dr. Harshalatha
                        </h3>
                    </div>
                </div>
                <div class="video-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                    data-video-id="DJOhB6da0NQ" data-title="Early Signs of Labor Dr. Ramya K S">

                    <div class="relative">
                        <img class="video-thumbnail w-full h-56 object-cover" alt="Video thumbnail">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.993v8.014L11.993 8 6 3.993z" />
                                </svg>
                            </div>
                        </div>

                        <img src="./assets/logo/nano-logo.png" class="absolute top-3 right-3 w-14" alt="">
                    </div>

                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-[#737373]">
                            Understanding Piles, Hemorrhoids, and Fissures: Expert Advice from Dr. Sujay B R
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const searchInput = document.getElementById("videoSearch");
            const videoContainer = document.getElementById("allDoctorVideos");
            const videoCards = videoContainer.querySelectorAll(".video-card");

            searchInput.addEventListener("input", () => {
                const query = searchInput.value.toLowerCase().trim();

                videoCards.forEach(card => {
                    const title = card.dataset.title?.toLowerCase() || "";
                    card.style.display = title.includes(query) ? "block" : "none";
                });
            });
        });
    </script>




    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const cards = document.querySelectorAll(".video-card");
            const modal = document.getElementById("videoModal");
            const iframe = document.getElementById("videoIframe");
            const closeBtn = document.getElementById("closeModal");

            cards.forEach(card => {
                const videoId = card.dataset.videoId;
                const thumbnail = card.querySelector(".video-thumbnail");

                // 🔹 Set YouTube thumbnail
                if (thumbnail && videoId) {
                    thumbnail.src = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;

                    // Fallback if max resolution doesn't exist
                    thumbnail.onerror = () => {
                        thumbnail.src = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
                    };
                }

                // 🔹 Open modal and play video
                card.addEventListener("click", () => {
                    iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                    modal.classList.remove("hidden");
                    document.body.style.overflow = "hidden";
                });
            });

            function closeModal() {
                modal.classList.add("hidden");
                iframe.src = "";
                document.body.style.overflow = "";
            }

            closeBtn.addEventListener("click", closeModal);

            modal.addEventListener("click", e => {
                if (e.target === modal) closeModal();
            });

            document.addEventListener("keydown", e => {
                if (e.key === "Escape") closeModal();
            });
        });
    </script>



@endsection
