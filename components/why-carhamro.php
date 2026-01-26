<?php
// components/why-carhamro.php
// Static listing (no click required) + one left image + micro animations (scroll reveal + hover only)

$sectionId = "whyCarHamro";

$items = [
    [
        "title" => "Buy A New Car",
        "desc"  => "Easily find your perfect new car that fits your budget. Filter by model, brand, and size for a seamless selection process, making CarHamro the easiest way to buy new cars in Nepal.",
    ],
    [
        "title" => "Buy A Used Car | Find Second Hand car",
        "desc"  => "CarHamro helps you quickly find a budget-friendly, thoroughly checked vehicle — the best place to buy second cars for sale online.",
    ],
    [
        "title" => "Sell Your Car | Best Place To Sell Your Car",
        "desc"  => "Sell your car seamlessly by simply adding the details and get ample buyers at your doorstep, as CarHamro makes selling cars in Nepal quick and hassle-free.",
    ],
    [
        "title" => "Become an Expert Dealer | Buy and Sell Cars",
        "desc"  => "Dealing with more than 2 cars? Become a dealer and get a platform specifically catered towards you, with CarHamro connecting dealers in Nepal to thousands of serious buyers.",
    ],
];

// One image only (left side)
$leftImage = "./assets/images/why-car.png"; // change to your image path
?>

<section id="<?= htmlspecialchars($sectionId) ?>" class="mt-16">
    <div class="max-w-[1304px] mx-auto px-4">
        <div class="rounded-3xl border border-gray-200 bg-white p-6 md:p-10">
            <div class="grid gap-10 md:grid-cols-12 md:items-start">
                <!-- LEFT -->
                <div class="md:col-span-5">
                    <div class="max-w-md">
                        <h2 class="text-[28px] md:text-[34px] font-heading font-bold text-gray-900">
                            Why <span class="text-[#faa61a]">Car Hamro?</span>
                        </h2>
                        <p class="mt-2 text-sm md:text-base text-gray-600">
                            Easy and quick guidelines to get the best out of Car Hamro.
                        </p>
                    </div>

                    <!-- One visual card -->
                    <div class="relative mt-8 overflow-hidden rounded-3xl border border-gray-200 bg-gradient-to-br from-gray-50 to-white">
                        <div class="pointer-events-none absolute -top-16 -left-16 h-56 w-56 rounded-full bg-[#f59e0b]/15 blur-3xl"></div>
                        <div class="pointer-events-none absolute -bottom-20 -right-20 h-64 w-64 rounded-full bg-black/5 blur-3xl"></div>

                        <div class="relative p-6">
                            <div class="flex items-center justify-between">
                                <div class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1 text-xs font-semibold text-gray-700 shadow-sm">
                                    <span class="inline-block h-2 w-2 rounded-full bg-[#f59e0b]"></span>
                                    Quick Benefits
                                </div>
                            </div>

                            <div class="mt-6 grid place-items-center">
                                <img
                                    src="<?= htmlspecialchars($leftImage) ?>"
                                    alt="Why CarHamro"
                                    class="h-[240px] sm:h-[280px] md:h-[300px] w-auto object-contain mix-blend-multiply"
                                    loading="lazy"
                                    draggable="false" />
                            </div>

                            <div class="mt-6 rounded-2xl border border-gray-200 bg-white/90 backdrop-blur px-4 py-3 shadow-sm">
                                <div class="flex items-center justify-between gap-3">
                                    <!-- Left label -->
                                    <div class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-[#f59e0b]"></span>
                                        <span class="text-[11px] font-semibold uppercase tracking-wide text-gray-500">
                                            CarHamro helps you
                                        </span>
                                    </div>

                                    <!-- Right chips -->
                                    <div class="flex flex-wrap items-center justify-end gap-2">
                                        <span class="rounded-full border border-gray-200 bg-white px-3 py-1 text-xs font-semibold text-gray-900">
                                            Buy
                                        </span>
                                        <span class="rounded-full border border-gray-200 bg-white px-3 py-1 text-xs font-semibold text-gray-900">
                                            Sell
                                        </span>
                                        <span class="rounded-full border border-gray-200 bg-white px-3 py-1 text-xs font-semibold text-gray-900">
                                            Discover
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- RIGHT: listing only (no click) -->
                <div class="md:col-span-7">
                    <div class="flex flex-col gap-4">
                        <?php foreach ($items as $i => $it): ?>
                            <div
                                class="why-card  border-b border-gray-200 bg-white px-5 py-5 md:px-6 md:py-6 
                       transition duration-300 hover:-translate-y-[2px]">
                                <div class="flex gap-4">
                                    <!-- number -->
                                    <div class="shrink-0">
                                        <div class="grid h-11 w-11 place-items-center rounded-full bg-gray-100 text-sm font-bold text-gray-900 ring-1 ring-gray-200">
                                            <?= (int)($i + 1) ?>
                                        </div>
                                    </div>

                                    <div class="min-w-0">
                                        <div class="flex items-start justify-between gap-3">
                                            <div class="text-base md:text-[17px] font-bold text-gray-900">
                                                <?= htmlspecialchars($it["title"]) ?>
                                            </div>

                                            <!-- tiny micro icon on hover -->
                                            <div class="shrink-0 opacity-0 translate-x-1 transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">
                                                <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-[#f59e0b]/10 text-[#f59e0b]">
                                                    <i class="fa-solid fa-check"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <p class="mt-2 text-sm md:text-[14px] leading-6 text-gray-600">
                                            <?= htmlspecialchars($it["desc"]) ?>
                                        </p>

                                        <div class="mt-4 h-[3px] w-12 rounded-full bg-[#f59e0b] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        const root = document.getElementById("<?= $sectionId ?>");
        if (!root) return;

        const cards = Array.from(root.querySelectorAll(".why-card"));

        // subtle reveal on scroll
        const io = new IntersectionObserver((entries) => {
            entries.forEach((e) => {
                if (!e.isIntersecting) return;
                e.target.classList.add("reveal-in");
                io.unobserve(e.target);
            });
        }, {
            threshold: 0.12
        });

        cards.forEach((el, n) => {
            el.style.opacity = "0";
            el.style.transform = "translateY(10px)";
            el.style.transition = `opacity 420ms ease ${n * 70}ms, transform 420ms ease ${n * 70}ms`;
            io.observe(el);
        });

        const style = document.createElement("style");
        style.textContent = `.reveal-in{opacity:1!important;transform:translateY(0)!important;}`;
        document.head.appendChild(style);
    })();
</script>