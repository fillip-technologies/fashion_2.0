<div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10 md:gap-0 mb-10 md:mb-0">

    <div class="relative group w-full overflow-hidden mobile-hover-card mobile-hover-soft">
        <img src="{{ asset('assets/images/landing/one.png') }}" alt="Collection"
            class="object-cover w-full hover:cursor-pointer" />
        <a href="/lookbook"
            class="absolute inset-0
               bg-[#000000]/60
               opacity-0 md:group-hover:opacity-70
               transition-opacity duration-200 cursor-pointer mobile-hover-overlay">
        </a>
        <a href="/lookbook"
            class="absolute bottom-6 left-6
               opacity-0 md:group-hover:opacity-100
               transition-opacity duration-200
               text-white cursor-pointer mobile-hover-content">

            <p class="text-sm">
                View the
                <span class="font-bold text-3xl">Collection’s</span>
                Lookbook
            </p>
        </a>
    </div>

    <div class="flex flex-col items-center justify-center">
        <div> <img src="{{ asset('assets/images/landing/two.png') }}" alt="Search"
                class="object-cover w-full h-4/5" />
        </div>
        <div class="flex flex-col items-center text-center px-6 mt-4">
            <div class="text-[16px] font-semibold mb-2 uppercase"> The Silks </div> <span
                class="h-[1px] w-32 mb-7 bg-black" style="font-weight: 300"></span>
            <div class="max-w-md text-[12px] font-light leading-relaxed"> Crystalline structures that provide silk its
                characteristic luster, strength, and resilience, with minor components including waxes, minerals, and
                pigments. </div>
        </div>
    </div>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10 md:gap-0 mb-10 md:mb-0">
    <div class="relative group order-1 md:order-2 w-full overflow-hidden mobile-hover-card mobile-hover-radial">
        <img src="{{ asset('assets/images/landing/four.png') }}" alt="Search" class="object-cover w-full" />
        <a href="/yarn-story"
            class="absolute inset-0
                   opacity-0 md:group-hover:opacity-80
                   transition-opacity duration-300 cursor-pointer mobile-hover-overlay"
            style="
                background: radial-gradient(
                    circle at center,
                    rgba(0,0,0,0) 40%,
                    rgba(0,0,0,0.35) 55%,
                    rgba(0,0,0,0.75) 65%
                );
            ">
        </a>
        <a href="/yarn-story"
            class="absolute bottom-12 left-12
                   opacity-0 md:group-hover:opacity-100
                   transition-opacity duration-300
                   text-white cursor-pointer mobile-hover-content">

            <p class="text-sm">
                Read the
                Yarn’s
                <span class="font-bold text-3xl">Story</span>
            </p>
        </a>
    </div>

    <div class="flex flex-col items-center justify-center order-2 md:order-1">
        <div>
            <img src="{{ asset('assets/images/landing/three.png') }}" alt="Search"
                class="object-cover w-full h-4/5" />
        </div>

        <div class="flex flex-col items-center text-center px-6 mt-4">
            <div class="text-[16px] font-semibold mb-2 uppercase">
                Wool Stitch
            </div>

            <span class="h-[1px] w-32 mb-7 bg-black"></span>

            <div class="max-w-md text-[12px] font-light leading-relaxed">
                Creating a soft, matte, 3D look, often combined with thinner cotton
                threads for detail, perfect for cozy home decor, nature scenes, or
                whimsical designs.
            </div>
        </div>
    </div>
</div>




<div class="flex flex-col items-center justify-center bg-background py-20">
    <div> <img src="{{ asset('assets/images/landing/five.png') }}" alt="Search" class="object-cover w-full h-full" />
    </div>
    <div class="flex flex-col items-center text-center px-6 mt-10">
        <div class="text-[16px] font-semibold mb-2 uppercase"> LINING </div>
        <span class="h-[1px] w-32 mb-7 bg-secondary" style="font-weight: 300"></span>
        <div class="max-w-md text-[12px] font-light leading-relaxed"> reating a soft, matte, 3D look, often combined
            with thinner cotton threads for detail, perfect for cozy home decor, nature scenes, or whimsical
            designs. </div>
    </div>
</div>



{{-- 
<section class="relative w-full h-[80vh] bg-secondary overflow-hidden">

    <!-- CENTER BACKGROUND IMAGE -->
    <img src="{{ asset('assets/images/landing/seven.png') }}" alt="Center"
        class="absolute inset-0 m-auto max-h-[80vh] w-auto object-contain z-0" />

    <!-- GRID OVER IMAGE -->
    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 h-full">

        <!-- LEFT: TEXT -->
        <div class="flex items-center justify-center h-full w-full ml-10 order-2 md:order-1">
            <div
                class="flex flex-col items-center justify-center
               h-full w-full
               text-center px-6 text-[15px]
               text-white font-light bg-primary/40 p-6">
                <p class="mb-4">
                    The <span class="text-[32px]" style="font-weight: 800">Journey</span> to find the best.
                </p>

                <p class="max-w-md">
                    The passage from a starting point to an end point involved many
                    events, a lot of time, or a considerable amount of effort,
                    leading to personal growth, change, or a significant
                    accomplishment.
                </p>
            </div>
        </div>

        <!-- RIGHT: IMAGE (FOREGROUND) -->
        <div class="flex items-center justify-center order-1 md:order-2">
            <img src="{{ asset('assets/images/landing/nine.png') }}" alt="Search"
                class="max-h-[80vh] w-auto object-contain" />
        </div>

    </div>
</section> --}}


<section class="relative group mobile-hover-card mobile-hover-journey w-full h-[60vh] md:h-[80vh] bg-secondary overflow-hidden">
    <a href="/journey" class="block h-full">
        <img src="{{ asset('assets/images/landing/six.png') }}" alt="Center"
            class="absolute inset-0 m-auto max-h-full w-auto object-contain z-0" />

        <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 h-full">
            <div
                class="flex items-center justify-center h-full w-full
                    order-2 md:order-1 
                    ml-0 md:ml-10">

                <div
                    class="flex flex-col items-center justify-center
                        h-full w-full
                        text-center px-4 py-6 md:px-6 md:py-10
                        text-[14px] md:text-[15px]
                        text-white font-light bg-primary/40 transition-all duration-300 mobile-journey-panel">
                    <p class="mb-4">
                        The <span class="text-[24px] md:text-[32px] font-extrabold">Journey</span>
                        to find the best.
                    </p>
                    <p class="max-w-md">
                        The passage from a starting point to an end point involved many
                        events, a lot of time, or a considerable amount of effort,
                        leading to personal growth, change, or a significant
                        accomplishment.
                    </p>
                    <span
                        class="mobile-hover-content mt-5 text-[11px] uppercase tracking-[0.25em] text-white/80 opacity-0 transition-opacity duration-300 md:hidden">
                        Tap again to explore
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-center order-1 md:order-2">
                <img src="{{ asset('assets/images/landing/seven.png') }}" alt="Search"
                    class="max-h-[35vh] md:max-h-[80vh] w-auto object-contain" />
            </div>

        </div>
    </a>
</section>


<div class="flex items-center justify-center h-full pt-28 pb-40 bg-white overflow-hidden px-6 md:px-12">
    <img src="{{ asset('assets/images/landing/eight.png') }}" alt="Search"
        class="object-contain md:object-cover w-full h-[90%]" />
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const mobileHoverCards = Array.from(document.querySelectorAll(".mobile-hover-card"));
        const previewTimers = new WeakMap();
        const scrollHintTriggerRatio = 0.5;
        const scrollHintPreviewDuration = 1400;
        let hasStartedMobileScroll = false;
        let scrollHintTicking = false;

        if (mobileHoverCards.length === 0) return;

        const isMobileViewport = () => window.innerWidth < 768;
        const hasPendingScrollHints = () => mobileHoverCards.some((card) => card.dataset.scrollHintSeen !== "true");

        const clearPreviewTimer = (card) => {
            const timerId = previewTimers.get(card);

            if (!timerId) return;

            window.clearTimeout(timerId);
            previewTimers.delete(card);
        };

        const clearScrollPreview = (card) => {
            clearPreviewTimer(card);
            card.classList.remove("scroll-preview");
        };

        const clearAllScrollPreviews = (activeCard = null) => {
            mobileHoverCards.forEach((card) => {
                if (card !== activeCard) {
                    clearScrollPreview(card);
                }
            });
        };

        const previewCardOnScroll = (card) => {
            if (!isMobileViewport()) return;
            if (card.dataset.scrollHintSeen === "true") return;
            if (card.classList.contains("touch-active")) return;

            card.dataset.scrollHintSeen = "true";
            clearAllScrollPreviews(card);
            card.classList.add("scroll-preview");

            const timerId = window.setTimeout(() => {
                if (!card.classList.contains("touch-active")) {
                    card.classList.remove("scroll-preview");
                }

                previewTimers.delete(card);
            }, scrollHintPreviewDuration);

            previewTimers.set(card, timerId);
        };

        const runScrollHintCheck = () => {
            scrollHintTicking = false;

            if (!isMobileViewport() || !hasStartedMobileScroll || !hasPendingScrollHints()) return;

            const triggerLine = window.innerHeight * scrollHintTriggerRatio;
            let nextCardToPreview = null;
            let closestDistance = Number.POSITIVE_INFINITY;

            mobileHoverCards.forEach((card) => {
                if (card.dataset.scrollHintSeen === "true") return;

                const rect = card.getBoundingClientRect();
                const intersectsTriggerLine = rect.top <= triggerLine && rect.bottom >= triggerLine;

                if (!intersectsTriggerLine) return;

                const cardCenter = rect.top + (rect.height / 2);
                const distanceFromTrigger = Math.abs(cardCenter - triggerLine);

                if (distanceFromTrigger < closestDistance) {
                    closestDistance = distanceFromTrigger;
                    nextCardToPreview = card;
                }
            });

            if (nextCardToPreview) {
                previewCardOnScroll(nextCardToPreview);
            }
        };

        const queueScrollHintCheck = () => {
            if (scrollHintTicking) return;

            scrollHintTicking = true;
            window.requestAnimationFrame(runScrollHintCheck);
        };

        const clearActiveCards = (activeCard = null) => {
            mobileHoverCards.forEach((card) => {
                if (card !== activeCard) {
                    card.classList.remove("touch-active");
                }
            });
        };

        mobileHoverCards.forEach((card) => {
            card.addEventListener("click", (event) => {
                if (window.innerWidth >= 768) return;

                const link = event.target.closest("a[href]");

                if (!link || !card.contains(link)) return;

                clearAllScrollPreviews();
                clearScrollPreview(card);

                if (card.classList.contains("touch-active")) {
                    return;
                }

                event.preventDefault();
                clearActiveCards(card);
                card.classList.add("touch-active");
            });
        });

        document.addEventListener("click", (event) => {
            if (window.innerWidth >= 768) return;
            if (event.target.closest(".mobile-hover-card")) return;

            clearActiveCards();
        });

        const handleMobileScroll = () => {
            if (!isMobileViewport()) return;

            if (!hasStartedMobileScroll && window.scrollY > 0) {
                hasStartedMobileScroll = true;
            }

            if (!hasStartedMobileScroll) return;

            queueScrollHintCheck();
        };

        window.addEventListener("scroll", handleMobileScroll, {
            passive: true
        });

        window.addEventListener("resize", () => {
            if (window.innerWidth >= 768) {
                clearActiveCards();
                clearAllScrollPreviews();
                hasStartedMobileScroll = false;
                scrollHintTicking = false;
                return;
            }

            if (window.scrollY > 0) {
                hasStartedMobileScroll = true;
            }

            queueScrollHintCheck();
        });

        if (isMobileViewport() && window.scrollY > 0) {
            hasStartedMobileScroll = true;
            queueScrollHintCheck();
        }
    });
</script>

<style>
    @media (max-width: 767px) {
        .mobile-hover-card.touch-active .mobile-hover-content,
        .mobile-hover-card.scroll-preview .mobile-hover-content {
            opacity: 1;
        }

        .mobile-hover-card.mobile-hover-soft.touch-active .mobile-hover-overlay,
        .mobile-hover-card.mobile-hover-soft.scroll-preview .mobile-hover-overlay {
            opacity: 0.7;
        }

        .mobile-hover-card.mobile-hover-radial.touch-active .mobile-hover-overlay,
        .mobile-hover-card.mobile-hover-radial.scroll-preview .mobile-hover-overlay {
            opacity: 0.8;
        }

        .mobile-hover-card.mobile-hover-journey .mobile-journey-panel {
            background-color: rgba(0, 0, 0, 0.28);
            transform: translateY(0.5rem);
        }

        .mobile-hover-card.mobile-hover-journey.touch-active .mobile-journey-panel,
        .mobile-hover-card.mobile-hover-journey.scroll-preview .mobile-journey-panel {
            background-color: rgba(0, 0, 0, 0.42);
            transform: translateY(0);
        }
    }
</style>
