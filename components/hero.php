 <!-- Hero Section  -->
  <section class="hero" aria-label="Hero">
    <div class="hero__bg" role="img" aria-label="Car background"></div>

    <div class="hero__container">
      <!-- Left: Search Card -->
      <div class="hero-card" aria-label="Find your right car">
        <h2 class="hero-card__title">Find your right car</h2>

        <div class="hero-tabs" role="tablist" aria-label="New or Used">
          <button class="hero-tab hero-tab--active" role="tab" aria-selected="true" type="button">
            New
          </button>
          <button class="hero-tab" role="tab" aria-selected="false" type="button">
            Used
          </button>
        </div>

        <div class="hero-radio">
          <label class="radio">
            <input type="radio" name="mode" checked />
            <span class="radio__dot"></span>
            <span class="radio__text">By Budget</span>
          </label>

          <label class="radio">
            <input type="radio" name="mode" />
            <span class="radio__dot"></span>
            <span class="radio__text">By Model</span>
          </label>
        </div>

        <div class="hero-fields">
          <div class="select">
            <select>
              <option selected disabled>Select a Budget</option>
              <option>10–20 Lakhs</option>
              <option>20–30 Lakhs</option>
              <option>30–50 Lakhs</option>
            </select>
            <span class="select__caret" aria-hidden="true"></span>
          </div>

          <div class="select">
            <select>
              <option selected disabled>Select a Vehicle Type</option>
              <option>SUV</option>
              <option>Sedan</option>
              <option>Hatchback</option>
            </select>
            <span class="select__caret" aria-hidden="true"></span>
          </div>
        </div>

        <button class="hero-search" type="button">
          <span class="hero-search__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Z" stroke="currentColor" stroke-width="2" />
              <path d="M16.5 16.5 21 21" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
          </span>
          <span>Search</span>
        </button>

        <a class="hero-advanced" href="#">
          <span>Advanced Search</span>
          <span class="hero-advanced__arrow" aria-hidden="true">→</span>
        </a>
      </div>

      <!-- Right: Headline -->
      <div class="hero-copy">
        <h1 class="hero-copy__title">
          Lets Us help you find a
          <span class="hero-copy__hl">Car</span><br />
          <span class="hero-copy__hl">that suits you</span>
          and your needs.
        </h1>
        <p class="hero-copy__sub">
          Save on buying your dream car with Car Hamro.
        </p>
      </div>
    </div>
  </section>
