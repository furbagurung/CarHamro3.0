<?php
$pageTitle = "CarHamro";
$container = "max-w-[1304px] mx-auto px-4";
require __DIR__ . "/components/head.php";
require __DIR__ . "/components/header.php";
?>

<main class=" <?= $container ?> max-w-7xl mx-auto px-4">
  <!-- Full-width banner (responsive) -->
  <section class="w-full">
    <div class="mx-auto w-full pt-2">
      <div
        class="relative w-full overflow-hidden rounded-[14px] h-[190px] sm:h-[210px] md:h-[170px]  bg-black"
        style="
        background-image: url('./assets/images/hero-car.png');
        background-size: cover;
        background-position: 75% center;
      ">
        <!-- overlays -->

        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/50 to-black/10"></div>
        <!-- INNER CONTAINER -->
        <div class="relative mx-auto w-full max-w-[1304px]  h-full flex items-center justify-between gap-6 px-8 py-10">
          <!-- stack on mobile, row on md+ -->
          <div class="w-full flex flex-col gap-4 md:flex-row md:items-center md:gap-6">
            <!-- Left: breadcrumb + title -->
            <div class="min-w-0">
              <div class="text-xs sm:text-sm text-white">
                <a href="/" class="hover:text-white">Home</a>
                <span class="mx-2 text-white">/</span>
                <a href="/new-cars" class="hover:text-white">New Cars</a>
              </div>

              <h1 class="mt-2 md:mt-3 text-[28px] sm:text-[34px] md:text-[40px] leading-none font-heading tracking-wide text-white uppercase">
                OMODA E5 EV
              </h1>
            </div>

            <!-- Right: button -->
            <div class="shrink-0 lg:ml-auto">
              <a
                href="#"
                class="inline-flex items-center px-10 justify-center rounded-xl border bg-black/40 border-white/70   py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                Download Brochure
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- Tabs -->
  <div class="w-full px-4 mt-2 sm:pt-2  rounded-lg">
    <!-- tabs only -->
    <div class="border-b border-gray-200">
      <!-- This wrapper prevents page overflow -->
      <div class="w-full max-w-full overflow-hidden">
        <!-- This is the horizontal scroller -->
        <div
          class="tabs-row flex items-start sm:gap-16 gap-4 whitespace-nowrap overflow-x-auto overflow-y-hidden pr-2">
          <!-- Tab buttons -->
          <button type="button" class="tab-btn relative pb-4 p-4 text-lg font-medium text-[#f59e0b]" data-tab="overview" aria-selected="true">
            Overview
            <span class="tab-underline absolute left-0 -bottom-[1px] h-[3px] w-full bg-[#f59e0b]"></span>
          </button>

          <button type="button" class="tab-btn relative pb-4 p-4 text-lg font-medium text-gray-500 hover:text-gray-700" data-tab="model" aria-selected="false">
            Model
            <span class="tab-underline absolute left-0 -bottom-[1px] h-[3px] w-full bg-[#f59e0b] hidden"></span>
          </button>

          <button type="button" class="tab-btn relative pb-4 p-4 text-lg font-medium text-gray-500 hover:text-gray-700" data-tab="performance" aria-selected="false">
            Performance
            <span class="tab-underline absolute left-0 -bottom-[1px] h-[3px] w-full bg-[#f59e0b] hidden"></span>
          </button>

          <button type="button" class="tab-btn relative pb-4 p-4 text-lg font-medium text-gray-500 hover:text-gray-700" data-tab="features" aria-selected="false">
            Features
            <span class="tab-underline absolute left-0 -bottom-[1px] h-[3px] w-full bg-[#f59e0b] hidden"></span>
          </button>

          <button type="button" class="tab-btn relative pb-4 p-4 text-lg font-medium text-gray-500 hover:text-gray-700" data-tab="safety" aria-selected="false">
            Safety
            <span class="tab-underline absolute left-0 -bottom-[1px] h-[3px] w-full bg-[#f59e0b] hidden"></span>
          </button>

          <button type="button" class="tab-btn relative pb-4 p-4 text-lg font-medium text-gray-500 hover:text-gray-700" data-tab="specifications" aria-selected="false">
            Specifications
            <span class="tab-underline absolute left-0 -bottom-[1px] h-[3px] w-full bg-[#f59e0b] hidden"></span>
          </button>

          <button type="button" class="tab-btn relative pb-4 p-4 text-lg font-medium text-gray-500 hover:text-gray-700" data-tab="price" aria-selected="false">
            Price
            <span class="tab-underline absolute left-0 -bottom-[1px] h-[3px] w-full bg-[#f59e0b] hidden"></span>
          </button>
        </div>
      </div>
    </div>

    <!-- Tab panels -->
    <div class="m-2 mb-6 py-4 ">
      <!-- overviewpanel -->
      <section id="tab-overview" class="tab-panel">
        <div class="grid gap-6 md:grid-cols-[1fr_180px]">
          <!-- Left: big image -->
          <div class="h-[480px] w-[840] overflow-hidden rounded-2xl border border-gray-200 bg-white">
            <img
              id="overview-main-image"
              src="./assets/images/cars/demo-1.jpg"
              alt="Car image"
              class=" block h-full w-full object-cover object-center "
              draggable="false" />
          </div>

          <!-- Right: thumbnails -->
          <div class="flex flex-row justify-between md:flex-col gap-4 ">
            <button
              type="button"
              class="thumb-btn group block h-[100px] w-full p-0 leading-none overflow-hidden rounded-xl border border-gray-200 bg-gray-100"
              data-src="./assets/images/cars/demo-1.jpg">
              <img
                src="./assets/images/cars/demo-1.jpg"
                alt="Thumbnail 1"
                class="block h-full w-full object-cover object-center"
                draggable="false" />
            </button>

            <button
              type="button"
              class="thumb-btn group block h-[100px] w-full p-0 leading-none overflow-hidden rounded-xl border border-gray-200 bg-gray-100"
              data-src="./assets/images/cars/demo-2.jpg">
              <img
                src="./assets/images/cars/demo-2.jpg"
                alt="Thumbnail 2"
                class="block h-full w-full object-cover object-center"
                draggable="false" />
            </button>

            <button
              type="button"
              class="thumb-btn group block h-[100px] w-full p-0 leading-none overflow-hidden rounded-xl border border-gray-200 bg-gray-100"
              data-src="./assets/images/cars/demo-3.jpg">
              <img
                src="./assets/images/cars/demo-3.jpg"
                alt="Thumbnail 3"
                class="block h-full w-full object-cover object-center"
                draggable="false" />
            </button>

            <button
              type="button"
              class="thumb-btn group block h-[100px] w-full p-0 leading-none overflow-hidden rounded-xl border border-gray-200 bg-gray-100"
              data-src="./assets/images/cars/demo-4.jpg">
              <img
                src="./assets/images/cars/demo-4.jpg"
                alt="Thumbnail 4"
                class="block h-full w-full object-cover object-center"
                draggable="false" />
            </button>
          </div>
        </div>
        <!-- Specs + CTA (place this BELOW the image gallery) -->
        <section class="mt-8 w-full ">
          <h3 class="text-lg font-bold text-gray-900 pb-4">Key Information</h3>
          <div class="w-full flex flex-col gap-16 justify-between lg:flex-row  lg:items-start">
            <!-- Left: specs (2 columns) -->

            <div class="w-full flex flex-row gap-16">
              <div class="w-[412px] grid gap-2 ">
                <!-- Engine -->
                <div class="bg-neutral-100 p-4 py-1 rounded-lg flex items-center justify-between gap-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 text-gray-500">
                      <i class="fa-solid fa-gear text-lg"></i>
                    </span>
                    <p class="text-sm text-gray-500">Engine</p>
                  </div>
                  <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap">1199 cc</p>
                </div>

                <!-- Power -->
                <div class="bg-neutral-100  p-4 py-1 rounded-lg flex items-center justify-between gap-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 text-gray-500">
                      <i class="fa-solid fa-bolt text-lg"></i>
                    </span>
                    <p class="text-sm text-gray-500">Power</p>
                  </div>
                  <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap">89 bhp</p>
                </div>

                <!-- Fuel -->
                <div class="bg-neutral-100  p-4 py-1 rounded-lg flex items-center justify-between gap-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 text-gray-500">
                      <i class="fa-solid fa-gas-pump text-lg"></i>
                    </span>
                    <p class="text-sm text-gray-500">Fuel</p>
                  </div>
                  <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap">Petrol</p>
                </div>
              </div>

              <div class="w-[412px] grid gap-5">
                <!-- Transmission -->
                <div class="bg-neutral-100  p-4 py-1 rounded-lg flex items-center justify-between gap-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 text-gray-500">
                      <i class="fa-solid fa-right-left text-lg"></i>
                    </span>
                    <p class="text-sm text-gray-500">Transmission</p>
                  </div>
                  <p class="text-base font-medium text-gray-900 text-right">Manual</p>
                </div>
                <!-- Mileage -->
                <div class=" bg-neutral-100  p-4  py-1 rounded-lg flex items-center justify-between gap-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 text-gray-500">
                      <i class="fa-solid fa-gauge-simple-high text-lg"></i>
                    </span>
                    <p class="text-sm text-gray-500">Mileage</p>
                  </div>
                  <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap">18.65 - 19.46 kmpl</p>
                </div>

                <!-- Price Range -->
                <div class="bg-neutral-100  p-4 py-1 rounded-lg flex items-center justify-between gap-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 text-gray-500">
                      <i class="fa-solid fa-tag text-lg"></i>
                    </span>
                    <p class="text-sm text-gray-500">Price Range</p>
                  </div>
                  <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap">10Lakhs-20Lakhs</p>
                </div>
              </div>

            </div>

            <!-- Right: CTA buttons -->
            <div class="grid gap-4 lg:justify-self-end lg:w-[360px]">
              <a
                href="#enquire"
                class="inline-flex h-16 w-full items-center justify-center gap-3 rounded-2xl bg-[#f59e0b] px-6 text-base font-semibold text-white shadow-sm hover:brightness-95">
                Enquire Now
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>

              <a
                href="#deal"
                class="inline-flex h-16 w-full items-center justify-center rounded-2xl border-2 border-[#f59e0b] bg-white px-6 text-base font-semibold text-[#f59e0b] hover:bg-orange-50">
                Find a Deal
              </a>
            </div>
          </div>
        </section>
        <!-- Description + Actions (place this BELOW your Specs + CTA section) -->
        <section class="mt-8 border-t border-gray-200 pt-6">
          <h3 class="text-lg font-bold text-gray-900">Description</h3>

          <p class="mt-3 max-w-5xl text-sm leading-tight text-gray-600">
            Quisque imperdiet dignissim enim dictum finibus. Sed consectetur convallis enim eget laoreet. Aenean vitae nisl mollis,
            porta risus vel, dapibus lectus. Etiam ac suscipit eros, eget maximus. Etiam sit amet ex pharetra, venenatis ante vehicula,
            gravida sapien. Fusce eleifend vulputate nibh, non cursus augue placerat pellentesque. Sed venenatis risus nec felis mollis,
            in pharetra urna euismod. Morbi aliquam ut turpis sit amet ultrices. Vestibulum mattis blandit nisl, et tristique elit
            scelerisque nec. Fusce eleifend laoreet dui eget aliquet. Ut rutrum risus et nunc pretium scelerisque.
          </p>

          <div class="mt-5 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <!-- Left: share -->
            <div class="flex flex-wrap items-center gap-3">
              <button
                type="button"
                class="inline-flex h-10 items-center gap-2 rounded-full bg-gray-900 px-4 text-sm font-semibold text-white">
                <i class="fa-solid fa-share-nodes text-sm"></i>
                Share This Car
              </button>

              <a href="#" class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600 text-white">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="#" class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-black text-white">
                <i class="fa-brands fa-x-twitter"></i>
              </a>
              <a href="#" class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-green-500 text-white">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
              <a href="#" class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-gray-200 text-gray-900">
                <i class="fa-solid fa-link"></i>
              </a>
            </div>

            <!-- Right: actions -->
            <div class="flex flex-col gap-3 sm:flex-row">
              <button
                type="button"
                class="inline-flex h-10 items-center justify-center gap-2 rounded-full border border-gray-300 bg-white px-4 text-sm font-semibold text-gray-900 hover:bg-gray-50">
                <i class="fa-regular fa-clone"></i>
                Compare This Car
              </button>

              <button
                type="button"
                class="inline-flex h-10 items-center justify-center gap-2 rounded-full border border-gray-300 bg-white px-4 text-sm font-semibold text-gray-900 hover:bg-gray-50">
                <i class="fa-regular fa-bookmark"></i>
                Save This Car
              </button>
            </div>
          </div>
        </section>

      </section>

      <!-- MODEL TAB PANEL  -->
      <section id="tab-model" class="tab-panel hidden">
        <!-- Header row -->
        <div class="grid grid-cols-12 gap-6 border-b border-gray-200 pb-4 text-sm text-gray-500">
          <div class="col-span-12 md:col-span-4">Variants</div>
          <div class="col-span-12 md:col-span-5">Key Features</div>
          <div class="col-span-12 md:col-span-3 md:text-right">Ex-showroom Price</div>
        </div>

        <!-- Variant row 1 -->
        <div class="grid grid-cols-12 gap-6 py-6 border-b border-gray-200">
          <!-- Variants -->
          <div class="col-span-12 md:col-span-4">
            <p class="text-md font-semibold text-gray-900">Omoda 5 EV Single Tone</p>
            <div class="mt-3 h-[100px] w-[240px] overflow-hidden rounded-xl border border-gray-200 bg-gray-100">
              <img
                src="./assets/images/cars/demo-1.jpg"
                alt="Variant image"
                class="block h-full w-full object-cover object-center"
                draggable="false" />
            </div>
          </div>

          <!-- Key Features -->
          <div class="col-span-12 md:col-span-5  pt-8">
            <ul class="space-y-3 text-sm text-gray-600">
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-gray-400 text-white">
                  <i class="fa-solid fa-check text-[10px]"></i>
                </span>
                <span>Permanent Magnet Synchronous Motor (PMSM)</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-gray-400 text-white">
                  <i class="fa-solid fa-check text-[10px]"></i>
                </span>
                <span>201 Hp</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-gray-400 text-white">
                  <i class="fa-solid fa-check text-[10px]"></i>
                </span>
                <span>340 Nm</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-gray-400 text-white">
                  <i class="fa-solid fa-check text-[10px]"></i>
                </span>
                <span>Automatic</span>
              </li>
            </ul>
          </div>

          <!-- Price -->
          <div class="col-span-12 md:col-span-3 md:text-right pt-8">
            <p class="text-base font-extrabold text-gray-900">NPRs 55 Lakh</p>
            <a href="#" class="mt-1 inline-block text-sm font-semibold text-[#f59e0b]">Get on-Road Price</a>
          </div>
        </div>

        <!-- Variant row 2 -->
        <div class="grid grid-cols-12 gap-6 py-6">
          <!-- Variants -->
          <div class="col-span-12 md:col-span-4">
            <p class="text-md font-semibold text-gray-900">Omoda 5 EV Single Tone</p>
            <div class="mt-3  h-[100px] w-[240px] overflow-hidden rounded-xl border border-gray-200 bg-gray-100">
              <img
                src="./assets/images/cars/demo-2.jpg"
                alt="Variant image"
                class="block h-full w-full object-cover object-center"
                draggable="false" />
            </div>
          </div>

          <!-- Key Features -->
          <div class="col-span-12 md:col-span-5 pt-8">
            <ul class="space-y-3 text-sm text-gray-600">
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-gray-400 text-white">
                  <i class="fa-solid fa-check text-[10px]"></i>
                </span>
                <span>Permanent Magnet Synchronous Motor (PMSM)</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-gray-400 text-white">
                  <i class="fa-solid fa-check text-[10px]"></i>
                </span>
                <span>201 Hp</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-gray-400 text-white">
                  <i class="fa-solid fa-check text-[10px]"></i>
                </span>
                <span>340 Nm</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-gray-400 text-white">
                  <i class="fa-solid fa-check text-[10px]"></i>
                </span>
                <span>Automatic</span>
              </li>
            </ul>
          </div>

          <!-- Price -->
          <div class="col-span-12 md:col-span-3 md:text-right pt-8">
            <p class="text-base font-extrabold text-gray-900">NPRs 55 Lakh</p>
            <a href="#" class="mt-1 inline-block text-sm font-semibold text-[#f59e0b]">Get on-Road Price</a>
          </div>
        </div>
      </section>


      <!-- PERFORMANCE TAB PANEL  -->
      <section id="tab-performance" class="tab-panel hidden">
        <div class="flex flex-col border rounded-lg p-4">
          <div class="grid gap-6 md:grid-cols-[220px_1fr] md:items-start">
            <!-- Left image -->
            <div class="overflow-hidden rounded-xl border border-gray-200 bg-gray-100">
              <img
                src="./assets/images/cars/demo-3.jpg"
                alt="Engine / performance"
                class="block h-[150px] w-full object-cover object-center"
                draggable="false" />
            </div>

            <!-- Right content -->
            <div class="min-w-0">
              <h3 class="text-base font-bold text-gray-900">Engines</h3>

              <!-- Stats box -->
              <div class="mt-3 max-w-md rounded-2xl bg-[#FFF3E0] p-4">
                <div class="flex items-center justify-between gap-6">
                  <div class="flex items-center gap-2 text-sm text-gray-700">
                    <i class="fa-solid fa-bolt text-gray-500"></i>
                    <span>Max Power</span>
                  </div>
                  <div class="text-sm font-semibold text-gray-900">201 bhp</div>
                </div>

                <div class="mt-3 flex items-center justify-between gap-6">
                  <div class="flex items-center gap-2 text-sm text-gray-700">
                    <i class="fa-solid fa-rotate text-gray-500"></i>
                    <span>Max Torque</span>
                  </div>
                  <div class="text-sm font-semibold text-gray-900">340 Nm</div>
                </div>
              </div>


            </div>
          </div>
          <!-- Description -->
          <p class="mt-4 text-sm leading-6 text-gray-600">
            The Virtus Sport is powered exclusively by Volkswagen’s 1.5-litre, 4-cylinder, turbocharged TSI EVO petrol engine —
            the most potent engine in the Virtus lineup. This advanced motor features Active Cylinder Technology (ACT) that
            automatically deactivates two cylinders under low-load conditions, improving fuel efficiency without affecting
            performance. Built with lightweight components and integrated with a variable geometry turbocharger, the engine delivers
            a strong, linear surge of power while maintaining refined NVH (Noise, Vibration, Harshness) levels.
          </p>
        </div>
      </section>


      <!-- FEATURES TAB PANEL  -->
      <section id="tab-features" class="tab-panel hidden">
        <h2 class="text-4xl font-extrabold text-gray-900">Features</h2>

        <div class="mt-10 space-y-10">
          <!-- Item 1 -->
          <div class="grid gap-6 md:grid-cols-[170px_1fr] md:items-start">
            <div class="overflow-hidden rounded-xl bg-gray-100">
              <img
                src="./assets/images/cars/demo-1.jpg"
                alt="X Future"
                class="block h-[92px] w-full object-cover object-center"
                draggable="false" />
            </div>
            <div class="min-w-0">
              <h3 class="text-lg font-extrabold text-gray-900">X Future</h3>
              <p class="mt-2 text-sm leading-6 text-gray-600">
                A face that expresses the future. Experience a sleek exterior design that seamlessly blends a minimalistic design
                philosophy with futuristic elements.
              </p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="grid gap-6 md:grid-cols-[170px_1fr] md:items-start">
            <div class="overflow-hidden rounded-xl bg-gray-100">
              <img
                src="./assets/images/cars/demo-2.jpg"
                alt="Leave Old School Behind"
                class="block h-[92px] w-full object-cover object-center"
                draggable="false" />
            </div>
            <div class="min-w-0">
              <h3 class="text-lg font-extrabold text-gray-900">Leave Old School Behind</h3>
              <p class="mt-2 text-sm leading-6 text-gray-600">
                Whether cruising through the city streets or parked under the night sky, the OMODA E5’s taillights not only ensure
                safety but also contribute to an unforgettable visual impression.
              </p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="grid gap-6 md:grid-cols-[170px_1fr] md:items-start">
            <div class="overflow-hidden rounded-xl bg-gray-100">
              <img
                src="./assets/images/cars/demo-3.jpg"
                alt="The Turn Of The Century"
                class="block h-[92px] w-full object-cover object-center"
                draggable="false" />
            </div>
            <div class="min-w-0">
              <h3 class="text-lg font-extrabold text-gray-900">The Turn Of The Century</h3>
              <p class="mt-2 text-sm leading-6 text-gray-600">
                Crafted with precision and style, these 18&quot; rims not only enhance the vehicle’s futuristic visual appeal but also
                contribute to its overall aerodynamics to improve range efficiency.
              </p>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="grid gap-6 md:grid-cols-[170px_1fr] md:items-start">
            <div class="overflow-hidden rounded-xl bg-gray-100">
              <img
                src="./assets/images/cars/demo-4.jpg"
                alt="Unveil Adventure"
                class="block h-[92px] w-full object-cover object-center"
                draggable="false" />
            </div>
            <div class="min-w-0">
              <h3 class="text-lg font-extrabold text-gray-900">Unveil Adventure</h3>
              <p class="mt-2 text-sm leading-6 text-gray-600">
                Unveil the sky above with the Chery Omoda 5’s panoramic sunroof. This expansive window to the world bathes the interior
                in natural light, creating an airy and inviting atmosphere.
              </p>
            </div>
          </div>
        </div>
      </section>


      <!-- SAFETY TAB PANEL (replace your current #tab-safety with this) -->
      <section id="tab-safety" class="tab-panel hidden">
        <h2 class="text-4xl font-extrabold text-gray-900">Safety</h2>

        <div class="mt-10 grid gap-x-12 gap-y-10 sm:grid-cols-2 lg:grid-cols-4">
          <!-- Card -->
          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/lane-departure-warning.png" alt="Lane Departure Warning" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Lane Departure Warning</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-black">
              <img src="./assets/images/safety/emergency-lane-keeping.png" alt="Emergency Lane Keeping" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Emergency Lane Keeping</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/adaptive-cruise-control.png" alt="Adaptive Cruise Control" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Adaptive Cruise Control</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/aeb.png" alt="Autonomous Emergency Braking" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Autonomous Emergency Braking</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/traffic-jam-assist.png" alt="Traffic Jam Assist" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Traffic Jam Assist</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/mcb.png" alt="Multi Collision Brake (MCB)" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Multi Collision Brake (MCB)</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/door-opening-warning.png" alt="Door Opening Warning" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Door Opening Warning</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/blind-spot-detection.png" alt="Blind Spot Detection" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Blind Spot Detection</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/rear-cross-traffic.png" alt="Rear Cross Traffic Alert & Braking" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Rear Cross Traffic Alert &amp; Braking</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/front-collision-warning.png" alt="Front Collision Warning" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Front Collision Warning</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/lane-departure-prevention.png" alt="Lane Departure Prevention" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Lane Departure Prevention</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/integrated-cruise-assist.png" alt="Integrated Cruise Assist" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Integrated Cruise Assist</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/driver-monitoring.png" alt="Driver Monitoring System" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Driver Monitoring System</p>
          </div>

          <div>
            <div class="flex h-[110px] w-[140px] items-center justify-center rounded-xl bg-[#2f2f2f]">
              <img src="./assets/images/safety/rear-collision-warning.png" alt="Rear Collision Warning" class="h-12 w-12" draggable="false" />
            </div>
            <p class="mt-3 w-[140px] text-sm text-gray-900">Rear Collision Warning</p>
          </div>
        </div>
      </section>

      <section id="tab-specifications" class="tab-panel hidden bg-white p-6 rounded-2xl">
        <div class="flex items-start justify-between gap-6">
          <h2 class="text-4xl font-bold text-gray-900">Specifications</h2>

          <!-- Right: Custom Variant Dropdown (replaces <select>) -->
          <div class="relative w-[260px]" id="variantDropdown">
            <!-- Trigger -->
            <button
              type="button"
              id="variantBtn"
              class="w-full h-14 px-5 bg-white border border-gray-200 rounded-2xl text-left shadow-sm
           flex items-center justify-between hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#f59e0b]/30"
              aria-haspopup="listbox"
              aria-expanded="false">
              <span id="variantLabel" class="text-base text-gray-900">Car Variant 1</span>
              <i id="variantChevron" class="fa-solid fa-chevron-down text-gray-500 text-sm"></i>
            </button>

            <!-- Menu -->
            <div
              id="variantMenu"
              class="absolute right-0 z-20 mt-3 w-full hidden"
              role="listbox"
              tabindex="-1">
              <div class="rounded-2xl border border-gray-200 bg-white shadow-lg overflow-hidden">
                <div class="max-h-[320px] overflow-auto">
                  <button type="button" class="variant-option w-full px-5 py-4 text-left text-base hover:bg-gray-50" data-value="variant1">
                    Car Variant 1
                  </button>
                  <button type="button" class="variant-option w-full px-5 py-4 text-left text-base hover:bg-gray-50" data-value="variant2">
                    Car Variant 2
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-6 flex flex-row rounded-2xl ">
          <div class="w-[30%] bg-[#f6f6f6] flex flex-col gap-0">
            <button type="button" class="spec-tab-btn text-base h-[65px] p-4 rounded-lg  border-b border-[#E0E0E0] w-full text-left  "
              data-target="spec-dimensions">Dimensions</button>

            <button type="button" class="spec-tab-btn text-base h-[65px] p-4 rounded-lg border-b border-[#E0E0E0] w-full text-left  "
              data-target="spec-engine">Engine</button>

            <button type="button" class="spec-tab-btn text-base h-[65px] p-4 rounded-lg  border-b border-[#E0E0E0] w-full text-left  "
              data-target="spec-wheels">Wheels</button>

            <button type="button" class="spec-tab-btn text-base h-[65px] p-4 rounded-lg   border-b border-[#E0E0E0] w-full text-left  "
              data-target="spec-brakes">Brakes</button>

            <button type="button" class="spec-tab-btn text-base h-[65px] p-4  rounded-lg border-b border-[#E0E0E0] w-full text-left  "
              data-target="spec-suspension">Suspension</button>
          </div>
          <div id="specScroll" class="w-full h-[430px] bg-[#f8fafc] overflow-auto grid grid-col no-scrollbar pl-10 pb-[220px]">
            <div id="spec-dimensions" class="w-full flex flex-col border-b py-4 px-6">
              <div class="font-bold pb-2">Dimensions</div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Length Overall (mm)</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="dimensions.length">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Width Overall (mm)</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="dimensions.width">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Height Overall (mm)</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="dimensions.height">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Wheelbase (mm)</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="dimensions.wheelbase">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Ground Clearance (mm)</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="dimensions.groundClearance">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Gross Vehicle Weight (kg)</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="dimensions.grossWeight">1199 cc</p>
              </div>

            </div>
            <div id="spec-engine" class="w-full flex flex-col border-b  py-4 px-6">
              <div class="font-bold pb-2">Engine</div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Engine Type</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="engine.engineType">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Max Power</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="engine.maxPower">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Max Torque (kg·m / rpm)</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="engine.maxTorque">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Number of Cylinders</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="engine.cylinders">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Valves per Cylinder</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="engine.valvesPerCylinder">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Mileage</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="engine.mileage">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Fuel Type</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="engine.fuelType">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Transmission</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="engine.transmission">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Battery Capacity</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="engine.battery">1199 cc</p>
              </div>
            </div>
            <div id="spec-wheels" class="w-full flex flex-col border-b  py-4 px-6">
              <div class="font-bold pb-2">Wheels</div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Tyre Type</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="wheels.tyreType">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Tyre Size</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="wheels.tyreSize">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Wheel Type</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="wheels.tyreType">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Wheel Size</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="wheels.wheelSize">1199 cc</p>
              </div>
            </div>
            <div id="spec-brakes" class="w-full flex flex-col border-b  py-4 px-6">
              <div class="font-bold pb-2">Brakes</div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Front</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="brakes.front">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Rear</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="brakes.rear">1199 cc</p>
              </div>
            </div>
            <div id="spec-suspension" class="w-full flex flex-col border-b  py-4 px-6">
              <div class="font-bold pb-2">Suspension</div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Front</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="suspension.front">1199 cc</p>
              </div>
              <div class="w-full  p-6 py-2 flex items-center justify-between gap-6">
                <p class="text-base text-gray-500">Rear</p>
                <p class="text-base font-medium text-gray-900 text-right whitespace-nowrap" data-key="suspension.rear">1199 cc</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PRICE TAB PANEL -->
      <section id="tab-price" class="tab-panel hidden">
        <!-- Header -->
        <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
          <div class="min-w-0">
            <div class="flex items-center gap-3">
              <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900">
                Maruti Wagon R price in Chandigarh
              </h2>


            </div>

            <p class="mt-2 text-sm leading-6 text-gray-600 max-w-5xl">
              Maruti Wagon R price in Chandigarh start at ₹4.99 Lakh. The lowest price model is Maruti Wagon R LXI and the top model price is Maruti Wagon R ZXI Plus AT Dual tone priced at ₹6.95 Lakh. Visit your nearest Maruti Wagon R showroom in Chandigarh for best offers. Compared primarily with Tata Punch price in Chandigarh starting ₹5.60 Lakh and Maruti Swift price in Chandigarh starting ₹5.79 Lakh. View all Maruti Wagon R variants price in your city.
            </p>
          </div>
        </div>

        <!-- Table -->
        <div class="mt-6 overflow-hidden rounded-2xl border border-gray-200 bg-white">
          <div class="overflow-x-auto">
            <table class="min-w-full text-left">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-5 py-4 text-sm font-semibold text-gray-900 border-b border-gray-200">
                    Variants
                  </th>
                  <th class="px-5 py-4 text-sm font-semibold text-gray-900 border-b border-gray-200 w-[220px]">
                    On-Road Price
                  </th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-200">
                <!-- Row -->
                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R LXI</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹5.69 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R VXI</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹6.27 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R LXI CNG</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹6.69 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R ZXI</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹6.76 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R VXI AT</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹6.77 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R ZXI Plus</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹7.24 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R ZXI AT</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹7.26 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R VXI CNG</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹7.27 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R ZXI Plus Dual Tone</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹7.36 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R ZXI Plus AT</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹7.74 Lakh*</td>
                </tr>

                <tr class="hover:bg-gray-50">
                  <td class="px-5 py-4 text-sm text-gray-900">Maruti Wagon R ZXI Plus AT Dual Tone</td>
                  <td class="px-5 py-4 text-sm font-medium text-gray-900">₹7.86 Lakh*</td>
                </tr>
              </tbody>
            </table>
          </div>


        </div>
      </section>

    </div>
  </div>
  <!-- similar cars section  -->
  <?php
  $sectionId = "similarcars";
  $title = "Similiar Cars";
  $cards = [
    ["tab" => "all", "title" => "Hyundai Creta (2021) - Single Owner", "img" => "./assets/images/cars/demo-1.jpg", "miles" => "18,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 45–52 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "Kia Seltos (2020) - Well Maintained", "img" => "./assets/images/cars/demo-2.jpg", "miles" => "22,000 km", "fuel" => "Petrol", "trans" => "Manual", "price" => "NPRs 42–49 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "BYD Atto 3 (2023) - Like New", "img" => "./assets/images/cars/demo-3.jpg", "miles" => "6,000 km", "fuel" => "Electric", "trans" => "Automatic", "price" => "NPRs 75–85 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "Toyota Corolla (2019) - Clean", "img" => "./assets/images/cars/demo-4.jpg", "miles" => "35,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 38–44 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "Hyundai Creta (2021) - Single Owner", "img" => "./assets/images/cars/demo-1.jpg", "miles" => "18,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 45–52 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "Kia Seltos (2020) - Well Maintained", "img" => "./assets/images/cars/demo-2.jpg", "miles" => "22,000 km", "fuel" => "Petrol", "trans" => "Manual", "price" => "NPRs 42–49 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "BYD Atto 3 (2023) - Like New", "img" => "./assets/images/cars/demo-3.jpg", "miles" => "6,000 km", "fuel" => "Electric", "trans" => "Automatic", "price" => "NPRs 75–85 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "Toyota Corolla (2019) - Clean", "img" => "./assets/images/cars/demo-4.jpg", "miles" => "35,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 38–44 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "Hyundai Creta (2021) - Single Owner", "img" => "./assets/images/cars/demo-1.jpg", "miles" => "18,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 45–52 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "Kia Seltos (2020) - Well Maintained", "img" => "./assets/images/cars/demo-2.jpg", "miles" => "22,000 km", "fuel" => "Petrol", "trans" => "Manual", "price" => "NPRs 42–49 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "BYD Atto 3 (2023) - Like New", "img" => "./assets/images/cars/demo-3.jpg", "miles" => "6,000 km", "fuel" => "Electric", "trans" => "Automatic", "price" => "NPRs 75–85 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
    ["tab" => "all", "title" => "Toyota Corolla (2019) - Clean", "img" => "./assets/images/cars/demo-4.jpg", "miles" => "35,000 km", "fuel" => "Petrol", "trans" => "Automatic", "price" => "NPRs 38–44 lakhs", "cta" => "Find a Deal", "cta_link" => "#"],
  ];

  include __DIR__ . "/components/car-cards-section.php";
  ?>
  <?php include __DIR__ . "/components/emi-calculator.php";
  ?>
  <?php

  include __DIR__ . "/components/blog-section.php";   ?>
  <?php include __DIR__ . "/components/promo-banner.php"; ?>

</main>

<?php

include __DIR__ . "/components/footer.php";   ?>

<script>
  (function() {
    const buttons = Array.from(document.querySelectorAll(".tab-btn"));
    const panels = Array.from(document.querySelectorAll(".tab-panel"));

    function setActive(tabName) {
      // buttons
      buttons.forEach((btn) => {
        const isActive = btn.dataset.tab === tabName;
        btn.classList.toggle("text-[#f59e0b]", isActive);
        btn.classList.toggle("text-gray-500", !isActive);
        btn.setAttribute("aria-selected", isActive ? "true" : "false");

        const underline = btn.querySelector(".tab-underline");
        if (underline) underline.classList.toggle("hidden", !isActive);
      });

      // panels
      panels.forEach((panel) => {
        panel.classList.toggle("hidden", panel.id !== `tab-${tabName}`);
      });
    }

    buttons.forEach((btn) => {
      btn.addEventListener("click", () => setActive(btn.dataset.tab));
    });

    // init (keep first active if present)
    const initial = buttons.find((b) => b.getAttribute("aria-selected") === "true")?.dataset.tab || "overview";
    setActive(initial);
  })();

  (function() {
    const mainImg = document.getElementById("overview-main-image");
    const thumbs = Array.from(document.querySelectorAll(".thumb-btn"));

    if (!mainImg || thumbs.length === 0) return;

    // optional: visual active state
    function setThumbActive(activeBtn) {
      thumbs.forEach((btn) => {
        btn.classList.toggle("ring-2", btn === activeBtn);
        btn.classList.toggle("ring-[#f59e0b]", btn === activeBtn);
      });
    }

    thumbs.forEach((btn, idx) => {
      btn.addEventListener("click", () => {
        const src = btn.getAttribute("data-src");
        if (!src) return;
        mainImg.src = src;
        setThumbActive(btn);
      });

      // set first thumb active by default
      if (idx === 0) setThumbActive(btn);
    });

    // disable ghost drag (extra safe)
    document.querySelectorAll("#tab-overview img").forEach((img) => {
      img.addEventListener("dragstart", (e) => e.preventDefault());
    });
  })();

  //  scroll to section 
  (function() {
    const scroller = document.getElementById("specScroll");
    const tabs = Array.from(document.querySelectorAll(".spec-tab-btn"));
    const sections = tabs
      .map((btn) => document.getElementById(btn.dataset.target))
      .filter(Boolean);

    // Keep style-only changes (no font weight change)
    const ACTIVE = ["bg-[#f59e0b]", "text-white", "relative", "rounded-lg"];
    const INACTIVE = ["text-black", "rounded-lg"];

    let isAutoScrolling = false;
    let autoScrollTimer = null;

    function addPointer(btn) {
      if (btn.querySelector(".spec-pointer")) return;
      const pointer = document.createElement("span");
      pointer.className =
        "spec-pointer absolute right-[-18px] top-1/2 -translate-y-1/2 w-0 h-0 " +
        "border-t-[18px] border-t-transparent border-b-[18px] border-b-transparent " +
        "border-l-[18px] border-l-[#f59e0b]";
      btn.appendChild(pointer);
    }

    function removePointer(btn) {
      btn.querySelector(".spec-pointer")?.remove();
    }

    function setActive(targetId) {
      tabs.forEach((btn) => {
        const isActive = btn.dataset.target === targetId;

        btn.classList.remove(...ACTIVE, ...INACTIVE);
        removePointer(btn);

        if (isActive) {
          btn.classList.add(...ACTIVE);
          addPointer(btn);
        } else {
          btn.classList.add(...INACTIVE);
        }
      });
    }

    function scrollToSection(id) {
      const target = document.getElementById(id);
      if (!scroller || !target) return;

      const top =
        target.getBoundingClientRect().top -
        scroller.getBoundingClientRect().top +
        scroller.scrollTop;

      const maxTop = scroller.scrollHeight - scroller.clientHeight;

      scroller.scrollTo({
        top: Math.min(top, maxTop),
        behavior: "smooth",
      });
    }

    // Click -> lock highlight + smooth scroll
    tabs.forEach((btn) => {
      btn.addEventListener("click", () => {
        const id = btn.dataset.target;
        if (!id) return;

        // Lock active state during smooth scroll
        isAutoScrolling = true;
        setActive(id);
        scrollToSection(id);

        // Release lock after scrolling settles
        clearTimeout(autoScrollTimer);
        autoScrollTimer = setTimeout(() => {
          isAutoScrolling = false;
        }, 650); // increase to 600 if your scroll is longer
      });
    });

    // Scroll -> auto-highlight (skip while auto-scrolling)
    let ticking = false;
    scroller.addEventListener("scroll", () => {
      if (isAutoScrolling) return;
      if (ticking) return;

      ticking = true;
      requestAnimationFrame(() => {
        const scTop = scroller.getBoundingClientRect().top;

        let bestId = sections[0]?.id;
        let bestDist = Infinity;

        sections.forEach((sec) => {
          const dist = Math.abs(sec.getBoundingClientRect().top - scTop);
          if (dist < bestDist) {
            bestDist = dist;
            bestId = sec.id;
          }
        });

        if (bestId) setActive(bestId);
        ticking = false;
      });
    });

    // init
    setActive("spec-dimensions");
  })();

  // select variant drop down
  (function() {
    const wrap = document.getElementById("variantDropdown");
    const btn = document.getElementById("variantBtn");
    const menu = document.getElementById("variantMenu");
    const label = document.getElementById("variantLabel");
    const chevron = document.getElementById("variantChevron");
    const options = Array.from(wrap.querySelectorAll(".variant-option"));
    // ----- Dummy data (replace later with DB payload)
    const variants = {
      variant1: {
        dimensions: {
          length: "4310 mm",
          width: "1790 mm",
          height: "1640 mm",
          wheelbase: "2610 mm",
          groundClearance: "190 mm",
          grossWeight: "1710 kg",
        },
        engine: {
          engineType: "1.5L Turbo Petrol",
          maxPower: "160 bhp",
          maxTorque: "250 Nm",
          cylinders: "4",
          valvesPerCylinder: "4",
          mileage: "15.2 kmpl",
          fuelType: "Petrol",
          transmission: "Automatic",
          battery: "—",
        },
        wheels: {
          tyreType: "Tubeless",
          tyreSize: "215/55 R18",
          wheelType: "Alloy",
          wheelSize: "18 inch",
        },
        brakes: {
          front: "Disc",
          rear: "Disc"
        },
        suspension: {
          front: "MacPherson Strut",
          rear: "Multi-link"
        },
      },

      variant2: {
        dimensions: {
          length: "4290 mm",
          width: "1780 mm",
          height: "1625 mm",
          wheelbase: "2600 mm",
          groundClearance: "180 mm",
          grossWeight: "1650 kg",
        },
        engine: {
          engineType: "1.5L NA Petrol",
          maxPower: "113 bhp",
          maxTorque: "144 Nm",
          cylinders: "4",
          valvesPerCylinder: "4",
          mileage: "18.5 kmpl",
          fuelType: "Petrol",
          transmission: "Manual",
          battery: "—",
        },
        wheels: {
          tyreType: "Tubeless",
          tyreSize: "205/60 R16",
          wheelType: "Alloy",
          wheelSize: "16 inch",
        },
        brakes: {
          front: "Disc",
          rear: "Drum"
        },
        suspension: {
          front: "MacPherson Strut",
          rear: "Torsion Beam"
        },
      },
    };
    const DEFAULT_KEY = "variant1";

    function selectVariant(key) {
      const opt = options.find(o => o.dataset.value === key);
      if (!opt) return;
      label.textContent = opt.textContent.trim();

      // OPTIONAL: hook your existing spec update
      // updateSpecs(key);
    }
    // ----- Helpers
    function openMenu() {
      menu.classList.remove("hidden");
      btn.setAttribute("aria-expanded", "true");
      chevron.classList.add("rotate-180");
      chevron.classList.add("transition-transform");
    }

    function closeMenu() {
      menu.classList.add("hidden");
      btn.setAttribute("aria-expanded", "false");
      chevron.classList.remove("rotate-180");
      chevron.classList.add("transition-transform");
    }

    function toggleMenu() {
      menu.classList.contains("hidden") ? openMenu() : closeMenu();
    }

    function getByPath(obj, path) {
      return path.split(".").reduce((acc, key) => (acc && acc[key] != null ? acc[key] : undefined), obj);
    }

    // Updates right scroll panel values based on data-key attributes
    function updateSpecValues(variantKey) {
      const data = variants[variantKey];
      if (!data) return;

      document.querySelectorAll("#specScroll [data-key]").forEach((el) => {
        const val = getByPath(data, el.dataset.key);
        if (val !== undefined) el.textContent = val;
      });
    }

    function selectVariant(key) {
      const opt = options.find((o) => o.dataset.value === key);
      if (!opt) return;

      label.textContent = opt.textContent.trim();
      updateSpecValues(key);
    }

    // ----- Events
    btn.addEventListener("click", toggleMenu);

    options.forEach((opt) => {
      opt.addEventListener("click", () => {
        selectVariant(opt.dataset.value);
        closeMenu();

        // OPTIONAL: hook your variant-change logic here
        // const selectedKey = opt.dataset.value;
        // updateSpecs(selectedKey);
      });
    });

    // Close on outside click
    document.addEventListener("click", (e) => {
      if (!wrap.contains(e.target)) closeMenu();
    });

    // Close on ESC
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeMenu();
    });

    selectVariant(DEFAULT_KEY);
  })();
</script>