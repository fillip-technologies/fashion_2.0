<div class="pb-10 bg-background">
    <div class="w-full h-px bg-dash-dot"></div>

    <div class="sticky top-0 z-10 bg-background">
        <div class="flex justify-between items-center px-6 md:px-14 py-5">
            <div class="text-[0.875rem]">
                Pashmina (13)
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

    <div class="grid grid-cols-1 md:grid-cols-2 py-20 px-6 md:px-14">

        <div class="aspect-[4/3]">
            <img src="{{ asset('assets/images/category/one.png') }}" alt="Back" class="w-full h-full " />
        </div>

        <div class="aspect-[4/3]">
            <img src="{{ asset('assets/images/category/two.png') }}" alt="Back" class="w-full h-full " />
        </div>

    </div>


    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 pb-20 px-6 md:px-14">
        @for ($i = 1; $i <= 9; $i++)
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="Title {{ $i }}"
                subtitle="Sub title" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        @endfor
    </div>


    <div class="max-w-7xl mx-auto px-6 md:px-14 pb-20">
        <div class="aspect-[16/7]">
            <img src="{{ asset('assets/images/category/visual.png') }}" alt="Back" class="w-full h-full " />
        </div>
    </div>

    <div class="max-w-md mx-auto px-6 md:px-14 text-black text-center font-medium space-y-4 pb-20">
        <p class="text-[0.75rem]">09 / 13</p>
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
