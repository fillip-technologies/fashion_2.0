<div class="pt-0 bg-white">
    <div class="grid grid-cols-1 md:grid-cols-12">

        <div class="md:col-span-8">
            <div id="bigCarousel" class="grid grid-cols-2 bg-background pb-7"></div>

            <div class="w-full h-px bg-dash-dot"></div>

            <div class="my-8 border-x-[1.5rem] border-primary">
                <div class="w-full h-px bg-dash-dot"></div>

                <div class="max-w-xl px-6 h-screen mx-auto pb-24 pt-16 text-[0.875rem] leading-relaxed flex flex-col items-center justify-center space-y-10 text-center"
                    style="font-weight: 200">

                    <p class="text-[1.25rem] uppercase font-medium">The Line</p>
                    <p>
                        Honouring Loro Piana’s centenary, Loro Piana’s book Master of Fibres recounts
                        the Maison’s unique story from a wool-trading company to the ultimate destination for
                        sophistication, excellence, and textile artisanship. Published by Assouline and written by
                        Nicholas Foulkes.
                        Loro Piana Gift Card
                    </p>
                    <p>
                        Surprise your beloved ones with a refined Gift Card by Loro Piana. Let them discover a universe
                        of inspiration and unique elegance
                        Knit Design Award
                    </p>
                    <p>
                        The Knit Design Award celebrates talented students from leading design schools around the world
                        with an extraordinary passion for knitwear who demonstrate their creativity in reinterpreting
                        Loro Piana's iconic yarns.
                        Fall/Winter 2025-2026
                    </p>
                </div>

                <div class="w-full h-px bg-dash-dot"></div>
            </div>
        </div>

        <div class="md:col-span-4 bg-background">
            <div class="grid grid-cols-12 p-5">
                <div class="col-span-1 flex items-center justify-center">
                    <div id="prevBtn" class="py-4 px-1.5 bg-secondary cursor-pointer">
                        <i class="fa-solid fa-chevron-left text-xs text-white"></i>
                    </div>
                </div>
                <div class="col-span-10">
                    <div id="thumbCarousel" class="flex px-2 space-x-3"></div>
                </div>
                <div class="col-span-1 flex items-center justify-center">
                    <div id="nextBtn" class="py-4 px-1.5 bg-secondary cursor-pointer">
                        <i class="fa-solid fa-chevron-right text-xs text-white"></i>
                    </div>
                </div>
            </div>

            <div class="h-0.5 bg-white mt-4"></div>

            <div class="pt-12 pb-5 px-6 md:px-16 bg-background">
                <div class="max-w-6xl mx-auto">


                    <div class="space-y-2">
                        <h1 class="text-[1rem] font-medium text-black">
                            Product name
                        </h1>

                        <p class="text-[0.75rem] text-secondary">
                            Main materials
                        </p>
                    </div>


                    <div class="flex justify-between items-end mt-6">
                        <p class="text-[0.75rem] text-black">
                            ₹10,000
                        </p>

                        <p class="text-[0.75rem] text-secondary">
                            *MRP (inclusive of all taxes)
                        </p>
                    </div>

                </div>
            </div>

            <div class="h-0.5 bg-white mt-4"></div>


            <div class="pt-12 pb-5 px-6 md:px-16 bg-background">
                <div class="max-w-6xl mx-auto">
                    <div class="space-y-2">
                        <h1 class="text-[0.875rem] font-medium text-black">
                            Variations
                        </h1>

                        <p class="text-[0.75rem] text-secondary">
                            (Selected : [Black; in material name])
                        </p>
                    </div>

                    <div class="flex justify-center items-end mt-6">
                        <div class="flex space-x-5" id="colorPicker">

                            <span
                                class="color-item cursor-pointer w-[1.65rem] h-[1.65rem] flex items-center justify-center rounded ring-1 ring-transparent">
                                <span class="block w-[1.45rem] h-[1.43rem]" style="background:#4DBA3F"></span>
                            </span>

                            <span
                                class="color-item cursor-pointer w-[1.65rem] h-[1.65rem] flex items-center justify-center rounded ring-1 ring-transparent">
                                <span class="block w-[1.45rem] h-[1.43rem]" style="background:#000000"></span>
                            </span>

                            <span
                                class="color-item cursor-pointer w-[1.65rem] h-[1.65rem] flex items-center justify-center rounded ring-1 ring-transparent">
                                <span class="block w-[1.45rem] h-[1.43rem]" style="background:#B23A3A"></span>
                            </span>

                            {{-- <span
                                class="color-item cursor-pointer w-7 h-7 flex items-center justify-center ring-1 ring-transparent">

                                <span class="block w-5 h-5" style="background:#B23A3A"></span>
                            </span> --}}

                        </div>
                    </div>
                </div>
            </div>

            <div class="h-0.5 bg-white mt-4"></div>


            <div class="pt-12 pb-5 px-6 md:px-16 bg-background relative">
                <div class="max-w-6xl mx-auto">

                    <div id="sizeToggle" class="flex justify-between items-center cursor-pointer select-none">
                        <h1 class="text-[0.875rem] font-medium text-black">
                            Size
                            <span id="selectedSize" class="ml-2 text-secondary text-[0.75rem]"></span>
                        </h1>
                        <i id="sizeChevron"
                            class="fa-solid fa-chevron-down text-[0.75rem] transition-transform duration-300"></i>
                    </div>



                    <div id="sizeDropdown" class="hidden w-full bg-white mt-4">


                        <div class="bg-black text-white px-6 py-5 text-[ 0.875rem]">
                            Select size
                        </div>

                        <div class="px-6 py-5 space-y-8 text-[0.75rem] text-black">
                            <p class="size-option cursor-pointer">Small</p>
                            <p class="size-option cursor-pointer">Medium</p>
                            <p class="size-option cursor-pointer">Large</p>
                            <p class="size-option cursor-pointer">Extra Large</p>
                        </div>
                    </div>

                    <div class="flex justify-end mt-10">
                        <p class="text-[0.75rem] underline cursor-pointer"
                            onclick="toggleMasterDrawer('drawersizeguide')">
                            Size Guide
                        </p>
                    </div>

                </div>
            </div>

            <div class="h-0.5 bg-white mt-4"></div>


            <div class="pt-12 pb-5 px-6 md:px-16 bg-background">
                <div class="max-w-6xl mx-auto">
                    <div class="flex justify-between items-end ">
                        <h1 class="text-[0.75rem] font-medium text-secondary">
                            U need to sing in to be able to purchase or add this item to your Wishlist.
                        </h1>
                    </div>
                    <div class="flex justify-start items-end mt-5">
                        <p class="text-[0.875rem] underline font-medium cursor-pointer"
                            onclick="toggleMasterDrawer('drawerlogin')">
                            Sign in?
                        </p>
                    </div>
                </div>
            </div>

            <div class="pt-10 pb-5 px-6 md:px-16 bg-background">
                <div class="max-w-6xl mx-auto flex items-center justify-center">
                    <button class="bg-secondary hover:bg-primary text-white px-10 py-3 rounded text-[1rem]"
                        onclick="toggleMasterDrawer('cartnotification')">
                        Add to bag
                    </button>
                </div>
            </div>



            <div class="h-0.5 bg-white mt-4"></div>

            <div class=" pb-5 bg-background overflow-y-auto max-h-screen custom-scroll">
                <div class="px-6 md:px-16 pt-12 pb-5 ">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex justify-between items-center cursor-pointer" id="maindiv">
                            <h1 class="text-[0.875rem] font-medium">
                                Product story
                            </h1>

                            <div class="flex items-center gap-0.5">
                                <span class="inline-block w-0.5 border-t border-dotted border-black"></span>
                                <span class="inline-block w-1 border-t border-dashed border-black"></span>
                                <span class="inline-block w-1 border-t border-dotted border-black"></span>
                            </div>
                        </div>

                        <div class="flex flex-col mt-5 pr-8" id="productstory">
                            <p id="storyText"
                                class="text-[0.75rem] text-justify text-secondary overflow-hidden transition-all duration-300 max-h-[4.2em]">
                                This pullover is a sophisticated staple in a cozy cashmere knit in a rich seasonal shade
                                for elevated daily styling. It is crafted in a classic fit with a crew neckline and wide
                                ribbed hems. Designed for comfort and durability, it pairs effortlessly with both casual
                                and formal looks across seasons.
                            </p>

                            <button onclick="toggleReadMore()" id="readMoreBtn"
                                class="text-[0.6875rem] underline font-medium text-secondary mt-3 uppercase self-start">
                                Read More
                            </button>
                        </div>
                    </div>

                </div>


                <div class="h-0.5 bg-white mt-4"></div>


                <div class="px-6 md:px-16 pb-5 pt-12">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex justify-between items-center cursor-pointer"
                            onclick="visibleSection('materialbreakdown')">
                            <h1 class="text-[0.875rem] font-medium">
                                Material Breakdown
                            </h1>

                            <div class="flex items-center gap-0.5">
                                <span class="inline-block w-0.5 border-t border-dotted border-black"></span>
                                <span class="inline-block w-1 border-t border-dashed border-black"></span>
                                <span class="inline-block w-1 border-t border-dotted border-black"></span>
                            </div>
                        </div>

                        <div class="flex flex-col justify-start items-start mt-5 hidden" id="materialbreakdown">
                            <div class="text-[0.75rem] text-justify text-secondary pr-8">
                                <p>
                                    Diagonal edges
                                </p>
                                <p>
                                    Natural Australia print
                                </p>
                                <p>
                                    Composition: 100% Silk
                                </p>
                                <p>
                                    Made in Italy
                                </p>
                                <p>
                                    Product code: FAQ0586
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="h-0.5 bg-white mt-4"></div>

                <div class="px-6 md:px-16 pb-5 pt-12">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex justify-between items-center cursor-pointer"
                            onclick="visibleSection('deliveryandpayment')">
                            <h1 class="text-[0.875rem] font-medium">
                                Delivery and Payment
                            </h1>

                            <div class="flex items-center gap-0.5">
                                <span class="inline-block w-0.5 border-t border-dotted border-black"></span>
                                <span class="inline-block w-1 border-t border-dashed border-black"></span>
                                <span class="inline-block w-1 border-t border-dotted border-black"></span>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4 justify-start items-start mt-5 hidden"
                            id="deliveryandpayment">
                            <div class="text-[0.75rem] text-justify text-secondary pr-8">
                                <p class="text-black mb-2">Payment</p>
                                <p class="mb-3">
                                    We accept the following payment methods:
                                </p>
                                <p>
                                    Credit Cards: Visa, MasterCard and American Express. Secure Payment.
                                </p>
                                <p>
                                    Paypal
                                </p>
                                <p>
                                    Alipay
                                </p>
                                <p>
                                    Apple Pay
                                </p>
                                <p>
                                    Google Pay
                                </p>
                                <p>
                                    Gift Card
                                </p>
                            </div>


                            <div class="text-[0.75rem] text-justify text-secondary pr-8">
                                <p class="text-black mb-2">Delivery</p>
                                <p>
                                    Free shipping.
                                </p>
                                <p>
                                    Within the E.U. we ship using DHL express and your order should arrive within three
                                    to five business days.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="h-0.5 bg-white mt-4"></div>

                <div class="px-6 md:px-16 pt-12 pb-5 ">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex justify-between items-center cursor-pointer"
                            onclick="visibleSection('packaging')">
                            <h1 class="text-[0.875rem] font-medium">
                                Packaging
                            </h1>

                            <div class="flex items-center gap-0.5">
                                <span class="inline-block w-0.5 border-t border-dotted border-black"></span>
                                <span class="inline-block w-1 border-t border-dashed border-black"></span>
                                <span class="inline-block w-1 border-t border-dotted border-black"></span>
                            </div>
                        </div>

                        <div class="flex flex-col justify-start items-start mt-5 hidden" id="packaging">
                            <p class="text-[0.75rem] text-justify text-secondary pr-8">
                                We do our utmost to ensure the most enjoyable gifting experience, both for you and for
                                the person who receives your gift. All orders are delivered in the iconic Louis Vuitton
                                box. The delivery box contains inserts that ensure the gift reaches the recipient in
                                perfect condition.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="h-0.5 bg-white mt-4"></div>
            </div>


        </div>
    </div>

    <div class="w-full h-px bg-dash-dot"></div>
    <div class="pt-28 pb-20 bg-background">
        <div class="text-[1.25rem] text-center italic text-secondary mb-3">Pair it with</div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-5 pt-12 px-6 md:px-8">
            @for ($i = 1; $i <= 3; $i++)
                <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                    hoverImage="{{ asset('assets/images/category/second-photo.png') }}"
                    title="Title {{ $i }}" subtitle="Sub title" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
            @endfor
        </div>


    </div>

</div>





<style>
    .custom-scroll::-webkit-scrollbar {
        width: 4px;
    }

    .custom-scroll::-webkit-scrollbar-track {
        background: transparent;
    }

    .custom-scroll::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 10px;
    }

    .custom-scroll {
        scrollbar-width: thin;
        scrollbar-color: rgba(0, 0, 0, 0.4) transparent;
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const toggle = document.getElementById("sizeToggle");
        const dropdown = document.getElementById("sizeDropdown");
        const chevron = document.getElementById("sizeChevron");
        const selectedSize = document.getElementById("selectedSize");
        const options = document.querySelectorAll(".size-option");

        toggle.addEventListener("click", () => {
            dropdown.classList.toggle("hidden");
            chevron.classList.toggle("rotate-180");
        });

        options.forEach(option => {
            option.addEventListener("click", () => {
                selectedSize.textContent = `(${option.textContent})`;
                dropdown.classList.add("hidden");
                chevron.classList.remove("rotate-180");
            });
        });
    });
</script>

{{-- <script>
    function visibleSection(activeId) {
        const sections = [
            // "productstory",
            "materialbreakdown",
            "deliveryandpayment",
            "packaging",
        ];

        sections.forEach(id => {
            const el = document.getElementById(id);
            if (!el) return;

            if (id === activeId) {
                el.classList.remove("hidden"); // ALWAYS SHOW
            } else {
                el.classList.add("hidden"); // HIDE OTHERS
            }
        });
    }
</script> --}}

<script>
    function visibleSection(activeId) {
        const sections = [
            "materialbreakdown",
            "deliveryandpayment",
            "packaging",
        ];

        const activeEl = document.getElementById(activeId);
        const isAlreadyOpen = !activeEl.classList.contains("hidden");

        sections.forEach(id => {
            const el = document.getElementById(id);
            if (!el) return;

            if (isAlreadyOpen) {
                el.classList.add("hidden");
            } else {
                if (id === activeId) {
                    el.classList.remove("hidden");
                } else {
                    el.classList.add("hidden");
                }
            }
        });
    }
</script>


<script>
    const text = document.getElementById("storyText");
    const btn = document.getElementById("readMoreBtn");
    const mainDiv = document.getElementById("maindiv");

    function toggleReadMore() {
        text.classList.remove("max-h-[4.2em]");
        text.classList.add("max-h-[1000px]");
        btn.classList.add("hidden");

    }

    mainDiv.addEventListener("click", () => {
        text.classList.add("max-h-[4.2em]");
        text.classList.remove("max-h-[1000px]");

        text.addEventListener(
            "transitionend",
            function handler() {
                btn.classList.remove("hidden");
                text.removeEventListener("transitionend", handler);
            }, {
                once: true
            }
        );
    });
</script>





<script>
    document.addEventListener("DOMContentLoaded", () => {
        const items = document.querySelectorAll('.color-item');

        items.forEach(item => {
            item.addEventListener('click', () => {
                items.forEach(i => i.classList.remove('ring-black'));
                item.classList.add('ring-black');
            });
        });
    });
</script>





<script>
    const thumbCarousel = document.getElementById("thumbCarousel");
    const bigCarousel = document.getElementById("bigCarousel");


    const imagePairs = [
        [
            "{{ asset('assets/images/products/one.png') }}",
            "{{ asset('assets/images/products/two.png') }}"
        ],
        [
            "{{ asset('assets/images/products/three.png') }}",
            "{{ asset('assets/images/products/four.png') }}"
        ],
        [
            "{{ asset('assets/images/products/two.png') }}",
            "{{ asset('assets/images/products/three.png') }}"
        ],
        [
            "{{ asset('assets/images/products/four.png') }}",
            "{{ asset('assets/images/products/one.png') }}"
        ]
    ];

    let queue = imagePairs.map(pair => {
        const div = document.createElement("div");
        div.className = "carousel-item grid grid-cols-2 gap-3 p-2 hidden";
        div.innerHTML = `
            <div class="aspect-[1/1]">
                <img src="${pair[0]}" class="w-full h-full" />
            </div>
            <div class="aspect-[1/1]">
                <img src="${pair[1]}" class="w-full h-full" />
            </div>
        `;
        return div;
    });

    function renderBigFromItem(item) {
        const imgs = item.querySelectorAll("img");
        bigCarousel.innerHTML = `
            <img src="${imgs[0].src}" class="w-full" />
            <img src="${imgs[1].src}" class="w-full" />
        `;
    }

    function renderCarousel() {
        thumbCarousel.innerHTML = "";

        queue[0].classList.remove("hidden");
        queue[0].classList.add("bg-primary", "active");

        if (queue[1]) {
            queue[1].classList.remove("hidden", "bg-primary", "active");
        }

        thumbCarousel.appendChild(queue[0]);
        if (queue[1]) thumbCarousel.appendChild(queue[1]);

        renderBigFromItem(queue[0]);
    }

    renderCarousel();

    document.getElementById("nextBtn").addEventListener("click", () => {
        const removed = queue.shift();
        queue.push(removed);
        renderCarousel();
    });

    document.getElementById("prevBtn").addEventListener("click", () => {
        const last = queue.pop();
        queue.unshift(last);
        renderCarousel();
    });
</script>
