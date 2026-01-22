(function () {
  const modal = document.getElementById("authModal");
  if (!modal) return;

  const loginView = document.getElementById("authLoginView");
  const regView = document.getElementById("authRegisterView");

  function open(which) {
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
    switchView(which || "login");
  }

  function close() {
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  function switchView(which) {
    const isLogin = which === "login";
    loginView.classList.toggle("auth__view--active", isLogin);
    regView.classList.toggle("auth__view--active", !isLogin);
  }

  // expose for header buttons
  window.openAuthModal = open;

  // close handlers
  modal.addEventListener("click", (e) => {
    if (e.target.matches("[data-auth-close]")) close();
  });

  // Esc close
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.classList.contains("is-open")) close();
  });

  // switch login/register
  modal.addEventListener("click", (e) => {
    const btn = e.target.closest("[data-auth-switch]");
    if (!btn) return;
    switchView(btn.getAttribute("data-auth-switch"));
  });

  // password toggle
  modal.addEventListener("click", (e) => {
    const btn = e.target.closest("[data-toggle-pass]");
    if (!btn) return;
    const id = btn.getAttribute("data-toggle-pass");
    const input = document.getElementById(id);
    if (!input) return;
    input.type = input.type === "password" ? "text" : "password";
  });
})();
