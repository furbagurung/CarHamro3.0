<?php
// components/ad-banner-image-only.php

$href   = $href   ?? '#';
$img    = $img    ?? './assets/images/banners/promo-banner.gif';
$alt    = $alt    ?? 'Advertisement';
$target = $target ?? ''; // set "_blank" if needed
?>

<section class="mt-10">
  <div class="max-w-[1304px] mx-auto px-4">
    <a href="<?= htmlspecialchars($href) ?>" target="<?= htmlspecialchars($target) ?>" class="block">
      <div class="mx-auto w-full max-w-[1304px] overflow-hidden rounded-2xl border border-neutral-200">
        <img
          src="<?= htmlspecialchars($img) ?>"
          alt="<?= htmlspecialchars($alt) ?>"
          class="block w-full h-auto"
          width="1118"
          height="217"
          loading="lazy"
        />
      </div>
    </a>
  </div>
</section>
