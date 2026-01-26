<!-- hero-search-card.php (UPDATED: Advanced Search always visible inside 318x381) -->
<div class="w-[318px] h-[381px]">
  <div class="h-full w-full rounded-2xl bg-white p-5 shadow-2xl ring-1 ring-black/5 flex flex-col">

    <!-- Title -->
    <h3 class="text-[24px] font-bold text-slate-900">Find your right car</h3>

    <!-- ✅ New / Used Tabs -->
    <div class="mt-3 rounded-xl border border-slate-300 bg-white p-1">
      <div class="grid grid-cols-2 gap-1">
        <button
          type="button"
          class="relative z-10 flex h-[44px] items-center justify-center rounded-lg bg-[#071B3A]
                 !text-white text-[16px] font-medium leading-none"
        >
          New
        </button>

        <button
          type="button"
          class="relative z-10 flex h-[44px] items-center justify-center rounded-lg bg-white
                 !text-slate-900 text-[16px] font-medium leading-none"
        >
          Used
        </button>
      </div>
    </div>

    <!-- Content area (takes remaining height) -->
    <div class="flex-1 min-h-0">
      <!-- Radio options -->
      <div class="mt-3 flex items-center gap-10">
        <label class="flex cursor-pointer items-center gap-3 text-[14px] text-slate-600">
          <span class="relative flex h-5 w-5 items-center justify-center">
            <span class="absolute h-5 w-5 rounded-full border-2 border-amber-500"></span>
            <span class="absolute h-2.5 w-2.5 rounded-full bg-amber-500"></span>
          </span>
          <span>By Budget</span>
        </label>

        <label class="flex cursor-pointer items-center gap-3 text-[14px] text-slate-600">
          <span class="relative flex h-5 w-5 items-center justify-center">
            <span class="absolute h-5 w-5 rounded-full border-2 border-slate-500"></span>
          </span>
          <span>By Model</span>
        </label>
      </div>

      <!-- Dropdown 1 -->
      <div class="mt-3">
        <div class="flex items-center justify-between rounded-xl border border-slate-200 px-4 py-3">
          <span class="text-[14px] text-slate-400">Select a Budget</span>
          <svg class="h-4 w-4 text-slate-700" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd"/>
          </svg>
        </div>
      </div>

      <!-- Dropdown 2 -->
      <div class="mt-3">
        <div class="flex items-center justify-between rounded-xl border border-slate-200 px-4 py-3">
          <span class="text-[14px] text-slate-400">Select a Vehicle Type</span>
          <svg class="h-4 w-4 text-slate-700" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd"/>
          </svg>
        </div>
      </div>

      <!-- Search Button -->
      <button
        type="button"
        class="mt-4 h-[40px] flex w-full items-center justify-center gap-3 rounded-xl bg-amber-500 px-5 py-3.5 text-[16px] font-medium text-white"
      >
        <i class="fa-solid fa-magnifying-glass text-white"></i>
        <span>Search</span>
      </button>
    </div>

    <!-- ✅ Advanced Search pinned to bottom (always visible) -->
    <button type="button" class="mt-3 flex w-full items-center justify-center gap-3 text-[14px] font-medium text-slate-800">
      <span>Advanced Search</span>
      <svg class="h-5 w-5 text-slate-800" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10.22 4.22a.75.75 0 011.06 0l5 5a.75.75 0 010 1.06l-5 5a.75.75 0 11-1.06-1.06l3.72-3.72H4.75a.75.75 0 010-1.5h9.19l-3.72-3.72a.75.75 0 010-1.06z" clip-rule="evenodd"/>
      </svg>
    </button>

  </div>
</div>
