<nav id="drawer"
    class="fixed top-0 right-0 w-full md:w-1/2 bg-background text-black z-[1200]
         transform translate-x-full transition-transform duration-500
         ease-[cubic-bezier(0.86,0,0.07,1)]
         h-screen flex flex-col cookie-reset">

    <button onclick="toggleDrawer()"
        class="absolute top-6 right-8 text-3xl font-light text-black/60 hover:text-black z-50">
        &times;
    </button>

    <div class="pt-20 px-16 shrink-0">
        <h2 class="text-[13px] tracking-[0.25em] font-semibold uppercase">
            Filters
        </h2>
    </div>

    <div class="flex-1 px-16 mt-14 space-y-8 text-[14px] font-light overflow-y-auto custom-scroll">

        <div>
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('categorySection')">
                <span class="font-medium">By Category</span>
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold hidden"
                        data-count-for="categorySection"></span>
                    .__ ..
                </span>
            </div>
            <div id="categorySection" class="px-6 md:px-16 mt-1 hidden">

                <div class="flex items-center gap-6 mb-7">
                    <div class="flex-1 h-[1.5px] bg-dash-dot opacity-90"></div>
                </div>

                <div id="categoryGrid" class="grid grid-cols-1 sm:grid-cols-3 gap-y-10 gap-x-24">
                </div>

            </div>
        </div>

        <div>
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('colourSection')">
                <span class="font-medium">By Colour</span>
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold hidden"
                        data-count-for="colourSection"></span>
                    .__ ..
                </span>
            </div>

            <div id="colourSection" class="px-6 md:px-16 mt-1 hidden">

                <div class="flex items-center gap-6 mb-7">
                    <div class="flex-1 h-[1.5px] bg-dash-dot opacity-90"></div>
                </div>

                <div id="colourGrid" class="grid grid-cols-1 sm:grid-cols-3 gap-y-10 gap-x-12">
                </div>

            </div>
        </div>

        <div>
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('materialSection')">
                <span class="font-medium">By Material</span>
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold hidden"
                        data-count-for="materialSection"></span>
                    .__ ..
                </span>
            </div>
            <div id="materialSection" class="px-6 md:px-16 mt-1 hidden">

                <div class="flex items-center gap-6 mb-7">
                    <div class="flex-1 h-[1.5px] bg-dash-dot opacity-90"></div>
                </div>

                <div id="materialGrid" class="grid grid-cols-1 sm:grid-cols-3 gap-y-10 gap-x-24">
                </div>

            </div>
        </div>


        <div>
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('lineSection')">
                <span class="font-medium">By Line</span>
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold hidden"
                        data-count-for="lineSection"></span>
                    .__ ..
                </span>
            </div>
            <div id="lineSection" class="px-6 md:px-16 mt-1 hidden">

                <div class="flex items-center gap-6 mb-7">
                    <div class="flex-1 h-[1.5px] bg-dash-dot opacity-90"></div>
                </div>

                <div id="lineGrid" class="grid grid-cols-1 sm:grid-cols-3 gap-y-10 gap-x-24">
                </div>

            </div>
        </div>


        <div>
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('sortSection')">
                <span class="font-medium">Sort By</span>
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold hidden"
                        data-count-for="sortSection"></span>
                    .__ ..
                </span>
            </div>
            <div id="sortSection" class="px-6 md:px-16 mt-1 hidden">

                <div class="flex items-center gap-6 mb-7">
                    <div class="flex-1 h-[1.5px] bg-dash-dot opacity-90"></div>
                </div>

                <div id="sortGrid" class="grid grid-cols-1 sm:grid-cols-1 gap-y-10 gap-x-24">
                </div>

            </div>
        </div>

    </div>

    <div class="shrink-0 pb-16 flex flex-col md:flex-row items-center justify-center gap-5 md:gap-16">
        <button onclick="applyFilters()"
            class="border border-primary hover:border-secondary/90 px-8 py-2 text-[16px]
             hover:bg-secondary/90 hover:text-white transition rounded">
            Apply filter
        </button>
        <button onclick="clearFilters()"
            class="border border-primary hover:border-secondary/90 px-8 py-2 text-[16px]
             hover:bg-secondary/90 hover:text-white transition rounded">
            Clear filter
        </button>
    </div>

    <div class="absolute left-8 top-20 bottom-0 w-[1.5px] bg-dash-dot-v opacity-60"></div>
    <div class="absolute top-28 right-0 left-0 h-[1.5px] bg-dash-dot-h opacity-60"></div>

</nav>

<script>
    function updateSectionCount(sectionId) {
        const section = document.getElementById(sectionId);
        if (!section) return;

        const checkedCount = section.querySelectorAll(
            'input[type="checkbox"]:checked'
        ).length;

        const counter = document.querySelector(
            `[data-count-for="${sectionId}"]`
        );

        if (!counter) return;

        if (checkedCount > 0) {
            counter.textContent = `(${checkedCount})`;
            counter.classList.remove("hidden");
        } else {
            counter.textContent = "";
            counter.classList.add("hidden");
        }
    }

    document.addEventListener("change", (e) => {
        if (e.target.type !== "checkbox") return;

        const section = e.target.closest("[id$='Section']");
        if (!section) return;

        updateSectionCount(section.id);
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", () => {

        function checkboxTemplate(item, grid) {
            return `
        <label class="flex items-center gap-4 cursor-pointer select-none">
          <input
            type="checkbox"
            class="peer hidden"
            data-section="${grid}"
            data-label="${item.name}"
            >
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
            <span>
                ${item.name}
                ${item.count ? `<span class="text-gray-500">(${item.count})</span>` : ""}
            </span>

        </label>
      `;
        }

        function renderGrid(data, gridId, columnsCount = 3) {
            const grid = document.getElementById(gridId);
            if (!grid) return;

            const perColumn = Math.ceil(data.length / columnsCount);
            const columns = Array.from({
                    length: columnsCount
                }, (_, i) =>
                data.slice(i * perColumn, (i + 1) * perColumn)
            );

            columns.forEach(col => {
                const colDiv = document.createElement("div");
                colDiv.className = "space-y-10";

                col.forEach(item => {
                    colDiv.innerHTML += checkboxTemplate(item, grid);
                });

                grid.appendChild(colDiv);
            });
        }
        const categories = Array(3).fill([{
                name: "Stalls",
                count: 2
            },
            {
                name: "Mufflers",
                count: 2
            },
            {
                name: "Capes",
                count: 2
            },
            {
                name: "Covers",
                count: 2
            }
        ]).flat();

        const material = Array(3).fill([{
                name: "Cotton",
                count: 2
            },
            {
                name: "Linen",
                count: 2
            },
            {
                name: "Wool",
                count: 2
            },
            {
                name: "Silk",
                count: 2
            }
        ]).flat();

        const line = Array(3).fill([{
                name: "Ivy L",
                count: 2
            },
            {
                name: "Ruby",
                count: 2
            },
            {
                name: "Mono",
                count: 2
            },
            {
                name: "Clove",
                count: 2
            }
        ]).flat();

        const sort = [{
                name: "New Arrivals"
            },
            {
                name: "Ascendent"
            },
            {
                name: "Descendent"
            },
            {
                name: "Remove \"SOLD OUT\""
            }
        ];

        /* ========= RENDER ========= */
        renderGrid(categories, "categoryGrid");
        renderGrid(material, "materialGrid");
        renderGrid(line, "lineGrid");
        renderGrid(sort, "sortGrid", 1); // single column
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", () => {

        const colours = [{
                name: "Black",
                count: 2,
                color: "#000000"
            },
            {
                name: "White",
                count: 2,
                color: "#ffffff"
            },
            {
                name: "Blue",
                count: 2,
                color: "#AFC0D6"
            },
            {
                name: "Purple",
                count: 2,
                color: "#8B4DFF"
            },
            {
                name: "Pink",
                count: 2,
                color: "#FFA1D8"
            },
            {
                name: "Yellow",
                count: 2,
                color: "#EAF59A"
            },
            {
                name: "Brick",
                count: 2,
                color: "#B23A3A"
            },
            {
                name: "Green",
                count: 2,
                color: "#4DBA3F"
            },
            {
                name: "Orange",
                count: 2,
                color: "#FFB562"
            },
        ];

        const grid = document.getElementById("colourGrid");

        colours.forEach(item => {
            grid.innerHTML += `

            
      <label class="flex items-center gap-4 cursor-pointer select-none">
                <input
        type="checkbox"
        class="peer hidden"
        data-section="${grid}"
        data-label="${item.name}"
        >
         <span class="relative w-5 h-5 border border-black rounded-sm
                        peer-checked:bg-white peer-checked:border-secondary
                        after:absolute after:opacity-0
                        after:left-[5px] after:top-[1.5px]
                        after:w-[6px] after:h-[11px]
                        after:border-r-2 after:border-b-2
                        after:border-gray-600 after:rotate-45
                        peer-checked:after:opacity-100">
                    </span>      
        <span 
          class="w-10 h-10 rounded-md shadow-md border"
          style="background-color:${item.color}">
        </span>

        <span class="flex flex-col -mt-2 -ml-2">
            <span>${item.name}</span>
            <span class="text-gray-500 text-sm">(${item.count})</span>
        </span>

      </label>
    `;
        });
    });
</script>


<script>
    function toggleSection(activeId) {
        const sections = [
            "categorySection",
            "colourSection",
            "materialSection",
            "lineSection",
            "sortSection"
        ];

        sections.forEach(id => {
            const el = document.getElementById(id);
            if (!el) return;
            if (id === activeId) {
                el.classList.toggle("hidden");
            } else {
                el.classList.add("hidden");
            }
        });
    }
</script>


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
    function applyFilters() {
        window.appliedFilters = {};

        document.querySelectorAll('input[type="checkbox"]:checked')
            .forEach(cb => {
                const section = cb.dataset.section;
                const label = cb.dataset.label;

                if (!section || !label) return;

                if (!window.appliedFilters[section]) {
                    window.appliedFilters[section] = [];
                }

                window.appliedFilters[section].push(label);
            });

        renderSelectedFilters();
        toggleDrawer();
    }
</script>

<script>
    function clearFilters() {
        window.appliedFilters = {};


        document.querySelectorAll('input[type="checkbox"]')
            .forEach(cb => cb.checked = false);


        document.getElementById("selectedFilters").innerHTML = "";

        document
            .querySelectorAll('[data-count-for]')
            .forEach(counter => counter.classList.add("hidden"));

        toggleDrawer();
    }
</script>
