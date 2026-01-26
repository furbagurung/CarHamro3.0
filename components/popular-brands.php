<?php
// components/browse-by-brand.php
// Draggable + throwable slider (Motion One) + prevents accidental link clicks while dragging

$sectionId =  "browseByBrand";
$trackId   = $sectionId . "Track";

// Update these logo paths to match your project
$brands = [
    ["name" => "Toyota",   "slug" => "toyota",   "img" => "./assets/images/brands/toyota.webp"],
    ["name" => "Honda",    "slug" => "honda",    "img" => "./assets/images/brands/honda.webp"],
    ["name" => "Hyundai",  "slug" => "hyundai",  "img" => "./assets/images/brands/hyundai.webp"],
    ["name" => "Kia",      "slug" => "kia",      "img" => "./assets/images/brands/kia.webp"],
    ["name" => "Suzuki",   "slug" => "suzuki",   "img" => "./assets/images/brands/suzuki.webp"],
    ["name" => "Nissan",   "slug" => "nissan",   "img" => "./assets/images/brands/nissan.webp"],
    ["name" => "Tata",     "slug" => "tata",     "img" => "./assets/images/brands/tata.webp"],
    ["name" => "Mahindra", "slug" => "mahindra", "img" => "./assets/images/brands/mahindra.webp"],
    ["name" => "BYD",      "slug" => "byd",      "img" => "./assets/images/brands/byd.webp"],
    ["name" => "MG",       "slug" => "mg",       "img" => "./assets/images/brands/mg.webp"],
];

// Change this to your actual search page if needed
$baseUrl = "./cars.php?brand=";
?>

<section id="<?= htmlspecialchars($sectionId) ?>" class="py-12">
    <div class="max-w-[1304px] mx-auto px-4 ">
        <div class="flex items-end justify-between gap-4">
            <div>
                <h2 class="text-[26px] md:text-[30px] font-heading font-bold text-gray-900">Browse by Brand</h2>
                <p class="mt-1 text-sm text-gray-600">Explore cars by your favorite brands</p>
            </div>

            <a href="./brands.php" class="text-sm font-semibold text-gray-900 hover:opacity-80">View all</a>
        </div>

        <!-- viewport -->
        <div class="relative mt-6 overflow-hidden">
            <!-- track -->
            <div
                id="<?= htmlspecialchars($trackId) ?>"
                class="flex gap-6 pr-10 select-none cursor-grab active:cursor-grabbing touch-pan-y"
                style="will-change: transform;">
                <?php foreach ($brands as $b): ?>
                    <a
                        href="<?= htmlspecialchars($baseUrl . urlencode($b["slug"])) ?>"
                        class="brand-link group flex-none w-[190px] sm:w-[210px] md:w-[230px] rounded-[26px] border  bg-white/55 backdrop-blur-xl   transition-all duration-300">
                        <div class="px-6 py-6 flex flex-col items-center justify-center gap-4">
                            
                            <img
                                src="<?= htmlspecialchars($b["img"]) ?>"
                                alt="<?= htmlspecialchars($b["name"]) ?>"
                                class="h-[90px] w-auto object-contain mix-blend-multiply pointer-events-none select-none"
                                draggable="false"
                                loading="lazy" />
                            <div class="text-sm font-semibold text-gray-900"><?= htmlspecialchars($b["name"]) ?></div>
                        </div>
                      
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script type="module">
    import {
        animate,
        spring
    } from "https://cdn.jsdelivr.net/npm/@motionone/dom/+esm";

    document.addEventListener("DOMContentLoaded", () => {
        const track = document.getElementById("<?= addslashes($trackId) ?>");
        if (!track) return;

        // prevent double init
        if (track.dataset.dragInit === "1") return;
        track.dataset.dragInit = "1";

        const viewport = track.parentElement;

        let isDown = false;
        let startX = 0;
        let currentX = 0;

        // velocity (px/ms)
        let lastX = 0;
        let lastT = 0;
        let v = 0;

        // CLICK-PREVENTION
        let didDrag = false;
        let downX = 0;
        const DRAG_THRESHOLD = 8; // px

        // tuning (match browse-by-type feel)
        const THROW_MULTIPLIER = 460;
        const MAX_THROW = 1000;

        const OVERSCROLL = 90;
        const EDGE_DAMP = 0.35;

        const minX = () => Math.min(0, viewport.clientWidth - track.scrollWidth);
        const clamp = (x) => Math.max(minX(), Math.min(0, x));

        const rubberBand = (x) => {
            const min = minX();
            const max = 0;
            if (x > max) return max + Math.min(OVERSCROLL, (x - max) * EDGE_DAMP);
            if (x < min) return min - Math.min(OVERSCROLL, (min - x) * EDGE_DAMP);
            return x;
        };

        const setX = (x, allowOver = false) => {
            currentX = allowOver ? x : clamp(x);
            track.style.transform = `translateX(${currentX}px)`;
        };

        const springTo = (x, opts = {}) => {
            currentX = clamp(x);
            animate(track, {
                transform: `translateX(${currentX}px)`
            }, {
                easing: spring({
                    stiffness: opts.stiffness ?? 120,
                    damping: opts.damping ?? 22,
                    mass: opts.mass ?? 0.6,
                })
            });
        };

        const bounceIfNeeded = () => {
            const min = minX();
            if (currentX > 0) {
                springTo(0, {
                    stiffness: 180,
                    damping: 18,
                    mass: 0.55
                });
                return true;
            }
            if (currentX < min) {
                springTo(min, {
                    stiffness: 180,
                    damping: 18,
                    mass: 0.55
                });
                return true;
            }
            return false;
        };

        const onDown = (pageX) => {
            if (track.scrollWidth <= viewport.clientWidth) return; // no overflow

            isDown = true;

            // click-prevent init
            didDrag = false;
            downX = pageX;

            setX(clamp(currentX));
            startX = pageX - currentX;

            lastX = pageX;
            lastT = performance.now();
            v = 0;
        };

        const onMove = (pageX) => {
            if (!isDown) return;

            if (Math.abs(pageX - downX) > DRAG_THRESHOLD) didDrag = true;

            const now = performance.now();
            const dt = Math.max(8, now - lastT);

            v = (pageX - lastX) / dt;
            lastX = pageX;
            lastT = now;

            setX(rubberBand(pageX - startX), true);
        };

        const onUp = () => {
            if (!isDown) return;
            isDown = false;

            if (bounceIfNeeded()) return;

            let throwDist = v * THROW_MULTIPLIER;
            throwDist = Math.max(-MAX_THROW, Math.min(MAX_THROW, throwDist));
            springTo(currentX + throwDist, {
                stiffness: 120,
                damping: 20,
                mass: 0.65
            });

            // allow clicks again after this frame
            setTimeout(() => {
                didDrag = false;
            }, 0);
        };

        // mouse
        track.addEventListener("mousedown", (e) => {
            if (e.button === 0) onDown(e.pageX);
        });
        window.addEventListener("mousemove", (e) => onMove(e.pageX));
        window.addEventListener("mouseup", onUp);

        // touch
        track.addEventListener("touchstart", (e) => onDown(e.touches[0].pageX), {
            passive: true
        });
        track.addEventListener("touchmove", (e) => onMove(e.touches[0].pageX), {
            passive: true
        });
        track.addEventListener("touchend", onUp, {
            passive: true
        });
        track.addEventListener("touchcancel", onUp, {
            passive: true
        });

        // disable ghost drag
        track.addEventListener("dragstart", (e) => e.preventDefault());
        track.querySelectorAll("img").forEach((img) => img.addEventListener("dragstart", (e) => e.preventDefault()));

        // prevent accidental navigation while dragging (CAPTURE PHASE)
        track.addEventListener("click", (e) => {
            const link = e.target.closest("a.brand-link");
            if (!link) return;

            if (didDrag) {
                e.preventDefault();
                e.stopPropagation();
            }
        }, true);

        // re-clamp on resize
        window.addEventListener("resize", () => {
            currentX = clamp(currentX);
            track.style.transform = `translateX(${currentX}px)`;
        });
    });
</script>