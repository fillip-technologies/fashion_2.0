<div class="bg-background pt-24">
    <div class="flex flex-col items-center">
        <div class="flex items-center gap-5">
            <p class="text-black text-[18px] font-light relative top-[6px]">
                About Us
            </p>

            <div class="bg-purple-600 text-[12px] px-20 py-1 text-white">
                LOGO
            </div>
        </div>

        <div class="h-px w-80 mt-3 bg-black/40"></div>
    </div>

    <div class="mt-20 w-11/12 mx-auto bg-white pb-20 md:pb-44 pl-10 md:pl-28">

        <img src="{{ asset('assets/images/about/one.png') }}" alt="about" class="w-full h-auto object-cover" />

        <div
            class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-16 mt-16 md:mt-24 px-6 md:px-4 pr:0 md:pr-10 text-black font-light text-[14px] leading-relaxed">
            <p>
                A fashion collection is a curated group of clothing, footwear, and
                accessories designed around a central theme, concept, or inspiration,
                unified by
            </p>
            <p>
                A fashion collection is a curated group of clothing, footwear, and
                accessories designed around a central theme, concept, or inspiration,
                unified by a consistent aesthetic and purpose.
            </p>
            <p>
                A fashion collection is a curated group of clothing, footwear, and
                accessories designed around a central theme, concept, or inspiration,
                unified by creativity, craftsmanship, and storytelling.
            </p>
        </div>
    </div>

    <img src="{{ asset('assets/images/about/four.png') }}" alt="about" class="w-full h-auto object-cover" />

</div>

{{--
<div class="w-11/12 mx-auto bg-white pb-28 md:pb-44 flex flex-col items-center justify-center">
    <img src="{{ asset('assets/images/about/two.png') }}" alt="about" class="w-full h-auto object-cover" />
<div class="px-10 mt-16 md:mt-28">
    <img src="{{ asset('assets/images/about/three.png') }}" alt="about"
        class="w-auto h-auto object-contain" />
</div>
</div> --}}

<div class="w-11/12 mx-auto bg-white pb-16 md:pb-24 flex flex-col items-center justify-center">

    <img src="{{ asset('assets/images/about/two.png') }}" alt="about" class="w-full h-auto object-cover" />

    <div class="w-full">

        <div class="relative group inline-block flex items-center justify-center pt-16 md:pt-28 pb-20 md:pb-28">


            <img src="{{ asset('assets/images/about/three.png') }}" alt="about" class="w-auto h-auto object-contain"
                id="imageThree" />

            <div id="overlayBox"
                class="absolute inset-0 
          bg-gradient-to-b from-black/60 to-black/80
           opacity-0
           transition-opacity duration-300
           flex flex-col items-center justify-center text-center px-6">

                <h3 class="text-white text-[1.25rem] tracking-wide" style="font-weight: 600">
                    <a href="/yarn-story"> THE YARN’s STORY </a>
                </h3>

                <div class="w-80 h-px bg-white my-3"></div>

                <p class="text-white text-[1rem] w-7/12 mt-10 " style="font-weight: 300">
                    A fashion collection is a curated group of clothing, footwear, and accessories designed around a
                    central theme, concept, or inspiration, unified by shared colors, fabrics, silhouettes, and styles
                    for a specific season (like Spring/Summer or Fall/Winter) to tell a cohesive story and predict
                    trends. These collections often blend trendy, limited-edition pieces with timeless basics, creating
                    a complete look that designers present to buyers and the public, often during Fashion
                    Weeks....................<span class="text-[0.875rem] italic" style="font-weight: 200"> <a
                            href="/yarn-story">Read
                            more</a></span>
                </p>


            </div>

        </div>
    </div>

</div>


<script>
    const image = document.getElementById("imageThree");
    const overlay = document.getElementById("overlayBox");

    document.addEventListener("mousemove", function(e) {

        const rect = image.getBoundingClientRect();

        const insideImage =
            e.clientX >= rect.left &&
            e.clientX <= rect.right &&
            e.clientY >= rect.top &&
            e.clientY <= rect.bottom;

        if (insideImage) {
            overlay.style.opacity = "1";
        } else {
            overlay.style.opacity = "0";
        }

    });
</script>