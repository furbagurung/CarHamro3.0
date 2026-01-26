<!-- hero.php -->
<?php
// slides (example)
$slides = [
  "./assets/images/hero/slide-1.jpg",
  "./assets/images/hero/slide-2.jpg",
  "./assets/images/hero/slide-3.jpg",
];
?>



<section class="w-full bg-transparent py-6 font-figtree">
  <div class="w-full max-w-[1304px] ">
    <div class="hero-carousel relative overflow-hidden rounded-2xl bg-neutral-900 shadow-lg ring-1 ring-black/10">

      <!-- Slider -->
      <div class="h-[160px] sm:h-[260px] lg:h-[480px]">
        <div class="hero-track flex h-full w-full">
          <?php foreach ($slides as $src): ?>
            <div class="relative h-full w-full shrink-0">
              <img src="<?= htmlspecialchars($src) ?>" alt="Hero slide" class="h-full w-full object-cover" />
              <div class="pointer-events-none absolute inset-0 bg-gradient-to-r from-black/70 via-black/25 to-transparent"></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- ✅ Hero Search Card (DESKTOP ONLY) -->
      <div class="absolute left-10 top-1/2 -translate-y-1/2 z-30 hidden lg:block">
        <div class="w-[318px] h-[381px]">
          <?php include __DIR__ . "/hero-search-card.php"; ?>
        </div>
      </div>

      <!-- ✅ Hero Text (LEFT aligned + pushed right on lg to avoid the card) -->
      <div class="pointer-events-none absolute inset-x-0 bottom-10 sm:bottom-12 z-20">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8 ">
          <div class="w-[3xs] sm:w-xs max-w-[420px] text-left lg:ml-[420px]  ">
            <div class="text-white font-bold leading-[1.1] text-[16px] sm:text-[26px] md:text-[30px]">
              Buy &amp; Sell Cars in Nepal
            </div>

            <div class="hidden lg:block mt-1 text-amber-500 font-bold leading-[1.1] text-[16px] sm:text-[34px] md:text-[30px]
                        underline decoration-amber-500 decoration-[3px] underline-offset-[6px]">
              New &amp; Used Car Listings
            </div>

            <div class="mt-3 text-white/95 font-normal text-[10px] sm:text-[13px] leading-tight">
              Save on buying your dream car with Car Hamro.
            </div>
          </div>
        </div>
      </div>

      <!-- Dots -->
      <div class="absolute bottom-4 left-1/2 z-20 flex -translate-x-1/2 gap-2">
        <span class="h-2 w-2 rounded-full bg-white/70"></span>
        <span class="h-2 w-2 rounded-full bg-white/30"></span>
        <span class="h-2 w-2 rounded-full bg-white/30"></span>
      </div>

      <div class="pointer-events-none absolute inset-0 z-10 ring-1 ring-white/10"></div>
    </div>
  </div>
</section>