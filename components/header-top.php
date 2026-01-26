<?php
// components/header-top.php
?>
<div class="max-w-7xl mx-auto px-4">
    <!-- ===== MOBILE TOP BAR (hamburger • logo • profile) ===== -->
    <div class="h-16 flex items-center justify-between md:hidden">
        <!-- Hamburger -->
        <button id="mobileOpen" type="button" class="p-2 -ml-2 rounded-lg hover:bg-slate-100" aria-label="Open menu">

            <svg class="w-6 h-6 text-slate-800" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
        </button>

        <!-- Logo -->
        <a href="./index.php" class="flex items-center justify-center">
            <img
                src="./assets/images/logo/carhamro-logo.png"
                alt="Logo"
                class="h-9 w-auto object-contain" />
        </a>

        <!-- Profile icon -->
        <a
            href="./index.php?page=login"
            class="p-2 -mr-2 rounded-lg hover:bg-slate-100"
            aria-label="Profile">
            <svg class="w-6 h-6 text-slate-800" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Z" stroke="currentColor" stroke-width="2" />
                <path d="M20 20a8 8 0 1 0-16 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
        </a>
    </div>

    <!-- ===== MOBILE SEARCH ROW ===== -->
    <div class="pb-3 md:hidden">
        <div class="flex items-center bg-slate-100 border border-slate-200 rounded-full overflow-hidden h-11 w-full">
            <!-- Dropdown -->
            <button
                type="button"
                class="h-full px-5 flex items-center gap-2 text-sm text-slate-700 hover:bg-slate-200/60 transition"
                aria-label="Category">
                <span>All</span>
                <svg class="w-4 h-4 text-slate-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08z" clip-rule="evenodd" />
                </svg>
            </button>

            <div class="w-px h-6 bg-slate-300/80"></div>

            <!-- Search -->
            <div class="flex items-center gap-2 px-4 flex-1">
                <svg class="w-4 h-4 text-slate-500" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M11 19a8 8 0 1 1 0-16 8 8 0 0 1 0 16Z" stroke="currentColor" stroke-width="2" />
                    <path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
                <input
                    type="text"
                    placeholder="Search by Brand Name"
                    class="w-full bg-transparent outline-none text-sm text-slate-700 placeholder:text-slate-500" />
            </div>
        </div>
    </div>

    <!-- ===== DESKTOP TOP BAR (logo • search • login • sell) ===== -->
    <div class="hidden md:flex h-20 items-center gap-6">
        <!-- Logo -->
        <a href="./index.php" class="shrink-0 flex items-center">
            <img
                src="./assets/images/logo/carhamro-logo.png"
                alt="Logo"
                class="h-10 w-auto object-contain" />
        </a>

        <!-- Search (center) -->
        <div class="flex-1 flex justify-center">
            <div class="w-full max-w-2xl">
                <div class="flex items-center bg-[#fefcee] border border-[#e5e1cc] rounded-full overflow-hidden h-11">
                    <!-- Dropdown -->
                    <button type="button"
                        class="h-full px-5 flex items-center gap-2 text-sm text-slate-700 hover:bg-slate-200/60 transition">
                        <span>All</span>
                        <svg class="w-4 h-4 text-slate-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.94l3.71-3.71a.75.75 0 1 1 1.06 1.06l-4.24 4.24a.75.75 0 0 1-1.06 0L5.21 8.29a.75.75 0 0 1 .02-1.08z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div class="w-px h-6 bg-slate-300/80"></div>

                    <div class="flex items-center gap-2 px-4 flex-1">
                        <svg class="w-4 h-4 text-slate-500" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M11 19a8 8 0 1 1 0-16 8 8 0 0 1 0 16Z" stroke="currentColor" stroke-width="2" />
                            <path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <input
                            type="text"
                            placeholder="Search by Brand Name"
                            class="w-full bg-transparent outline-none text-sm text-slate-700 placeholder:text-slate-500" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Right actions -->
        <div class="shrink-0 flex items-center gap-4">
            <a href="./index.php?page=login"
                class="flex items-center gap-2 text-sm text-slate-700 hover:text-slate-900">
                <svg class="w-5 h-5 text-slate-600" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Z" stroke="currentColor" stroke-width="2" />
                    <path d="M20 20a8 8 0 1 0-16 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
                <span>Login/Register</span>
            </a>

            <a href="./index.php?page=sell"
                class="h-12 px-4 rounded-xl border border-slate-700 text-sm font-medium text-slate-900  hover:underline  transition leading-loose  underline-offset-4  flex items-center">
                Sell Your Car
            </a>
        </div>
    </div>
</div>

