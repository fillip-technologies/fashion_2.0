<section class="relative mx-auto w-[calc(100%_-_28px)] max-w-[430px] overflow-hidden md:w-full md:max-w-none">

    <!-- GIF Fallback -->
    <img
        src="{{ asset('assets/images/landingpage/fallback.gif') }}"
        alt="Loading Animation"
        class="block h-[225px] w-full object-cover md:h-auto"
        id="fallbackGif" />

    <!-- MP4 Video -->
    <video
        autoplay
        muted
        loop
        playsinline
        preload="auto"
        class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-500"
        id="heroVideo">
        <source src="{{ asset('videos/scene.mp4') }}" type="video/mp4">
    </video>

</section>

<script>
    const video = document.getElementById("heroVideo");
    const gif = document.getElementById("fallbackGif");

    video.addEventListener("canplaythrough", () => {
        video.style.opacity = "1";
        gif.style.display = "none";
    });
</script>
