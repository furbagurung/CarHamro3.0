<?php
// components/blog-section.php

$sectionId = "blogSection";
$trackId   = $sectionId . "Track";
$blogs = [
    [
        "title" => "Volkswagen Virtus in Nepal: The Ultimate Guide",
        "excerpt" => "Nepal's automotive industry has been undergoing a rapid transformation...",
        "image" => "./assets/images/cars/demo-4.jpg",
        "url" => "./blog-detail.php?slug=virtus-nepal-guide",
    ],
    [
        "title" => "Best SUVs in Nepal Under 50 Lakhs",
        "excerpt" => "Here are the top SUV picks based on value, features, and resale...",
        "image" => "./assets/images/cars/demo-2.jpg",
        "url" => "./blog-detail.php?slug=best-suvs-under-50l",
    ],
    [
        "title" => "Best SUVs in Nepal Under 50 Lakhs",
        "excerpt" => "Here are the top SUV picks based on value, features, and resale...",
        "image" => "./assets/images/cars/demo-2.jpg",
        "url" => "./blog-detail.php?slug=best-suvs-under-50l",
    ],
    [
        "title" => "Best SUVs in Nepal Under 50 Lakhs",
        "excerpt" => "Here are the top SUV picks based on value, features, and resale...",
        "image" => "./assets/images/cars/demo-2.jpg",
        "url" => "./blog-detail.php?slug=best-suvs-under-50l",
    ],
    // add more...
];
?>

<section id="<?= htmlspecialchars($sectionId) ?>" class="my-12">
    <div class="max-w-[1304px] mx-auto px-4">
        <div class="flex items-start justify-between gap-4">
            <div>
                <h2 class="text-[28px] leading-tight font-heading font-bold text-neutral-900">
                    Latest Articles
                </h2>
                <p class="text-gray-600">Insights and tips from our experts</p>
            </div>


            <a href="blog.php" class="inline-flex h-12 items-center justify-center rounded-full  underline underline-offset-4 border border-gray-200 bg-white px-6 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-50">
                View All
            </a>
        </div>

        <!-- viewport -->
        <div class="relative mt-8 overflow-hidden">
            <!-- track -->
            <div
                id="<?= htmlspecialchars($trackId) ?>"
                class="flex gap-6 pr-10 select-none cursor-grab active:cursor-grabbing touch-pan-y"
                style="will-change: transform;">
                <?php foreach ($blogs as $blog): ?>
                    <?php include __DIR__ . "/blog-card.php"; ?>
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
        const trackId = "<?= addslashes($trackId) ?>";
        const track = document.getElementById(trackId);
        if (!track) return;

        // prevent double init
        if (track.dataset.dragInit === "1") return;
        track.dataset.dragInit = "1";

        const viewport = track.parentElement;

        let isDown = false;
        let startX = 0;
        let currentX = 0;

        let lastX = 0;
        let lastT = 0;
        let v = 0;

        const THROW_MULTIPLIER = 460;
        const MAX_THROW = 1000;

        const OVERSCROLL = 90;
        const EDGE_DAMP = 0.35;

        const clampMin = () => Math.min(0, viewport.clientWidth - track.scrollWidth);
        const clamp = (x) => Math.max(clampMin(), Math.min(0, x));

        const rubberBand = (x) => {
            const min = clampMin();
            const max = 0;

            if (x > max) return max + Math.min(OVERSCROLL, (x - max) * EDGE_DAMP);
            if (x < min) return min - Math.min(OVERSCROLL, (min - x) * EDGE_DAMP);
            return x;
        };

        const setXInstant = (x, allowOverscroll = false) => {
            currentX = allowOverscroll ? x : clamp(x);
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
                }),
            });
        };

        const bounceBackIfNeeded = () => {
            const min = clampMin();
            const max = 0;

            if (currentX > max) {
                springTo(max, {
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
            // if there is no overflow, don't start drag
            if (track.scrollWidth <= viewport.clientWidth) return;

            isDown = true;
            setXInstant(clamp(currentX));
            startX = pageX - currentX;

            lastX = pageX;
            lastT = performance.now();
            v = 0;
        };

        const onMove = (pageX) => {
            if (!isDown) return;

            const now = performance.now();
            const dt = Math.max(8, now - lastT);

            v = (pageX - lastX) / dt;
            lastX = pageX;
            lastT = now;

            setXInstant(rubberBand(pageX - startX), true);
        };

        const onUp = () => {
            if (!isDown) return;
            isDown = false;

            if (bounceBackIfNeeded()) return;

            let throwDist = v * THROW_MULTIPLIER;
            throwDist = Math.max(-MAX_THROW, Math.min(MAX_THROW, throwDist));

            springTo(currentX + throwDist, {
                stiffness: 120,
                damping: 20,
                mass: 0.65
            });
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

        // re-clamp on resize
        window.addEventListener("resize", () => {
            currentX = clamp(currentX);
            track.style.transform = `translateX(${currentX}px)`;
        });
    });
</script>