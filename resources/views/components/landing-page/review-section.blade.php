<section class="w-full bg-[#F2F2F2] py-[115px]">

    <div class="max-w-[1168px] mx-auto flex items-center justify-between">

        <!-- LEFT -->
        <div class="relative w-[585px] h-[860px]">

            <!-- DASH CLOSE BUTTON -->
            <button
                id="closeBtn"
                onclick="
                    document.getElementById('opinionWrapper').classList.add('opacity-0','invisible');
                    document.getElementById('thoughtText').classList.add('opacity-0','invisible');
                    document.getElementById('bottomForm').classList.add('opacity-0','invisible');

                    document.getElementById('opinionBtn').classList.remove('hidden');

                    document.getElementById('wordSection').classList.add('hidden');

                    document.getElementById('closeBtn').classList.add('hidden');
                "
                class="hidden absolute top-[56px] right-[-48px] z-30 w-[28px] h-[28px] flex items-center justify-center">

                <div class="w-[26px] h-[2px] bg-[#3E3E40]"></div>

            </button>

            <!-- Heading -->
            <p
                id="thoughtText"
                class="absolute top-[15px] left-0 text-[#97A0A1] text-[20px] font-medium opacity-0 invisible transition-all duration-300 z-20">
                Send us your thoughts
            </p>

            <!-- Image -->
            <img
                src="{{ asset('assets/images/landing/YOUR_IMAGE.jpg') }}"
                alt=""
                class="absolute left-0 top-[56px] w-[585px] h-[664px] object-cover" />

            <!-- TEXT AREA WRAPPER -->
            <div
                id="opinionWrapper"
                class="absolute left-[14px] top-[205px] w-[476px] h-[501px] opacity-0 invisible transition-all duration-300 z-10">

                <!-- Fake Cursor -->
                <div
                    id="fakeCursor"
                    class="absolute top-[14px] left-[14px] w-[1px] h-[16px] bg-black z-20">
                </div>

                <!-- Textarea -->
                <textarea
                    id="opinionBox"
                    placeholder=""
                    class="w-full h-full bg-white rounded-[4px] border border-[#97A0A1] resize-none outline-none pt-2 pl-2 text-[14px] leading-[20px] caret-transparent">
                </textarea>

            </div>

            <!-- EMAIL + BUTTON -->
            <div
                id="bottomForm"
                class="absolute left-0 bottom-0 w-full flex items-start gap-3 opacity-0 invisible transition-all duration-300">

                <!-- Email -->
                <div class="flex-1">

                    <input
                        type="email"
                        placeholder="*Your E-mail"
                        class="w-full h-[62px] px-5 bg-white border border-[#D9D9D9] rounded-[4px] outline-none text-[16px]" />

                    <p class="mt-3 text-[12px] italic text-[#6D6D6D] leading-[18px]">
                        *Please enter your email so that we could listen.
                        (This does not add you to our marketing/email list)
                    </p>

                </div>

                <!-- Send -->
                <button
                    class="w-[232px] h-[62px] border border-black rounded-[4px] text-[20px] font-medium hover:bg-black hover:text-white transition-all duration-300">
                    Send
                </button>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="w-[412px] flex flex-col items-center text-center">

            <!-- Paragraph -->
            <p class="text-black text-[24px] italic font-light leading-[42px]">
                Cotton (from Arabic qutn) is a soft, fluffy
                staple fiber that grows in a boll, or protective
                case, around the seeds of the cotton plants of
                the genus Gossypium in the mallow family
                Malvaceae?
            </p>

            <!-- SAME POSITION SWITCH -->
            <div class="mt-[70px] relative h-[80px] flex flex-col items-center justify-start">

                <!-- Default Button -->
                <button
                    id="opinionBtn"
                    onclick="
                        document.getElementById('opinionWrapper').classList.remove('opacity-0','invisible');
                        document.getElementById('thoughtText').classList.remove('opacity-0','invisible');
                        document.getElementById('bottomForm').classList.remove('opacity-0','invisible');

                        document.getElementById('opinionBtn').classList.add('hidden');

                        document.getElementById('wordSection').classList.remove('hidden');

                        document.getElementById('closeBtn').classList.remove('hidden');

                        document.getElementById('opinionBox').focus();
                    "
                    class="relative inline-block text-[15px] font-medium group">

                    <!-- Normal Underline -->
                    <span class="underline underline-offset-4 group-hover:no-underline">
                        Your opinion matters.
                    </span>

                    <!-- Dash-Dot Hover -->
                    <span
                        class="hidden group-hover:block absolute left-0 bottom-[-4px] w-full h-[2px]"
                        style="
                            background: repeating-linear-gradient(
                                to right,
                                #000 0 8px,
                                transparent 8px 12px,
                                #000 12px 20px,
                                transparent 20px 24px,
                                #000 24px 26px,
                                transparent 26px 34px
                            );
                        ">
                    </span>

                </button>

                <!-- Replace Text -->
                <div
                    id="wordSection"
                    class="hidden text-center">

                    <p class="text-[16px]">
                        <span class="text-[#97A0A1]">0/600</span>
                        <span class="text-black font-medium"> words</span>
                    </p>

                    <p class="mt-6 text-[14px] text-black">
                        (not including the spaces)
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>