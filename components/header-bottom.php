<?php
// components/header-bottom.php

$bodyTypes = [
  ["name" => "Sedan", "img" => "./assets/images/types/sedan.jpg", "href" => "./cars.php?body_type=sedan"],
  ["name" => "Coupe", "img" => "./assets/images/types/coupe.jpg", "href" => "./cars.php?body_type=coupe"],
  ["name" => "SUV", "img" => "./assets/images/types/suv.jpg", "href" => "./cars.php?body_type=suv"],
  ["name" => "Truck", "img" => "./assets/images/types/pickup.jpg", "href" => "./cars.php?body_type=pickup"],
  ["name" => "Hatchback", "img" => "./assets/images/types/hatchback.jpg", "href" => "./cars.php?body_type=hatchback"],
  ["name" => "Convertible", "img" => "./assets/images/types/convertible.jpg", "href" => "./cars.php?body_type=convertible"],
  ["name" => "Luxury", "img" => "./assets/images/types/luxury.jpg", "href" => "./cars.php?body_type=luxury"],
  ["name" => "Hatchback", "img" => "./assets/images/types/hatchback.jpg", "href" => "./cars.php?body_type=hatchback"],
  ["name" => "Convertible", "img" => "./assets/images/types/convertible.jpg", "href" => "./cars.php?body_type=convertible"],
  ["name" => "MUV", "img" => "./assets/images/types/muv.jpg", "href" => "./cars.php?body_type=muv"],
  ["name" => "CUV", "img" => "./assets/images/types/cuv.jpg", "href" => "./cars.php?body_type=cuv"],
];

$brands = [
  // A
  ["name" => "Audi", "href" => "./cars.php?brand=audi"],
  ["name" => "Avatr", "href" => "./cars.php?brand=avatr"],

  // B
  ["name" => "BMW", "href" => "./cars.php?brand=bmw"],
  ["name" => "BYD", "href" => "./cars.php?brand=byd"],

  // C
  ["name" => "Changan", "href" => "./cars.php?brand=changan"],
  ["name" => "Chery", "href" => "./cars.php?brand=chery"],
  ["name" => "Citroen", "href" => "./cars.php?brand=citroen"],

  // D
  ["name" => "Daihatsu", "href" => "./cars.php?brand=daihatsu"],
  ["name" => "Datsun", "href" => "./cars.php?brand=datsun"],
  ["name" => "DFSK", "href" => "./cars.php?brand=dfsk"],

  // F
  ["name" => "Fiat", "href" => "./cars.php?brand=fiat"],
  ["name" => "Force", "href" => "./cars.php?brand=force"],
  ["name" => "Ford", "href" => "./cars.php?brand=ford"],
  ["name" => "Foton", "href" => "./cars.php?brand=foton"],

  // G
  ["name" => "Gac", "href" => "./cars.php?brand=gac"],
  ["name" => "Great Wall Motors", "href" => "./cars.php?brand=great-wall-motors"],

  // H
  ["name" => "Henrey", "href" => "./cars.php?brand=henrey"],
  ["name" => "Honda", "href" => "./cars.php?brand=honda"],
  ["name" => "Hyundai", "href" => "./cars.php?brand=hyundai"],

  // I
  ["name" => "Isuzu", "href" => "./cars.php?brand=isuzu"],

  // J
  ["name" => "Jaguar", "href" => "./cars.php?brand=jaguar"],
  ["name" => "Jeep", "href" => "./cars.php?brand=jeep"],

  // K
  ["name" => "Kaiyi", "href" => "./cars.php?brand=kaiyi"],
  ["name" => "Kia", "href" => "./cars.php?brand=kia"],

  // L
  ["name" => "Land Rover", "href" => "./cars.php?brand=land-rover"],
  ["name" => "Leapmotor", "href" => "./cars.php?brand=leapmotor"],
  ["name" => "LS Auto", "href" => "./cars.php?brand=ls-auto"],

  // M
  ["name" => "Mahindra", "href" => "./cars.php?brand=mahindra"],
  ["name" => "Maruti Suzuki", "href" => "./cars.php?brand=maruti-suzuki"],
  ["name" => "Maxus", "href" => "./cars.php?brand=maxus"],
  ["name" => "Mazda", "href" => "./cars.php?brand=mazda"],
  ["name" => "Mercedes", "href" => "./cars.php?brand=mercedes"],
  ["name" => "MG", "href" => "./cars.php?brand=mg"],
  ["name" => "Mitsubishi", "href" => "./cars.php?brand=mitsubishi"],

  // N
  ["name" => "Neta", "href" => "./cars.php?brand=neta"],
  ["name" => "Nissan", "href" => "./cars.php?brand=nissan"],

  // O
  ["name" => "OMODA", "href" => "./cars.php?brand=omoda"],

  // P
  ["name" => "Peugeot", "href" => "./cars.php?brand=peugeot"],
  ["name" => "Proton", "href" => "./cars.php?brand=proton"],

  // R
  ["name" => "Renault", "href" => "./cars.php?brand=renault"],
  ["name" => "Riddara", "href" => "./cars.php?brand=riddara"],

  // S
  ["name" => "Seres", "href" => "./cars.php?brand=seres"],
  ["name" => "Skoda", "href" => "./cars.php?brand=skoda"],
  ["name" => "Skywell", "href" => "./cars.php?brand=skywell"],
  ["name" => "SsangYong", "href" => "./cars.php?brand=ssangyong"],
  ["name" => "Subaru", "href" => "./cars.php?brand=subaru"],

  // T
  ["name" => "Tata", "href" => "./cars.php?brand=tata"],
  ["name" => "Tesla", "href" => "./cars.php?brand=tesla"],
  ["name" => "Toyota", "href" => "./cars.php?brand=toyota"],

  // V
  ["name" => "Volkswagen", "href" => "./cars.php?brand=volkswagen"],

  // W
  ["name" => "Wuling", "href" => "./cars.php?brand=wuling"],

  // Z
  ["name" => "Zeekr", "href" => "./cars.php?brand=zeekr"],
];


$budgets = [
  ["label" => "Under 20 Lakhs", "href" => "./cars.php?budget=under-20l"],
  ["label" => "20–40 Lakhs", "href" => "./cars.php?budget=20-40l"],
  ["label" => "40–60 Lakhs", "href" => "./cars.php?budget=40-60l"],
  ["label" => "60–1 Crore", "href" => "./cars.php?budget=60-100l"],
  ["label" => "Above 1 Crore", "href" => "./cars.php?budget=above-1cr"],
];
?>

<style>
  /* Micro animations without Tailwind config changes */
  @keyframes ch_fadeUp {
    from {
      opacity: 0;
      transform: translateY(10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes ch_pulseDot {

    0%,
    100% {
      transform: scale(1);
    }

    50% {
      transform: scale(1.18);
    }
  }
</style>

<div id="headerBottomBar" class="hidden md:block">
  <div class="max-w-[1304px] mx-auto px-4">
    <nav class="relative h-14 flex items-center justify-center gap-10 text-sm text-slate-800">

      <!-- NEW CAR (MEGA MENU) -->
      <div class="relative group" data-mega="newcar">

        <!-- Trigger -->
        <button
          type="button"
          class="inline-flex items-center gap-2 rounded-lg px-2 py-1 transition hover:text-slate-950 hover:bg-slate-50"
          aria-haspopup="true"
          aria-expanded="false"
          data-mega-trigger>
          <span class="font-medium">New Car</span>
          <svg class="w-4 h-4 text-slate-600 transition group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08z" clip-rule="evenodd" />
          </svg>
        </button>
        <!-- Hover bridge (keeps menu open while moving mouse to panel) -->
        <div class="absolute left-0 right-0 top-full h-5" aria-hidden="true"></div>


        <!-- Mega panel (FULL SITE WIDTH) -->
        <div
          class="pointer-events-none opacity-0 translate-y-2
                 group-hover:pointer-events-auto group-hover:opacity-100 group-hover:translate-y-0
                 fixed left-0 right-0 z-50
                            transition duration-200"
          data-mega-panel
          style="top:0px;">
          <!-- soft glow background -->
          <div class="absolute inset-0 pointer-events-none">
            <!-- <div class="absolute inset-0 bg-[radial-gradient(1200px_380px_at_50%_0%,rgba(245,158,11,.12),transparent_60%)]"></div> -->
          </div>

          <!-- content aligned to container -->
          <div class="relative max-w-[1304px] mx-auto px-4 py-4" style="animation: ch_fadeUp .18s ease-out;">
            <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-[0_18px_40px_rgba(15,23,42,0.08)]">
              <!-- accent -->
              <div class="h-1 w-full bg-[#f59e0b]"></div>

              <div class="grid grid-cols-12">
                <!-- LEFT TABS -->
                <aside class="col-span-3 border-r border-gray-100 bg-gray-50/70">
                  <div class="p-4">
                    <div class="text-xs font-semibold text-slate-500 tracking-wide uppercase">Explore</div>
                  </div>

                  <nav class="px-2 pb-3">
                    <button
                      type="button"
                      class="mega-tab w-full flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold
                             bg-[#f59e0b] text-white shadow-sm"
                      data-tab="bodytype">
                      <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white/20">
                        <i class="fa-solid fa-car-side hover:text-white text-sm"></i>
                      </span>
                      <span class="flex-1 text-left">By Body Type</span>
                      <i class="fa-solid fa-chevron-right text-xs hover:text-white"></i>
                    </button>

                    <button
                      type="button"
                      class="mega-tab w-full mt-2 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold
                             text-slate-700 hover:bg-[#f59e0b] hover:shadow-sm transition"
                      data-tab="brands">
                      <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white/20">
                        <i class="fa-solid fa-tags hover:text-white text-sm"></i>
                      </span>
                      <span class="flex-1 text-left">New Car By Brands</span>
                      <i class="fa-solid fa-chevron-right text-xs hover:text-white"></i>
                    </button>

                    <button
                      type="button"
                      class="mega-tab w-full mt-2 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold
                             text-slate-700 hover:bg-[#f59e0b] hover:shadow-sm transition"
                      data-tab="budget">
                      <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white/20">
                        <i class="fa-solid fa-wallet hover:text-white  text-sm"></i>
                      </span>
                      <span class="flex-1 text-left">New Car By Budget</span>
                      <i class="fa-solid fa-chevron-right text-xs hover:text-white"></i>
                    </button>
                  </nav>
                </aside>

                <!-- RIGHT CONTENT -->
                <div class="col-span-9 p-6">
                  <!-- BODY TYPE -->
                  <div class="mega-panel" data-panel="bodytype">
                    <div class="flex items-center justify-between">
                      <div>
                        <div class="text-sm font-bold text-slate-900">Browse by Body Type</div>
                        <div class="mt-1 text-xs text-slate-500">Popular categories to start exploring.</div>
                      </div>
                      <div class="hidden md:flex items-center gap-2 text-xs text-slate-500">
                        <span class="inline-flex h-2 w-2 rounded-full bg-[#f59e0b]"></span>
                        Hover to preview • Click to open
                      </div>
                    </div>

                    <div class="mt-5 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-5">
                      <?php foreach ($bodyTypes as $t): ?>
                        <a
                          href="<?= htmlspecialchars($t["href"]) ?>"
                          class="group/item rounded-2xl bg-white px-3 py-3 text-center
                                 border border-transparent
                                 hover:border-[#f59e0b]/35 hover:shadow-[0_12px_24px_rgba(15,23,42,0.08)]
                                 hover:-translate-y-0.5 transition">
                          <div class="h-12 flex items-center justify-center">
                            <img
                              src="<?= htmlspecialchars($t["img"]) ?>"
                              alt="<?= htmlspecialchars($t["name"]) ?>"
                              class="h-10 w-auto object-contain mix-blend-multiply pointer-events-none select-none
                                     transition-transform duration-200 group-hover/item:scale-[1.06]"
                              draggable="false"
                              loading="lazy" />
                          </div>
                          <div class="mt-2 text-xs font-semibold text-slate-800 group-hover/item:text-slate-950">
                            <?= htmlspecialchars($t["name"]) ?>
                          </div>
                        </a>
                      <?php endforeach; ?>
                    </div>
                  </div>

                  <!-- BRANDS -->
            
                  <div class="mega-panel hidden" data-panel="brands">
                    <!-- Header row -->
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                      <div>
                        <div class="text-sm font-bold text-slate-900">Brands A–Z</div>
                        <div class="mt-1 text-xs text-slate-500">Choose a brand to explore models.</div>
                      </div>

                      <!-- Search -->
                      <div class="relative w-full sm:w-[340px]">
                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                        <input
                          id="brandSearch"
                          type="text"
                          placeholder="Search brand…"
                          class="w-full rounded-xl border border-gray-200 bg-white px-9 py-2.5 text-sm text-slate-900
               outline-none focus:border-[#f59e0b]/60 focus:ring-4 focus:ring-[#f59e0b]/10
               transition"
                          autocomplete="off" />
                        <button
                          type="button"
                          id="brandClear"
                          class="hidden absolute right-2 top-1/2 -translate-y-1/2 rounded-lg px-2 py-1 text-xs text-slate-500 hover:bg-slate-50">
                          Clear
                        </button>
                      </div>
                    </div>

                    <!-- A–Z quick jump -->
                    <div class="mt-4 flex flex-wrap gap-2">
                      <?php
                      // Build A-Z index from brands (letter = first character)
                      $brandGroups = [];
                      foreach ($brands as $b) {
                        $name = trim($b["name"]);
                        $letter = strtoupper(mb_substr($name, 0, 1));
                        if (!preg_match('/[A-Z]/', $letter)) $letter = '#';
                        $brandGroups[$letter][] = $b;
                      }
                      ksort($brandGroups);

                      $letters = array_keys($brandGroups);
                      ?>

                      <?php foreach ($letters as $L): ?>
                        <button
                          type="button"
                          class="brandJump rounded-full border border-gray-200 bg-white px-3 py-1 text-xs font-semibold text-slate-700
               hover:border-[#f59e0b]/40 hover:bg-[#f59e0b]/10 transition"
                          data-jump="<?= htmlspecialchars($L) ?>">
                          <?= htmlspecialchars($L) ?>
                        </button>
                      <?php endforeach; ?>
                    </div>

                    <!-- Scroll area (only this scrolls) -->
                    <div
                      id="brandScroll"
                      class="mt-5 rounded-2xl border border-gray-200 bg-white p-4
           max-h-[360px] overflow-y-auto"
                      style="scroll-behavior:smooth;">
                      <div id="brandGroupsWrap" class="space-y-8">
                        <?php foreach ($brandGroups as $L => $items): ?>
                          <section class="brandGroup" data-letter="<?= htmlspecialchars($L) ?>">
                            <!-- Sticky letter header -->
                            <div class="sticky top-0 z-10 bg-white/95 backdrop-blur">
                              <div class="py-2">
                                <div
                                  id="brandLetter-<?= htmlspecialchars($L) ?>"
                                  class="inline-flex items-center gap-2">
                                  <span class="inline-flex h-8 w-8 items-center justify-center rounded-xl bg-slate-50 border border-gray-200 text-sm font-extrabold text-slate-900">
                                    <?= htmlspecialchars($L) ?>
                                  </span>
                                  <span class="text-xs text-slate-500">Brands</span>
                                </div>
                              </div>
                              <div class="h-px w-full bg-gray-100"></div>
                            </div>

                            <!-- Brand list: multi-column for desktop -->
                            <div class="mt-3 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-x-6 gap-y-2">
                              <?php foreach ($items as $b): ?>
                                <a
                                  href="<?= htmlspecialchars($b["href"]) ?>"
                                  class="brandItem group flex items-center justify-between rounded-lg px-2 py-2 text-sm
                       text-slate-800 hover:bg-[#f59e0b]/8 hover:text-slate-950 transition"
                                  data-name="<?= htmlspecialchars(strtolower($b["name"])) ?>">
                                  <span class="truncate font-medium"><?= htmlspecialchars($b["name"]) ?></span>
                                  <i class="fa-solid fa-arrow-right text-[10px] text-slate-300 group-hover:text-[#f59e0b] transition"></i>
                                </a>
                              <?php endforeach; ?>
                            </div>
                          </section>
                        <?php endforeach; ?>
                      </div>
                    </div>

                    <!-- Empty state -->
                    <div id="brandEmpty" class="hidden mt-4 rounded-2xl border border-gray-200 bg-white p-6 text-sm text-slate-600">
                      No brands found.
                    </div>
                  </div>

                  <!-- BUDGET -->
                  <div class="mega-panel hidden" data-panel="budget">
                    <div class="text-sm font-bold text-slate-900">Browse by Budget</div>
                    <div class="mt-1 text-xs text-slate-500">Quick picks based on your price range.</div>

                    <div class="mt-5 grid grid-cols-2 sm:grid-cols-3 gap-4">
                      <?php foreach ($budgets as $b): ?>
                        <a
                          href="<?= htmlspecialchars($b["href"]) ?>"
                          class="group/item rounded-2xl border border-gray-200 bg-white px-4 py-3
                                 text-sm font-semibold text-slate-800
                                 hover:border-[#f59e0b]/40 hover:bg-[#f59e0b]/5 hover:-translate-y-0.5
                                 transition">
                          <div class="flex items-center justify-between">
                            <span><?= htmlspecialchars($b["label"]) ?></span>
                            <i class="fa-solid fa-arrow-right text-xs text-slate-400 group-hover/item:text-[#f59e0b] transition"></i>
                          </div>
                        </a>
                      <?php endforeach; ?>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Other nav items -->
      <a href="#" class="hover:text-slate-950 flex items-center gap-2">
        <span>Used Car</span>
        <svg class="w-4 h-4 text-slate-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08z" clip-rule="evenodd" />
        </svg>
      </a>

      <a href="#" class="hover:text-slate-950">Car Review</a>
      <a href="#" class="hover:text-slate-950">Compare Car</a>

      <a href="#" class="hover:text-orange-600 text-orange-500 font-semibold flex items-center gap-1 justify-center items-center">
        <img src="./assets/images/icons/approved-car-icon.svg" alt="Approved Car Icon" class="w-6 h-6" />
        <span>Hamro Approved Car</span>
      </a>
    </nav>
  </div>
</div>

<script>
  (function() {
    // Run once globally
    if (window.__carhamroMegaInit) return;
    window.__carhamroMegaInit = true;

    function setMegaTop() {
      const bar = document.getElementById("headerBottomBar");
      const panel = document.querySelector('[data-mega="newcar"] [data-mega-panel]');
      if (!bar || !panel) return;

      const r = bar.getBoundingClientRect();
      // Start AFTER the header-bottom border (tweak +1/+2 if needed)
      panel.style.top = Math.round(r.bottom) + 1 + "px";
    }

    document.querySelectorAll('[data-mega="newcar"]').forEach((mega) => {
      const tabs = mega.querySelectorAll(".mega-tab");
      const panels = mega.querySelectorAll(".mega-panel");
      const megaPanel = mega.querySelector("[data-mega-panel]");

      function activate(key) {
        tabs.forEach(t => {
          const active = t.dataset.tab === key;

          // reset
          t.classList.remove("bg-[#f59e0b]", "text-white", "shadow-sm");
          t.classList.add("text-slate-700");

          if (active) {
            t.classList.add("bg-[#f59e0b]", "text-white", "shadow-sm");
            t.classList.remove("text-slate-700");
          }
        });

        panels.forEach(p => {
          const isActive = p.dataset.panel === key;
          p.classList.toggle("hidden", !isActive);
          if (isActive) p.style.animation = "ch_fadeUp .18s ease-out";
        });
      }

      // Default tab
      activate("bodytype");

      // Keep aligned below header bottom
      mega.addEventListener("mouseenter", setMegaTop);
      window.addEventListener("resize", setMegaTop);
      window.addEventListener("scroll", () => {
        if (megaPanel && megaPanel.classList.contains("opacity-100")) setMegaTop();
      }, {
        passive: true
      });

      // Tabs switch
      tabs.forEach(t => t.addEventListener("mouseenter", () => activate(t.dataset.tab)));
      tabs.forEach(t => t.addEventListener("click", () => activate(t.dataset.tab)));
    });
    // Brands: search + A–Z jump (inside the mega menu only)
    const brandSearch = document.getElementById("brandSearch");
    const brandClear = document.getElementById("brandClear");
    const brandEmpty = document.getElementById("brandEmpty");
    const brandScroll = document.getElementById("brandScroll");

    function updateBrandClear() {
      if (!brandSearch || !brandClear) return;
      const has = (brandSearch.value || "").trim().length > 0;
      brandClear.classList.toggle("hidden", !has);
    }

    function filterBrands() {
      if (!brandSearch) return;

      const q = (brandSearch.value || "").trim().toLowerCase();
      const groups = document.querySelectorAll('.brandGroup');
      let anyVisible = false;

      groups.forEach(group => {
        const items = group.querySelectorAll('.brandItem');
        let groupHas = false;

        items.forEach(a => {
          const name = a.getAttribute("data-name") || "";
          const show = !q || name.includes(q);
          a.classList.toggle("hidden", !show);
          if (show) groupHas = true;
        });

        group.classList.toggle("hidden", !groupHas);
        if (groupHas) anyVisible = true;
      });

      if (brandEmpty) brandEmpty.classList.toggle("hidden", anyVisible);
      if (brandScroll) brandScroll.classList.toggle("hidden", !anyVisible);
      updateBrandClear();
    }

    if (brandSearch) {
      brandSearch.addEventListener("input", filterBrands);
    }

    if (brandClear) {
      brandClear.addEventListener("click", () => {
        brandSearch.value = "";
        filterBrands();
        brandSearch.focus();
      });
    }

    // A–Z Jump
    document.querySelectorAll(".brandJump").forEach(btn => {
      btn.addEventListener("click", () => {
        const L = btn.getAttribute("data-jump");
        if (!L) return;

        // If filtered and the section hidden, do nothing
        const section = document.querySelector(`.brandGroup[data-letter="${CSS.escape(L)}"]`);
        if (!section || section.classList.contains("hidden")) return;

        const anchor = document.getElementById(`brandLetter-${L}`);
        if (!anchor || !brandScroll) return;

        // Scroll inside the brand scroll container
        const top = anchor.offsetTop - 8;
        brandScroll.scrollTo({
          top,
          behavior: "smooth"
        });
      });
    });

  })();
</script>
<style>
  .brandItem { transition: background-color .15s ease, transform .15s ease, opacity .15s ease; }
  .brandItem:hover { transform: translateX(2px); }
</style>
