// most-searched.js
document.addEventListener("DOMContentLoaded", () => {
  const scroller = document.querySelector(".ms__scroller");
  const left = document.querySelector(".ms__arrow--left");
  const right = document.querySelector(".ms__arrow--right");

  if (!scroller) return;

  const scrollByAmount = () => Math.min(700, scroller.clientWidth * 0.9);

  left?.addEventListener("click", () => {
    scroller.scrollBy({ left: -scrollByAmount(), behavior: "smooth" });
  });

  right?.addEventListener("click", () => {
    scroller.scrollBy({ left: scrollByAmount(), behavior: "smooth" });
  });
});
