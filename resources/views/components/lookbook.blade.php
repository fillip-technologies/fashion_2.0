<section class="overflow-x-clip bg-[#e5e6e1] text-black">
    @php
        $fruit = asset('assets/images/lookbook/fruit.png');
        $lookbookOne = asset('assets/images/lookbook/one.png');
    @endphp

    <div class="hidden lg:block">
        <div class="relative mx-auto h-[750px] w-full">
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
                <p class="pb-10 text-[0.875rem] font-[200]">
                    A fashion collection is a curated group of clothing, footwear, and accessories designed around a
                    central theme, concept, or inspiration, unified by shared colors, fabrics, silhouettes, and styles
                    for a specific season (like Spring/Summer or Fall/Winter) to tell a cohesive story and predict
                    trends. These collections often blend trendy, limited-edition pieces with timeless basics, creating
                    a complete look that designers present to buyers and the public, often during Fashion Weeks.
                    A fashion collection is a curated group of clothing, footwear, and accessories designed around a
                    central theme, concept,
                </p>
                <p class="pb-12 text-[0.875rem] font-[200]">
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
            <button type="button" data-lookbook-open="one"
                class="absolute left-[220px] top-[110px] block cursor-zoom-in transition-transform duration-300 hover:scale-[1.01] focus:outline-none focus-visible:ring-2 focus-visible:ring-black/25"
                aria-label="Open lookbook details for look one">
                <img src="{{ $lookbookOne }}" alt="Lookbook portrait one" class="h-auto w-[448px]" loading="lazy" />
            </button>

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
            <button type="button" data-lookbook-open="one"
                class="mr-auto block cursor-zoom-in transition-transform duration-300 hover:scale-[1.01] focus:outline-none focus-visible:ring-2 focus-visible:ring-black/25"
                aria-label="Open lookbook details for look one">
                <img src="{{ $lookbookOne }}" alt="Lookbook portrait one" class="h-auto w-[14.25rem]"
                    loading="lazy" />
            </button>

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

    <div id="lookbookOverlayOne"
        class="pointer-events-none fixed inset-0 z-[1600] overflow-y-auto bg-secondary opacity-0 transition-opacity duration-300"
        role="dialog" aria-modal="true" aria-label="Look one details">
        {{-- <div class="fixed inset-0 bg-[#e7e7e2]"></div> --}}

        <div class="relative mx-auto min-h-screen w-full px-5 pb-8 pt-5 sm:px-8 lg:px-10">
            <button type="button" data-lookbook-close
                class="fixed right-5 top-5 flex h-10 w-10 items-center justify-center text-black transition hover:opacity-60 sm:right-7 sm:top-6 lg:right-8 lg:top-6"
                aria-label="Close lookbook details">
                <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.45"
                    aria-hidden="true">
                    <path d="M6 6L18 18" />
                    <path d="M18 6L6 18" />
                </svg>
            </button>
  
            <div data-lookbook-panel
                class="mx-auto mt-16 flex w-fit flex-col items-center gap-5 lg:flex-row lg:items-start lg:gap-10">
                <div class="w-full max-w-[396px]">
                    <img src="{{ $lookbookOne }}" alt="Lookbook portrait one expanded"
                        class="h-auto w-full object-cover" />
                </div>

                <div class="flex max-w-full flex-col items-center gap-5 lg:flex-row lg:items-start lg:gap-[8px]">
                    <div
                        class="flex w-full flex-col border border-dashed border-white/90 px-6 py-12">
                        <div class="flex flex-1 items-center justify-center">
                            <img src="{{ asset('assets/images/lookbook/big.png') }}" alt="Lavalliere romper in silk"
                                class="h-[375px] w-[300px] object-contain" loading="lazy" />
                        </div>

                        <div
                            class="mx-auto flex w-full items-center justify-center border border-dashed border-black/70 bg-[#f5f4ef] px-5 py-3 text-center text-[12px] font-light uppercase leading-[1.2] tracking-[0.03em]" style="font-weight: 300">
                            <div>
                                <div>LAVALLIERE ROMPER IN</div>
                                <div>SILK</div>
                            </div>
                        </div>
                    </div>

                    <div class="flex w-full max-w-[220px] flex-col gap-[8px]">
                        <div
                            class="flex flex-col border border-dashed border-white/90 px-6 py-4">
                            <div class="flex flex-1 items-center justify-center">
                                <img src="{{ asset('assets/images/lookbook/up.png') }}"
                                    alt="Intertwined cuff in metal" class="h-[191px] w-[153px] object-contain"
                                    loading="lazy" />
                            </div>

                            <div
                                class="mx-auto flex w-full items-center justify-center border border-dashed border-black/70 bg-[#f5f4ef] px-3 py-3 text-center text-[10px] font-light uppercase leading-[1.25] tracking-[0.03em]" style="font-weight: 300">
                                <div>
                                    <div>INTERTWINED CUFF IN</div>
                                    <div>METAL</div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex flex-col border border-dashed border-white/90 px-6 py-4">
                            <div class="flex flex-1 items-center justify-center ">
                                <img src="{{ asset('assets/images/lookbook/down.png') }}" alt="Rhinestone"
                                    class="h-[191px] w-[153px] object-contain" loading="lazy" />
                            </div>

                            <div
                                class="mx-auto flex w-full items-center justify-center border border-dashed border-black/70 bg-[#f5f4ef] px-3 py-3 text-center text-[10px] font-light uppercase leading-[1.25] tracking-[0.03em]" style="font-weight: 300">
                                <div>RHINESTONE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const overlay = document.getElementById("lookbookOverlayOne");
        const panel = overlay?.querySelector("[data-lookbook-panel]");
        const openers = document.querySelectorAll('[data-lookbook-open="one"]');
        const closers = overlay?.querySelectorAll("[data-lookbook-close]");

        if (!overlay || !panel || openers.length === 0) return;

        const openOverlay = () => {
            overlay.classList.remove("pointer-events-none", "opacity-0");
            overlay.classList.add("opacity-100");
            document.body.classList.add("overflow-hidden");
        };

        const closeOverlay = () => {
            overlay.classList.add("pointer-events-none", "opacity-0");
            overlay.classList.remove("opacity-100");
            document.body.classList.remove("overflow-hidden");
        };

        openers.forEach((opener) => {
            opener.addEventListener("click", openOverlay);
        });

        closers?.forEach((closer) => {
            closer.addEventListener("click", (event) => {
                event.stopPropagation();
                closeOverlay();
            });
        });

        overlay.addEventListener("click", (event) => {
            if (!panel.contains(event.target)) {
                closeOverlay();
            }
        });

        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && overlay.classList.contains("opacity-100")) {
                closeOverlay();
            }
        });
    });
</script>
