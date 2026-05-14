<section class="w-full bg-[#F2F2F2] pt-[70px] pb-[38px] lg:py-[115px]">

    <div class="max-w-[1168px] mx-auto flex flex-col lg:flex-row items-center justify-between px-6 lg:px-0">

        <!-- LEFT -->
        <div class="relative w-full lg:w-[585px] h-auto lg:h-[860px] flex flex-col items-center lg:block">

            <!-- DASH CLOSE BUTTON -->
            <button
                id="closeBtnDesktop"
                onclick="
                    document.getElementById('opinionWrapperDesktop').classList.add('opacity-0','invisible');
                    document.getElementById('thoughtTextDesktop').classList.add('opacity-0','invisible');
                    document.getElementById('bottomFormDesktop').classList.add('opacity-0','invisible');

                    document.getElementById('opinionBtnDesktop').classList.remove('hidden');

                    document.getElementById('wordSectionDesktop').classList.add('hidden');

                    document.getElementById('closeBtnDesktop').classList.add('hidden');
                "
                class="hidden absolute top-[56px] right-[-48px] z-30 w-[28px] h-[28px] flex items-center justify-center">

                <div class="w-[26px] h-[2px] bg-[#3E3E40]"></div>

            </button>

            <!-- Heading -->
            <p
                id="thoughtTextDesktop"
                class="absolute top-[15px] left-0 text-[#97A0A1] text-[20px] font-medium opacity-0 invisible transition-all duration-300 z-20">
                Send us your thoughts
            </p>

            <!-- Mobile Default View -->
            <div id="mobileReviewDefault" class="lg:hidden flex flex-col items-center w-full">
                <p class="max-w-[330px] mb-[82px] text-black text-[12px] italic font-light leading-[20px] text-left">
                    Cotton (from Arabic qutn) is a soft, fluffy
                    staple fiber that grows in a boll, or protective
                    case, around the seeds of the cotton plants of
                    the genus Gossypium in the mallow family
                    Malvaceae?
                </p>

                <img
                    src="{{ asset('assets/images/landing/YOUR_IMAGE.jpg') }}"
                    alt=""
                    class="w-full max-w-[282px] h-[321px] object-cover" />

                <button
                    id="opinionBtnMobile"
                    onclick="
                        document.getElementById('mobileReviewDefault').classList.add('hidden');
                        document.getElementById('mobileReviewForm').classList.remove('hidden');
                        document.getElementById('opinionBoxMobile').focus();
                    "
                    class="mt-[40px] relative inline-block text-[15px] font-medium group">

                    <span class="underline underline-offset-4 group-hover:no-underline">
                        Your opinion matters.
                    </span>

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
            </div>

            <!-- Mobile Form View -->
            <div id="mobileReviewForm" class="hidden lg:hidden w-full max-w-[440px]">
                <div class="relative h-[150px]">
                    <p class="absolute left-1/2 top-[10px] w-[273px] -translate-x-1/2 text-black text-[12px] italic font-light leading-[16px] text-left">
                        Cotton (from Arabic qutn) is a soft, fluffy staple fiber that grows in a boll, or protective case, around the seeds of the cotton plants of the genus Gossypium in the mallow family Malvaceae?
                    </p>

                    <button
                        onclick="
                            document.getElementById('mobileReviewForm').classList.add('hidden');
                            document.getElementById('mobileReviewDefault').classList.remove('hidden');
                        "
                        class="absolute right-0 bottom-[8px] flex items-center gap-2 text-[12px] font-normal underline underline-offset-2">
                        <span class="block w-[13px] h-[1px] bg-black"></span>
                        Next time?
                    </button>
                </div>

                <div class="relative left-1/2 w-screen h-[470px] -translate-x-1/2 bg-transparent border border-dashed border-[#8E8E8E]">
                    <img
                        src="{{ asset('assets/images/landing/YOUR_IMAGE.jpg') }}"
                        alt=""
                        class="absolute left-[8px] top-[8px] w-[107px] h-[118px] object-cover z-10" />

                    <textarea
                        id="opinionBoxMobile"
                        placeholder=""
                        class="w-full h-full resize-none outline-none bg-transparent pt-[24px] pl-[130px] pr-4 text-[14px] leading-[20px]"></textarea>
                </div>

                <div class="relative left-1/2 mt-[76px] flex w-screen -translate-x-1/2 items-start justify-center gap-[clamp(16px,7vw,39px)] px-[clamp(14px,6.5vw,36px)]">
                    <div class="w-[min(292px,55vw)] shrink-0">
                        <input
                            type="email"
                            placeholder="*Your E-mail"
                            class="w-full h-[40px] px-[14px] bg-[#EDEDED] rounded-[4px] outline-none text-[14px] font-light placeholder:text-black" />

                        <p class="mt-[8px] text-black text-[12px] italic font-[250] leading-[20px]">
                            <span class="block min-[500px]:whitespace-nowrap">*Please enter your email so that we could listen.</span>
                            <span class="block min-[500px]:whitespace-nowrap">(This does not add you to our marketing/email list)</span>
                        </p>
                    </div>

                    <button
                        onclick="
                            document.getElementById('mobileReviewForm').classList.add('hidden');
                            document.getElementById('mobileReviewThanks').classList.remove('hidden');
                        "
                        class="w-[min(143px,30vw)] h-[40px] border border-black rounded-[4px] text-[14px] font-medium">
                        Send
                    </button>
                </div>
            </div>

            <!-- Mobile Thank You View -->
            <div id="mobileReviewThanks" class="hidden lg:hidden flex flex-col items-center w-full">
                <img
                    src="{{ asset('assets/images/landing/YOUR_IMAGE.jpg') }}"
                    alt=""
                    class="w-[min(374px,calc(100vw-64px))] h-auto object-cover" />

                <p class="mt-[52px] text-black text-[20px] font-light underline underline-offset-4">
                    Thank you!
                </p>
            </div>

            <!-- Desktop Image -->
            <img
                src="{{ asset('assets/images/landing/YOUR_IMAGE.jpg') }}"
                alt=""
                class="hidden lg:block absolute left-0 top-[56px] w-[585px] h-[664px] object-cover" />

            <!-- TEXT AREA WRAPPER -->
            <div
                id="opinionWrapperDesktop"
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
                    class="w-full h-full bg-white rounded-[4px] resize-none outline-none pt-2 pl-2 text-[14px] leading-[20px] caret-transparent">
                </textarea>

            </div>

            <!-- EMAIL + BUTTON -->
            <div
                id="bottomFormDesktop"
                class="absolute left-0 bottom-0 w-full flex items-start gap-3 opacity-0 invisible transition-all duration-300">

                <!-- Email -->
                <div class="flex-1">

                    <input
                        type="email"
                        placeholder="*Your E-mail"
                        class="w-full h-[62px] px-5 bg-white border border-[#D9D9D9] rounded-[4px] outline-none text-[16px]" />

                    <p class="w-full text-black text-[10px] italic font-[250] break-words ml-2 ]">
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
        <div class="hidden lg:flex w-[412px] flex-col items-center text-center mt-0">

            <!-- Paragraph -->
            <p class="hidden lg:block text-black text-[24px] italic font-light leading-[42px]">
                Cotton (from Arabic qutn) is a soft, fluffy
                staple fiber that grows in a boll, or protective
                case, around the seeds of the cotton plants of
                the genus Gossypium in the mallow family
                Malvaceae?
            </p>

            <!-- SAME POSITION SWITCH -->
            <div class="mt-0 lg:mt-[70px] relative h-[80px] flex flex-col items-center justify-start">

                <!-- Default Button -->
                <button
                    id="opinionBtnDesktop"
                    onclick="
                        document.getElementById('opinionWrapperDesktop').classList.remove('opacity-0','invisible');
                        document.getElementById('thoughtTextDesktop').classList.remove('opacity-0','invisible');
                        document.getElementById('bottomFormDesktop').classList.remove('opacity-0','invisible');

                        document.getElementById('opinionBtnDesktop').classList.add('hidden');

                        document.getElementById('wordSectionDesktop').classList.remove('hidden');

                        document.getElementById('closeBtnDesktop').classList.remove('hidden');

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
                    id="wordSectionDesktop"
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
