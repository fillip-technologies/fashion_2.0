<nav id="drawersizeguide"
    class="fixed top-0 right-0 w-full  text-black z-[1200]
           transform translate-x-full transition-transform duration-500
           ease-[cubic-bezier(0.86,0,0.07,1)]
           h-screen flex flex-col cookie-reset overflow-hidden">


    <div class="grid grid-cols-1 md:grid-cols-2 h-screen">

        <div class="hidden md:block bg-black/70 h-screen sticky top-0
         overflow-hidden overscroll-none"
            onclick="toggleMasterDrawer('drawersizeguide')">
        </div>


        <div class="bg-background h-screen overflow-y-auto custom-scroll overscroll-none">

            <div class="py-8 px-6 md:px-14 flex items-center justify-between">
                <p class="text-[1.25rem]">Size Guide</p>
                <button onclick="toggleMasterDrawer('drawersizeguide')"
                    class="text-3xl font-light text-black/60 hover:text-black">
                    &times;
                </button>
            </div>

            <div class="relative">
                <div class="w-full h-px bg-dash-dot"></div>
            </div>

            <div class="py-8 px-6 md:px-14 max-w-3xl mx-auto flex items-center justify-center gap-20 text-[0.875rem]">
                <p id="tabNumeric" class="underline underline-offset-4 cursor-pointer">
                    Numeric Guide
                </p>
                <p id="tabDetailed" class="text-black/70 cursor-pointer">
                    Detailed Measurement
                </p>
            </div>



            {{-- Numeric Guide --}}
            <div id="numericSection">

                <div
                    class="px-6 md:px-14 mt-5 max-w-3xl mx-auto flex items-center justify-center gap-4 text-[0.875rem] text-secondary">
                    <span class="text-black">India</span>
                    <span>|</span>
                    <span>China</span>
                    <span>|</span>
                    <span>Italy</span>
                    <span>|</span>
                    <span>Japan</span>
                    <span>|</span>
                    <span>France</span>
                </div>


                <div class="mt-10 pb-20  flex-1">
                    <div class="max-w-4xl mx-auto">

                        <div
                            class="grid grid-cols-3 bg-background text-[0.75rem] text-black
                    border-y-4 border-x-2 border-secondary/50">
                            <div class="py-5 text-center border-r-[3px] border-secondary">
                                Yarnstone Wren size
                            </div>
                            <div class="py-5 text-center border-r-[3px] border-secondary">
                                India
                            </div>
                            <div class="py-5 text-center">
                                International
                            </div>
                        </div>

                        <div class="text-[0.875rem] font-medium text-center">

                            <div class="grid grid-cols-3 bg-white">
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                            <div class="grid grid-cols-3 bg-secondary/20">
                                <div class="py-2.5 border-r-[3px] border-secondary">30</div>
                                <div class="py-2.5 border-r-[3px] border-secondary">30</div>
                                <div class="py-2.5">XXS</div>
                            </div>

                            <div class="grid grid-cols-3 bg-secondary/40">
                                <div class="py-2.5 border-r-[3px] border-secondary">32</div>
                                <div class="py-2.5 border-r-[3px] border-secondary">32</div>
                                <div class="py-2.5">XS</div>
                            </div>

                            <div class="grid grid-cols-3 bg-secondary/20">
                                <div class="py-2.5 border-r-[3px] border-secondary">34</div>
                                <div class="py-2.5 border-r-[3px] border-secondary">34</div>
                                <div class="py-2.5">S</div>
                            </div>

                            <div class="grid grid-cols-3 bg-secondary/40">
                                <div class="py-2.5 border-r-[3px] border-secondary">36</div>
                                <div class="py-2.5 border-r-[3px] border-secondary">36</div>
                                <div class="py-2.5">M</div>
                            </div>

                            <div class="grid grid-cols-3 bg-secondary/20">
                                <div class="py-2.5 border-r-[3px] border-secondary">38</div>
                                <div class="py-2.5 border-r-[3px] border-secondary">38</div>
                                <div class="py-2.5">L</div>
                            </div>

                            <div class="grid grid-cols-3 bg-secondary/40">
                                <div class="py-2.5 border-r-[3px] border-secondary">40</div>
                                <div class="py-2.5 border-r-[3px] border-secondary">40</div>
                                <div class="py-2.5">XL</div>
                            </div>

                            <div class="grid grid-cols-3 bg-secondary/20">
                                <div class="py-2.5 border-r-[3px] border-secondary">42</div>
                                <div class="py-2.5 border-r-[3px] border-secondary">42</div>
                                <div class="py-2.5">XXL</div>
                            </div>

                            <div class="grid grid-cols-3 bg-secondary/40">
                                <div class="py-2.5 border-r-[3px] border-secondary">44</div>
                                <div class="py-2.5 border-r-[3px] border-secondary">44</div>
                                <div class="py-2.5">XXXL</div>
                            </div>

                        </div>
                    </div>


                    <p class="mt-6 text-center text-[0.75rem] text-black leading-relaxed" style="font-weight: 300">
                        *For a more detailed size chart (cm & inches) please refer to the
                        <span>'Detailed Measurement'</span>.
                    </p>
                </div>
            </div>

            {{-- Detailed Measurement --}}
            <div id="detailedSection" class="hidden">

                <div
                    class="mt-0 py-4 px-6 md:px-14 max-w-3xl mx-auto flex items-center justify-center gap-20 text-[0.875rem]">
                    <label class="flex items-center gap-4 cursor-pointer select-none">
                        <input type="checkbox" class="peer hidden" data-section="${grid}" data-label="${item.name}">
                        <span
                            class="relative w-5 h-5 border border-black rounded-sm
                   peer-checked:bg-white peer-checked:border-secondary
                   after:absolute after:opacity-0
                   after:left-[5px] after:top-[1.5px]
                   after:w-[6px] after:h-[11px]
                   after:border-r-2 after:border-b-2
                   after:border-gray-600
                   after:rotate-45
                   peer-checked:after:opacity-100">
                        </span>
                        <span class="font-medium">
                            cm
                        </span>
                    </label>
                    <label class="flex items-center gap-4 cursor-pointer select-none">
                        <input type="checkbox" class="peer hidden" data-section="${grid}" data-label="${item.name}">
                        <span
                            class="relative w-5 h-5 border border-black rounded-sm
                   peer-checked:bg-white peer-checked:border-secondary
                   after:absolute after:opacity-0
                   after:left-[5px] after:top-[1.5px]
                   after:w-[6px] after:h-[11px]
                   after:border-r-2 after:border-b-2
                   after:border-gray-600
                   after:rotate-45
                   peer-checked:after:opacity-100">
                        </span>
                        <span class="font-medium">
                            inches
                        </span>
                    </label>
                </div>



                <div class="mt-10 pb-20  flex-1">
                    <div class="max-w-4xl mx-auto">


                        <div
                            class="grid grid-cols-5 bg-background text-[0.75rem] text-black
                    border-y-4 border-x-2 border-secondary/50">
                            <div class="py-5 text-center border-r-[3px] border-secondary">
                                Yarnstone Wren size
                            </div>
                            <div class="py-5 text-center border-r-[3px] border-secondary">
                                Shoulders
                            </div>
                            <div class="py-5 text-center border-r-[3px] border-secondary">
                                Chest
                            </div>
                            <div class="py-5 text-center border-r-[3px] border-secondary">
                                Length
                            </div>
                            <div class="py-5 text-center">
                                Sleeve Width
                            </div>
                        </div>

                        <div class="text-[0.875rem] font-medium text-center">

                            <div class="grid grid-cols-5 bg-white">
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                            <div class="grid grid-cols-5 bg-secondary/20">
                                <div class="py-2.5 border-r-[3px] border-secondary">30</div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                            <div class="grid grid-cols-5 bg-secondary/40">
                                <div class="py-2.5 border-r-[3px] border-secondary">32</div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                            <div class="grid grid-cols-5 bg-secondary/20">
                                <div class="py-2.5 border-r-[3px] border-secondary">34</div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                            <div class="grid grid-cols-5 bg-secondary/40">
                                <div class="py-2.5 border-r-[3px] border-secondary">36</div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                            <div class="grid grid-cols-5 bg-secondary/20">
                                <div class="py-2.5 border-r-[3px] border-secondary">38</div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                            <div class="grid grid-cols-5 bg-secondary/40">
                                <div class="py-2.5 border-r-[3px] border-secondary">40</div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                            <div class="grid grid-cols-5 bg-secondary/20">
                                <div class="py-2.5 border-r-[3px] border-secondary">42</div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                            <div class="grid grid-cols-5 bg-secondary/40">
                                <div class="py-2.5 border-r-[3px] border-secondary">44</div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5 border-r-[3px] border-secondary"></div>
                                <div class="py-2.5"></div>
                            </div>

                        </div>
                    </div>

                    <div class="max-w-md mx-auto pt-16 pb-4 flex items-center justify-center font-medium">How to
                        measure
                        yourself:</div>
                    <div class="relative max-w-xs mx-auto flex items-center justify-center">
                        <div class="w-full h-px bg-dash-dot"></div>
                    </div>


                    <div class="max-w-md mx-auto flex items-center justify-center py-10">
                        <div class="aside-square">
                            <img src="{{ asset('assets/images/category/first-photo.png') }}" alt="Back"
                                class="w-full h-full" />
                        </div>
                    </div>


                    <div class="px-6 md:px-14 pt-20 pb-10">
                        <div class="max-w-lg mx-auto space-y-10">

                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-3 text-[0.875] font-medium">
                                    B - Shoulders
                                </div>
                                <div class="col-span-9 text-[0.75rem] leading-relaxed text-black"
                                    style="font-weight: 300">
                                    Lay the garment out and measure across the front at shoulder height.
                                    Any buttons or zips should be done up.
                                </div>
                            </div>

                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-3 text-[0.875] font-medium">
                                    A - Sleeve Length
                                </div>
                                <div class="col-span-9 text-[0.75rem] leading-relaxed text-black"
                                    style="font-weight: 300">
                                    Lay the garment facedown and measure from the middle of the neck
                                    to the cuff down the outer edge.
                                </div>
                            </div>


                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-3 text-[0.875] font-medium">
                                    T - Length
                                </div>
                                <div class="col-span-9 text-[0.75rem] leading-relaxed text-black"
                                    style="font-weight: 300">
                                    Lay the garment out and take the seam between the neckline and
                                    shoulder as your starting point. Measure the distance to the
                                    bottom of the garment.
                                </div>
                            </div>


                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-3 text-[0.875] font-medium">
                                    P - Hips
                                </div>
                                <div class="col-span-9 text-[0.75rem] leading-relaxed text-black"
                                    style="font-weight: 300">
                                    Lay the garment out flat and measure it from one side to the
                                    other at hip level. Fasten any buttons or zips if present.
                                </div>
                            </div>


                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-3 text-[0.875] font-medium">
                                    K - Waist
                                </div>
                                <div class="col-span-9 text-[0.75rem] leading-relaxed text-black"
                                    style="font-weight: 300">
                                    Lay the garment out flat and measure it from one side to the
                                    other at waist level. Fasten any buttons or zips if present.
                                </div>
                            </div>

                        </div>
                    </div>


                </div>



            </div>

        </div>
    </div>
</nav>


<script>
    const tabNumeric = document.getElementById("tabNumeric");
    const tabDetailed = document.getElementById("tabDetailed");

    const numericSection = document.getElementById("numericSection");
    const detailedSection = document.getElementById("detailedSection");

    tabNumeric.addEventListener("click", () => {
        numericSection.classList.remove("hidden");
        detailedSection.classList.add("hidden");

        tabNumeric.classList.add("underline", "underline-offset-4");
        tabNumeric.classList.remove("text-black/70");

        tabDetailed.classList.remove("underline", "underline-offset-4");
        tabDetailed.classList.add("text-black/70");
    });

    tabDetailed.addEventListener("click", () => {
        detailedSection.classList.remove("hidden");
        numericSection.classList.add("hidden");

        tabDetailed.classList.add("underline", "underline-offset-4");
        tabDetailed.classList.remove("text-black/70");

        tabNumeric.classList.remove("underline", "underline-offset-4");
        tabNumeric.classList.add("text-black/70");
    });
</script>
