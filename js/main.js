document.addEventListener("DOMContentLoaded", () => {
  const openBtn = document.getElementById("mobileOpen");
  const drawer = document.getElementById("mobileDrawer");
  const backdrop = document.getElementById("mobileBackdrop");

  if (!drawer || !backdrop) return;

  // Motion One safe access
  const animate = window.motion?.animate;

  const closeButtons = drawer.querySelectorAll("[data-close], #mobileClose");
  const panels = Array.from(drawer.querySelectorAll("[data-panel]"));

  const showPanel = (name) => {
    panels.forEach((p) => {
      const isActive = p.getAttribute("data-panel") === name;
      p.classList.toggle("hidden", !isActive);
      p.classList.toggle("flex", isActive);
    });
  };

  const openMenu = () => {
    backdrop.classList.remove("hidden");
    drawer.classList.remove("-translate-x-full"); // keep as fallback

    // Animate (if motion exists)
    if (animate) {
      animate(backdrop, { opacity: [0, 1] }, { duration: 0.15 });
      animate(drawer, { transform: ["translateX(-100%)", "translateX(0%)"] }, { duration: 0.22 });
    }

    document.documentElement.classList.add("overflow-hidden");
    document.body.classList.add("overflow-hidden");
    showPanel("main");
  };

  const closeMenu = () => {
    // Animate out first
    if (animate) {
      animate(backdrop, { opacity: [1, 0] }, { duration: 0.12 });
      animate(drawer, { transform: ["translateX(0%)", "translateX(-100%)"] }, { duration: 0.18 })
        .finished.then(() => {
          backdrop.classList.add("hidden");
          drawer.classList.add("-translate-x-full");
          drawer.style.transform = ""; // reset inline transform
        });
    } else {
      backdrop.classList.add("hidden");
      drawer.classList.add("-translate-x-full");
    }

    document.documentElement.classList.remove("overflow-hidden");
    document.body.classList.remove("overflow-hidden");
    showPanel("main");
  };

  if (openBtn) openBtn.addEventListener("click", openMenu);
  backdrop.addEventListener("click", closeMenu);
  closeButtons.forEach((btn) => btn.addEventListener("click", closeMenu));

  drawer.addEventListener("click", (e) => {
    const nav = e.target.closest("[data-nav]");
    if (nav) return showPanel(nav.getAttribute("data-nav"));

    const back = e.target.closest("[data-back]");
    if (back) return showPanel(back.getAttribute("data-back"));
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeMenu();
  });
});
