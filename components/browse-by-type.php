<?php
// components/browse-by-type.php
// Draggable + throwable slider (Motion One) + prevents accidental link clicks while dragging

$sectionId = $sectionId ?? "browseByType";
$trackId   = $sectionId . "Track";

// Update image paths to match your project (jpg/png both ok)
$types = [
  ["name" => "Hatchback",   "slug" => "hatchback",   "img" => "./assets/images/types/hatchback.jpg"],
  ["name" => "Sedan",       "slug" => "sedan",       "img" => "./assets/images/types/sedan.jpg"],
  ["name" => "SUV",         "slug" => "suv",         "img" => "./assets/images/types/suv.jpg"],
  ["name" => "Pickup",      "slug" => "pickup",      "img" => "./assets/images/types/pickup.jpg"],
  ["name" => "EV",          "slug" => "ev",          "img" => "./assets/images/types/electric.jpg"],
  ["name" => "Sports",      "slug" => "sports",      "img" => "./assets/images/types/sports.jpg"],
  ["name" => "Convertible", "slug" => "convertible", "img" => "./assets/images/types/convertible.jpg"],
  ["name" => "Luxury",      "slug" => "luxury",      "img" => "./assets/images/types/luxury.jpg"],
  ["name" => "Coupe",      "slug" => "coupe",       "img" => "./assets/images/types/coupe.jpg"],
  ["name" => "CUV",       "slug" => "cuv",         "img" => "./assets/images/types/cuv.jpg"],
  ["name" => "MUV",      "slug" => "muv",         "img" => "./assets/images/types/muv.jpg"],
  ["name" => "Van",       "slug" => "van",         "img" => "./assets/images/types/van.jpg"],

];

// Change this to your actual search page if needed
$baseUrl = "./cars.php?body_type=";
?>

<section id="<?= htmlspecialchars($sectionId) ?>" class="mt-10 pb-12">
  <div class="max-w-[1304px] mx-auto px-4">
    <div class="flex items-end justify-between gap-4">
      <div>
        <h2 class="text-[26px] md:text-[30px] font-heading font-bold text-gray-900">Browse by Type</h2>
        <p class="mt-1 text-sm text-gray-600">Explore cars by body type</p>
      </div>


      <a href="./cars.php" class="inline-flex h-12 items-center justify-center rounded-full  underline underline-offset-4 border border-gray-200 bg-white px-6 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-50">
        View All
      </a>
    </div>

    <!-- viewport -->
    <div class="relative mt-6 overflow-hidden">
      <!-- track -->
      <div
        id="<?= htmlspecialchars($trackId) ?>"
        class="flex gap-6 pr-10 select-none cursor-grab active:cursor-grabbing touch-pan-y"
        style="will-change: transform;">
        <?php foreach ($types as $t): ?>
          <div class="flex flex-col items-center justify-center ">


            <a
              href="<?= htmlspecialchars($baseUrl . urlencode($t["slug"])) ?>"
              class="type-link group flex-none w-[190px] sm:w-[210px] md:w-[230px]
             rounded-2xl bg-gray-50
          transition-transform duration-300 ease-in-out hover:scale-110 hover:rotate-2">
              <div class="px-6 pt-6 flex flex-col items-center justify-center gap-4">
                <img
                  src="<?= htmlspecialchars($t["img"]) ?>"
                  alt="<?= htmlspecialchars($t["name"]) ?>"
                  class="h-[100px] w-auto object-contain
                 mix-blend-multiply
                 pointer-events-none select-none"
                  draggable="false"
                  loading="lazy" />

              </div>
            </a>
            <div class="text-sm font-semibold text-gray-900"><?= htmlspecialchars($t["name"]) ?></div>
          </div>
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

    // tuning (match your browse slider feel)
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
      const link = e.target.closest("a.type-link");
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