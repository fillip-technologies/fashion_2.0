<section class="bg-background min-h-screen  pt-14 text-black">
    <div class="px-6 md:px-14">

        <div class="mb-12 cursor-pointer" onclick="window.history.back()">
            <img src="{{ asset('assets/SVG/Back black icon.svg') }}" alt="Back" class="w-[0.4375rem] h-[0.75rem]" />
        </div>

        <div
            class="max-w-6xl mx-auto flex flex-col md:flex-row items-center md:items-center justify-between text-[15px] tracking-wide uppercase font-medium mb-20 md:mb-24 gap-6 md:gap-0">
            <span class="opacity-50">About Brand Name</span>
            <span>THE YARN’S STORY</span>
        </div>

        <div class="max-w-2xl mx-auto text-center mb-14">
            <h2 class="text-[20px] tracking-[0.15em] font-medium mb-2">
                DEFINED BY MATERIAL
            </h2>
            <div class="h-px w-80 mx-auto bg-black/40"></div>
        </div>

        <div class="max-w-2xl mx-auto space-y-10 text-[14px] leading-relaxed text-justify" style="font-weight: 200">
            <p>
                A fashion collection is a curated group of clothing, footwear, and
                accessories designed around a central theme, concept, or inspiration,
                unified by shared colors, fabrics, silhouettes, and styles for a specific
                season (like Spring/Summer or Fall/Winter) to tell a cohesive story and
                predict trends. These collections often blend trendy, limited-edition
                pieces with timeless basics, creating a complete look that designers
                present to buyers and the public, often during Fashion Weeks.
            </p>

            <p>
                A fashion collection is a curated group of clothing, footwear, and
                accessories designed around a central theme, concept, or inspiration,
                unified by shared colors, fabrics, silhouettes, and styles for a specific
                season (like Spring/Summer or Fall/Winter) to tell a cohesive story and
                predict trends. These collections often blend trendy, limited-edition
                pieces with timeless basics, creating a complete look that designers
                present to buyers and the public, often during Fashion Weeks.
            </p>
        </div>

    </div>



    <div id="storyGrid" class="grid grid-cols-1 md:grid-cols-2 mt-28 md:mt-36 w-full mx-auto">

        <div class="group story-card relative overflow-hidden cursor-pointer" data-story-card>

            <img src="{{ asset('assets/images/yarnstory/one.png') }}" class="w-full h-auto block" />

            <div
                class="story-card-scrim absolute inset-0
           bg-gradient-to-b from-black/80 via-white/20 to-white/30
           opacity-0 transition-opacity duration-700
           md:group-hover:opacity-100 group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100 group-[.story-preview]:opacity-100 group-[.story-active-mobile]:opacity-100">
            </div>

            <div
                class="story-card-caption absolute top-6 left-6 md:top-24 md:left-24 text-white
           opacity-0 transition-opacity duration-700
           md:group-hover:opacity-100 group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100 group-[.story-preview]:opacity-100 group-[.story-active-mobile]:opacity-100">
                <h3 class="text-[1.5rem] tracking-widest">THE<br>PASHMINA</h3>
                <p class="mt-14 text-sm">From the region of Changthang, Ladakh.</p>
            </div>


            <div class="story-card-overlay absolute inset-0
                    bg-black/90
                text-white
                px-16 py-20
                 overflow-y-auto
                opacity-0 pointer-events-none
                transition-opacity duration-500 ease-out
                z-10"
                data-overlay>

                <button
                    class="absolute top-10 right-12 text-white/70 hover:text-white
                        text-2xl font-light tracking-widest"
                    data-overlay-close>
                    —
                </button>


                <div class="max-w-xl px-0 md:px-4">

                    <div class="flex flex-col space-y-3">

                        <p class="text-[1rem] uppercase text-white leading-relaxed" style="font-weight: 500">
                            The
                        </p>


                        <h2 class="text-[1rem] uppercase text-white leading-relaxed" style="font-weight: 500">
                            Yak From Kashmir
                        </h2>
                    </div>


                    <div class="space-y-5 text-[1rem]  text-white/70 mt-10" style="font-weight: 200">
                        <p>
                            From the Himalayan region, including areas near Kashmir like Ladakh, is
                            a luxurious, sustainable fiber from the fine undercoat (khullu) of yaks.
                        </p>

                        <p>
                            Prized for its incredible warmth (warmer than Merino), softness (like cashmere),
                            breathability, and natural odor resistance, used for premium clothing, blankets, and shawls.
                        </p>

                        <p>
                            Often in natural dark brown hues due to its eco-friendly harvesting by nomads.
                        </p>
                    </div>

                    <a href="/yarn"
                        class="inline-block mt-10 md:mt-20 text-[0.875rem] text-white/60 hover:text-white/90
                                border-b border-white/60 hover:border-white/90 px-2 font-extralight
                                transition">
                        View our pieces
                    </a>

                </div>
            </div>


        </div>

        <div class="group story-card relative overflow-hidden cursor-pointer" data-story-card>

            <img src="{{ asset('assets/images/yarnstory/two.png') }}" class="w-full h-auto block" />

            <div
                class="story-card-scrim absolute inset-0
           bg-gradient-to-b from-black/80 via-white/20 to-white/30
           opacity-0 transition-opacity duration-700
           md:group-hover:opacity-100 group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100 group-[.story-preview]:opacity-100 group-[.story-active-mobile]:opacity-100">
            </div>


            <div
                class="story-card-caption absolute top-6 left-6 md:top-24 md:left-24 text-white
           opacity-0 transition-opacity duration-700
           md:group-hover:opacity-100 group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100 group-[.story-preview]:opacity-100 group-[.story-active-mobile]:opacity-100">
                <h3 class="text-[1.5rem] tracking-widest"><br>YAK</h3>
                <p class="mt-4 md:mt-14 text-sm">From the valley of Kashmir, Srinagar.</p>
            </div>


            <div class="story-card-overlay absolute inset-0
                    bg-black/90
                text-white
                px-16 py-20
                overflow-y-auto
                opacity-0 pointer-events-none
                transition-opacity duration-500 ease-out
                z-10"
                data-overlay>

                <button
                    class="absolute top-10 right-12 text-white/70 hover:text-white
                        text-2xl font-light tracking-widest"
                    data-overlay-close>
                    —
                </button>


                <div class="max-w-xl px-0 md:px-4">

                    <div class="flex flex-col space-y-3">

                        <p class="text-[1rem] uppercase text-white leading-relaxed" style="font-weight: 500">
                            The
                        </p>


                        <h2 class="text-[1rem] uppercase text-white leading-relaxed" style="font-weight: 500">
                            Pashmina from Ladakh
                        </h2>
                    </div>

                    <div class="space-y-5 text-[1rem]  text-white/70 mt-10" style="font-weight: 200">
                        <p>
                            A luxurious, ultra-fine wool from the undercoat of the Changthangi goat,
                            native to Ladakh’s high-altitude Changthang plateau.
                        </p>

                        <p>
                            Known for its incredible softness, warmth, and rarity, ethically
                            collected by Changpa nomads during spring shedding, and historically
                            woven into exquisite shawls in Kashmir, making it “soft gold” or
                            “cashmere”.
                        </p>

                        <p>
                            It’s prized for its fine fiber diameter (around 12–13 μm), making it one
                            of the world’s finest natural fibers, but challenging to spin.
                        </p>
                    </div>

                    <a href="/yarn"
                        class="inline-block mt-10 md:mt-20 text-[0.875rem] text-white/60 hover:text-white/90
                                border-b border-white/60 hover:border-white/90 px-2 font-extralight
                                transition">
                        View our pieces
                    </a>

                </div>
            </div>


        </div>

        <div class="group story-card relative overflow-hidden cursor-pointer" data-story-card>

            <img src="{{ asset('assets/images/yarnstory/three.png') }}" class="w-full h-auto block" />


            <div
                class="story-card-scrim absolute inset-0
           bg-gradient-to-b from-black/80 via-white/20 to-white/30
           opacity-0 transition-opacity duration-700
           md:group-hover:opacity-100 group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100 group-[.story-preview]:opacity-100 group-[.story-active-mobile]:opacity-100">
            </div>

            <div
                class="story-card-caption absolute top-6 left-6 md:top-24 md:left-24 text-white
           opacity-0 transition-opacity duration-700
           md:group-hover:opacity-100 group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100 group-[.story-preview]:opacity-100 group-[.story-active-mobile]:opacity-100">
                <h3 class="text-[1.5rem] tracking-widest">THE<br>SILK</h3>
                <p class="mt-4 md:mt-14 text-sm">From the silk city of Bihar, Bhagalpur.</p>
            </div>


            <div class="story-card-overlay absolute inset-0
                    bg-black/90
                text-white
                px-16 py-20
                overflow-y-auto
                opacity-0 pointer-events-none
                transition-opacity duration-500 ease-out
                z-10"
                data-overlay>
                <button
                    class="absolute top-10 right-12 text-white/70 hover:text-white
                        text-2xl font-light tracking-widest"
                    data-overlay-close>
                    —
                </button>

                <div class="max-w-xl px-0 md:px-4">

                    <div class="flex flex-col space-y-3">
                        <p class="text-[1rem] uppercase text-white leading-relaxed" style="font-weight: 500">
                            The
                        </p>

                        <h2 class="text-[1rem] uppercase text-white leading-relaxed" style="font-weight: 500">
                            COTTON FROM WEST BENGAL
                        </h2>
                    </div>

                    <div class="space-y-5 text-[1rem]  text-white/70 mt-10" style="font-weight: 200">
                        <p>
                            Muslin cotton from Bengal is a legendary, incredibly fine, lightweight, and breathable
                            cotton fabric.
                        </p>

                        <p>
                            Historically hand-woven in the Bengal region (especially Dhaka) from unique local cotton
                            (phuti karpas) into sheer, soft textiles, known as "woven air" or "flowing water" for its
                            delicacy.
                        </p>

                        <p>
                            Once prized globally and now seeing revival efforts.
                        </p>
                    </div>

                    <a href="/yarn"
                        class="inline-block mt-10 md:mt-20 text-[0.875rem] text-white/60 hover:text-white/90
                                border-b border-white/60 hover:border-white/90 px-2 font-extralight
                                transition">
                        View our pieces
                    </a>

                </div>
            </div>

        </div>

        <div class="group story-card relative overflow-hidden cursor-pointer" data-story-card>


            <img src="{{ asset('assets/images/yarnstory/four.png') }}" class="w-full h-auto block" />

            <div
                class="story-card-scrim absolute inset-0
           bg-gradient-to-b from-black/80 via-white/20 to-white/30
           opacity-0 transition-opacity duration-700
           md:group-hover:opacity-100 group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100 group-[.story-preview]:opacity-100 group-[.story-active-mobile]:opacity-100">
            </div>


            <div
                class="story-card-caption absolute top-6 left-6 md:top-24 md:left-24 text-white
           opacity-0 transition-opacity duration-700
           md:group-hover:opacity-100 group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100 group-[.story-preview]:opacity-100 group-[.story-active-mobile]:opacity-100">
                <h3 class="text-[1.5rem] tracking-widest">THE<br>MUSLIN COTTON</h3>
                <p class="mt-4 md:mt-14 text-sm">From the city of Kalna, WestBengal.</p>
            </div>


            <div class="story-card-overlay absolute inset-0
                    bg-black/90
                text-white
                px-16 py-20
                overflow-y-auto
                opacity-0 pointer-events-none
                transition-opacity duration-500 ease-out
                z-10"
                data-overlay>

                <button
                    class="absolute top-10 right-12 text-white/70 hover:text-white
                        text-2xl font-light tracking-widest"
                    data-overlay-close>
                    —
                </button>


                <div class="max-w-xl px-0 md:px-4">

                    <div class="flex flex-col space-y-3">

                        <p class="text-[1rem] uppercase text-white leading-relaxed" style="font-weight: 500">
                            The
                        </p>

                        <h2 class="text-[1rem] uppercase text-white leading-relaxed" style="font-weight: 500">
                            SILK FROM BIHAR
                        </h2>
                    </div>


                    <div class="space-y-5 text-[1rem]  text-white/70 mt-10" style="font-weight: 200">
                        <p>
                            Primarily known as Bhagalpuri Silk or Tussar Silk, is famous for its unique, rich texture,
                            natural deep golden sheen, durability, and eco-friendliness.
                        </p>

                        <p>
                            With Bhagalpur being the "Silk City" producing vibrant sarees, fabrics, and home decor using
                            wild silkworms, making it a significant cultural and economic asset.
                        </p>

                    </div>


                    <a href="/yarn"
                        class="inline-block mt-10 md:mt-20 text-[0.875rem] text-white/60 hover:text-white/90
                                border-b border-white/60 hover:border-white/90 px-2 font-extralight
                                transition">
                        View our pieces
                    </a>

                </div>
            </div>

        </div>

    </div>


</section>


<style>
    .no-hover .group-hover\:opacity-100,
    .no-hover .md\:group-hover\:opacity-100 {
        opacity: 0 !important;
    }

    body.story-overlay-lock {
        overflow: hidden;
    }

    @media (max-width: 767px) {
        #storyGrid .story-card-caption {
            transform: translateY(0.75rem);
            transition: opacity 450ms ease, transform 450ms ease;
        }

        #storyGrid .story-card.story-preview .story-card-scrim,
        #storyGrid .story-card.story-active-mobile .story-card-scrim {
            opacity: 1;
        }

        #storyGrid .story-card.story-preview .story-card-caption,
        #storyGrid .story-card.story-active-mobile .story-card-caption {
            opacity: 1;
            transform: translateY(0);
        }

        #storyGrid .story-card-overlay {
            position: fixed;
            inset: 0;
            padding: 5rem 1.5rem 2rem;
            background: rgba(0, 0, 0, 0.94);
            z-index: 1200;
            overscroll-behavior: contain;
        }

        #storyGrid .story-card-overlay .max-w-xl {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        #storyGrid [data-overlay-close] {
            top: 1.25rem;
            right: 1.25rem;
            font-size: 1.75rem;
            line-height: 1;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const grid = document.getElementById('storyGrid');
        if (!grid) return;

        const cards = Array.from(grid.querySelectorAll('[data-story-card]'));
        const previewTimers = new WeakMap();
        const scrollHintTriggerRatio = 0.5;
        const scrollHintPreviewDuration = 1400;
        let isDetailOpen = false;
        let activeCard = null;
        let activeOverlay = null;
        let hasStartedMobileScroll = false;
        let scrollHintTicking = false;
        let storyOverlayAddedBodyOverflow = false;
        let storyOverlayAddedBodyNoScroll = false;
        let storyOverlayAddedHtmlOverflow = false;

        const isMobileViewport = () => window.innerWidth < 768;
        const hasPendingScrollHints = () => cards.some((card) => card.dataset.scrollHintSeen !== 'true');
        const getStoryContentCard = (index) => {
            const pairedIndex = index % 2 === 0 ? index + 1 : index - 1;
            return cards[pairedIndex] || cards[index] || null;
        };

        const clearPreviewTimer = (card) => {
            const timerId = previewTimers.get(card);

            if (!timerId) return;

            window.clearTimeout(timerId);
            previewTimers.delete(card);
        };

        const clearScrollPreview = (card) => {
            clearPreviewTimer(card);
            card.classList.remove('story-preview');
        };

        const clearAllScrollPreviews = (activePreviewCard = null) => {
            cards.forEach((card) => {
                if (card !== activePreviewCard) {
                    clearScrollPreview(card);
                }
            });
        };

        const lockStoryOverlayScroll = () => {
            storyOverlayAddedBodyOverflow = !document.body.classList.contains('overflow-hidden');
            storyOverlayAddedBodyNoScroll = !document.body.classList.contains('no-scroll');
            storyOverlayAddedHtmlOverflow = !document.documentElement.classList.contains('overflow-hidden');

            document.body.classList.add('story-overlay-lock', 'overflow-hidden', 'no-scroll');
            document.documentElement.classList.add('overflow-hidden');
        };

        const unlockStoryOverlayScroll = () => {
            document.body.classList.remove('story-overlay-lock');

            if (storyOverlayAddedBodyOverflow) {
                document.body.classList.remove('overflow-hidden');
            }

            if (storyOverlayAddedBodyNoScroll) {
                document.body.classList.remove('no-scroll');
            }

            if (storyOverlayAddedHtmlOverflow) {
                document.documentElement.classList.remove('overflow-hidden');
            }

            storyOverlayAddedBodyOverflow = false;
            storyOverlayAddedBodyNoScroll = false;
            storyOverlayAddedHtmlOverflow = false;
        };

        const resetDesktopState = () => {
            cards.forEach((card) => {
                card.classList.remove('locked', 'active');
            });
        };

        const resetMobileState = () => {
            cards.forEach((card) => {
                card.classList.remove('story-active-mobile');
            });
        };

        const closeOverlay = () => {
            if (activeOverlay) {
                activeOverlay.classList.remove('opacity-100', 'pointer-events-auto');
            }

            clearAllScrollPreviews();
            resetDesktopState();
            resetMobileState();
            unlockStoryOverlayScroll();

            activeOverlay = null;
            activeCard = null;
            isDetailOpen = false;
        };

        const previewCardOnScroll = (card) => {
            if (!isMobileViewport()) return;
            if (isDetailOpen) return;
            if (card.dataset.scrollHintSeen === 'true') return;

            card.dataset.scrollHintSeen = 'true';
            clearAllScrollPreviews(card);
            card.classList.add('story-preview');

            const timerId = window.setTimeout(() => {
                if (!card.classList.contains('story-active-mobile')) {
                    card.classList.remove('story-preview');
                }

                previewTimers.delete(card);
            }, scrollHintPreviewDuration);

            previewTimers.set(card, timerId);
        };

        const runScrollHintCheck = () => {
            scrollHintTicking = false;

            if (!isMobileViewport() || !hasStartedMobileScroll || !hasPendingScrollHints() || isDetailOpen) return;

            const triggerLine = window.innerHeight * scrollHintTriggerRatio;
            let nextCardToPreview = null;
            let closestDistance = Number.POSITIVE_INFINITY;

            cards.forEach((card) => {
                if (card.dataset.scrollHintSeen === 'true') return;

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

        grid.addEventListener('click', (e) => {
            if (isDetailOpen) return;

            const clickedCard = e.target.closest('[data-story-card]');
            if (!clickedCard) return;

            const index = cards.indexOf(clickedCard);
            if (index === -1) return;

            clearAllScrollPreviews();
            clearScrollPreview(clickedCard);
            activeCard = clickedCard;

            if (isMobileViewport()) {
                const contentCard = getStoryContentCard(index);
                const overlay = contentCard ? contentCard.querySelector('[data-overlay]') : null;

                if (!overlay) return;

                activeCard.classList.add('story-active-mobile');
                overlay.classList.add('opacity-100', 'pointer-events-auto');
                activeOverlay = overlay;
                isDetailOpen = true;
                lockStoryOverlayScroll();
                return;
            }

            activeCard.classList.add('active');

            cards.forEach(card => {
                if (card !== activeCard) {
                    card.classList.add('locked');
                }
            });

            const targetCard = getStoryContentCard(index);
            if (!targetCard) return;

            const overlay = targetCard.querySelector('[data-overlay]');
            if (!overlay) return;

            overlay.classList.add('opacity-100', 'pointer-events-auto');
            activeOverlay = overlay;

            isDetailOpen = true;
        });

        document.querySelectorAll('[data-overlay-close]').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                closeOverlay();
            });
        });

        document.querySelectorAll('[data-overlay]').forEach((overlay) => {
            overlay.addEventListener('click', (event) => {
                if (!isMobileViewport()) return;
                if (event.target !== overlay) return;

                closeOverlay();
            });
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && isDetailOpen) {
                closeOverlay();
            }
        });

        const handleMobileScroll = () => {
            if (!isMobileViewport()) return;

            if (!hasStartedMobileScroll && window.scrollY > 0) {
                hasStartedMobileScroll = true;
            }

            if (!hasStartedMobileScroll) return;

            queueScrollHintCheck();
        };

        window.addEventListener('scroll', handleMobileScroll, {
            passive: true
        });

        window.addEventListener('resize', () => {
            if (!isMobileViewport() && activeCard && activeCard.classList.contains('story-active-mobile')) {
                closeOverlay();
            }

            if (isMobileViewport() && activeCard && activeCard.classList.contains('active')) {
                closeOverlay();
            }

            if (!isMobileViewport()) {
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
