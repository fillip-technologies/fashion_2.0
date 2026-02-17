{{-- <div class="w-full">
    <img src="{{ asset('assets/images/Rectangle325.png') }}" alt="Search" class="object-cover w-full" />
</div> --}}

{{-- <div class="w-full">
    <video class="w-full object-contain" autoplay muted loop playsinline>
        <source src="{{ asset('assets/videos/hero.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div> --}}


<div class="relative w-full md:h-screen overflow-hidden">

    <!-- VIDEO -->
    <video id="heroVideo" class="w-full h-full object-contain md:object-cover" autoplay muted loop playsinline>
        <source src="{{ asset('assets/videos/hero.mp4') }}" type="video/mp4">
    </video>

    <!-- OVERLAY DIV -->
    <div class="absolute w-full bg-black/30 bottom-0 py-3">
        <div class="text-white flex items-center justify-start pl-5 md:pl-10 space-x-5">

            <!-- PLAY / PAUSE BUTTON -->
            <img id="playPauseBtn" src="{{ asset('assets/SVG/Video pause.svg') }}" class="cursor-pointer w-[28px] h-[28px]"
                alt="Pause" />

            <!-- MUTE / UNMUTE BUTTON -->
            <img id="muteBtn" src="{{ asset('assets/SVG/sound mute.svg') }}" class="cursor-pointer w-[28px] h-[28px]"
                alt="Mute" />

        </div>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const video = document.getElementById("heroVideo");
        const playPauseBtn = document.getElementById("playPauseBtn");
        const muteBtn = document.getElementById("muteBtn");

        function updatePlayIcon() {
            if (video.paused) {
                playPauseBtn.src = "{{ asset('assets/SVG/Video play.svg') }}";
                playPauseBtn.alt = "Play";
            } else {
                playPauseBtn.src = "{{ asset('assets/SVG/Video pause.svg') }}";
                playPauseBtn.alt = "Pause";
            }
        }

        playPauseBtn.addEventListener("click", function() {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
            updatePlayIcon();
        });

        function updateMuteIcon() {
            if (video.muted) {
                muteBtn.src = "{{ asset('assets/SVG/sound mute.svg') }}";
                muteBtn.alt = "Muted";
            } else {
                muteBtn.src = "{{ asset('assets/SVG/sound on.svg') }}";
                muteBtn.alt = "Unmuted";
            }
        }

        muteBtn.addEventListener("click", function() {
            video.muted = !video.muted;
            updateMuteIcon();
        });

        updatePlayIcon();
        updateMuteIcon();

    });
</script>
