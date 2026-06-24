<header class="bg-background py-5">
    <div class="grid grid-cols-3 px-4 sm:px-14 h-24  items-center text-black">

        <div class="flex items-center space-x-2 text-[1.25rem] cursor-pointer" onclick="window.history.back()">
            {{-- <i class="fa-solid fa-chevron-left fa-sm text-[0.625rem]"></i> --}}
            <img src="{{ asset('assets/SVG/Back black icon.svg') }}" alt="Back" class="w-[6px] h-[10px]" />
            <span style="font-weight: 400">My Cart</span>
        </div>

        <div class="mx-auto">
            <div class="w-16 h-16 sm:w-24 sm:h-24 bg-purple-600 flex items-center justify-center">
                <span class="text-white text-xs sm:text-sm font-semibold">LOGO 1</span>
            </div>
        </div>

        <a href="/"
            class="flex justify-end items-center space-x-1 sm:space-x-2 text-[0.8125rem] sm:text-[0.8125rem] cursor-pointer">
            {{-- <i class="fa-solid fa-arrow-left fa-sm mr-1"></i> --}}
            <img src="{{ asset('assets/SVG/Return black icon.svg') }}" alt="Arrow Left" class="w-[7px] h-[6px]" />
            <span style="font-weight: 300">Back to browsing!</span>
        </a>

    </div>
</header>
<div class="border-[1.4rem] border-secondary bg-background pb-8">
    <div class="px-4 md:px-14 pt-6 md:pt-20 grid grid-cols-1 md:grid-cols-12 gap-6 bg-background">

        <div class="md:col-span-8 pt-6 bg-white">

            <p class=" px-6 pb-4 text-[1rem] tracking-wide mb-4">Number of items in your cart - <span
                    class="cart-count">{{ $bagDatas->count() }}</span></p>

            <div class="relative">
                <div class="w-full h-px bg-dash-dot"></div>
            </div>

            <div class="border-b border-black/10 py-8 px-10 cart-item" data-price="10000">
                @forelse ($bagDatas as $items)
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-6 items-start md:items-center">

                        <div class="md:col-span-2">

                            <img src="{{ asset($items->product->thumbnail) }}" alt="Product"
                                class="w-24 h-32 object-cover" />
                        </div>
                        <div class="md:col-span-10 text-[0.75rem] space-y-7">
                            <div class="flex items-center justify-between">
                                <div></div>
                                <div class="text-[1rem]" style="font-weight: 500">{{ $items->product->name ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="flex items-center justify-between">
                                    <p class="mb-2">Ref no. - HU879195GBJ</p>
                                    <div></div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="mb-2">Colour : [{{ $items->product->color }};
                                        {{ $items->product->material_breakdown }}]</p>
                                    <div></div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p>Size : {{ $items->product->size }}</p>
                                    <p class="mb-2">₹{{ $items->price ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-6 mt-5">

                        <div class="col-span-2">
                            <div class="flex gap-6 mt-6 text-[0.75rem]">
                                <button class="underline">Add to wishlist</button>
                            </div>
                        </div>
                        <div class="col-span-8">
                            <div class="flex gap-6 mt-0 md:mt-6 text-[0.75rem]">
                                <button class="underline remove-item">Remove</button>

                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex items-center justify-start md:justify-center gap-4 mt-6 text-[0.75rem]">

                                <span class="underline underline-offset-2">Qty :</span>

                                <div class="flex items-center gap-3 quantity-wrapper"
                                    data-product-id="{{ $items->product_id }}">

                                    <button type="button" class="px-1 quenty-minus">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>

                                    <span class="qty">{{ $items->quantity }}</span>

                                    <button type="button" class="px-1 quenty-plus">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>

                                </div>

                            </div>
                        </div>
                    </div>

                @empty
                @endforelse




                <div class="flex items-center justify-center gap-2 mt-12 text-[0.625rem] text-secondary">
                    <span
                        class="w-4 h-4 flex items-center justify-center
                        border border-secondary rounded-full text-[0.5rem]">
                        i
                    </span>
                    <p>
                        This item will leave our warehouse in the next 24hrs after your order is confirmed.
                    </p>
                </div>

                <div class="undo-box hidden flex flex-col items-center justify-center text-[0.875rem] py-28"
                    style="font-weight: 300">
                    <p>
                        You have removed an item from your cart.
                        <span class="underline underline-offset-1 cursor-pointer undo-action">
                            Undo action?
                        </span>
                    </p>
                </div>

            </div>



            <div class=" py-8 px-10 bag-total-box">

                <div class="flex items-center justify-between text-[0.875rem]" style="font-weight: 500">
                    <div class="uppercase">Bag Total</div>
                    <span class="item-count hidden">(2)</span>
                    <div>₹ {{ $totalprice }}</div>

                </div>
                <div class="text-[0.625rem] mt-2" style="font-weight: 200">
                    <div>*(Iclusive of all taxes)</div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center text-[0.875rem] py-28 empty-cart hidden"
                style="font-weight: 300">
                <p>Your cart is empty</p>
                <p class="text-center">Browse around the website to find something for yourself or add </br> items
                    from
                    your wishlist.</p>
            </div>

            <div class="relative">
                <div class="w-full h-px bg-dash-dot"></div>
            </div>

            <div class=" py-14 px-10 space-y-1">
                <div class="text-[0.875rem] mb-4" style="font-weight: 400">Customer Care :</div>
                <div class="underline underline-offset-1 decoration-secondary text-[0.625rem]">
                    <span class="text-secondary">Email Us :</span>
                    <span> adc@domain.com</span>
                </div>

                <div class="text-[0.625rem]">
                    <span class="text-secondary">Monday to Saturday 9am to 10pm [IST]</span>

                </div>


            </div>

            {{-- This should only shown when the cart is empty  --}}
            <div class="md:col-span-8 bg-black text-white hidden empty-cart-showcase">

                <div class="grid grid-cols-1 md:grid-cols-3 relative">
                    <div class="hidden md:block absolute inset-y-0 left-1/3 w-px h-full bg-dash-dot-v-white"></div>
                    <div class="hidden md:block absolute inset-y-0 left-2/3 w-px h-full bg-dash-dot-v-white"></div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <img src="/assets/images/bag/bag-one.png" />
                    </div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <img src="/assets/images/bag/bag-two.png" />
                    </div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <img src="/assets/images/bag/bag-three.png" />
                    </div>

                </div>


                <div class="relative">
                    <div class="w-full h-px bg-dash-dot-white"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 relative">
                    <div class="hidden md:block absolute inset-y-0 left-1/3 w-px h-full bg-dash-dot-v-white"></div>
                    <div class="hidden md:block absolute inset-y-0 left-2/3 w-px h-full bg-dash-dot-v-white"></div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <p class="text-[0.875rem] tracking-wide text-secondary" style="font-weight: 400">
                            Free standard shipping
                        </p>
                    </div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <p class="text-[0.875rem] tracking-wide text-secondary" style="font-weight: 400">
                            Return and exchange
                        </p>
                    </div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <p class="text-[0.875rem] tracking-wide text-secondary" style="font-weight: 400">
                            Shop securely
                        </p>
                    </div>
                </div>
            </div>

        </div>


        <div class="md:col-span-4 py-6 text-[0.75rem] self-start bg-white">

            <p class=" px-6 pb-4 text-[1rem] tracking-wide mb-4">Packaging</p>
            <div class="relative">
                <div class="w-full h-px bg-dash-dot"></div>
            </div>

            <div class="flex items-center justify-between px-6 py-12">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 flex items-center justify-center text-[0.875rem]" style="font-weight: 400">
                        <img src="assets/images/category/first-photo.png" alt="Bag" class="w-full h-full" />
                    </div>
                    <p class="text-[0.875rem]" style="font-weight: 400">
                        Should we send you a shopping bag?
                    </p>
                </div>
                <input type="checkbox" class="w-4 h-4 accent-secondary" />
            </div>

            <div class="border-t border-black/10"></div>

            <div class="flex flex-col justify-center py-8">

                <div class="flex items-center justify-between px-6 text-[0.875rem]">
                    <p id="giftLabel" class="font-normal underline-offset-2">
                        Is this order a gift?
                    </p>
                    <input id="giftCheckbox" type="checkbox" class="w-4 h-4 accent-secondary" />
                </div>

                <div id="giftOptions" class="flex flex-col pt-10 justify-center gap-3.5 hidden">

                    <div class="flex items-center justify-between px-6 text-[0.875rem]">
                        <p class="font-normal">Add an empty envelop.</p>
                        <input type="checkbox" class="w-4 h-4 accent-secondary" />
                    </div>

                    <div class="flex items-center justify-between px-6 text-[0.875rem]">
                        <p class="font-normal">Hide the price on the bill.</p>
                        <input type="checkbox" class="w-4 h-4 accent-secondary" />
                    </div>

                </div>

            </div>

            <div class="border-t border-black/10"></div>

            <div class="grid grid-cols-12 mb-6 px-6 pt-12 pb-8 items-start gap-4">
                <div class="col-span-3">
                    <img src="assets/images/category/first-photo.png" alt="Bag"
                        class="w-full h-full object-contain " />
                </div>
                <div class="col-span-9">
                    <p class="uppercase text-[0.75rem] mb-1" style="font-weight: 500">The Box</p>
                    <p class="text-black leading-relaxed text-[0.75rem]" style="font-weight: 300">
                        A square or rectangular area, such as a check-box on a form.
                        An informal term for a television set (e.g. “what’s on the box tonight?”).
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-12 px-6 pb-12 items-start gap-4">
                <div class="col-span-3">
                    <img src="assets/images/category/first-photo.png" alt="Bag"
                        class="w-full h-full object-contain " />
                </div>
                <div class="col-span-9">
                    <p class="uppercase text-[0.75rem] mb-1" style="font-weight: 500">The Dust Bag</p>
                    <p class=" text-black leading-relaxed text-[0.75rem]" style="font-weight: 300">
                        Dust bags are designed to protect clothing, shoes,
                        and accessories from dust and damage when stored.
                    </p>
                </div>
            </div>

            <div class="relative">
                <div class="w-full h-px bg-dash-dot"></div>
            </div>


            <div class="flex justify-center pt-20 pb-16">
                <a href="{{ route('checkout') }}">
                    <button
                        class="bg-secondary text-white text-[0.875rem]
               px-8 py-3 tracking-wide
               hover:bg-primary rounded transition">
                        Proceed to payment
                    </button>
                </a>

            </div>

        </div>


    </div>


    {{-- this should get hide when the empty-cart-showcase is shown --}}
    <div class="hidden md:block cart-showcase-info pb-20">
        <div class="px-4 md:px-14 grid grid-cols-1 md:grid-cols-12 gap-2">

            <div class="md:col-span-8 bg-black text-white mr-1">

                <div class="grid grid-cols-1 md:grid-cols-3 relative">
                    <div class="hidden md:block absolute inset-y-0 left-1/3 w-px h-full bg-dash-dot-v-white"></div>
                    <div class="hidden md:block absolute inset-y-0 left-2/3 w-px h-full bg-dash-dot-v-white"></div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <img src="/assets/images/bag/bag-one.png" class="cursor-pointer info-trigger"
                            data-target="shipping" />
                    </div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <img src="/assets/images/bag/bag-two.png" class="cursor-pointer info-trigger"
                            data-target="return" />
                    </div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <img src="/assets/images/bag/bag-three.png" class="cursor-pointer info-trigger"
                            data-target="secure" />
                    </div>

                </div>


                <div class="relative">
                    <div class="w-full h-px bg-dash-dot-white"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 relative">
                    <div class="hidden md:block absolute inset-y-0 left-1/3 w-px h-full bg-dash-dot-v-white"></div>
                    <div class="hidden md:block absolute inset-y-0 left-2/3 w-px h-full bg-dash-dot-v-white"></div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <p class="text-[0.875rem] tracking-wide text-secondary cursor-pointer info-trigger"
                            data-target="shipping" style="font-weight: 400">
                            Free standard shipping
                        </p>
                    </div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <p class="text-[0.875rem] tracking-wide text-secondary cursor-pointer info-trigger"
                            data-target="return" style="font-weight: 400">
                            Return and exchange
                        </p>
                    </div>

                    <div class="flex flex-col items-center justify-center py-10 gap-8">
                        <p class="text-[0.875rem] tracking-wide text-secondary cursor-pointer info-trigger"
                            data-target="secure" style="font-weight: 400">
                            Shop securely
                        </p>
                    </div>
                </div>
            </div>

            <div class="hidden md:block md:col-span-4 py-6 px-10">


                {{-- Shipping --}}
                <div class="info-content hidden" id="shipping">
                    <div class="flex items-center justify-between text-[0.875rem] info-close cursor-pointer">
                        <div>Shipping</div>
                        <i class="fa-solid fa-minus"></i>
                    </div>

                    <div class="text-[0.625rem] text-secondary space-y-3 text-left mt-5">
                        <p>
                            Shipping refers to the process of transporting goods from one location to another using
                            different
                            modes
                            of transportation, such as ships, flights, trucks, trains, or pipelines. It is a key step
                            in
                            the
                            process
                            of trade.

                        </p>
                        <p>
                            Shipping refers to the process of transporting goods from one location to another using
                            different
                            modes
                            of transportation, such as ships, flights, trucks, trains, or pipelines. It is a key step
                            in
                            the
                            process
                            of trade.
                        </p>
                    </div>
                </div>

                {{-- Return and exchange --}}
                <div class="info-content hidden" id="return">

                    <div class="flex items-center justify-between text-[0.875rem] info-close cursor-pointer">
                        <div>Return and exchange</div>
                        <i class="fa-solid fa-minus"></i>
                    </div>

                    <div class="text-[0.625rem] text-secondary space-y-3 text-left mt-5">
                        <p>
                            A return is when a customer sends back a purchased item, often for a refund, while an
                            exchange
                            is when a customer trades an item for a different one, such as a new size or colour.
                        </p>
                        <p>
                            These processes are common in retail and e-commerce, and while a return can be for a
                            refund,
                            an
                            exchange specifically involves receiving a different product instead of money back. For
                            example,
                            a customer may return shoes that are too small and exchange them for the same style in a
                            larger
                            size.
                        </p>
                    </div>
                </div>

                {{-- Secure payment --}}
                <div class="info-content hidden" id="secure">
                    <div class="flex items-center justify-between text-[0.875rem] info-close cursor-pointer">
                        <div>Secure payment</div>
                        <i class="fa-solid fa-minus"></i>
                    </div>

                    <div class="text-[0.625rem] text-secondary space-y-3 text-left mt-5">
                        <p>A secure payment is a transaction that uses multiple layers of protection to safeguard
                            financial
                            data from fraud and unauthorized access. These systems use technologies like encryption,
                            tokenization, and multi-factor authentication to protect sensitive information during
                            online
                            and
                            in-person transactions.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="bg-black text-white px-4 py-6 md:hidden">


        <div class="grid grid-cols-3 gap-4 text-center">
            <div class="info-trigger cursor-pointer flex items-center justify-center" data-target="shipping">
                <img src="/assets/images/bag/bag-one.png" class="mx-auto mb-3" />
            </div>
            <div class="info-trigger cursor-pointer flex items-center justify-center" data-target="return">
                <img src="/assets/images/bag/bag-two.png" class="mx-auto mb-3" />
            </div>
            <div class="info-trigger cursor-pointer flex items-center justify-center" data-target="secure">
                <img src="/assets/images/bag/bag-three.png" class="mx-auto mb-3" />
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4 text-center mt-3">
            <div class="info-trigger cursor-pointer" data-target="shipping">
                <p class="text-[0.75rem] text-secondary">Free shipping</p>
            </div>
            <div class="info-trigger cursor-pointer" data-target="return">
                <p class="text-[0.75rem] text-secondary">Return & exchange</p>
            </div>
            <div class="info-trigger cursor-pointer" data-target="secure">
                <p class="text-[0.75rem] text-secondary">Secure payment</p>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="mt-8 space-y-6">

            <div class="info-content hidden" id="shipping">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-[0.875rem]">Shipping</p>
                    <i class="fa-solid fa-minus info-close cursor-pointer"></i>
                </div>
                <p class="text-[0.625rem] text-secondary">
                    Shipping refers to the transportation of goods from one place to another using ships,
                    trucks, or flights.
                </p>
            </div>

            <div class="info-content hidden" id="return">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-[0.875rem]">Return & Exchange</p>
                    <i class="fa-solid fa-minus info-close cursor-pointer"></i>
                </div>
                <p class="text-[0.625rem] text-secondary">
                    Return is when a product is sent back, exchange is when it is replaced with another item.
                </p>
            </div>

            <div class="info-content hidden" id="secure">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-[0.875rem]">Secure Payment</p>
                    <i class="fa-solid fa-minus info-close cursor-pointer"></i>
                </div>
                <p class="text-[0.625rem] text-secondary">
                    Secure payments use encryption and authentication to protect your financial data.
                </p>
            </div>

        </div>
    </div>

</div>


<script>
  $(document).ready(function() {

    $('.quenty-plus, .quenty-minus').click(function() {

        let wrapper = $(this).closest('.quantity-wrapper');
        let productId = wrapper.data('product-id');
        let qtyElement = wrapper.find('.qty');
        let qty = parseInt(qtyElement.text());

        let action = '';

        if ($(this).hasClass('quenty-plus')) {
            qty++;
            action = 'plus';
        } else if (qty > 1) {
            qty--;
            action = 'minus';
        }

        qtyElement.text(qty);

        updateQuantity(qty, productId, action);
    });

    function updateQuantity(qty, productId, action) {

        $.ajax({
            url: "{{ route('cart.update.quantity') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                quantity: qty,
                product_id: productId,
                action: action
            },
            success: function(response) {
                window.location.reload();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });

    }

});
</script>








<script>
    const triggers = document.querySelectorAll('.info-trigger');
    const contents = document.querySelectorAll('.info-content');

    triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const target = trigger.dataset.target;

            contents.forEach(content => {
                if (content.id === target) {
                    content.classList.toggle('hidden');
                } else {
                    content.classList.add('hidden');
                }
            });
        });
    });

    document.addEventListener('click', e => {
        if (e.target.classList.contains('info-close')) {
            e.target.closest('.info-content').classList.add('hidden');
        }
    });
</script>

<script>
    const triggers = document.querySelectorAll('.info-trigger');
    const contents = document.querySelectorAll('.info-content');


    triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const targetId = trigger.dataset.target;

            contents.forEach(content => {
                content.classList.toggle(
                    'hidden',
                    content.id !== targetId
                );
            });
        });
    });

    contents.forEach(content => {
        const closeBtn = content.querySelector('.info-close');

        closeBtn.addEventListener('click', () => {
            content.classList.add('hidden');
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const undoVisibilityDuration = 3000;
        const cartItems = Array.from(document.querySelectorAll(".cart-item"));
        const cartCount = document.querySelector(".cart-count");
        const bagTotalBox = document.querySelector(".bag-total-box");
        const bagTotal = document.querySelector(".bag-total");
        const itemCount = document.querySelector(".item-count");
        const emptyCart = document.querySelector(".empty-cart");
        const emptyCartShowcase = document.querySelector(".empty-cart-showcase");
        const cartShowcaseInfo = document.querySelector(".cart-showcase-info");
        const undoTimers = new WeakMap();

        const clearUndoTimer = (item) => {
            const timerId = undoTimers.get(item);

            if (!timerId) {
                return;
            }

            window.clearTimeout(timerId);
            undoTimers.delete(item);
        };

        const hideItemContent = (item) => {
            [...item.children].forEach(child => {
                if (!child.classList.contains("undo-box")) {
                    child.classList.add("hidden");
                }
            });
        };

        const showItemContent = (item) => {
            [...item.children].forEach(child => {
                if (!child.classList.contains("undo-box")) {
                    child.classList.remove("hidden");
                }
            });
        };

        const finalizeRemoval = (item) => {
            const undoBox = item.querySelector(".undo-box");

            clearUndoTimer(item);
            item.classList.remove("pending-removal");
            item.classList.add("removed", "hidden");
            undoBox.classList.add("hidden");

            updateCart();
        };

        function updateCart() {
            const activeItems = cartItems.filter(item => !item.classList.contains("removed") && !item
                .classList.contains("pending-removal"));
            const hasPendingRemovals = cartItems.some(item => item.classList.contains("pending-removal"));
            const isCartEmpty = activeItems.length === 0 && !hasPendingRemovals;
            const shouldShowCartSections = activeItems.length > 0 || hasPendingRemovals;

            itemCount.textContent = `(${activeItems.length})`;

            if (cartCount) {
                cartCount.textContent = `(${activeItems.length})`;
            }

            let total = 0;
            activeItems.forEach(item => {
                const price = Number(item.dataset.price);
                const qty = Number(item.querySelector(".qty").textContent);
                total += price * qty;
            });

            bagTotal.textContent = `₹ ${total.toLocaleString()}`;

            const isDesktop = window.matchMedia("(min-width: 768px)").matches;

            if (shouldShowCartSections) {
                bagTotalBox.classList.remove("hidden");
                emptyCart.classList.add("hidden");
                emptyCartShowcase.classList.add("hidden");
                emptyCartShowcase.style.display = "none";
                cartShowcaseInfo.style.display = "";
            } else {
                bagTotalBox.classList.add("hidden");
                emptyCart.classList.remove("hidden");
                cartShowcaseInfo.style.display = "none";

                if (isDesktop && isCartEmpty) {
                    emptyCartShowcase.classList.remove("hidden");
                    emptyCartShowcase.style.display = "block";
                } else {
                    emptyCartShowcase.classList.add("hidden");
                    emptyCartShowcase.style.display = "none";
                }
            }
        }

        cartItems.forEach(item => {
            const minus = item.querySelector(".qty-minus");
            const plus = item.querySelector(".qty-plus");
            const qty = item.querySelector(".qty");
            const removeBtn = item.querySelector(".remove-item");
            const undoBox = item.querySelector(".undo-box");
            const undoAction = item.querySelector(".undo-action");

            plus.onclick = () => {
                qty.textContent = +qty.textContent + 1;
                updateCart();
            };

            minus.onclick = () => {
                if (+qty.textContent > 1) {
                    qty.textContent = +qty.textContent - 1;
                    updateCart();
                }
            };

            removeBtn.onclick = () => {
                clearUndoTimer(item);
                item.classList.remove("hidden", "removed");
                item.classList.add("pending-removal", "border-none");
                hideItemContent(item);

                undoBox.classList.remove("hidden");
                undoTimers.set(item, window.setTimeout(() => finalizeRemoval(item),
                    undoVisibilityDuration));
                updateCart();
            };


            undoAction.onclick = () => {
                clearUndoTimer(item);
                item.classList.remove("pending-removal", "removed", "hidden", "border-none");
                showItemContent(item);

                undoBox.classList.add("hidden");
                updateCart();
            };

        });

        updateCart();
    });
</script>

<script>
    const giftCheckbox = document.getElementById('giftCheckbox');
    const giftOptions = document.getElementById('giftOptions');
    const giftLabel = document.getElementById('giftLabel');

    giftCheckbox.addEventListener('change', () => {
        if (giftCheckbox.checked) {
            giftOptions.classList.remove('hidden');
            giftLabel.classList.add('underline');
        } else {
            giftOptions.classList.add('hidden');
            giftLabel.classList.remove('underline');
        }
    });
</script>
