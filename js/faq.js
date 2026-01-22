(function () {
  const root = document.getElementById("faqRoot");
  if (!root) return;

  root.addEventListener("click", function (e) {
    const btn = e.target.closest(".faq-q");
    if (!btn) return;

    const item = btn.closest(".faq-item");
    const answer = item.querySelector(".faq-a");
    const isOpen = btn.getAttribute("aria-expanded") === "true";

    // Close all
    root.querySelectorAll(".faq-q[aria-expanded='true']").forEach((b) => {
      b.setAttribute("aria-expanded", "false");
      const it = b.closest(".faq-item");
      const a = it.querySelector(".faq-a");
      if (a) a.hidden = true;
    });

    // Toggle current
    if (!isOpen) {
      btn.setAttribute("aria-expanded", "true");
      answer.hidden = false;
    }
  });
})();
