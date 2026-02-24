<footer class="bg-[#3f4042] text-white h-screen relative">
    <div class="max-w-7xl mx-auto px-8 md:px-16 pt-24 pb-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-24">
            <div>
                <h4 class="text-[1rem] tracking-widest mb-12">COMPANY</h4>
                <ul class="space-y-4 font-light text-background text-[0.75rem]">
                    <li> <a href="/about">ABOUT US</a></li>
                    <li>LEGAL</li>
                    <li><a href="/newcollection">THE COLLECTIONS</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-[1rem] tracking-widest mb-12">SERVICES</h4>
                <ul class="space-y-4 text-[0.75rem] font-light text-background">
                    <li>TRACK YOUR ORDER</li>
                    <li>YOUR ORDERS</li>
                    <li> <a href="/contact">CONTACT US</a></li>
                    <li> <a href="/sitemap">SITEMAP</a></li>
                </ul>
            </div>
            <div>
                {{-- this h4 should be clickable --}}
                <h4 class="text-[1rem] tracking-widest mb-12 cursor-pointer" onclick="toggleSocials()">FOLLOW US</h4>
                <div class="flex space-x-4 md:hidden">
                    <ul class="space-y-4 text-[0.75rem] font-light text-background">
                        <li><img src="assets/social-icons/icon1.png" /></li>
                        <li><img src="assets/social-icons/icon4.png" /></li>
                    </ul>
                    <ul class="space-y-4 text-[0.75rem] font-light text-background">
                        <li><img src="assets/social-icons/icon2.png" /></li>
                        <li><img src="assets/social-icons/icon5.png" /></li>
                    </ul>
                    <ul class="space-y-4 text-[0.75rem] font-light text-background">
                        <li><img src="assets/social-icons/icon3.png" /></li>
                    </ul>
                </div>
            </div>
            <div class="space-y-20">
                <div>
                    <h4 class="text-[1rem] tracking-widest mb-12">NEWSLETTER</h4>
                    <p class="text-[0.75rem] text-background font-light mb-4">
                        Stay up to date with the latest news with us
                    </p>
                    <p class="text-[0.75rem] underline cursor-pointer text-background"
                        onclick="toggleMasterDrawer('newsletter')">
                        Join our newsletter
                    </p>
                </div>
                <div class="flex flex-col">
                    <a href="/location" class="text-[0.875rem] tracking-widest mb-6">LOCATION</a>
                    <a href="/location" class="text-[0.75rem] underline cursor-pointer text-background">
                        INDIA / EN / ₹
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="absolute bottom-10 inset-x-0">

        {{-- this should visible only on clicking the follow us --}}
        <div id="socialDrawer" class="border-t border-secondary relative hidden">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-10 md:px-16 py-14">
                <div class="text-[0.875rem]" style="font-weight: 500">Our Socials :</div>
                <div class="flex space-x-10">
                    <img src="assets/social-icons/icon1.png" />
                    <img src="assets/social-icons/icon2.png" />
                    <img src="assets/social-icons/icon3.png" />
                    <img src="assets/social-icons/icon4.png" />
                    <img src="assets/social-icons/icon5.png" />
                </div>
                <div></div>
            </div>

            <div class="absolute top-7 right-10 cursor-pointer" onclick="toggleSocials()">
                <img src="{{ asset('assets/SVG/Close white icon.svg') }}" class="h-3 w-3" />
            </div>
        </div>


        <div class="border-t border-secondary"></div>
        <div class="text-[0.625rem] pt-10 pb-2 px-16">
            © 2023 - 2025 Vastraton World · All rights reserved
        </div>
    </div>

</footer>


<script>
    function toggleSocials() {
        const drawer = document.getElementById("socialDrawer");

        if (drawer.classList.contains("hidden")) {
            drawer.classList.remove("hidden");
            drawer.classList.add("block");
        } else {
            drawer.classList.add("hidden");
            drawer.classList.remove("block");
        }
    }
</script>
