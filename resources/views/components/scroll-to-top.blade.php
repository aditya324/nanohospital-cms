<!-- Scroll To Top Floating Wrapper -->
<div
    id="scrollTopWrapper"
    class="fixed bottom-8 right-6 z-50 hidden md:flex items-center justify-center">

    <!-- Button -->
    <button
        id="scrollTopBtn"
        aria-label="Scroll to top"
        class="w-12 h-12 flex items-center justify-center
               bg-red-500 text-white rounded-full
               shadow-lg transition-all duration-300
               hover:bg-red-600 hover:scale-110 relative">

        <!-- Scroll Progress Ring -->
        <svg class="absolute inset-0 w-full h-full -rotate-90 pointer-events-none"
             viewBox="0 0 100 100">

            <!-- Background Ring -->
            <circle
                cx="50" cy="50" r="46"
                fill="none"
                stroke="#fecaca"
                stroke-width="6" />

            <!-- Progress Ring -->
            <circle
                id="progressRing"
                cx="50" cy="50" r="46"
                fill="none"
                stroke="red"
                stroke-width="6"
                stroke-dasharray="289"
                stroke-dashoffset="289"
                stroke-linecap="round" />
        </svg>

        <span class="relative z-10">↑</span>
    </button>
</div>

@once
    @push('scripts')
        <script>
            (function () {
                const wrapper = document.getElementById("scrollTopWrapper");
                const progressRing = document.getElementById("progressRing");

                if (!wrapper || !progressRing) return;

                const radius = 46;
                const circumference = 2 * Math.PI * radius;

                window.addEventListener("scroll", () => {
                    const isDesktop = window.innerWidth >= 768;
                    const scrollTop = window.scrollY;
                    const docHeight = document.documentElement.scrollHeight - window.innerHeight;

                    // Show / hide button
                    if (scrollTop > 300 && isDesktop) {
                        wrapper.classList.remove("hidden");
                    } else {
                        wrapper.classList.add("hidden");
                    }

                    // Progress calculation
                    const progress = docHeight ? scrollTop / docHeight : 0;
                    const offset = circumference - progress * circumference;
                    progressRing.style.strokeDashoffset = offset;
                });

                wrapper.addEventListener("click", () => {
                    window.scrollTo({ top: 0, behavior: "smooth" });
                });
            })();
        </script>
    @endpush
@endonce
