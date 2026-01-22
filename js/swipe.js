// swipe.js (UPDATED: supports both #msSlider and #pcSlider + arrow stepBy)
(function ($) {
  function initDragSwipe($viewport, opts) {
    opts = opts || {};

    // Selectors (defaults for Most Searched)
    const trackSelector = opts.trackSelector || ".ms-track";
    const cardSelector = opts.cardSelector || ".ms-card";
    const gapPx = typeof opts.gapPx === "number" ? opts.gapPx : 18;

    const $track = $viewport.find(trackSelector);
    if (!$track.length) return null;

    // TUNING (kept from your current file)
    const DRAG_OVERSCROLL_PX = 260;
    const DRAG_RESISTANCE = 0.78;
    const MOMENTUM_MULT = 900;

    // Faster bounce back (your current values)
    const SPRING_K = 0.045;
    const SPRING_DAMP = 0.82;
    const STOP_EPS = 0.35;

    const DRAG_THRESHOLD = 6; // normal drag threshold
    const EDGE_TOL = 1.5; // px tolerance to treat as "at edge"

    let isDown = false;
    let isDragging = false;

    let startX = 0;
    let startTranslate = 0;

    let translateX = 0;
    let lastX = 0;
    let lastT = 0;
    let velocity = 0;

    let raf = null;
    let springV = 0;
    let springTarget = 0;

    function bounds() {
      const vw = $viewport[0].clientWidth;
      const tw = $track[0].scrollWidth;
      const min = Math.min(0, vw - tw);
      return { min, max: 0 };
    }

    function setTranslate(x) {
      translateX = x;
      $track.css({
        transition: "none",
        transform: `translate3d(${x}px,0,0)`,
      });
    }

    function getX(e) {
      const oe = e.originalEvent;
      if (oe && oe.touches && oe.touches[0]) return oe.touches[0].clientX;
      if (oe && oe.changedTouches && oe.changedTouches[0])
        return oe.changedTouches[0].clientX;
      return e.clientX;
    }

    function stopSpring() {
      if (raf) cancelAnimationFrame(raf);
      raf = null;
      springV = 0;
    }

    function startSpring(to) {
      springTarget = to;
      stopSpring();

      const step = () => {
        const x = translateX;
        const dx = springTarget - x;

        springV = (springV + dx * SPRING_K) * SPRING_DAMP;
        const nx = x + springV;

        setTranslate(nx);

        if (Math.abs(dx) < STOP_EPS && Math.abs(springV) < STOP_EPS) {
          setTranslate(springTarget);
          raf = null;
          springV = 0;
          return;
        }

        raf = requestAnimationFrame(step);
      };

      raf = requestAnimationFrame(step);
    }

    function resistEdge(next, b) {
      let out = next;

      if (next > b.max) {
        const over = next - b.max;
        out = b.max + Math.min(DRAG_OVERSCROLL_PX, over) * DRAG_RESISTANCE;
      } else if (next < b.min) {
        const over = b.min - next;
        out = b.min - Math.min(DRAG_OVERSCROLL_PX, over) * DRAG_RESISTANCE;
      }

      return out;
    }

    function onDown(e) {
      if (e.type === "mousedown" && e.button !== 0) return;

      isDown = true;
      isDragging = false;

      stopSpring();

      startX = getX(e);
      startTranslate = translateX;

      lastX = startX;
      lastT = performance.now();
      velocity = 0;

      e.preventDefault();
    }

    function onMove(e) {
      if (!isDown) return;

      const x = getX(e);
      const dx = x - startX;
      const b = bounds();

      const atLeftEdge = translateX >= b.max - EDGE_TOL;
      const atRightEdge = translateX <= b.min + EDGE_TOL;

      // Start dragging immediately when pulling OUTWARD at edges
      const pullingOutAtLeft = atLeftEdge && dx > 0;
      const pullingOutAtRight = atRightEdge && dx < 0;

      if (!isDragging) {
        if (
          Math.abs(dx) >= DRAG_THRESHOLD ||
          pullingOutAtLeft ||
          pullingOutAtRight
        ) {
          isDragging = true;
          $viewport.addClass("is-dragging");
        } else {
          return;
        }
      }

      const next = startTranslate + dx;
      const elastic = resistEdge(next, b);

      const now = performance.now();
      const dt = Math.max(1, now - lastT);
      velocity = (x - lastX) / dt;

      lastX = x;
      lastT = now;

      setTranslate(elastic);
      e.preventDefault();
    }
    function onUp() {
      if (!isDown) return;
      isDown = false;

      if (isDragging) $viewport.removeClass("is-dragging");
      if (!isDragging) return;

      isDragging = false;

      const b = bounds();

      // 1) If released OUTSIDE bounds => bounce back to edge (only once)
      if (translateX > b.max) {
        startSpring(b.max);
        return;
      }
      if (translateX < b.min) {
        startSpring(b.min);
        return;
      }

      // 2) Released INSIDE bounds => NO BOUNCE
      // Optional: snap to nearest card for nice alignment
      const step = cardStep(); // card width + gap
      const snapped = Math.round(translateX / step) * step;

      const clamped = Math.max(b.min, Math.min(b.max, snapped));

      // smooth ease to snapped position (no spring/bounce)
      stopSpring();

      const from = translateX;
      const to = clamped;
      const dur = 220; // faster snap

      const t0 = performance.now();
      function easeOutCubic(t) {
        return 1 - Math.pow(1 - t, 3);
      }

      function anim(now) {
        const p = Math.min(1, (now - t0) / dur);
        const v = from + (to - from) * easeOutCubic(p);
        setTranslate(v);
        if (p < 1) raf = requestAnimationFrame(anim);
        else setTranslate(to);
      }

      raf = requestAnimationFrame(anim);
    }

    // Mouse
    $viewport.on("mousedown", onDown);
    $(document).on("mousemove", onMove);
    $(document).on("mouseup", onUp);

    // Touch
    $viewport.on("touchstart", onDown, { passive: false });
    $viewport.on("touchmove", onMove, { passive: false });
    $viewport.on("touchend touchcancel", onUp);

    // Resize
    $(window).on("resize", function () {
      const b = bounds();
      if (translateX > b.max) startSpring(b.max);
      else if (translateX < b.min) startSpring(b.min);
    });

    // Arrow stepping API
    function cardStep() {
      const $card = $track.find(cardSelector).first();
      if (!$card.length) return 320;
      return $card.outerWidth() + gapPx;
    }

    function stepBy(dir) {
      const b = bounds();
      const step = cardStep();

      // dir=1 => next => move track left (more negative)
      const target = translateX - dir * step;

      // clamp (no overscroll)
      const clamped = Math.max(b.min, Math.min(b.max, target));

      // smooth ease (NO bounce)
      stopSpring();

      const from = translateX;
      const to = clamped;
      const dur = 320; // ms
      const t0 = performance.now();

      function easeOutCubic(t) {
        return 1 - Math.pow(1 - t, 3);
      }

      function anim(now) {
        const p = Math.min(1, (now - t0) / dur);
        const v = from + (to - from) * easeOutCubic(p);
        setTranslate(v);

        if (p < 1) raf = requestAnimationFrame(anim);
        else setTranslate(to);
      }

      raf = requestAnimationFrame(anim);
    }

    setTranslate(0);

    return { stepBy };
  }

  function bindPcArrows(api) {
    if (!api) return;
    $(document).on("click", "[data-pc-dir]", function () {
      const dir = Number($(this).attr("data-pc-dir")) || 0;
      api.stepBy(dir);
    });
  }
  const tsApi = initDragSwipe($("#tsSlider"), {
    trackSelector: ".ts-track",
    cardSelector: ".ts-card",
    gapPx: 22,
  });

  // arrow click (smooth, no bounce)
  $(document).on("click", "[data-ts-dir]", function () {
    const dir = Number($(this).attr("data-ts-dir")) || 0;
    if (tsApi) tsApi.stepBy(dir);
  });

  $(function () {
    // Existing Most Searched slider
    initDragSwipe($("#msSlider"), {
      trackSelector: ".ms-track",
      cardSelector: ".ms-card",
      gapPx: 18,
    });

    // Popular Car Comparisons slider (NEW)
    const pcApi = initDragSwipe($("#pcSlider"), {
      trackSelector: ".pc-track",
      cardSelector: ".pc-card",
      gapPx: 22,
    });
    bindPcArrows(pcApi);

    initDragSwipe($("#vrSlider"), {
      trackSelector: ".vr-track",
      cardSelector: ".vr-card",
      gapPx: 22,
    });
    initDragSwipe($("#brSlider"), {
      trackSelector: ".br-track",
      cardSelector: ".br-card",
      gapPx: 28,
    });
    initDragSwipe($("#btSlider"), {
      trackSelector: ".bt-track",
      cardSelector: ".bt-card",
      gapPx: 24,
    });
  });
})(jQuery);
