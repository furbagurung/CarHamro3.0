<?php
// components/ad-banner-image.php

$href      = $href      ?? '#';
$img       = $img       ?? './assets/images/banners/ad-banner-1200x260.jpg';
$alt       = $alt       ?? 'Advertisement';
$height    = $height    ?? 'h-[140px] md:h-[220px]'; // banner height
$label     = $label     ?? 'Sponsored';
$showLabel = $showLabel ?? true;
?>

<section class="mt-16">
  <div class="max-w-[1200px] mx-auto px-4">
    <a href="<?= htmlspecialchars($href) ?>" class="group block">
      <div class="relative overflow-hidden rounded-2xl border border-neutral-200 <?= $height ?>">

        <!-- Full image -->
        <img
          src="<?= htmlspecialchars($img) ?>"
          alt="<?= htmlspecialchars($alt) ?>"
          class="absolute inset-0 w-full h-full object-cover"
          loading="lazy"
        />

        <!-- Optional: overlay for better contrast -->
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/15 transition"></div>

        <!-- Optional label -->
        <?php if ($showLabel): ?>
          <span class="absolute left-4 top-4 z-10 rounded-md bg-white/85 px-3 py-1 text-xs font-semibold text-neutral-800 backdrop-blur">
            <?= htmlspecialchars($label) ?>
          </span>
        <?php endif; ?>

      </div>
    </a>
  </div>
</section>
