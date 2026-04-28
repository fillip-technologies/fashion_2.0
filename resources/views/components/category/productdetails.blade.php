<div class="pt-0 bg-white">
    <div class="grid grid-cols-1 md:grid-cols-12">

        <div class="md:col-span-8">
            <div id="bigCarousel" class="grid grid-cols-2 bg-background pb-7"></div>

            <div class="md:hidden bg-background">
                <div class="grid grid-cols-12 p-5">
                    <div class="col-span-1 flex items-center justify-center">
                        <div id="prevBtnMobile" class="py-4 px-1.5 bg-secondary cursor-pointer">
                            <i class="fa-solid fa-chevron-left text-xs text-white"></i>
                        </div>
                    </div>
                    <div class="col-span-10">
                        <div id="thumbCarouselMobile" class="flex px-2 space-x-3"></div>
                    </div>
                    <div class="col-span-1 flex items-center justify-center">
                        <div id="nextBtnMobile" class="py-4 px-1.5 bg-secondary cursor-pointer">
                            <i class="fa-solid fa-chevron-right text-xs text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

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
            <div class="hidden md:grid grid-cols-12 p-5">
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

<div id="productImageViewer" class="product-image-viewer bg-primary" aria-hidden="true">
    <div id="productImageViewerShell" class="product-image-viewer-shell">
        <div class="hidden md:flex w-24 lg:w-28 shrink-0 h-full items-center justify-center">
            <div id="productViewerThumbs" class="flex flex-col gap-9 max-h-[78vh] overflow-y-auto custom-scroll pr-1"></div>
        </div>

        <div class="product-image-viewer-main flex-1 min-w-0 h-full">
            <div class="product-image-viewer-mobile-top md:hidden">
                <button type="button"
                    class="product-viewer-close text-white/85 hover:text-white text-4xl leading-none font-light">
                    &times;
                </button>
            </div>

            <div class="product-image-viewer-stage-wrap">
                <div class="product-image-viewer-stage">
                    <img id="productViewerImage" src="" alt="Expanded product image"
                        class="product-image-viewer-image" />
                </div>
            </div>

            <div class="product-image-viewer-mobile-bottom md:hidden">
                <div id="productViewerThumbsMobile"
                    class="flex items-center gap-4 overflow-x-auto custom-scroll pb-1"></div>

                <div class="product-image-viewer-mobile-zoom text-white/85">
                    <button type="button" class="product-viewer-zoom-in text-4xl leading-none hover:text-white">
                        +
                    </button>
                    <button type="button" class="product-viewer-zoom-out text-4xl leading-none hover:text-white">
                        &minus;
                    </button>
                </div>
            </div>
        </div>

        <div class="hidden md:flex w-12 md:w-20 shrink-0 h-full flex-col items-center justify-between py-8 md:py-12">
            <button id="productViewerClose" type="button"
                class="product-viewer-close text-white/85 hover:text-white text-4xl leading-none font-light">
                &times;
            </button>

            <div class="flex flex-col items-center gap-6 md:gap-8 text-white/85">
                <button id="productViewerZoomIn" type="button"
                    class="product-viewer-zoom-in text-4xl leading-none hover:text-white">
                    +
                </button>
                <button id="productViewerZoomOut" type="button"
                    class="product-viewer-zoom-out text-4xl leading-none hover:text-white">
                    &minus;
                </button>
            </div>
            <div></div>
        </div>
    </div>
</div>

<style>
    body.product-image-viewer-lock {
        overflow: hidden;
    }

    .product-image-viewer {
        position: fixed;
        inset: 0;
        z-index: 1400;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background: rgba(69, 69, 72, 0.97); */
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: opacity 220ms ease, visibility 0s linear 220ms;
    }

    .product-image-viewer.viewer-open {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transition-delay: 0s;
    }

    .product-image-viewer-shell {
        position: relative;
        display: flex;
        align-items: center;
        gap: 1rem;
        width: 100%;
        height: 100%;
        padding: 0.75rem 1rem;
    }

    .product-image-viewer-main {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .product-image-viewer-stage-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        min-height: 0;
    }

    .product-image-viewer-stage {
        width: min(100%, 45rem);
        height: calc(100vh - 1.5rem);
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-image-viewer-image {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transform-origin: center center;
        transition: transform 200ms ease;
        will-change: transform;
        user-select: none;
    }

    .product-viewer-thumb {
        width: 4.75rem;
        height: 4.75rem;
        opacity: 0.28;
        transition: opacity 180ms ease, transform 180ms ease;
    }

    .product-viewer-thumb.active {
        opacity: 1;
        transform: scale(1.02);
    }

    .product-viewer-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-viewer-zoom-disabled {
        opacity: 0.25;
        pointer-events: none;
    }

    @media (max-width: 767px) {
        .product-image-viewer-shell {
            flex-direction: column;
            align-items: stretch;
            justify-content: flex-start;
            gap: 1rem;
            padding: 1rem;
        }

        .product-image-viewer-main {
            flex-direction: column;
            align-items: stretch;
            justify-content: flex-start;
            min-height: 0;
        }

        .product-image-viewer-mobile-top {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .product-image-viewer-stage-wrap {
            flex: 1 1 auto;
        }

        .product-image-viewer-stage {
            width: 100%;
            height: calc(100vh - 16rem);
        }

        .product-image-viewer-mobile-bottom {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 100%;
            padding-top: 0.25rem;
        }

        #productViewerThumbsMobile {
            width: 100%;
            justify-content: flex-start;
        }

        .product-image-viewer-mobile-zoom {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
        }

        .product-viewer-thumb {
            flex: none;
            width: 3.75rem;
            height: 3.75rem;
        }
    }

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
    const thumbCarouselMobile = document.getElementById("thumbCarouselMobile");
    const bigCarousel = document.getElementById("bigCarousel");
    const productImageViewer = document.getElementById("productImageViewer");
    const productImageViewerShell = document.getElementById("productImageViewerShell");
    const productViewerImage = document.getElementById("productViewerImage");
    const productViewerThumbs = document.getElementById("productViewerThumbs");
    const productViewerThumbsMobile = document.getElementById("productViewerThumbsMobile");
    const productViewerCloseButtons = document.querySelectorAll(".product-viewer-close");
    const productViewerZoomInButtons = document.querySelectorAll(".product-viewer-zoom-in");
    const productViewerZoomOutButtons = document.querySelectorAll(".product-viewer-zoom-out");
    const thumbCarouselContainers = [thumbCarousel, thumbCarouselMobile].filter(Boolean);
    const nextButtons = [document.getElementById("nextBtn"), document.getElementById("nextBtnMobile")].filter(Boolean);
    const prevButtons = [document.getElementById("prevBtn"), document.getElementById("prevBtnMobile")].filter(Boolean);


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
        ],
    ];

    const viewerGalleryImages = [...new Set(
        imagePairs.flat().map(src => new URL(src, window.location.href).href)
    )];
    let viewerActiveIndex = 0;
    let viewerZoomLevel = 1;
    const carouselAutoRotateDelay = 2000;
    let carouselAutoRotateTimer = null;

    let queue = imagePairs.map(pair => [...pair]);

    function createCarouselItem(pair, isActive = false) {
        const div = document.createElement("div");
        div.className = `carousel-item grid grid-cols-2 gap-3 p-2 ${isActive ? "bg-primary active" : ""}`;
        div.innerHTML = `
            <button
                type="button"
                class="aspect-[1/1] block w-full cursor-zoom-in overflow-hidden appearance-none border-0 bg-transparent p-0"
                data-viewer-image-src="${pair[0]}"
                aria-label="Open product image 1">
                <img src="${pair[0]}" class="w-full h-full" alt="Product thumbnail 1" />
            </button>
            <button
                type="button"
                class="aspect-[1/1] block w-full cursor-zoom-in overflow-hidden appearance-none border-0 bg-transparent p-0"
                data-viewer-image-src="${pair[1]}"
                aria-label="Open product image 2">
                <img src="${pair[1]}" class="w-full h-full" alt="Product thumbnail 2" />
            </button>
        `;

        div.querySelectorAll("[data-viewer-image-src]").forEach(button => {
            button.addEventListener("click", () => {
                openProductImageViewer(button.dataset.viewerImageSrc);
            });
        });

        return div;
    }

    function updateViewerZoom() {
        productViewerImage.style.transform = `scale(${viewerZoomLevel})`;
        productViewerZoomOutButtons.forEach(button => {
            button.classList.toggle("product-viewer-zoom-disabled", viewerZoomLevel <= 1);
        });
        productViewerZoomInButtons.forEach(button => {
            button.classList.toggle("product-viewer-zoom-disabled", viewerZoomLevel >= 2.5);
        });
    }

    function renderViewerThumbs(container) {
        if (!container) return;

        container.innerHTML = viewerGalleryImages.map((src, index) => `
            <button
                type="button"
                class="product-viewer-thumb ${index === viewerActiveIndex ? "active" : ""}"
                data-viewer-thumb-index="${index}">
                <img src="${src}" alt="Product view ${index + 1}" />
            </button>
        `).join("");

        container.querySelectorAll("[data-viewer-thumb-index]").forEach(button => {
            button.addEventListener("click", () => {
                viewerActiveIndex = Number(button.dataset.viewerThumbIndex);
                viewerZoomLevel = 1;
                renderViewer();
            });
        });
    }

    function renderViewer() {
        if (!viewerGalleryImages.length) return;

        productViewerImage.src = viewerGalleryImages[viewerActiveIndex];
        renderViewerThumbs(productViewerThumbs);
        renderViewerThumbs(productViewerThumbsMobile);
        updateViewerZoom();
    }

    function openProductImageViewer(imageSrc) {
        const normalizedSrc = new URL(imageSrc, window.location.href).href;
        const matchedIndex = viewerGalleryImages.indexOf(normalizedSrc);

        viewerActiveIndex = matchedIndex >= 0 ? matchedIndex : 0;
        viewerZoomLevel = 1;
        stopCarouselAutoRotate();
        renderViewer();
        productImageViewer.classList.add("viewer-open");
        productImageViewer.setAttribute("aria-hidden", "false");
        document.body.classList.add("product-image-viewer-lock");
    }

    function closeProductImageViewer() {
        productImageViewer.classList.remove("viewer-open");
        productImageViewer.setAttribute("aria-hidden", "true");
        document.body.classList.remove("product-image-viewer-lock");
        startCarouselAutoRotate();
    }

    function bindBigCarouselClicks() {
        bigCarousel.querySelectorAll("[data-viewer-image-src]").forEach(button => {
            button.addEventListener("click", () => {
                openProductImageViewer(button.dataset.viewerImageSrc);
            });
        });
    }

    function renderBigFromPair(pair) {
        bigCarousel.innerHTML = `
            <button type="button" class="block cursor-zoom-in" data-viewer-image-src="${pair[0]}">
                <img src="${pair[0]}" class="w-full" />
            </button>
            <button type="button" class="block cursor-zoom-in" data-viewer-image-src="${pair[1]}">
                <img src="${pair[1]}" class="w-full" />
            </button>
        `;
        bindBigCarouselClicks();
    }

    function renderCarousel() {
        thumbCarouselContainers.forEach(container => {
            container.innerHTML = "";
            if (queue[0]) container.appendChild(createCarouselItem(queue[0], true));
            if (queue[1]) container.appendChild(createCarouselItem(queue[1]));
        });

        if (queue[0]) {
            renderBigFromPair(queue[0]);
        }
    }

    function moveCarouselNext() {
        if (queue.length <= 1) return;

        const removed = queue.shift();
        queue.push(removed);
        renderCarousel();
    }

    function moveCarouselPrev() {
        if (queue.length <= 1) return;

        const last = queue.pop();
        queue.unshift(last);
        renderCarousel();
    }

    function stopCarouselAutoRotate() {
        if (!carouselAutoRotateTimer) return;

        clearInterval(carouselAutoRotateTimer);
        carouselAutoRotateTimer = null;
    }

    function startCarouselAutoRotate() {
        stopCarouselAutoRotate();

        if (queue.length <= 1 || document.hidden) return;

        carouselAutoRotateTimer = window.setInterval(() => {
            moveCarouselNext();
        }, carouselAutoRotateDelay);
    }

    function restartCarouselAutoRotate() {
        startCarouselAutoRotate();
    }

    renderCarousel();
    startCarouselAutoRotate();

    nextButtons.forEach(button => {
        button.addEventListener("click", () => {
            moveCarouselNext();
            restartCarouselAutoRotate();
        });
    });

    prevButtons.forEach(button => {
        button.addEventListener("click", () => {
            moveCarouselPrev();
            restartCarouselAutoRotate();
        });
    });

    document.addEventListener("visibilitychange", () => {
        if (document.hidden) {
            stopCarouselAutoRotate();
            return;
        }

        startCarouselAutoRotate();
    });

    productViewerCloseButtons.forEach(button => {
        button.addEventListener("click", closeProductImageViewer);
    });

    productImageViewer.addEventListener("click", event => {
        if (event.target === productImageViewer || event.target === productImageViewerShell) {
            closeProductImageViewer();
        }
    });

    productViewerZoomInButtons.forEach(button => {
        button.addEventListener("click", () => {
            viewerZoomLevel = Math.min(2.5, Number((viewerZoomLevel + 0.25).toFixed(2)));
            updateViewerZoom();
        });
    });

    productViewerZoomOutButtons.forEach(button => {
        button.addEventListener("click", () => {
            viewerZoomLevel = Math.max(1, Number((viewerZoomLevel - 0.25).toFixed(2)));
            updateViewerZoom();
        });
    });

    document.addEventListener("keydown", event => {
        if (!productImageViewer.classList.contains("viewer-open")) return;

        if (event.key === "Escape") {
            closeProductImageViewer();
        }

        if (event.key === "ArrowRight" && viewerActiveIndex < viewerGalleryImages.length - 1) {
            viewerActiveIndex += 1;
            viewerZoomLevel = 1;
            renderViewer();
        }

        if (event.key === "ArrowLeft" && viewerActiveIndex > 0) {
            viewerActiveIndex -= 1;
            viewerZoomLevel = 1;
            renderViewer();
        }
    });
</script>
