<?php
// components/mobile-drawer.php
?>
<!-- Backdrop -->
<div id="mobileBackdrop"
    class="fixed inset-0 bg-black/40 z-[60] hidden md:hidden"
    aria-hidden="true"></div>

<!-- Drawer -->
<aside id="mobileDrawer"
    class="fixed top-0 left-0 h-full w-[84%] max-w-[340px] bg-white z-[70] -translate-x-full transition-transform duration-200 md:hidden"
    aria-label="Mobile menu">

    <!-- PANELS WRAPPER -->
    <div class="h-full relative">

        <!-- ============ PANEL: MAIN ============ -->
        <section data-panel="main" class="h-full flex flex-col">
            <!-- Header -->
            <div class="h-16 px-4 flex items-center justify-between border-b border-slate-200">
                <a href="/index.php" class="flex items-center">
                    <img src="./assets/images/logo/carhamro-logo.png"
                        alt="Logo" class="h-8 w-auto object-contain" />
                </a>

                <button id="mobileClose" class="p-2 rounded-lg hover:bg-slate-100" aria-label="Close menu">
                    <svg class="w-6 h-6 text-slate-800" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <!-- Menu -->
            <div class="px-4 py-3 flex-1 overflow-y-auto">
                <button data-nav="newcar"
                    class="w-full flex items-center justify-between py-4 text-slate-900">
                    <span class="text-base">New Car</span>
                    <svg class="w-5 h-5 text-slate-500" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="h-px bg-slate-200"></div>

                <button data-nav="usedcar"
                    class="w-full flex items-center justify-between py-4 text-slate-900">
                    <span class="text-base">Used Car</span>
                    <svg class="w-5 h-5 text-slate-500" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="h-px bg-slate-200"></div>

                <a href="#" class="block py-4 text-slate-900 text-base">Car Reviews</a>

                <div class="py-4">
                    <a href="#" class="flex items-center gap-3 text-orange-500 font-semibold">
                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-orange-500 text-white">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M7 12l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span>Hamro Approved Car</span>
                    </a>
                </div>

                <div class="mt-2 space-y-3">
                    <a href="/index.php?page=sell"
                        class="block w-full text-center rounded-xl bg-[#2B1A06] text-white font-semibold py-4">
                        Sell Your Car
                    </a>

                    <a href="/index.php?page=login"
                        class="flex items-center justify-center gap-2 w-full rounded-xl border border-slate-200 bg-white py-4 text-slate-700">
                        <svg class="w-5 h-5 text-slate-600" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Z" stroke="currentColor" stroke-width="2" />
                            <path d="M20 20a8 8 0 1 0-16 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span>Login/Register</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Reusable Back Bar -->
        <?php
        function drawer_backbar($to = "main")
        { ?>
            <div class="h-14 px-4 flex items-center gap-2 bg-slate-100 border-b border-slate-200">
                <button data-back="<?= htmlspecialchars($to) ?>" class="inline-flex items-center gap-2 text-sm text-slate-800">
                    <svg class="w-5 h-5 text-slate-700" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Back</span>
                </button>
            </div>
        <?php }
        ?>

        <!-- ============ PANEL: NEW CAR ============ -->
        <section data-panel="newcar" class="hidden h-full flex-col">
            <div class="h-16 px-4 flex items-center justify-between border-b border-slate-200 bg-white">
                <a href="/index.php" class="flex items-center">
                    <img src="./assets/images/logo/carhamro-logo.png"
                        alt="Logo" class="h-8 w-auto object-contain" />
                </a>
                <button data-close class="p-2 rounded-lg hover:bg-slate-100" aria-label="Close menu">
                    <svg class="w-6 h-6 text-slate-800" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <?php drawer_backbar("main"); ?>

            <div class="px-4 py-3 flex-1 overflow-y-auto">
                <button data-nav="new_body" class="w-full flex items-center justify-between py-4 text-slate-900">
                    <span class="text-base">By Body Type</span>
                    <svg class="w-5 h-5 text-slate-500" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="h-px bg-slate-200"></div>

                <button data-nav="new_brands" class="w-full flex items-center justify-between py-4 text-slate-900">
                    <span class="text-base">New Car By Brands</span>
                    <svg class="w-5 h-5 text-slate-500" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="h-px bg-slate-200"></div>

                <button data-nav="new_budget" class="w-full flex items-center justify-between py-4 text-slate-900">
                    <span class="text-base">New Car By Budget</span>
                    <svg class="w-5 h-5 text-slate-500" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </section>

        <!-- ============ PANEL: USED CAR ============ -->
        <section data-panel="usedcar" class="hidden h-full flex-col">
            <div class="h-16 px-4 flex items-center justify-between border-b border-slate-200 bg-white">
                <a href="/index.php" class="flex items-center">
                    <img src="./assets/images/logo/carhamro-logo.png"
                        alt="Logo" class="h-8 w-auto object-contain" />
                </a>
                <button data-close class="p-2 rounded-lg hover:bg-slate-100" aria-label="Close menu">
                    <svg class="w-6 h-6 text-slate-800" viewBox="0 0 24 24" fill="none">
                        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <?php drawer_backbar("main"); ?>

            <div class="px-4 py-3 flex-1 overflow-y-auto">
                <button data-nav="used_brands" class="w-full flex items-center justify-between py-4 text-slate-900">
                    <span class="text-base">Used Car By Brands</span>
                    <svg class="w-5 h-5 text-slate-500" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="h-px bg-slate-200"></div>

                <button data-nav="used_budget" class="w-full flex items-center justify-between py-4 text-slate-900">
                    <span class="text-base">Used Car By Budget</span>
                    <svg class="w-5 h-5 text-slate-500" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </section>

        <!-- ============ PANEL: NEW BY BODY TYPE ============ -->
        <section data-panel="new_body" class="hidden h-full flex-col">
            <div class="h-16 px-4 flex items-center justify-between border-b border-slate-200 bg-white">
                <a href="/index.php"><img src="./assets/images/logo/carhamro-logo.png"
                        alt="Logo" class="h-8 w-auto object-contain" /></a>
                <button data-close class="p-2 rounded-lg hover:bg-slate-100" aria-label="Close menu">
                    <svg class="w-6 h-6 text-slate-800" viewBox="0 0 24 24" fill="none">
                        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <?php drawer_backbar("newcar"); ?>

            <div class="px-4 py-3 flex-1 overflow-y-auto">
                <?php
                $bodyTypes = ["Sedan", "Coupe", "SUV", "Truck", "Hatchback", "Convertible"];
                foreach ($bodyTypes as $t):
                ?>
                    <a href="#" class="block py-4 text-slate-900 text-base"><?= htmlspecialchars($t) ?></a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ============ PANEL: NEW BY BRANDS (GROUPS) ============ -->
        <section data-panel="new_brands" class="hidden h-full flex-col">
            <div class="h-16 px-4 flex items-center justify-between border-b border-slate-200 bg-white">
                <a href="/index.php"><img src="./assets/images/logo/carhamro-logo.png"
                        alt="Logo" class="h-8 w-auto object-contain" /></a>
                <button data-close class="p-2 rounded-lg hover:bg-slate-100" aria-label="Close menu">
                    <svg class="w-6 h-6 text-slate-800" viewBox="0 0 24 24" fill="none">
                        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <?php drawer_backbar("newcar"); ?>

            <div class="px-4 py-3 flex-1 overflow-y-auto space-y-2">
                <?php
                $brandGroups = [
                    "A-D" => ["Audi", "BMW", "Chevrolet", "Datsun"],
                    "E-I" => ["Ford", "Honda", "Hyundai", "Isuzu"],
                    "J-N" => ["Jeep", "Kia", "Mahindra", "Nissan"],
                    "P-Z" => ["Renault", "Skoda", "Suzuki", "Toyota", "Volkswagen"],
                ];
                foreach ($brandGroups as $label => $brands):
                ?>
                    <details class="group rounded-xl border border-slate-200 bg-white">
                        <summary class="list-none cursor-pointer px-4 py-4 flex items-center justify-between">
                            <span class="text-slate-900"><?= htmlspecialchars($label) ?></span>
                            <svg class="w-5 h-5 text-slate-600 transition-transform group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08z" clip-rule="evenodd" />
                            </svg>
                        </summary>
                        <div class="px-4 pb-4 space-y-3">
                            <?php foreach ($brands as $b): ?>
                                <a href="#" class="block text-slate-700"><?= htmlspecialchars($b) ?></a>
                            <?php endforeach; ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ============ PANEL: BUDGET (REUSABLE UI) ============ -->
        <?php
        function budget_panel($panelId, $backTo)
        { ?>
            <section data-panel="<?= htmlspecialchars($panelId) ?>" class="hidden h-full flex-col">
                <div class="h-16 px-4 flex items-center justify-between border-b border-slate-200 bg-white">
                    <a href="/index.php"><img src="./assets/images/logo/carhamro-logo.png"
                            alt="Logo" class="h-8 w-auto object-contain" /></a>
                    <button data-close class="p-2 rounded-lg hover:bg-slate-100" aria-label="Close menu">
                        <svg class="w-6 h-6 text-slate-800" viewBox="0 0 24 24" fill="none">
                            <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>

                <?php drawer_backbar($backTo); ?>

                <div class="px-4 py-4 flex-1 overflow-y-auto">
                    <div class="font-semibold text-slate-900">Pick a Budget</div>
                    <div class="text-sm text-slate-600 mt-1">Choose your suitable price for your dream car.</div>

                    <div class="mt-4 rounded-2xl border border-slate-200 bg-white p-4">
                        <div class="flex items-center justify-between text-xs text-slate-500">
                            <span id="<?= $panelId ?>_minLabel">₹ 1 Lakh</span>
                            <span id="<?= $panelId ?>_maxLabel">₹ 3 Crore</span>
                        </div>

                        <div class="mt-3 space-y-3">
                            <input id="<?= $panelId ?>_min" type="range" min="1" max="300" value="1" class="w-full" />
                            <input id="<?= $panelId ?>_max" type="range" min="1" max="300" value="300" class="w-full" />
                        </div>

                        <div class="mt-4 grid grid-cols-2 gap-3">
                            <div class="rounded-xl border border-slate-200 p-3">
                                <div class="text-[11px] text-slate-500">Min Price</div>
                                <div class="text-sm font-medium" id="<?= $panelId ?>_minBox">NPRs 1 Lakh</div>
                            </div>
                            <div class="rounded-xl border border-slate-200 p-3">
                                <div class="text-[11px] text-slate-500">Max Price</div>
                                <div class="text-sm font-medium" id="<?= $panelId ?>_maxBox">NPRs 3 Crore</div>
                            </div>
                        </div>

                        <button class="mt-4 w-full rounded-full bg-orange-500 text-white font-semibold py-3 flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none">
                                <path d="M11 19a8 8 0 1 1 0-16 8 8 0 0 1 0 16Z" stroke="currentColor" stroke-width="2" />
                                <path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            Find Listing
                        </button>
                    </div>

                    <div class="mt-6">
                        <div class="font-semibold text-slate-900">What is your price range?</div>
                        <div class="text-sm text-slate-600 mt-1">Confused, Try our Budget Suggestion</div>

                        <div class="mt-4 space-y-3">
                            <?php
                            $ranges = [
                                "Under 2 Lakh",
                                "Rs 2 - 3 Lakh",
                                "Rs 3 - 5 Lakh",
                                "Rs 5 - 8 Lakh",
                                "Rs 8 - 10 Lakh",
                                "Above Rs 10 Lakh",
                            ];
                            foreach ($ranges as $r):
                            ?>
                                <label class="flex items-center gap-3 text-slate-800">
                                    <input type="checkbox" class="h-4 w-4 rounded border-slate-300" />
                                    <span class="text-sm"><?= htmlspecialchars($r) ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Bottom CTA (like your last screenshot) -->
                    <button class="mt-6 w-full rounded-full bg-orange-500 text-white font-semibold py-4 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none">
                            <path d="M11 19a8 8 0 1 1 0-16 8 8 0 0 1 0 16Z" stroke="currentColor" stroke-width="2" />
                            <path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Find Listing
                    </button>
                </div>
            </section>
        <?php }
        ?>

        <?php budget_panel("new_budget", "newcar"); ?>
        <?php budget_panel("used_budget", "usedcar"); ?>

        <!-- ============ PANEL: USED BY BRANDS (reuse same groups UI) ============ -->
        <section data-panel="used_brands" class="hidden h-full flex-col">
            <div class="h-16 px-4 flex items-center justify-between border-b border-slate-200 bg-white">
                <a href="/index.php"><img src="./assets/images/logo/carhamro-logo.png"
                        alt="Logo" class="h-8 w-auto object-contain" /></a>
                <button data-close class="p-2 rounded-lg hover:bg-slate-100" aria-label="Close menu">
                    <svg class="w-6 h-6 text-slate-800" viewBox="0 0 24 24" fill="none">
                        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <?php drawer_backbar("usedcar"); ?>

            <div class="px-4 py-3 flex-1 overflow-y-auto space-y-2">
                <?php foreach ($brandGroups as $label => $brands): ?>
                    <details class="group rounded-xl border border-slate-200 bg-white">
                        <summary class="list-none cursor-pointer px-4 py-4 flex items-center justify-between">
                            <span class="text-slate-900"><?= htmlspecialchars($label) ?></span>
                            <svg class="w-5 h-5 text-slate-600 transition-transform group-open:rotate-180" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08z" clip-rule="evenodd" />
                            </svg>
                        </summary>
                        <div class="px-4 pb-4 space-y-3">
                            <?php foreach ($brands as $b): ?>
                                <a href="#" class="block text-slate-700"><?= htmlspecialchars($b) ?></a>
                            <?php endforeach; ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </section>

    </div>
</aside>