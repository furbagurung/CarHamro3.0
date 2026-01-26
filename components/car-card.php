<?php
// components/most-searched-car-card.php
// Expected variables: $car (array)

$title    = $car["title"]    ?? "Car Title";
$img      = $car["img"]      ?? "./assets/images/cars/demo-1.jpg";
$miles    = $car["miles"]    ?? "50 Miles";
$fuel     = $car["fuel"]     ?? "Petrol";
$trans    = $car["trans"]    ?? "Automatic";
$price    = $car["price"]    ?? "NPRs 28–36 lakhs";
$cta      = $car["cta"]      ?? "Find a Deal";
$ctaLink  = $car["cta_link"] ?? "#";
$tabKey   = $car["tab"]      ?? "0-3";
?>

<article
    class="mscCard group w-[290px] min-w-[290px] rounded-2xl border border-neutral-200 bg-white shadow-[0_10px_30px_rgba(17,24,39,0.06)] hover:shadow-[0_14px_40px_rgba(17,24,39,0.10)] transition"
    data-tab="<?= htmlspecialchars($tabKey) ?>">
    <!-- Image -->
    <div class="relative overflow-hidden rounded-t-2xl">
        <img
            src="<?= htmlspecialchars($img) ?>"
            alt="<?= htmlspecialchars($title) ?>"
            class="h-[180px] w-full object-cover transition duration-300 group-hover:scale-[1.02] pointer-events-none select-none"
            loading="lazy"
            draggable="false" />


        <!-- Save button -->
        <button
            type="button"
            class="absolute right-3 top-3 grid h-9 w-9 place-items-center rounded-full bg-white/90 shadow-sm backdrop-blur hover:bg-white transition"
            aria-label="Save">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="text-neutral-900">
                <path d="M6 3h12a1 1 0 0 1 1 1v17l-7-4-7 4V4a1 1 0 0 1 1-1Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
            </svg>
        </button>
    </div>

    <!-- Body -->
    <div class="p-5">
        <h3 class="text-[18px] font-heading text-neutral-900 leading-snug">
            <?= htmlspecialchars($title) ?>
        </h3>

        <div class="mt-4 border-t border-neutral-200 pt-4">
            <div class="grid grid-cols-3 gap-3 text-center text-xs text-neutral-600">

                <div class="flex flex-col items-center gap-1">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="text-neutral-700">
                        <path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" stroke="currentColor" stroke-width="1.8" />
                        <path d="M4 12a8 8 0 1 1 16 0" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <path d="M12 12l4-3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                    <span><?= htmlspecialchars($miles) ?></span>
                </div>

                <div class="flex flex-col items-center gap-1">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="text-neutral-700">
                        <path d="M7 4h8v7a4 4 0 0 1-8 0V4Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                        <path d="M9 4V2h4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <path d="M15 7h2l2 2v9a2 2 0 0 1-2 2h-2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span><?= htmlspecialchars($fuel) ?></span>
                </div>

                <div class="flex flex-col items-center gap-1">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="text-neutral-700">
                        <path d="M12 3v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <path d="M12 15v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <path d="M6 9h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <path d="M6 15h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <path d="M8 9v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        <path d="M16 9v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                    <span><?= htmlspecialchars($trans) ?></span>
                </div>

            </div>
        </div>

        <div class="mt-4 border-t border-neutral-200 pt-4 flex items-center justify-between">
            <span class="text-sm font-semibold text-[#0B1B3A]">
                <?= htmlspecialchars($price) ?>
            </span>

            <a
                href="<?= htmlspecialchars($ctaLink) ?>"
                class="inline-flex items-center gap-2 text-sm font-semibold text-orange-500 hover:text-orange-600 transition">
                <?= htmlspecialchars($cta) ?>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                    <path d="M5 12h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    <path d="M13 6l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
</article>