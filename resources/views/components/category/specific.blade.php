<div class="pb-10 bg-background">
    <div class="w-full h-px bg-dash-dot"></div>

    {{-- make this section sticky --}}
    <div class="sticky top-0 z-10 bg-background">
        <div class="flex justify-between items-center px-6 md:px-14 py-5 ">
            <div class="text-[0.875rem]">
                Shawls (31)
            </div>
            <div class="flex items-center space-x-8">
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




    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 pt-12 px-6 md:px-8">
        @forelse ($product as $items)
            <x-category.product-card  :image="$items->thumbnail" :title="$items->name" :price="$items->sale_price" :colors="['#4DBA3F', '#000000', '#B23A3A']" :pid="$items->id" :slug="$items->slug" />
        @empty
            @for ($i = 1; $i <= 3; $i++)
                <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                    hoverImage="{{ asset('assets/images/category/second-photo.png') }}"
                    title="Title {{ $i }}" subtitle="Sub title" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
            @endfor
        @endforelse
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-12 px-6 md:px-8 max-w-6xl mx-auto">
        @for ($i = 1; $i <= 2; $i++)
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="Title {{ $i }}"
                subtitle="Sub title" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        @endfor
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 py-12 px-6 md:px-8
            items-center justify-items-center">
        <div class="w-full max-w-md mx-auto">
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="THE IVY LEAGUE"
                subtitle="Cashmere & Cotton" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        </div>
        <img src="{{ asset('assets/images/category/vertical-visual.png') }}" alt="Back" />
    </div>


    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 pt-12 px-6 md:px-8">
        @for ($i = 1; $i <= 3; $i++)
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="Title {{ $i }}"
                subtitle="Sub title" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        @endfor
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-12 px-6 md:px-8 max-w-6xl mx-auto">
        @for ($i = 1; $i <= 2; $i++)
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="Title {{ $i }}"
                subtitle="Sub title" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        @endfor
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 py-12 px-6 md:px-8
            items-center justify-items-center">
        <div class="w-full max-w-md mx-auto order-2">
            <x-category.product-card image="{{ asset('assets/images/category/first-photo.png') }}"
                hoverImage="{{ asset('assets/images/category/second-photo.png') }}" title="THE IVY LEAGUE"
                subtitle="Cashmere & Cotton" price="45600" :colors="['#4DBA3F', '#000000', '#B23A3A']" />
        </div>
        <img src="{{ asset('assets/images/category/vertical-visual.png') }}" alt="Back" />
    </div>



    <div class="max-w-md mx-auto px-6 md:px-14 text-black text-center font-medium space-y-4 pt-20 pb-10">
        <p class="text-[0.75rem]">15 / 71</p>
        <p class="text-[0.875rem]">Load more products</p>
    </div>


</div>

<script>
    document.getElementById("scrollUp").addEventListener("click", function() {
        window.scrollBy({
            top: -500,
            behavior: "smooth"
        });
    });

    document.getElementById("scrollDown").addEventListener("click", function() {
        window.scrollBy({
            top: 500,
            behavior: "smooth"
        });
    });
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
