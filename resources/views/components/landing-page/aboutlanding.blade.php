<section id="aboutLandingSection" class="w-full bg-[#f2f2f2] py-[80px] md:py-[120px]">

    <!-- Title -->
    <div class="flex justify-center">
        <div class="text-black text-[20px] font-normal">
            About us
        </div>
    </div>

    <!-- Mobile Sticky Logo -->
    <div
        id="aboutMobileStickyLogo"
        class="fixed left-0 top-0 z-[70] flex h-[143px] w-full items-start justify-center bg-[#f2f2f2] pt-[38px] opacity-0 invisible transition-all duration-200 md:hidden">
        <div class="w-[132px] h-[86px] bg-[#4B69C3]"></div>
    </div>

    <!-- Logo -->
    <div id="aboutDesktopLogoSlot" class="mt-[45px] hidden h-[190px] justify-center md:flex">
        <div
            id="aboutDesktopStickyLogo"
            class="flex h-[190px] w-full justify-center bg-[#f2f2f2] pt-[27px]">
            <div class="w-[188px] h-[115px] bg-[#4B69C3]"></div>
        </div>
    </div>

    <!-- Desktop View -->
    <div class="hidden md:block max-w-[926px] mx-auto mt-[90px] text-center text-black text-[14px] leading-[24px] font-light">

        Silk is a natural protein fiber, some forms of which can be woven or knitted into textiles.
        The protein fiber of silk is composed mainly of fibroin (75-80%) and a smaller coating of
        sericin (20-25%). It is most commonly produced by certain insect larvae to form cocoons.[1]

        <br><br>

        The best-known silk is obtained from the cocoons of the larvae of the mulberry silkworm
        Bombyx mori, which are reared in captivity (sericulture). The shimmery appearance of silk
        is due to the triangular prism-like structure of the silk fiber, which causes silk cloth
        to refract incoming light at different angles, thus producing different colors.

        <br><br>

        Harvested silk is produced by numerous insects; generally, only the silk of various moth
        caterpillars has been used for textile manufacturing. Research into other types of silk,
        which differ at the molecular level, has been conducted.[2]

        <br><br>

        Silk is produced primarily by the larvae of insects undergoing complete metamorphosis,
        but some insects, such as webspinners and raspy crickets, produce silk throughout their lives.[3]
        Silk production also occurs in hymenoptera (bees, wasps, and ants), silverfish, caddisflies,
        mayflies, thrips, leafhoppers, beetles, lacewings, fleas, flies, and midges.[2] Other types
        of arthropods also produce silk, most notably various arachnids, such as spiders

    </div>

    <!-- Mobile View -->
    <!-- Mobile View -->
    <div class="block md:hidden mt-[70px] w-full px-[clamp(24px,8vw,34px)]">

        <div class="mx-auto grid w-full max-w-[390px] grid-cols-2 gap-x-[clamp(18px,7vw,28px)] items-start">

            <!-- Left Text -->
            <div class="text-black text-[12px] leading-[20px] font-light text-left">

                Silk is a natural protein fiber, some forms of which can be woven or knitted into textiles.
                The protein fiber of silk is composed mainly of fibroin (75-80%) and a smaller coating
                of sericin (20-25%). It is most commonly produced by certain insect larvae to form cocoons.[1]

                <br><br>

                The best-known silk is obtained from the cocoons of the larvae of the mulberry silkworm
                Bombyx mori, which are reared in captivity (sericulture). The shimmery appearance of silk
                is due to the triangular prism-like structure of the silk fiber, which causes silk cloth
                to refract incoming light at different angles, thus producing different colors.

            </div>

            <!-- Right Text -->
            <div class="mt-[180px] min-[430px]:mt-[240px] text-black text-[12px] leading-[20px] font-light text-right">

                Harvested silk is produced by numerous insects; generally, only the silk of various moth
                caterpillars has been used for textile manufacturing. Research into other types of silk,
                which differ at the molecular level, has been conducted.[2]

                <br><br>

                Silk is produced primarily by the larvae of insects undergoing complete metamorphosis,
                but some insects, such as webspinners and raspy crickets, produce silk throughout their lives.[3]
                Silk production also occurs in hymenoptera (bees, wasps, and ants), silverfish,
                caddisflies, mayflies, thrips, leafhoppers, beetles, lacewings, fleas, flies,
                and midges.[2] Other types of arthropods also produce silk, most notably various arachnids,
                such as spiders

            </div>

        </div>

    </div>

</section>

<div class="mt-10 mb-20 w-full outline outline-1 outline-[#97A0A1] bg-[#f2f2f2] block md:hidden"></div>

<script>
    (() => {
        const aboutSection = document.getElementById('aboutLandingSection');
        const mobileStickyLogo = document.getElementById('aboutMobileStickyLogo');
        const desktopStickyLogo = document.getElementById('aboutDesktopStickyLogo');

        if (!aboutSection || !mobileStickyLogo || !desktopStickyLogo) return;

        const toggleAboutLogo = () => {
            const isMobile = window.innerWidth < 768;
            const aboutStart = aboutSection.offsetTop;
            const showMobileLogo = isMobile && window.scrollY >= aboutStart;
            const stickDesktopLogo = !isMobile && window.scrollY >= aboutStart;

            mobileStickyLogo.classList.toggle('opacity-0', !showMobileLogo);
            mobileStickyLogo.classList.toggle('invisible', !showMobileLogo);

            desktopStickyLogo.classList.toggle('fixed', stickDesktopLogo);
            desktopStickyLogo.classList.toggle('left-0', stickDesktopLogo);
            desktopStickyLogo.classList.toggle('top-0', stickDesktopLogo);
            desktopStickyLogo.classList.toggle('z-[60]', stickDesktopLogo);
        };

        window.addEventListener('scroll', toggleAboutLogo, { passive: true });
        window.addEventListener('resize', toggleAboutLogo);
        toggleAboutLogo();
    })();
</script>
