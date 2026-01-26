<?php
// components/testimonials-slider.php
// Draggable + throwable (Motion One) + dots + prev/next + edge fades + star rating row

$sectionId = "testimonials";
$trackId   = $sectionId . "Track";
$dotsId    = $sectionId . "Dots";

$testimonials = [
  [
    "quote" => "I had never sold a car this way before, so I wasn't really sure how
easy it would be. It was so simple that I was amazed at it. I sold my
car on the third day. The money deposited into my bank account
two hours after the car was picked up three days later. Throughout
the entire process, there was excellent communication.",
    "name"  => "Hari Shahi",
    "role"  => "Janakpur",
    "avatar"=> "./assets/images/avatars/user-1.jpg",
  ],
  [
    "quote" => "An easy-to-use website with knowledgeable, helpful service. A
smooth and speedy transaction. I will definitely use them again.
Everything about the experience felt seamless and reliable.",
    "name"  => "Sandhya Manandhar",
    "role"  => "Bhaktapur",
    "avatar"=> "./assets/images/avatars/user-2.jpg",
  ],
  [
    "quote" => "I've used Carhamro twice, and I have no worries about doing it
again. They make selling car simple. My car easily exceeded the
trade-in price and sold at the indicated price right away..",
    "name"  => "Suresh Poudyal",
    "role"  => "Kathmandu",
    "avatar"=> "./assets/images/avatars/user-3.jpg",
  ],
  [
    "quote" => "I was surprised by how smooth everything felt. Just a few steps and
my car was live for thousands to see. Selling was never this simple.",
    "name"  => "Lokesh Khadka",
    "role"  => "Kathmandu",
    "avatar"=> "./assets/images/avatars/user-4.jpg",
  ],

];

function renderStars($count = 5) {
  $html = '';
  for ($i = 0; $i < $count; $i++) {
    $html .= '<i class="fa-solid fa-star text-[#f59e0b]"></i>'; 
  }
  return $html;
}
?>

<section id="<?= htmlspecialchars($sectionId) ?>" class="mt-16">
  <div class="max-w-[1304px] mx-auto px-4">
    <div class="rounded-3xl bg-[#f3f3f3] px-6 py-12 md:px-10 md:py-16">
      <!-- Header -->
      <div class="text-center">
        <h2 class="text-[30px] md:text-[40px] font-heading font-bold text-gray-900">
          What Our Clients Are Saying
        </h2>
        <p class="mt-3 text-sm md:text-base text-gray-600 max-w-2xl mx-auto">
          Our users love how CarHamro simplifies their car journey and streamlines buying and selling.
        </p>

        <!-- Rating row -->
        <div class="mt-6 inline-flex flex-col items-center gap-2">
          <div class="flex items-center gap-1 text-[14px]">
            <?= renderStars(5) ?>
          </div>
          <div class="text-sm text-gray-700">
            <span class="font-semibold text-gray-900">4.9/5</span>
            <span class="text-gray-500">based on</span>
            <span class="font-semibold text-gray-900">2,300+</span>
            <span class="text-gray-500">reviews</span>
          </div>
        </div>
      </div>

      <!-- Slider -->
      <div class="relative mt-10">
        <!-- edge fades -->
        <div class="pointer-events-none absolute inset-y-0 left-0 w-14 sm:w-20 bg-gradient-to-r from-[#f3f3f3] to-transparent z-10"></div>
        <div class="pointer-events-none absolute inset-y-0 right-0 w-14 sm:w-20 bg-gradient-to-l from-[#f3f3f3] to-transparent z-10"></div>

        <!-- prev/next -->
        <button
          type="button"
          aria-label="Previous testimonial"
          data-ts-prev
          class="hidden md:grid absolute left-2 top-1/2 -translate-y-1/2 z-20 h-11 w-11 place-items-center rounded-full border border-gray-200 bg-white shadow-sm hover:bg-gray-50"
        >
          <i class="fa-solid fa-chevron-left text-gray-800"></i>
        </button>

        <button
          type="button"
          aria-label="Next testimonial"
          data-ts-next
          class="hidden md:grid absolute right-2 top-1/2 -translate-y-1/2 z-20 h-11 w-11 place-items-center rounded-full border border-gray-200 bg-white shadow-sm hover:bg-gray-50"
        >
          <i class="fa-solid fa-chevron-right text-gray-800"></i>
        </button>

        <!-- viewport -->
        <div class="overflow-hidden">
          <!-- track -->
          <div
            id="<?= htmlspecialchars($trackId) ?>"
            class="flex gap-6 pr-10 select-none cursor-grab active:cursor-grabbing touch-pan-y"
            style="will-change: transform;"
          >
            <?php foreach ($testimonials as $t): ?>
              <article class="flex-none w-[86%] sm:w-[420px] md:w-[440px] rounded-2xl border border-gray-200 bg-white shadow-sm">
                <div class="p-6 md:p-7">
                  <!-- per-card stars -->
                  <div class="flex items-center gap-1 text-[13px] mb-4">
                    <?= renderStars(5) ?>
                  </div>

                  <p class="text-sm md:text-[15px] leading-6 text-gray-700">
                    <?= htmlspecialchars($t["quote"]) ?>
                  </p>

                  <div class="mt-7 flex items-center gap-3">
                    <div class="h-10 w-10 overflow-hidden rounded-full bg-gray-100 shrink-0">
                      <img
                        src="<?= htmlspecialchars($t["avatar"]) ?>"
                        alt="<?= htmlspecialchars($t["name"]) ?>"
                        class="h-full w-full object-cover"
                        loading="lazy"
                        draggable="false"
                      />
                    </div>
                    <div class="min-w-0">
                      <div class="text-sm font-semibold text-gray-900 truncate">
                        <?= htmlspecialchars($t["name"]) ?>
                      </div>
                      <div class="text-xs text-gray-500 truncate">
                        <?= htmlspecialchars($t["role"]) ?>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- dots -->
        <div id="<?= htmlspecialchars($dotsId) ?>" class="mt-6 flex items-center justify-center gap-2"></div>
      </div>
    </div>
  </div>
</section>

<script type="module">
  import { animate, spring } from "https://cdn.jsdelivr.net/npm/@motionone/dom/+esm";

  document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById("<?= addslashes($trackId) ?>");
    const dotsWrap = document.getElementById("<?= addslashes($dotsId) ?>");
    const root = document.getElementById("<?= addslashes($sectionId) ?>");
    if (!track || !dotsWrap || !root) return;

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

    let step = 0;
    let maxIndex = 0;
    let index = 0;

    const THROW_MULTIPLIER = 520;
    const MAX_THROW = 1200;
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
      animate(track, { transform: `translateX(${currentX}px)` }, {
        easing: spring({
          stiffness: opts.stiffness ?? 130,
          damping: opts.damping ?? 22,
          mass: opts.mass ?? 0.65,
        })
      });
    };

    const bounceIfNeeded = () => {
      const min = minX();
      if (currentX > 0) { springTo(0, { stiffness: 180, damping: 18, mass: 0.55 }); return true; }
      if (currentX < min) { springTo(min, { stiffness: 180, damping: 18, mass: 0.55 }); return true; }
      return false;
    };

    function computeStep() {
      const first = track.children[0];
      if (!first) return;

      const cardW = first.getBoundingClientRect().width;
      const gap = parseFloat(getComputedStyle(track).columnGap || getComputedStyle(track).gap || "0") || 0;

      step = cardW + gap;
      const totalScrollable = track.scrollWidth - viewport.clientWidth;
      maxIndex = totalScrollable <= 0 ? 0 : Math.round(totalScrollable / step);
      index = Math.max(0, Math.min(maxIndex, index));
      snapTo(index, { immediate: true });
      renderDots();
      updateDots();
    }

    function nearestIndexFromX(x) {
      if (step <= 0) return 0;
      const i = Math.round((-x) / step);
      return Math.max(0, Math.min(maxIndex, i));
    }

    function snapXFor(i) {
      return clamp(-i * step);
    }

    function snapTo(i, opts = {}) {
      index = Math.max(0, Math.min(maxIndex, i));
      const x = snapXFor(index);
      if (opts.immediate) setX(x);
      else springTo(x);
      updateDots();
    }

    function renderDots() {
      dotsWrap.innerHTML = "";
      const count = maxIndex + 1;
      for (let i = 0; i < count; i++) {
        const btn = document.createElement("button");
        btn.type = "button";
        btn.className = "h-2.5 w-2.5 rounded-full transition bg-gray-300 hover:bg-gray-400";
        btn.setAttribute("aria-label", `Go to slide ${i + 1}`);
        btn.dataset.dot = String(i);
        dotsWrap.appendChild(btn);
      }
    }

    function updateDots() {
      dotsWrap.querySelectorAll("button[data-dot]").forEach((d) => {
        const i = Number(d.dataset.dot);
        const active = i === index;
        d.classList.toggle("bg-gray-300", !active);
        d.classList.toggle("hover:bg-gray-400", !active);
        d.classList.toggle("bg-[#f59e0b]", active);
      });
    }

    const onDown = (pageX) => {
      if (track.scrollWidth <= viewport.clientWidth) return;
      isDown = true;

      setX(clamp(currentX));
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

      setX(rubberBand(pageX - startX), true);
    };

    const onUp = () => {
      if (!isDown) return;
      isDown = false;

      if (bounceIfNeeded()) {
        index = nearestIndexFromX(currentX);
        updateDots();
        return;
      }

      const throwDist = Math.max(-MAX_THROW, Math.min(MAX_THROW, v * THROW_MULTIPLIER));
      const predicted = clamp(currentX + throwDist);
      snapTo(nearestIndexFromX(predicted));
    };

    track.addEventListener("mousedown", (e) => { if (e.button === 0) onDown(e.pageX); });
    window.addEventListener("mousemove", (e) => onMove(e.pageX));
    window.addEventListener("mouseup", onUp);

    track.addEventListener("touchstart", (e) => onDown(e.touches[0].pageX), { passive: true });
    track.addEventListener("touchmove", (e) => onMove(e.touches[0].pageX), { passive: true });
    track.addEventListener("touchend", onUp, { passive: true });
    track.addEventListener("touchcancel", onUp, { passive: true });

    // no ghost drag
    track.addEventListener("dragstart", (e) => e.preventDefault());
    track.querySelectorAll("img").forEach((img) => img.addEventListener("dragstart", (e) => e.preventDefault()));

    dotsWrap.addEventListener("click", (e) => {
      const btn = e.target.closest("button[data-dot]");
      if (!btn) return;
      snapTo(Number(btn.dataset.dot));
    });

    const prevBtn = root.querySelector("[data-ts-prev]");
    const nextBtn = root.querySelector("[data-ts-next]");
    prevBtn?.addEventListener("click", () => snapTo(index - 1));
    nextBtn?.addEventListener("click", () => snapTo(index + 1));

    window.addEventListener("resize", computeStep);

    computeStep();
  });
</script>
