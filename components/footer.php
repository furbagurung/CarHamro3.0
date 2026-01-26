<?php
// components/footer.php
?>
<footer class="mt-16 border-t border-gray-200 bg-white">
  <!-- Top -->
  <div class="max-w-[1304px] mx-auto px-4">
    <div class="grid grid-cols-1 gap-10 py-14 md:grid-cols-3 md:gap-12">
      <!-- Left: logo + about + contacts -->
      <div class="max-w-md">
        <a href="/" class="inline-flex items-center">
          <img
            src="./assets/images/logo/carhamro-logo.png"
            alt="CarHamro"
            class="h-8 w-auto object-contain"
            draggable="false"
          />
        </a>

        <p class="mt-5 text-sm leading-6 text-gray-500">
          CarHamro is Nepal’s trusted car marketplace to buy and sell cars. Explore verified listings,
          dealers, reviews, and best price offers across Nepal. Find your next ride today!
        </p>

        <ul class="mt-6 space-y-3 text-sm text-gray-500">
          <li class="flex items-start gap-3">
            <i class="fa-solid fa-location-dot mt-0.5 text-gray-400"></i>
            <span>Ward No 4, Janakpur, Dhanusha, Nepal</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fa-solid fa-phone mt-0.5 text-gray-400"></i>
            <span>+977-9854029565</span>
          </li>
          <li class="flex items-start gap-3">
            <i class="fa-regular fa-envelope mt-0.5 text-gray-400"></i>
            <span>support@carhamro.com</span>
          </li>
        </ul>
      </div>

      <!-- Middle: Quicklink -->
      <div class="md:pl-6">
        <h4 class="text-sm font-semibold text-gray-900">Quicklink</h4>
        <ul class="mt-5 space-y-4 text-sm text-gray-500">
          <li>
            <a href="#" class="hover:text-gray-900">Hamro Approved Cars</a>
          </li>
          <li>
            <a href="#" class="hover:text-gray-900">Become a Partner Dealer</a>
          </li>
        </ul>
      </div>

      <!-- Right: About -->
      <div class="md:pl-6">
        <h4 class="text-sm font-semibold text-gray-900">About Car Hamro</h4>
        <ul class="mt-5 space-y-4 text-sm text-gray-500">
          <li>
            <a href="#" class="hover:text-gray-900">About us</a>
          </li>
          <li>
            <a href="#" class="hover:text-gray-900">Privacy Policy</a>
          </li>
          <li>
            <a href="#" class="hover:text-gray-900">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bottom bar -->
  <div class="border-t border-gray-200">
    <div class="max-w-[1304px] mx-auto px-4">
      <div class="flex flex-col gap-4 py-5 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-xs text-gray-500">© 2025. United Digital Service</p>

        <div class="flex items-center gap-6 sm:gap-8">
          <a href="#" aria-label="Facebook" class="text-gray-900 hover:opacity-80">
            <i class="fa-brands fa-facebook-f text-lg"></i>
          </a>
          <a href="#" aria-label="Twitter" class="text-gray-900 hover:opacity-80">
            <i class="fa-brands fa-x-twitter text-lg"></i>
          </a>
          <a href="#" aria-label="Instagram" class="text-gray-900 hover:opacity-80">
            <i class="fa-brands fa-instagram text-lg"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="./js/main.js"></script>
