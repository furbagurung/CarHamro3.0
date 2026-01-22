(function () {
  function formatRs(num) {
    return "Rs. " + num.toLocaleString("en-IN", { minimumFractionDigits: 2 });
  }

  const btn = document.getElementById("calcBtn");
  if (!btn) return;

  btn.addEventListener("click", function () {
    const amount = Number(document.getElementById("loanAmount").value || 0);
    const rateM =
      Number(document.getElementById("interestRate").value || 0) / 100 / 12;
    const months = Number(document.getElementById("loanYears").value || 0) * 12;
    const downPct = Number(document.getElementById("downPayment").value || 0) / 100;

    const downAmount = amount * downPct;
    const loan = amount - downAmount;

    let emi = 0;
    if (rateM > 0 && months > 0) {
      emi =
        (loan * rateM * Math.pow(1 + rateM, months)) /
        (Math.pow(1 + rateM, months) - 1);
    }

    document.getElementById("rLoan").innerText =
      "Rs. " + Math.round(loan).toLocaleString("en-IN");
    document.getElementById("rDown").innerText =
      "Rs. " + Math.round(downAmount).toLocaleString("en-IN");
    document.getElementById("rEmi").innerText = formatRs(emi);

    // expand right-anchored card
    const card = document.getElementById("alcCard");
    if (card) {
      card.classList.remove("is-collapsed");
      card.classList.add("is-expanded");
    }
  });
})();
