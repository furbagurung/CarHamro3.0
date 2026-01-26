// ./assets/js/motion-carousel.js
// Uses global motion.animate & motion.spring

(function () {
  const TRACK_SELECTOR = "[data-motion-carousel]";

  function init(track) {
    const viewport = track.parentElement;

    let isDown = false;
    let startX = 0;
    let currentX = 0;
    let lastX = 0;
    let lastT = 0;
    let velocity = 0;

    const THROW_MULT = 450;
    const MAX_THROW = 1000;
    const OVERSCROLL = 90;
    const EDGE_DAMP = 0.35;

    const maxTranslate = () =>
      Math.min(0, viewport.clientWidth - track.scrollWidth);

    const clamp = (x) =>
      Math.max(maxTranslate(), Math.min(0, x));

    const rubberBand = (x) => {
      const min = maxTranslate();
      const max = 0;

      if (x > max) return max + (x - max) * EDGE_DAMP;
      if (x < min) return min + (x - min) * EDGE_DAMP;
      return x;
    };

    const setX = (x, raw = false) => {
      currentX = raw ? x : clamp(x);
      track.style.transform = `translateX(${currentX}px)`;
    };

    const springTo = (x) => {
      currentX = clamp(x);
      motion.animate(
        track,
        { transform: `translateX(${currentX}px)` },
        {
          easing: motion.spring({
            stiffness: 160,
            damping: 20,
            mass: 0.6,
          }),
        }
      );
    };

    const onDown = (x) => {
      isDown = true;
      startX = x - currentX;
      lastX = x;
      lastT = performance.now();
      velocity = 0;
    };

    const onMove = (x) => {
      if (!isDown) return;

      const now = performance.now();
      const dt = Math.max(10, now - lastT);
      velocity = (x - lastX) / dt;

      lastX = x;
      lastT = now;

      setX(rubberBand(x - startX), true);
    };

    const onUp = () => {
      if (!isDown) return;
      isDown = false;

      let throwDist = velocity * THROW_MULT;
      throwDist = Math.max(-MAX_THROW, Math.min(MAX_THROW, throwDist));

      springTo(currentX + throwDist);
    };

    track.addEventListener("mousedown", (e) => {
      if (e.button !== 0) return;
      onDown(e.pageX);
    });

    window.addEventListener("mousemove", (e) => onMove(e.pageX));
    window.addEventListener("mouseup", onUp);

    track.addEventListener("touchstart", (e) => onDown(e.touches[0].pageX), { passive: true });
    track.addEventListener("touchmove", (e) => onMove(e.touches[0].pageX), { passive: true });
    track.addEventListener("touchend", onUp, { passive: true });

    track.addEventListener("dragstart", (e) => e.preventDefault());

    window.addEventListener("resize", () => {
      setX(clamp(currentX));
    });
  }

  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(TRACK_SELECTOR).forEach((track) => {
      if (track.dataset.motionInit) return;
      track.dataset.motionInit = "1";
      init(track);
    });
  });
})();
