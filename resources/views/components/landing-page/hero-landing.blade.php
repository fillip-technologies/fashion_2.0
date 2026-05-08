<section class="relative w-full overflow-hidden">

    <!-- GIF Fallback -->
    <img
        src="assets\images\landingpage\fallback.gif"
        alt="Loading Animation"
        class="w-full h-auto block"
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
        <source src="videos\scene.mp4" type="video/mp4">
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