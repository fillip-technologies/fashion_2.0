<div class="w-full bg-[#f2f2f2] flex justify-center py-[80px]">

    <div class="w-[633px]">

        <!-- Heading -->
        <div class="text-center text-black text-[20px] italic font-normal break-words">
            Join our newsletter
        </div>

        <!-- Input Box -->
        <div class="w-full flex flex-col items-center mt-20">

            <!-- Success Message -->
            <div
                id="successMessage"
                class="hidden text-center italic text-black text-[20px] mb-20">
                Welcome to Brand name
            </div>

            <!-- Top Label -->
            <div
                id="topLabel"
                class="hidden w-[790px] mb-3 text-left text-black text-[16px]">
                *Your E-mail
            </div>

            <!-- Input Box -->
            <div
                id="inputWrapper"
                class="w-[790px] h-[84px] border border-black rounded-[4px] px-8 flex items-center bg-transparent">

                <input
                    type="email"
                    id="emailInput"
                    placeholder="*Please enter your email"
                    class="w-full bg-transparent outline-none text-black text-[16px] placeholder:text-black"
                    onfocus="openEmailState()" />

            </div>

            <!-- Verify Button -->
            <button
                id="verifyBox"
                onclick="showSuccessMessage()"
                class="hidden mt-5 w-[260px] h-[56px] border border-black rounded-[4px] text-[16px] text-black">
                Verify your e-mail
            </button>

        </div>

        <script>
            function openEmailState() {

                document.getElementById('topLabel').classList.remove('hidden');
                document.getElementById('verifyBox').classList.remove('hidden');

                // remove placeholder
                document.getElementById('emailInput').placeholder = '';
            }

            function showSuccessMessage() {

                document.getElementById('successMessage').classList.remove('hidden');

                // hide all email elements
                document.getElementById('topLabel').classList.add('hidden');
                document.getElementById('inputWrapper').classList.add('hidden');
                document.getElementById('verifyBox').classList.add('hidden');
            }
        </script>

    </div>

</div>