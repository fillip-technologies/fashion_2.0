<section class="overflow-x-clip bg-[#e5e6e1] text-black">
    @php
        $fruit = asset('assets/images/lookbook/fruit.png');
    @endphp

    <div class="hidden lg:block">
        <div class="relative mx-auto h-[750px] w-full max-w-[1440px]">
            <button type="button" onclick="window.history.back()"
                class="absolute left-[34px] top-[18px] flex h-10 w-10 items-center justify-center" aria-label="Go back">
                <img src="{{ asset('assets/SVG/Back black icon.svg') }}" alt=""
                    class="h-[0.75rem] w-[0.4375rem]" />
            </button>

            <img src="{{ $fruit }}" alt=""
                class="pointer-events-none absolute left-[240px] -top-10 w-[140px] select-none" />

            <div class="absolute left-1/2 top-[154px] flex w-[260px] -translate-x-1/2 flex-col items-center gap-3">
                <h2 class="text-[20px] tracking-[0.15em] font-medium mb-2 uppercase">
                    Collection Name
                </h2>
                <div class="h-px w-full bg-black/40"></div>
            </div>

            <div
                class="absolute left-1/2 top-[285px] max-w-3xl mx-auto -translate-x-1/2 space-y-5 text-[11px] font-light leading-[1.9]">
                <p class=" text-[0.875rem] pb-10" style="font-weight: 200">
                    A fashion collection is a curated group of clothing, footwear, and accessories designed around a
                    central theme, concept, or inspiration, unified by shared colors, fabrics, silhouettes, and styles
                    for a specific season (like Spring/Summer or Fall/Winter) to tell a cohesive story and predict
                    trends. These collections often blend trendy, limited-edition pieces with timeless basics, creating
                    a complete look that designers present to buyers and the public, often during Fashion Weeks.
                    A fashion collection is a curated group of clothing, footwear, and accessories designed around a
                    central theme, concept,
                </p>
                <p class=" text-[0.875rem] pb-12" style="font-weight: 200">
                    A fashion collection is a curated group of clothing, footwear, and accessories designed around a
                    central theme, concept, or inspiration, unified by shared colors, fabrics, silhouettes, and styles
                    for a specific season (like Spring/Summer or Fall/Winter) to tell a cohesive story and predict
                    trends. These collections often blend trendy, limited-edition pieces with timeless basics, creating
                    a complete look that designers present to buyers and the public, often during Fashion Weeks.

                </p>
            </div>

            <div class="absolute inset-x-0 bottom-0 h-px bg-dash-dot"></div>
        </div>

        <div class="relative mx-auto h-[3560px] w-full max-w-[1440px]">
            <img src="{{ asset('assets/images/lookbook/one.png') }}" alt="Lookbook portrait one"
                class="absolute left-[220px] top-[110px] h-auto w-[448px]" loading="lazy" />

            <img src="{{ asset('assets/images/lookbook/two.png') }}" alt="Lookbook portrait two"
                class="absolute left-[780px] top-[360px] h-auto w-[448px]" loading="lazy" />

            <img src="{{ $fruit }}" alt=""
                class="pointer-events-none absolute left-[670px] top-[1010px] w-[150px] select-none" />

            <img src="{{ asset('assets/images/lookbook/three.png') }}" alt="Lookbook portrait three"
                class="absolute left-[490px] top-[1330px] h-auto w-[480px]" loading="lazy" />

            <img src="{{ $fruit }}" alt=""
                class="pointer-events-none absolute left-[40px] top-[2030px] w-[150px] select-none" />

            <img src="{{ asset('assets/images/lookbook/four.png') }}" alt="Lookbook portrait four"
                class="absolute left-[780px] top-[2080px] h-auto w-[448px]" loading="lazy" />

            <img src="{{ asset('assets/images/lookbook/five.png') }}" alt="Lookbook portrait five"
                class="absolute left-[220px] top-[2500px] h-auto w-[448px]" loading="lazy" />

            <img src="{{ $fruit }}" alt=""
                class="pointer-events-none absolute left-[1020px] top-[3140px] w-[150px] select-none" />
        </div>
    </div>

    <div class="px-6 pb-16 pt-8 sm:px-8 md:px-10 lg:hidden">
        <button type="button" onclick="window.history.back()" class="mb-6 flex h-10 w-10 items-center justify-center"
            aria-label="Go back">
            <img src="{{ asset('assets/SVG/Back black icon.svg') }}" alt=""
                class="h-[0.75rem] w-[0.4375rem]" />
        </button>

        <div class="relative mx-auto max-w-[24rem] pt-2">
            <img src="{{ $fruit }}" alt=""
                class="pointer-events-none absolute left-0 top-0 w-[4.75rem] select-none" />

            <div class="mx-auto flex w-[12rem] flex-col items-center gap-3 pt-10">
                <h2 class="text-center text-[0.625rem] font-medium uppercase tracking-[0.34em] text-black/85">
                    Collection Name
                </h2>
                <div class="h-px w-full bg-black/30"></div>
            </div>

            <div class="mx-auto mt-10 max-w-[20rem] space-y-4 text-[0.65625rem] font-light leading-[1.9] text-black/60">
                <p>
                    A fashion collection is a curated group of clothing, footwear, and accessories designed around a
                    central theme, concept, or inspiration, unified by shared colors, fabrics, silhouettes, and styles
                    for a specific season to tell a cohesive story and predict trends.
                </p>
                <p>
                    These collections often blend limited-edition statement pieces with timeless essentials, creating a
                    complete visual narrative that designers present to buyers and the public through carefully styled
                    looks and compositions.
                </p>
            </div>
        </div>

        <div class="mt-12 h-px w-full bg-dash-dot opacity-55"></div>

        <div class="mx-auto mt-12 flex max-w-[24rem] flex-col items-center gap-10">
            <img src="{{ asset('assets/images/lookbook/one.png') }}" alt="Lookbook portrait one"
                class="mr-auto h-auto w-[14.25rem]" loading="lazy" />

            <img src="{{ asset('assets/images/lookbook/two.png') }}" alt="Lookbook portrait two"
                class="ml-auto h-auto w-[13rem]" loading="lazy" />

            <img src="{{ $fruit }}" alt="" class="pointer-events-none h-auto w-[4.5rem] select-none" />

            <img src="{{ asset('assets/images/lookbook/three.png') }}" alt="Lookbook portrait three"
                class="h-auto w-[14.5rem]" loading="lazy" />

            <div class="flex w-full items-start justify-between gap-6">
                <img src="{{ $fruit }}" alt=""
                    class="pointer-events-none h-auto w-[4rem] -translate-x-4 select-none" />
                <img src="{{ asset('assets/images/lookbook/four.png') }}" alt="Lookbook portrait four"
                    class="h-auto w-[13rem]" loading="lazy" />
            </div>

            <div class="flex w-full items-end justify-between gap-6">
                <img src="{{ asset('assets/images/lookbook/five.png') }}" alt="Lookbook portrait five"
                    class="h-auto w-[14.25rem]" loading="lazy" />
                <img src="{{ $fruit }}" alt=""
                    class="pointer-events-none h-auto w-[4.25rem] translate-x-2 select-none" />
            </div>
        </div>
    </div>
</section>
