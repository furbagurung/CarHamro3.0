<!-- Loan Calculator (UPDATED UI like reference) -->
<section id="loan-calculator" class="mt-14">
  <div class="h-[600px] flex flex-row items-center max-w-[1304px] mx-auto px-4 rounded-2xl"
    style="
        background-image: url('./assets/images/calculator_banner.png');
        background-size: cover;
        background-position: 75% center;">
    <div class="w-full overflow-hidden rounded-2xl border border-gray-200 bg-white p-6 ml-4 transition-all">
      <div class="grid gap-1 w-full grid-rows-2 ">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Auto Loan Calculator</h2>
        <p class="mt-2 max-w-xl text-sm text-gray-600">
          Use this car payment calculator to estimate monthly payments on your next new or used auto loan.
        </p>
      </div>
      <div class="mt-4 grid grid-cols-2 w-full gap-6 items-start ">

        <!-- LEFT: Title + Inputs -->
        <div class=" transition-all duration-300 ease-out">

          <!-- Inputs grid -->
          <div class="grid gap-4 sm:grid-cols-2">
            <!-- Loan Amount -->
            <label class="rounded-2xl border border-gray-200 bg-white px-5 py-4 shadow-sm">
              <span class="block text-xs text-gray-500">Loan Amount (NPR)</span>
              <div class="mt-1 flex items-center gap-2">
                <span class="text-sm text-gray-400">Rs.</span>
                <input
                  id="loanAmount"
                  type="number"
                  inputmode="numeric"
                  min="0"
                  step="1000"
                  value="3000000"
                  class="w-full bg-transparent text-base font-semibold text-gray-900 outline-none"
                  placeholder="3000000" />
              </div>
            </label>

            <!-- Interest Rate -->
            <label class="rounded-2xl border border-gray-200 bg-white px-5 py-4 shadow-sm">
              <span class="block text-xs text-gray-500">Interest Rate</span>
              <div class="mt-1 flex items-center gap-2">
                <input
                  id="interestRate"
                  type="number"
                  inputmode="decimal"
                  min="0"
                  step="0.01"
                  value="12"
                  class="w-full bg-transparent text-base font-semibold text-gray-900 outline-none"
                  placeholder="12" />
                <span class="text-sm text-gray-400">%</span>
              </div>
            </label>

            <!-- Loan Term -->
            <label class="rounded-2xl border border-gray-200 bg-white px-5 py-4 shadow-sm">
              <span class="block text-xs text-gray-500">Loan Term (year)</span>
              <div class="mt-1 flex items-center gap-2">
                <input
                  id="loanTerm"
                  type="number"
                  inputmode="numeric"
                  min="1"
                  step="1"
                  value="3"
                  class="w-full bg-transparent text-base font-semibold text-gray-900 outline-none"
                  placeholder="3" />
              </div>
            </label>

            <!-- Down Payment -->
            <label class="rounded-2xl border border-gray-200 bg-white px-5 py-4 shadow-sm">
              <span class="block text-xs text-gray-500">Down Payment (NPR)</span>
              <div class="mt-1 flex items-center gap-2">
                <span class="text-sm text-gray-400">Rs.</span>
                <input
                  id="downPayment"
                  type="number"
                  inputmode="numeric"
                  min="0"
                  step="1000"
                  value="300000"
                  class="w-full bg-transparent text-base font-semibold text-gray-900 outline-none"
                  placeholder="300000" />
              </div>
            </label>
          </div>

          <!-- Error -->
          <div id="loanError" class="hidden mt-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700"></div>

          <!-- Actions -->
          <div class="mt-7 flex flex-col gap-3 sm:flex-row sm:items-center justify-between">
            <button
              type="button"
              id="loanCalcBtn"
              class="inline-flex h-14 w-full items-center justify-center gap-3 rounded-2xl bg-[#f59e0b] px-6 text-base font-semibold text-white shadow-sm hover:brightness-95">
              Calculate
              <i class="fa-solid fa-arrow-right"></i>
            </button>

            <button
              type="button"
              id="loanResetBtn"
              class="inline-flex h-14 w-full sm:w-auto items-center justify-center rounded-2xl border border-gray-200 bg-white px-6 text-base font-semibold text-gray-700 hover:bg-gray-50">
              Reset
            </button>
          </div>
        </div>

        <!-- RIGHT: Result card -->
        <div
          id="loanResultWrap"
          class="no-scrollbar overflow-x-hidden w-full grid items-center overflow-auto opacity-0.5  pointer-events-none transition-all duration-300 ease-out">
          <div class=" rounded-xl bg-gray-100 p-2 md:px-4">
            <h3 class="text-base font-bold text-gray-900">EMI Payment Information</h3>
            <div class="mt-5 grid grid-col gap-4">
              <div class="flex items-center justify-between">
                <span class="text-sm text-gray-600">Loan Amount</span>
                <span id="resLoanAmount" class="text-sm font-semibold text-gray-900">Rs. —</span>
              </div>

              <div class="flex items-center justify-between">
                <span class="text-sm text-gray-600">Down Payment</span>
                <span id="resDownPayment" class="text-sm font-semibold text-gray-900">Rs. —</span>
              </div>

              <div class="h-px w-full bg-gray-200"></div>

              <div class="flex items-center justify-between">
                <span class="text-sm text-gray-600">EMI</span>
                <span id="resEmi" class="text-sm font-semibold text-gray-900">Rs. —</span>
              </div>

              <!-- Keep these hidden if you don't want to show, but data remains calculated -->
              <div class="hidden">
                <span id="resPrincipal"></span>
                <span id="resInterest"></span>
                <span id="resTotal"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Loan Calculator JS (same logic, just updates these new result ids) -->
<script>
  (function() {
    const elAmount = document.getElementById("loanAmount");
    const elDown = document.getElementById("downPayment");
    const elRate = document.getElementById("interestRate");
    const elTerm = document.getElementById("loanTerm");

    const resultWrap = document.getElementById("loanResultWrap");
    const btnCalc = document.getElementById("loanCalcBtn");
    const btnReset = document.getElementById("loanResetBtn");
    const elErr = document.getElementById("loanError");

    const resLoanAmount = document.getElementById("resLoanAmount");
    const resDownPayment = document.getElementById("resDownPayment");
    const resEmi = document.getElementById("resEmi");

    const resPrincipal = document.getElementById("resPrincipal");
    const resInterest = document.getElementById("resInterest");
    const resTotal = document.getElementById("resTotal");

    if (!elAmount || !elDown || !elRate || !elTerm || !btnCalc || !btnReset || !resultWrap) return;



    const fmtRs = (n) => {
      if (!isFinite(n)) return "Rs. —";
      const rounded = Math.round(n * 100) / 100;
      return "Rs. " + rounded.toLocaleString("en-US");
    };

    function showError(msg) {
      if (!elErr) return;
      if (!msg) {
        elErr.classList.add("hidden");
        elErr.textContent = "";
        return;
      }
      elErr.textContent = msg;
      elErr.classList.remove("hidden");
    }




    function clearResults() {
      if (resLoanAmount) resLoanAmount.textContent = "Rs. —";
      if (resDownPayment) resDownPayment.textContent = "Rs. —";
      if (resEmi) resEmi.textContent = "Rs. —";
    }

    function calculate() {
      showError("");

      const loanAmount = Number(elAmount.value || 0);
      const downPayment = Number(elDown.value || 0);
      const annualRate = Number(elRate.value || 0);
      const years = Number(elTerm.value || 0);

      if (loanAmount <= 0) return showError("Loan Amount must be greater than 0.");
      if (downPayment < 0) return showError("Down Payment cannot be negative.");
      if (downPayment >= loanAmount) return showError("Down Payment must be less than Loan Amount.");
      if (annualRate < 0) return showError("Interest Rate cannot be negative.");
      if (years <= 0) return showError("Loan Term must be at least 1 year.");

      const P = loanAmount - downPayment; // financed amount
      const n = Math.round(years * 12); // months
      const r = (annualRate / 100) / 12; // monthly rate

      let emi = 0;
      if (r === 0) {
        emi = P / n;
      } else {
        const pow = Math.pow(1 + r, n);
        emi = (P * r * pow) / (pow - 1);
      }

      const totalPayment = emi * n;
      const totalInterest = totalPayment - P;

      // Update UI
      if (resLoanAmount) resLoanAmount.textContent = fmtRs(loanAmount);
      if (resDownPayment) resDownPayment.textContent = fmtRs(downPayment);
      if (resEmi) resEmi.textContent = fmtRs(emi);

      // Still computed
      if (resPrincipal) resPrincipal.textContent = P;
      if (resInterest) resInterest.textContent = totalInterest;
      if (resTotal) resTotal.textContent = totalPayment;


    }

    btnCalc.addEventListener("click", calculate);

    [elAmount, elDown, elRate, elTerm].forEach((inp) => {
      inp.addEventListener("keydown", (e) => {
        if (e.key === "Enter") calculate();
      });
    });

    btnReset.addEventListener("click", () => {
      elAmount.value = 3000000;
      elDown.value = 300000;
      elRate.value = 12;
      elTerm.value = 3;

      showError("");
      clearResults();

    });

    // Initial state (important)
    clearResults();
    hideResultsUI();
  })();
</script>