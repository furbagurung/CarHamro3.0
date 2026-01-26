<?php
// components/car-cards-section.php

$sectionId    = $sectionId ?? "carSection";
$title        = $title ?? "Section Title";
$viewAllLink  = $viewAllLink ?? [];
$tabs         = $tabs ?? [];
$cards        = $cards ?? [];
$activeTabKey = $activeTabKey ?? ($tabs[0]["key"] ?? "");

$trackId = $sectionId . "Track";
?>

<section class="mt-14" id="<?= htmlspecialchars($sectionId) ?>">
  <div class="max-w-[1304px] mx-auto px-4">

    <div class="flex items-start justify-between gap-4">
      <div>
        <h2 class="text-[28px] leading-tight font-heading font-bold text-neutral-900">
          <?= htmlspecialchars($title) ?>
        </h2>

        <?php if (!empty($tabs)): ?>
          <div class="mt-4 flex flex-wrap gap-2" data-tabs="<?= htmlspecialchars($sectionId) ?>">
            <?php foreach ($tabs as $t): ?>
              <?php $isActive = ($t["key"] === $activeTabKey); ?>
              <button
                type="button"
                data-tab="<?= htmlspecialchars($t["key"]) ?>"
                class="<?= $isActive
                          ? 'bg-[#0B1B3A] text-white border-[#0B1B3A]'
                          : 'bg-white text-neutral-700 border-neutral-300 hover:border-neutral-400'
                        ?> rounded-md border px-4 py-2 text-sm font-medium transition focus:outline-none focus:ring-2 focus:ring-[#0B1B3A]/30">
                <?= htmlspecialchars($t["label"]) ?>
              </button>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if (!empty($viewAllLink)): ?>
        <a href="<?= htmlspecialchars($viewAllLink) ?>" class="mt-2 text-sm text-neutral-700 underline underline-offset-4 hover:text-neutral-900">
          View All
        </a>
      <?php endif; ?>
    </div>

    <!-- VIEWPORT (partial cut visible) -->
    <div class="relative mt-8 overflow-hidden">
      <!-- TRACK -->
      <div
        id="<?= htmlspecialchars($trackId) ?>"
        class="flex gap-6 select-none cursor-grab active:cursor-grabbing"
        style="will-change: transform;">
        <?php foreach ($cards as $car): ?>
          <?php include __DIR__ . "/car-card.php"; ?>
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

  (() => {
    const sectionId = "<?= addslashes($sectionId) ?>";
    const trackId = "<?= addslashes($trackId) ?>";

    const root = document.getElementById(sectionId);
    const track = document.getElementById(trackId);
    if (!root || !track) return;

    // prevent double init
    if (track.dataset.dragInit === "1") return;
    track.dataset.dragInit = "1";

    const viewport = track.parentElement;

    let isDown = false;
    let startX = 0;
    let currentX = 0;

    // velocity tracking (px/ms)
    let lastX = 0;
    let lastT = 0;
    let v = 0;

    // momentum tuning (same as browse-by-type.php)
    const THROW_MULTIPLIER = 460;
    const MAX_THROW = 1000;

    // bounce tuning
    const OVERSCROLL = 90;
    const EDGE_DAMP = 0.35;
    const BOUNCE_STIFFNESS = 180;
    const BOUNCE_DAMPING = 18;

    const maxTranslate = () => Math.min(0, viewport.clientWidth - track.scrollWidth);
    const clamp = (x) => Math.max(maxTranslate(), Math.min(0, x));

    const rubberBand = (x) => {
      const min = maxTranslate();
      const max = 0;

      if (x > max) {
        const over = x - max;
        return max + Math.min(OVERSCROLL, over * EDGE_DAMP);
      }
      if (x < min) {
        const over = min - x;
        return min - Math.min(OVERSCROLL, over * EDGE_DAMP);
      }
      return x;
    };

    const setXInstant = (x, allowOverscroll = false) => {
      currentX = allowOverscroll ? x : clamp(x);
      track.style.transform = `translateX(${currentX}px)`;
    };

    const springTo = (x, opts = {}) => {
      currentX = clamp(x);
      animate(
        track, {
          transform: `translateX(${currentX}px)`
        }, {
          easing: spring({
            stiffness: opts.stiffness ?? 120,
            damping: opts.damping ?? 22,
            mass: opts.mass ?? 0.6,
          }),
        }
      );
    };

    const bounceBackIfNeeded = () => {
      const min = maxTranslate();
      const max = 0;

      if (currentX > max) {
        springTo(max, {
          stiffness: BOUNCE_STIFFNESS,
          damping: BOUNCE_DAMPING,
          mass: 0.55
        });
        return true;
      }
      if (currentX < min) {
        springTo(min, {
          stiffness: BOUNCE_STIFFNESS,
          damping: BOUNCE_DAMPING,
          mass: 0.55
        });
        return true;
      }
      return false;
    };

    const onDown = (pageX) => {
      isDown = true;
      setXInstant(clamp(currentX)); // lock current motion
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

      const raw = pageX - startX;
      setXInstant(rubberBand(raw), true);
    };

    const onUp = () => {
      if (!isDown) return;
      isDown = false;

      if (bounceBackIfNeeded()) return;

      let throwDist = v * THROW_MULTIPLIER;
      if (throwDist > MAX_THROW) throwDist = MAX_THROW;
      if (throwDist < -MAX_THROW) throwDist = -MAX_THROW;

      springTo(currentX + throwDist, {
        stiffness: 120,
        damping: 20,
        mass: 0.65
      });
    };

    // Mouse
    track.addEventListener("mousedown", (e) => {
      if (e.button !== 0) return;
      onDown(e.pageX);
    });
    window.addEventListener("mousemove", (e) => onMove(e.pageX));
    window.addEventListener("mouseup", onUp);

    // Touch
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

    // Disable ghost image drag (track-level)
    track.addEventListener("dragstart", (e) => e.preventDefault());

    // ---------- Tabs (filter + re-clamp) ----------
    const tabsWrap = root.querySelector('[data-tabs="' + sectionId + '"]');
    if (tabsWrap) {
      const btns = Array.from(tabsWrap.querySelectorAll("button[data-tab]"));
      const cards = Array.from(track.querySelectorAll(".mscCard"));

      function setActive(key) {
        btns.forEach(b => {
          const active = b.dataset.tab === key;
          b.className =
            (active ?
              "bg-[#0B1B3A] text-white border-[#0B1B3A]" :
              "bg-white text-neutral-700 border-neutral-300 hover:border-neutral-400"
            ) + " rounded-md border px-4 py-2 text-sm font-medium transition focus:outline-none focus:ring-2 focus:ring-[#0B1B3A]/30";
        });

        cards.forEach(c => {
          c.style.display = (c.getAttribute("data-tab") === key) ? "" : "none";
        });

        // after display changes, scrollWidth changes => clamp position
        currentX = clamp(currentX);
        track.style.transform = `translateX(${currentX}px)`;
      }

      btns.forEach(b => b.addEventListener("click", () => setActive(b.dataset.tab)));
      if (btns[0]) setActive(btns[0].dataset.tab);
    }

    window.addEventListener("resize", () => {
      currentX = clamp(currentX);
      track.style.transform = `translateX(${currentX}px)`;
    });
  })();
</script>