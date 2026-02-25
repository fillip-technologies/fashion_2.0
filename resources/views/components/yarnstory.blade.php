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

        <div class="group relative overflow-hidden cursor-pointer">

            <img src="{{ asset('assets/images/yarnstory/one.png') }}" class="w-full h-auto block" />

            <div
                class="absolute inset-0
           bg-gradient-to-b from-black/80 via-white/20 to-white/30
           opacity-0 transition-opacity duration-700
           group-hover:opacity-100  group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100">
            </div>

            <div
                class="absolute top-6 left-6 md:top-24 md:left-24 text-white
           opacity-0 transition-opacity duration-700
           group-hover:opacity-100  group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100">
                <h3 class="text-[1.5rem] tracking-widest">THE<br>PASHMINA</h3>
                <p class="mt-14 text-sm">From the region of Changthang, Ladakh.</p>
            </div>


            <div class="absolute inset-0
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
                    onclick="event.stopPropagation(); this.closest('[data-overlay]').classList.remove('opacity-100','pointer-events-auto')">
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

        <div class="group relative overflow-hidden cursor-pointer">

            <img src="{{ asset('assets/images/yarnstory/two.png') }}" class="w-full h-auto block" />

            <div
                class="absolute inset-0
           bg-gradient-to-b from-black/80 via-white/20 to-white/30
           opacity-0 transition-opacity duration-700
           group-hover:opacity-100  group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100">
            </div>


            <div
                class="absolute top-6 left-6 md:top-24 md:left-24 text-white
           opacity-0 transition-opacity duration-700
           group-hover:opacity-100  group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100">
                <h3 class="text-[1.5rem] tracking-widest"><br>YAK</h3>
                <p class="mt-4 md:mt-14 text-sm">From the valley of Kashmir, Srinagar.</p>
            </div>


            <div class="absolute inset-0
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
                    onclick="event.stopPropagation(); this.closest('[data-overlay]').classList.remove('opacity-100','pointer-events-auto')">
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

        <div class="group relative overflow-hidden cursor-pointer">

            <img src="{{ asset('assets/images/yarnstory/three.png') }}" class="w-full h-auto block" />


            <div
                class="absolute inset-0
           bg-gradient-to-b from-black/80 via-white/20 to-white/30
           opacity-0 transition-opacity duration-700
           group-hover:opacity-100  group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100">
            </div>

            <div
                class="absolute top-6 left-6 md:top-24 md:left-24 text-white
           opacity-0 transition-opacity duration-700
           group-hover:opacity-100  group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100">
                <h3 class="text-[1.5rem] tracking-widest">THE<br>SILK</h3>
                <p class="mt-4 md:mt-14 text-sm">From the silk city of Bihar, Bhagalpur.</p>
            </div>


            <div class="absolute inset-0
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
                    onclick="event.stopPropagation(); this.closest('[data-overlay]').classList.remove('opacity-100','pointer-events-auto')">
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

        <div class="group relative overflow-hidden cursor-pointer">


            <img src="{{ asset('assets/images/yarnstory/four.png') }}" class="w-full h-auto block" />

            <div
                class="absolute inset-0
           bg-gradient-to-b from-black/80 via-white/20 to-white/30
           opacity-0 transition-opacity duration-700
           group-hover:opacity-100  group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100">
            </div>


            <div
                class="absolute top-6 left-6 md:top-24 md:left-24 text-white
           opacity-0 transition-opacity duration-700
           group-hover:opacity-100  group-[.locked]:opacity-0 pointer-events-none hover-fixed:opacity-100 group-[.active]:opacity-100">
                <h3 class="text-[1.5rem] tracking-widest">THE<br>MUSLIN COTTON</h3>
                <p class="mt-4 md:mt-14 text-sm">From the city of Kalna, WestBengal.</p>
            </div>


            <div class="absolute inset-0
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
                    onclick="event.stopPropagation(); this.closest('[data-overlay]').classList.remove('opacity-100','pointer-events-auto')">
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
    .no-hover .group-hover\:opacity-100 {
        opacity: 0 !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        const grid = document.getElementById('storyGrid');
        const cards = Array.from(grid.querySelectorAll('.group'));
        let isDetailOpen = false;
        let activeCard = null;

        grid.addEventListener('click', (e) => {

            if (isDetailOpen) return;

            const clickedCard = e.target.closest('.group');
            if (!clickedCard) return;

            const index = cards.indexOf(clickedCard);
            if (index === -1) return;

            activeCard = clickedCard;
            activeCard.classList.add('active');

            cards.forEach(card => {
                if (card !== activeCard) {
                    card.classList.add('locked');
                }
            });

            const targetIndex = index % 2 === 0 ? index + 1 : index - 1;
            const targetCard = cards[targetIndex];
            if (!targetCard) return;

            const overlay = targetCard.querySelector('[data-overlay]');
            overlay.classList.add('opacity-100', 'pointer-events-auto');

            isDetailOpen = true;
        });

        document.querySelectorAll('[data-overlay] button').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const overlay = btn.closest('[data-overlay]');
                overlay.classList.remove('opacity-100', 'pointer-events-auto');
                cards.forEach(card => {
                    card.classList.remove('locked', 'active');
                });

                activeCard = null;
                isDetailOpen = false;
            });
        });

    });
</script>
