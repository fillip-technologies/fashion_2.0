<nav id="drawer"
    class="fixed top-0 right-0 w-full md:w-1/2 bg-background text-black z-[1200]
         transform translate-x-full transition-transform duration-500
         ease-[cubic-bezier(0.86,0,0.07,1)]
         h-screen flex flex-col cookie-reset">

    <!-- Close -->
    <button onclick="toggleDrawer()"
        class="absolute top-6 right-8 text-3xl font-light text-black/60 hover:text-black z-50">
        &times;
    </button>

    <!-- HEADER -->
    <div class="pt-20 px-16 shrink-0">
        <h2 class="text-[13px] tracking-[0.25em] font-semibold uppercase">
            Filters
        </h2>
    </div>

    <!-- SCROLLABLE CONTENT -->
    <div class="flex-1 px-16 mt-14 space-y-8 text-[14px] font-light overflow-y-auto custom-scroll">

        <!-- BY CATEGORY -->
        <div>
            <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('categorySection')">
                <span class="font-medium">By Category</span>
                {{-- <span class="text-black/90"><span>(1)</span>.__ ..</span> --}}
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold">(1)</span>
                    .__ ..
                </span>

            </div>

            <!-- CATEGORY CONTENT -->
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
                {{-- <span class="text-black/90">.__ ..</span> --}}
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold">(1)</span>
                    .__ ..
                </span>

            </div>

            <!-- CATEGORY CONTENT -->
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
                {{-- <span class="text-black/90">.__ ..</span> --}}
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold">(1)</span>
                    .__ ..
                </span>

            </div>

            <!-- CATEGORY CONTENT -->
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
                {{-- <span class="text-black/90">.__ ..</span> --}}
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold">(1)</span>
                    .__ ..
                </span>

            </div>

            <!-- CATEGORY CONTENT -->
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
                {{-- <span class="text-black/90">.__ ..</span> --}}
                <span class="relative inline-block text-black/90">
                    <span class="absolute -top-1 left-1 text-black font-semibold">(1)</span>
                    .__ ..
                </span>

            </div>

            <!-- CATEGORY CONTENT -->
            <div id="sortSection" class="px-6 md:px-16 mt-1 hidden">

                <div class="flex items-center gap-6 mb-7">
                    <div class="flex-1 h-[1.5px] bg-dash-dot opacity-90"></div>
                </div>

                <div id="sortGrid" class="grid grid-cols-1 sm:grid-cols-1 gap-y-10 gap-x-24">
                </div>

            </div>
        </div>

    </div>

    <!-- FOOTER BUTTONS -->
    <div class="shrink-0 pb-16 flex flex-col md:flex-row items-center justify-center gap-5 md:gap-16">
        <button onclick="toggleDrawer()"
            class="border border-primary hover:border-secondary/90 px-8 py-2 text-[16px]
             hover:bg-secondary/90 hover:text-white transition rounded">
            Apply filter
        </button>
        <button onclick="toggleDrawer()"
            class="border border-primary hover:border-secondary/90 px-8 py-2 text-[16px]
             hover:bg-secondary/90 hover:text-white transition rounded">
            Clear filter
        </button>
    </div>

    <!-- DECORATIVE LINES -->
    <div class="absolute left-8 top-20 bottom-0 w-[1.5px] bg-dash-dot-v opacity-60"></div>
    <div class="absolute top-28 right-0 left-0 h-[1.5px] bg-dash-dot-h opacity-60"></div>

</nav>


<script>
    const categories = [{
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
        },
        {
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
        },
        {
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
        },
    ];

    const grid = document.getElementById("categoryGrid");

    const perColumn = Math.ceil(categories.length / 3);
    const columns = [
        categories.slice(0, perColumn),
        categories.slice(perColumn, perColumn * 2),
        categories.slice(perColumn * 2),
    ];

    columns.forEach(col => {
        const colDiv = document.createElement("div");
        colDiv.className = "space-y-10";

        col.forEach(item => {
            colDiv.innerHTML += `
        <label class="flex items-center gap-4 cursor-pointer select-none">
          <input type="checkbox" class="peer hidden">
          <span
            class="relative w-5 h-5 border border-black rounded-sm
                   transition-all duration-200
                   peer-checked:bg-white peer-checked:border-secondary
                   after:content-['']
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
            <span class="text-gray-500">(${item.count})</span>
          </span>
        </label>
      `;
        });

        grid.appendChild(colDiv);
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", () => {

        const material = [{
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
            },
            {
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
            },
            {
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
            },
        ];

        const grid = document.getElementById("materialGrid");

        const perColumn = Math.ceil(material.length / 3);
        const columns = [
            material.slice(0, perColumn),
            material.slice(perColumn, perColumn * 2),
            material.slice(perColumn * 2),
        ];

        columns.forEach(col => {
            const colDiv = document.createElement("div");
            colDiv.className = "space-y-10";

            col.forEach(item => {
                colDiv.innerHTML += `
                <label class="flex items-center gap-4 cursor-pointer select-none">
                    <input type="checkbox" class="peer hidden">
                    <span class="relative w-5 h-5 border border-black rounded-sm
                        peer-checked:bg-white peer-checked:border-secondary
                        after:absolute after:opacity-0
                        after:left-[5px] after:top-[1.5px]
                        after:w-[6px] after:h-[11px]
                        after:border-r-2 after:border-b-2
                        after:border-gray-600 after:rotate-45
                        peer-checked:after:opacity-100">
                    </span>
                    <span>
                        ${item.name}
                        <span class="text-gray-500">(${item.count})</span>
                    </span>
                </label>
            `;
            });

            grid.appendChild(colDiv);
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", () => {

        const line = [{
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
            },
            {
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
            },
            {
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
            },
        ];

        const grid = document.getElementById("lineGrid");

        const perColumn = Math.ceil(line.length / 3);
        const columns = [
            line.slice(0, perColumn),
            line.slice(perColumn, perColumn * 2),
            line.slice(perColumn * 2),
        ];

        columns.forEach(col => {
            const colDiv = document.createElement("div");
            colDiv.className = "space-y-10";

            col.forEach(item => {
                colDiv.innerHTML += `
                <label class="flex items-center gap-4 cursor-pointer select-none">
                    <input type="checkbox" class="peer hidden">
                    <span class="relative w-5 h-5 border border-black rounded-sm
                        peer-checked:bg-white peer-checked:border-secondary
                        after:absolute after:opacity-0
                        after:left-[5px] after:top-[1.5px]
                        after:w-[6px] after:h-[11px]
                        after:border-r-2 after:border-b-2
                        after:border-gray-600 after:rotate-45
                        peer-checked:after:opacity-100">
                    </span>
                    <span>
                        ${item.name}
                        <span class="text-gray-500">(${item.count})</span>
                    </span>
                </label>
            `;
            });

            grid.appendChild(colDiv);
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const sort = [{
                name: "New Arrivals",
                count: 2
            },
            {
                name: "Ascendent",
                count: 2
            },
            {
                name: "Descendent",
                count: 2
            },
            {
                name: "Remove \"SOLD OUT\"",
                count: 2
            },

        ];

        const grid = document.getElementById("sortGrid");

        const perColumn = Math.ceil(sort.length / 3);
        const columns = [
            sort.slice(0, perColumn),
            sort.slice(perColumn, perColumn * 2),
            sort.slice(perColumn * 2),
        ];

        columns.forEach(col => {
            const colDiv = document.createElement("div");
            colDiv.className = "space-y-10";

            col.forEach(item => {
                colDiv.innerHTML += `
                <label class="flex items-center gap-4 cursor-pointer select-none">
                    <input type="checkbox" class="peer hidden">
                    <span class="relative w-5 h-5 border border-black rounded-sm
                        peer-checked:bg-white peer-checked:border-secondary
                        after:absolute after:opacity-0
                        after:left-[5px] after:top-[1.5px]
                        after:w-[6px] after:h-[11px]
                        after:border-r-2 after:border-b-2
                        after:border-gray-600 after:rotate-45
                        peer-checked:after:opacity-100">
                    </span>
                    <span>
                        ${item.name}
                        <span class="text-gray-500">(${item.count})</span>
                    </span>
                </label>
            `;
            });

            grid.appendChild(colDiv);
        });
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
        
        <!-- Checkbox -->
        <input type="checkbox" class="peer hidden">

         <span class="relative w-5 h-5 border border-black rounded-sm
                        peer-checked:bg-white peer-checked:border-secondary
                        after:absolute after:opacity-0
                        after:left-[5px] after:top-[1.5px]
                        after:w-[6px] after:h-[11px]
                        after:border-r-2 after:border-b-2
                        after:border-gray-600 after:rotate-45
                        peer-checked:after:opacity-100">
                    </span>

        <!-- Color box -->
        <span 
          class="w-10 h-10 rounded-md shadow-md border"
          style="background-color:${item.color}">
        </span>

        <!-- Text -->
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
    function toggleSection(id) {
        document.getElementById(id).classList.toggle("hidden");
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
