<?php
// components/faq.php (refactored: each item contains its own panel)

$faqs = [
  ["q" => "What is CarHamro?", "a" => "CarHamro.com is a leading website in Nepal that helps its users find all the data they want regarding cars in one consolidated, simple, and user-friendly way. It is the best website to buy used cars and the best place to sell your car in Nepal."],
  ["q" => "How does CarHamro work?", "a" => "Create a profile, list your car, or browse cars for sale, and get offers from trusted buyers or dealers. Whether you want to buy or sell cars, registration takes just minutes and makes the process smooth and secure."],
  ["q" => "Does it cost anything to post my car on CarHamro?", "a" => "Posting is free. A small fee applies only for Hamro Approved car listings. CarHamro remains the best website to sell your car quickly and safely."],
  ["q" => "What is Hamro Approved Cars?", "a" => "Hamro Approved Cars come with a verified badge for trust, higher visibility on the platform, personalized social media promotions, ads on Meta, targeted promotion in car groups, and a dedicated listing to ensure faster and more effective reach."],
  ["q" => "Can dealers list multiple cars on CarHamro?", "a" => "Yes. Dealers can create a profile on CarHamro and list multiple cars for sale at once, making it the best place to sell your cars in bulk."],
  ["q" => "How do I know if a car listing is genuine?", "a" => "Look for the 'Hamro Approved' badge. These listings are verified by CarHamro for quality, safety, and authenticity to ensure a trustworthy transaction."],
  ["q" => "Why should I choose CarHamro over other platforms?", "a" => "CarHamro is Nepal’s trusted car marketplace with thousands of active listings and verified sellers. It’s the best website to buy used cars and the best website to sell your car in Nepal."],
  ["q" => "How long does it take to sell a car on CarHamro?", "a" => "The time can vary, but Hamro Approved Cars with added promotions usually sell faster due to strong visibility and buyer reach."],
  ["q" => "Does CarHamro only list cars, or other vehicles too?", "a" => "Currently, we mainly focus on cars, including SUVs, hatchbacks, sedans, and electric vehicles. We are planning to expand into bikes and the transport sector soon."],
  ["q" => "Do I need photos to list my car on CarHamro?", "a" => "Yes, uploading clear photos is highly recommended. Listings with photos attract more buyers and sell faster, making your ad stand out among other cars for sale."],
];

// split into 2 columns
$left  = array_slice($faqs, 0, 5);
$right = array_slice($faqs, 5);

function faqItem($idx, $q, $a) {
  $qid = "faq_" . $idx;
  $qEsc = htmlspecialchars($q);
  $aEsc = htmlspecialchars($a);

  return <<<HTML
  <div class="faq-item rounded-2xl bg-white shadow-sm border border-gray-100 overflow-hidden">
    <button
      type="button"
      class="faq-trigger w-full px-6 py-5 text-left flex items-center gap-4 hover:bg-gray-50 transition-all duration-200 ease-in-out"
      aria-expanded="false"
      aria-controls="{$qid}">
      <span class="flex-1 text-sm md:text-base font-semibold text-gray-900">{$qEsc}</span>
      <span class="grid h-10 w-10 place-items-center rounded-full border border-gray-200 bg-white text-gray-900">
        <span class="faq-plus text-xl leading-none">+</span>
        <span class="faq-x hidden text-xl leading-none">×</span>
      </span>
    </button>

    <div id="{$qid}" class="faq-panel hidden px-6 pb-6 text-sm text-gray-600 leading-6">
      <p>{$aEsc}</p>
    </div>
  </div>
HTML;
}
?>

<section id="faq" class="mt-12 py-16 ">
  <div class="max-w-[1304px] mx-auto px-4">
    <!-- Header -->
    <div class="flex flex-col gap-6 md:flex-row md:items-start md:justify-between">
      <div class="max-w-2xl">
        <h2 class="text-[44px] md:text-[56px] leading-[1.05] font-heading font-bold text-gray-900">
          Got any questions?
        </h2>
        <p class="mt-2 text-[38px] md:text-[52px] leading-[1.05] font-heading font-bold text-gray-300">
          We've got answers.
        </p>
      </div>


    </div>

    <!-- Two columns -->
    <div class="mt-10 grid grid-cols-1 gap-8 lg:grid-cols-2 ">
      <div class="space-y-4 ">
        <?php foreach ($left as $i => $item): ?>
          <?= faqItem($i + 1, $item["q"], $item["a"]) ?>
        <?php endforeach; ?>
      </div>

      <div class="space-y-4">
        <?php foreach ($right as $i => $item): ?>
          <?= faqItem($i + 6, $item["q"], $item["a"]) ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<script>
  (function () {
    const root = document.getElementById("faq");
    if (!root) return;

    const items = Array.from(root.querySelectorAll(".faq-item"));

    function closeAll() {
      items.forEach((item) => {
        const btn = item.querySelector(".faq-trigger");
        const panel = item.querySelector(".faq-panel");
        if (!btn || !panel) return;

        btn.setAttribute("aria-expanded", "false");
        panel.classList.add("hidden");
        item.querySelector(".faq-plus")?.classList.remove("hidden");
        item.querySelector(".faq-x")?.classList.add("hidden");
      });
    }

    root.addEventListener("click", (e) => {
      const btn = e.target.closest(".faq-trigger");
      if (!btn) return;

      const item = btn.closest(".faq-item");
      const panel = item?.querySelector(".faq-panel");
      if (!item || !panel) return;

      const isOpen = btn.getAttribute("aria-expanded") === "true";

      closeAll();

      if (!isOpen) {
        btn.setAttribute("aria-expanded", "true");
        panel.classList.remove("hidden");
        item.querySelector(".faq-plus")?.classList.add("hidden");
        item.querySelector(".faq-x")?.classList.remove("hidden");
      }
    });
  })();
</script>
