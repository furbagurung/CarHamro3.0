<!-- AUTH MODAL (Login/Register) -->
<div class="auth" id="authModal" aria-hidden="true">
  <div class="auth__backdrop" data-auth-close></div>

  <div class="auth__dialog" role="dialog" aria-modal="true" aria-labelledby="authTitle">
    <button class="auth__close" type="button" aria-label="Close" data-auth-close>×</button>

    <!-- LOGIN VIEW -->
    <div class="auth__view auth__view--active" id="authLoginView">
      <div class="auth__head">
        <h3 class="auth__title" id="authTitle">Log in to your account</h3>
        <p class="auth__sub">Welcome back! Please enter your details.</p>
      </div>

      <form class="auth__form" action="#" method="post">
        <label class="auth__label">Email <span class="auth__req">*</span></label>
        <input class="auth__input" type="email" placeholder="Enter your email" required />

        <label class="auth__label">Password <span class="auth__req">*</span></label>
        <div class="auth__pass">
          <input class="auth__input auth__input--pass" id="loginPass" type="password" placeholder="••••••••••" required />
          <button class="auth__eye" type="button" aria-label="Show password" data-toggle-pass="loginPass">👁</button>
        </div>

        <div class="auth__row">
          <label class="auth__check">
            <input type="checkbox" />
            <span>Remember for 30 days</span>
          </label>

          <a class="auth__link" href="#">Forgot password</a>
        </div>

        <button class="auth__btn" type="submit">Sign In</button>

        <div class="auth__or"><span>OR</span></div>

        <div class="auth__social">
          <button class="auth__socialBtn" type="button" aria-label="Continue with Google">G</button>
          <button class="auth__socialBtn" type="button" aria-label="Continue with Facebook">f</button>
        </div>

        <p class="auth__foot">
          Don't have an account?
          <button class="auth__linkBtn" type="button" data-auth-switch="register">Sign up</button>
        </p>
      </form>
    </div>

    <!-- REGISTER VIEW -->
    <div class="auth__view" id="authRegisterView">
      <div class="auth__head">
        <h3 class="auth__title">Create an account</h3>
        <p class="auth__sub">Sign up to list cars, save searches, and chat with sellers.</p>
      </div>

      <form class="auth__form" action="#" method="post">
        <label class="auth__label">Full Name <span class="auth__req">*</span></label>
        <input class="auth__input" type="text" placeholder="Enter your full name" required />

        <label class="auth__label">Email <span class="auth__req">*</span></label>
        <input class="auth__input" type="email" placeholder="Enter your email" required />

        <label class="auth__label">Password <span class="auth__req">*</span></label>
        <div class="auth__pass">
          <input class="auth__input auth__input--pass" id="regPass" type="password" placeholder="Create a password" required />
          <button class="auth__eye" type="button" aria-label="Show password" data-toggle-pass="regPass">👁</button>
        </div>

        <button class="auth__btn" type="submit">Create Account</button>

        <p class="auth__foot">
          Already have an account?
          <button class="auth__linkBtn" type="button" data-auth-switch="login">Log in</button>
        </p>
      </form>
    </div>
  </div>
</div>
