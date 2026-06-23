

<div class="pb-10 bg-background">
    <div class="w-full h-px bg-dash-dot"></div>

    <div class="sticky top-0 z-10 bg-background">
        <div class="flex justify-between items-center px-6 md:px-14 py-5">
            <div class="text-[0.875rem]">
                New Arrivals (88)
            </div>
            <div class="flex items-center space-x-8">
                {{-- <img src="{{ asset('assets/images/category/arrow.png') }}" alt="Back" /> --}}
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('assets/icons/Arrow-up.svg') }}" alt="arrow-up" class="cursor-pointer h-5"
                        id="scrollUp" />
                    <img src="{{ asset('assets/icons/Arrow-down.svg') }}" alt="arrow-down" class="cursor-pointer h-5"
                        id="scrollDown" />
                </div>
                <button onclick="toggleDrawer()">
                    <img src="{{ asset('assets/images/category/filter.png') }}" alt="Back" />
                </button>
            </div>
        </div>
        <div class="h-1.5 bg-secondary"></div>

        <div id="selectedFilters" class="w-full px-6 md:px-14 bg-white py-5 flex flex-wrap gap-2 hidden">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2">
        <img src="{{ asset('assets/images/category/three.png') }}" alt="Back" class="w-full h-full" />
        <img src="{{ asset('assets/images/category/four.png') }}" alt="Back" class="w-full h-full" />
    </div>


    <div class="bg-white py-16 px-0 md:px-14">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
            <div class="flex flex-col space-y-3 items-center justify-center md:items-start md:justify-start">
                <p class="text-[2.25rem] font-semibold tracking-wide">
                    “Ivy League”
                </p>
                <div
                    class="flex flex-col w-5/12 md:w-4/12 font-normal items-center justify-center space-y-0.5 text-[1rem] text-black/80">
                    <p>The Collection</p>
                    <p>Fall / Winter 2027</p>
                </div>
            </div>

            <div class="flex flex-col space-y-6 w-9/12 mx-auto">
                <p class="text-[0.875rem] text-right self-end leading-relaxed text-black/80">
                    The collection of YR To Kill a Mockingbird is a story about Scout Finch,
                    who, along with her brother Jem, watches her lawyer father, Atticus,
                    defend Tom Robinson, a Black man falsely accused of rape in the 1930s
                    South. The novel explores themes of racial injustice, loss of innocence,
                    and morality through the eyes of the children.
                </p>
                <a href="/lookbook"
                    class="text-[0.875rem] uppercase tracking-widest underline underline-offset-4 self-end w-fit">
                    View more
                </a>
            </div>
        </div>
    </div>





    <div class="grid grid-cols-1 md:grid-cols-2 items-center">
        <div class="aspect-square overflow-hidden">
            <img src="{{ asset('assets/images/category/five.png') }}" alt="Back" class="w-full h-full" />
        </div>
        <div class="w-full max-w-md mx-auto">
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="THE IVY LEAGUE"
                subtitle="Cashmere & Cotton" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        </div>
    </div>


    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 pt-16 pb-10 px-6 md:px-8 bg-white">
        @for ($i = 1; $i <= 3; $i++)
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="Title {{ $i }}"
                subtitle="Sub title" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        @endfor
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 items-center bg-white">
        <div class="aspect-square overflow-hidden order-2">
            <img src="{{ asset('assets/images/category/six.png') }}" alt="Back" class="w-full h-full" />
        </div>
        <div class="w-full max-w-md mx-auto order-1">
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="THE IVY LEAGUE"
                subtitle="Cashmere & Cotton" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 pt-16 pb-10 px-6 md:px-8">
        @for ($i = 1; $i <= 3; $i++)
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="Title {{ $i }}"
                subtitle="Sub title" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        @endfor
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 items-center bg-white">
        <div class="aspect-square overflow-hidden">
            <img src="{{ asset('assets/images/category/seven.png') }}" alt="Back" class="w-full h-full" />
        </div>
        <div class="w-full max-w-md mx-auto">
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="THE IVY LEAGUE"
                subtitle="Cashmere & Cotton" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        </div>
    </div>


    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 pt-16 pb-10 px-6 md:px-8 bg-white">
        @for ($i = 1; $i <= 3; $i++)
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="Title {{ $i }}"
                subtitle="Sub title" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        @endfor
    </div>

    <div class="max-w-md mx-auto px-6 md:px-14 text-black text-center font-medium space-y-4 pt-20 pb-10">
        <p class="text-[0.75rem]">15 / 71</p>
        <p class="text-[0.875rem]">Load more products</p>
    </div>


</div>


<script>
    (() => {
        const scrollUpButton = document.getElementById("scrollUp");
        const scrollDownButton = document.getElementById("scrollDown");

        if (scrollUpButton) {
            scrollUpButton.addEventListener("click", function() {
                window.scrollBy({
                    top: -500,
                    behavior: "smooth"
                });
            });
        }

        if (scrollDownButton) {
            scrollDownButton.addEventListener("click", function() {
                window.scrollBy({
                    top: 500,
                    behavior: "smooth"
                });
            });
        }
    })();
</script>


<script>
    function renderSelectedFilters() {
        const container = document.getElementById("selectedFilters");
        container.innerHTML = "";


        const entries = Object.entries(window.appliedFilters);

        if (entries.length === 0) {
            container.classList.add("hidden");
            return;
        }

        container.classList.remove("hidden");

        entries.forEach(([section, values]) => {
            values.forEach(value => {
                const chip = document.createElement("span");
                chip.className =
                    "flex items-center gap-2 px-8 py-2 border border-black rounded text-[14px]";

                chip.innerHTML = `
            ${value}
            <button
                onclick="removeFilter('${section}', '${value}')"
                class="text-gray-500 hover:text-black ml-3 flex items-center"
                aria-label="Remove filter"
            >
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
            `;


                container.appendChild(chip);
            });
        });
    }
</script>


<script>
    function removeFilter(section, value) {

        window.appliedFilters[section] =
            window.appliedFilters[section].filter(v => v !== value);

        if (window.appliedFilters[section].length === 0) {
            delete window.appliedFilters[section];
        }


        document.querySelectorAll(
            `input[data-section="${section}"][data-label="${value}"]`
        ).forEach(cb => cb.checked = false);


        renderSelectedFilters();


        document
            .querySelectorAll(`[data-count-for]`)
            .forEach(el => {
                const secId = el.dataset.countFor;
                updateSectionCount(secId);
            });
    }
</script>
