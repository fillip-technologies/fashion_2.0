@props([
    'image',
    'hoverImage',
    'title',
    'url' => '/productdetails',
    'subtitle' => '',
    'price' => null,
    'colors' => [],
    'wishlistIcon' => false,
    'soldOut' => false,
    'neverReturned' => false,
])

<a href="{{ $url }}" {{ $attributes->merge(['class' => 'group block cursor-pointer']) }}>



    <div class="relative aspect-[9/8] overflow-hidden">

        <!-- Images -->
        <img src="{{ $image }}"
            class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0"
            alt="{{ $title }}" />

        @if ($wishlistIcon)
            <img src="{{ $hoverImage }}"
                class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100"
                alt="{{ $title }} hover" />
        @endif

        <!-- GRAY OVERLAY -->
        @if ($soldOut)
            <div class="absolute inset-0 bg-gray-300/40 z-[5]"></div>
        @endif

        <!-- Labels -->
        @if ($soldOut)
            <div class="absolute top-5 left-5 z-10">
                <p style="font-weight: 200">
                    <span class="text-[#B13A3C] text-[16px]">SOLD OUT</span>
                    <span class="italic text-[12px]">, will return</span>
                </p>
            </div>
        @endif

        @if ($neverReturned)
            <div class="absolute top-5 left-5 z-10">
                <p class="italic font-light line-through">OOO</p>
            </div>
        @endif

        @if ($wishlistIcon)
            <div class="absolute top-5 right-5 z-10">
                <img src="{{ asset('assets/images/wishlist/dark-minus.png') }}" class="w-5 h-0.5" />
            </div>
        @endif

    </div>
    <div class="flex flex-col items-center justify-center py-3 space-y-2">
        <p class="text-[0.875rem] text-black">{{ $title }}</p>

        @if ($subtitle)
            <p class="text-[0.625rem] text-secondary">{{ $subtitle }}</p>
        @endif

        @if ($soldOut || $neverReturned)
            <p class="text-[14px] text-black/80 opacity-0 translate-y-2 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0"
                style="font-weight: 200">
                STOPPED PRODUCTION
            </p>
        @elseif ($price || count($colors))
            <div
                class="flex flex-col items-center space-y-2 opacity-0 translate-y-2
        transition-all duration-300
        group-hover:opacity-100 group-hover:translate-y-0">

                @if ($price)
                    <p class="text-[0.75rem] text-black">₹{{ number_format($price) }}</p>
                @endif

                @if (count($colors))
                    <div class="flex items-center gap-2 pt-1">
                        @foreach ($colors as $color)
                            <span class="w-3 h-3" style="background-color: {{ $color }}"></span>
                        @endforeach
                    </div>
                @endif
            </div>
        @endif
    </div>

</a>
