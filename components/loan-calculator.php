  <!-- AUTO LOAN CALCULATOR -->
  <section class="alc">
    <div class="alc-bg"></div>

    <div class="alc-container">
      <div class="alc-card is-collapsed" id="alcCard">
        <!-- LEFT: FORM -->
        <div class="alc-form">
          <h2 class="alc-title">Auto Loan Calculator</h2>
          <p class="alc-sub">
            Use this car payment calculator to estimate
            monthly payments on your next new or used auto loan.
          </p>

          <div class="alc-grid">
            <div class="alc-field">
              <label>Loan Amount (NPR)</label>
              <input type="number" id="loanAmount" value="3000000" />
            </div>

            <div class="alc-field">
              <label>Interest Rate (%)</label>
              <input type="number" id="interestRate" value="12" />
            </div>

            <div class="alc-field">
              <label>Loan Term (Years)</label>
              <input type="number" id="loanYears" value="3" />
            </div>

            <div class="alc-field">
              <label>Down Payment (%)</label>
              <input type="number" id="downPayment" value="10" />
            </div>
          </div>

          <button class="alc-btn" id="calcBtn">
            Calculate <span aria-hidden="true">↗</span>
          </button>
        </div>

        <!-- RIGHT: RESULT -->
        <div class="alc-result" id="alcResult">
          <h3>EMI Payment Information</h3>

          <div class="alc-result-row">
            <span>Loan Amount</span>
            <strong id="rLoan">Rs. 27,00,000</strong>
          </div>

          <div class="alc-result-row">
            <span>Down Payment</span>
            <strong id="rDown">Rs. 3,00,000</strong>
          </div>

          <div class="alc-result-row">
            <span>EMI</span>
            <strong id="rEmi">Rs. 89,678.64</strong>
          </div>
        </div>
      </div>
    </div>
  </section>
