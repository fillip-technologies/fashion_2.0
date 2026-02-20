@props([
    'image',
    'hoverImage',
    'title',
    'url' => '/productdetails',
    'subtitle' => '',
    'price' => null,
    'colors' => [],
])

<a href="{{ $url }}" {{ $attributes->merge(['class' => 'group block cursor-pointer']) }}>

    <div class="relative aspect-[9/8] overflow-hidden">
        <img src="{{ $image }}"
            class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0"
            alt="{{ $title }}" />

        <img src="{{ $hoverImage }}"
            class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100"
            alt="{{ $title }} hover" />
    </div>

    <div class="flex flex-col items-center justify-center py-3 space-y-2">
        <p class="text-[0.875rem] text-black">{{ $title }}</p>

        @if ($subtitle)
            <p class="text-[0.625rem] text-secondary">{{ $subtitle }}</p>
        @endif

        @if ($price || count($colors))
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
