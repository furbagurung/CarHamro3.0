<section class="mt-12 w-full bg-transparent overflow-hidden">

    <div class="container mx-auto px-4 py-8 lg:py-12">
        <!-- Header -->
        <div class="flex flex-col items-start gap-2">
            <h2 class="text-[28px] leading-tight font-heading font-bold text-neutral-900">Auto Loan Calculator</h2>
            <p class="text-sm md:text-base">Use this car payment calculator to estimate monthly payments on your next new or used auto loan</p>
        </div>

        <!-- Calculator Card -->
        <div class="mt-8 w-full mx-auto bg-white rounded-2xl border ">
            <div class="grid lg:grid-cols-2 gap-6 p-6 md:p-8">

                <!-- Left Side - Input Form -->
                <div>
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Loan Details</h2>

                    <!-- Loan Amount -->
                    <div class="mb-4 border rounded-lg p-4">
                        <div class="flex items-center justify-between mb-3">
                            <label class="flex items-center text-gray-700 font-medium text-sm">
                                <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Loan Amount
                            </label>
                        </div>
                        <div class="relative pt-6 pb-2">
                            <div id="principalTooltip" class="absolute -top-1 left-0 transform -translate-x-1/2 bg-gray-800 text-white px-3 py-1.5 rounded-lg text-sm font-semibold whitespace-nowrap shadow-lg">
                                <div class="relative">
                                    NPR 30,00,000
                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-t-4 border-l-transparent border-r-transparent border-t-gray-800"></div>
                                </div>
                            </div>
                            <input type="range" id="principalSlider" min="50000" max="30000000" step="50000" value="3000000" class="w-full h-2 rounded-full appearance-none cursor-pointer slider-orange">
                        </div>
                        <div class="flex justify-between text-xs text-gray-500 mt-2">
                            <span>Rs 50K</span>
                            <span>Rs 3Cr</span>
                        </div>
                    </div>

                    <!-- Interest Rate -->
                    <div class="mb-4 border rounded-lg p-4">
                        <div class="flex items-center justify-between mb-3">
                            <label class="flex items-center text-gray-700 font-medium text-sm">
                                <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                Interest Rate
                            </label>
                        </div>
                        <div class="relative pt-6 pb-2">
                            <div id="rateTooltip" class="absolute -top-1 left-0 transform -translate-x-1/2 bg-gray-800 text-white px-3 py-1.5 rounded-lg text-sm font-semibold whitespace-nowrap shadow-lg">
                                <div class="relative">
                                    12%
                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-t-4 border-l-transparent border-r-transparent border-t-gray-800"></div>
                                </div>
                            </div>
                            <input type="range" id="rateSlider" min="1" max="20" step="0.1" value="12" class="w-full h-2 rounded-full appearance-none cursor-pointer slider-orange">
                        </div>
                        <div class="flex justify-between text-xs text-gray-500 mt-2">
                            <span>1%</span>
                            <span>20%</span>
                        </div>
                    </div>

                    <!-- Loan Tenure -->
                    <div class="mb-4 border rounded-lg p-4">
                        <div class="flex items-center justify-between mb-3">
                            <label class="flex items-center text-gray-700 font-medium text-sm">
                                <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Loan Tenure
                            </label>
                        </div>
                        <div class="relative pt-6 pb-2">
                            <div id="tenureTooltip" class="absolute -top-1 left-0 transform -translate-x-1/2 bg-gray-800 text-white px-3 py-1.5 rounded-lg text-sm font-semibold whitespace-nowrap shadow-lg">
                                <div class="relative">
                                    3.0 years
                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-t-4 border-l-transparent border-r-transparent border-t-gray-800"></div>
                                </div>
                            </div>
                            <input type="range" id="tenureSlider" min="6" max="360" step="6" value="36" class="w-full h-2 rounded-full appearance-none cursor-pointer slider-orange">
                        </div>
                        <div class="flex justify-between text-xs text-gray-500 mt-2">
                            <span>0.5 years</span>
                            <span>30 years</span>
                        </div>
                    </div>

                    <!-- Down Payment -->
                    <div class="mb-6 border rounded-lg p-4">
                        <div class="flex items-center justify-between mb-3">
                            <label class="flex items-center text-gray-700 font-medium text-sm">
                                <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Down Payment (NPR)
                            </label>
                        </div>
                        <div class="relative pt-6 pb-2">
                            <div id="downPaymentTooltip" class="absolute -top-1 left-0 transform -translate-x-1/2 bg-gray-800 text-white px-3 py-1.5 rounded-lg text-sm font-semibold whitespace-nowrap shadow-lg">
                                <div class="relative">
                                    NPR 3,00,000
                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-t-4 border-l-transparent border-r-transparent border-t-gray-800"></div>
                                </div>
                            </div>
                            <input type="range" id="downPaymentSlider" min="0" max="10000000" step="50000" value="300000" class="w-full h-2 rounded-full appearance-none cursor-pointer slider-orange">
                        </div>
                        <div class="flex justify-between text-xs text-gray-500 mt-2">
                            <span>Rs 0</span>
                            <span>Rs 1Cr</span>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Results -->
                <div class="h-fit bg-[#fffdf0] to-gray-50 rounded-xl p-10 mt-10">
                    <!-- Main EMI Display -->
                    <div class="text-center mb-4">
                        <p class="text-xs text-gray-600 uppercase tracking-wider mb-2">Estimated Payment</p>
                        <p id="emiDisplay" class="text-2xl md:text-4xl font-bold mb-1" style="color: #faa61a;">NPR 89,679</p>
                        <p class="text-sm text-gray-500">/month</p>
                    </div>

                    <!-- Details List -->
                    <div class="space-y-1 mb-2">
                        <div class="flex justify-between items-center py-1 border-b border-gray-200">
                            <span class="text-sm text-gray-600">Loan amount</span>
                            <span id="loanAmountDisplay" class="text-sm font-bold text-gray-900">NPR 27,00,000</span>
                        </div>
                        <div class="flex justify-between items-center py-1 border-b border-gray-200">
                            <span class="text-sm text-gray-600">Down payment</span>
                            <span id="downPaymentResult" class="text-sm font-bold text-gray-900">NPR 3,00,000</span>
                        </div>
                        <div class="flex justify-between items-center py-1 border-b border-gray-200">
                            <span class="text-sm text-gray-600">Interest rate</span>
                            <span id="rateResult" class="text-sm font-bold text-gray-900">12%</span>
                        </div>
                        <div class="flex justify-between items-center py-1 border-b border-gray-200">
                            <span class="text-sm text-gray-600">Loan term</span>
                            <span id="tenureResult" class="text-sm font-bold text-gray-900">3.0 years</span>
                        </div>
                        <div class="flex justify-between items-center py-1 border-b border-gray-200">
                            <span class="text-sm text-gray-600">Total interest</span>
                            <span id="interestDisplay" class="text-sm font-bold text-gray-900">NPR 5,28,431</span>
                        </div>
                        <div class="flex justify-between items-center py-1">
                            <span class="text-sm text-gray-600">Total amount</span>
                            <span id="totalDisplay" class="text-sm font-bold text-gray-900">NPR 32,28,431</span>
                        </div>
                    </div>

                    <!-- Breakdown Payment -->
                    <div class="text-center">
                        <!-- <h3 class="text-base font-bold text-gray-900">Breakdown Payment</h3> -->

                        <!-- Donut Chart -->
                        <div class="relative inline-block mb-2">
                            <canvas id="donutChart" width="200" height="200"></canvas>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                                <p class="text-xs text-gray-600 mb-1">Your payment</p>
                                <p id="chartEmiDisplay" class="text-base font-bold" style="color: #faa61a;">NPR 89,679</p>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="flex justify-center gap-4 text-xs">
                            <div class="text-center">
                                <div class="flex items-center justify-center mb-1">
                                    <div class="w-3 h-3 rounded-full mr-1 bg-[#fef5bf] border"></div>
                                    <span class="text-gray-600">Principal</span>
                                </div>
                                <p id="principalAmount" class="font-bold text-gray-900">NPR 27,00,000</p>
                            </div>
                            <div class="text-center">
                                <div class="flex items-center justify-center mb-1">
                                    <div class="w-3 h-3 rounded-full mr-1" style="background: #faa61a;"></div>
                                    <span class="text-gray-600">Interest</span>
                                </div>
                                <p id="interestAmount" class="font-bold text-gray-900">NPR 5,28,431</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .slider-orange::-webkit-slider-thumb {
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #faa61a;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s;
        }

        .slider-orange::-webkit-slider-thumb:hover {
            transform: scale(1.1);
        }

        .slider-orange::-webkit-slider-track {
            height: 8px;
            border-radius: 4px;
            background: #e5e7eb;
        }

        .slider-orange::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #faa61a;
            cursor: pointer;
            border: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s;
        }

        .slider-orange::-moz-range-thumb:hover {
            transform: scale(1.1);
        }

        .slider-orange::-moz-range-track {
            height: 8px;
            border-radius: 4px;
            background: #e5e7eb;
        }
    </style>

    <script>
        var principalSlider = document.getElementById('principalSlider');
        var rateSlider = document.getElementById('rateSlider');
        var tenureSlider = document.getElementById('tenureSlider');
        var downPaymentSlider = document.getElementById('downPaymentSlider');

        var principalTooltip = document.getElementById('principalTooltip');
        var rateTooltip = document.getElementById('rateTooltip');
        var tenureTooltip = document.getElementById('tenureTooltip');
        var downPaymentTooltip = document.getElementById('downPaymentTooltip');

        var emiDisplay = document.getElementById('emiDisplay');
        var chartEmiDisplay = document.getElementById('chartEmiDisplay');
        var interestDisplay = document.getElementById('interestDisplay');
        var totalDisplay = document.getElementById('totalDisplay');
        var loanAmountDisplay = document.getElementById('loanAmountDisplay');
        var downPaymentResult = document.getElementById('downPaymentResult');
        var rateResult = document.getElementById('rateResult');
        var tenureResult = document.getElementById('tenureResult');
        var principalAmount = document.getElementById('principalAmount');
        var interestAmount = document.getElementById('interestAmount');

        var canvas = document.getElementById('donutChart');
        var ctx = canvas.getContext('2d');

        function formatCurrency(num) {
            return 'NPR ' + new Intl.NumberFormat('en-IN', {
                maximumFractionDigits: 0,
            }).format(num);
        }

        function updateTooltipPosition(slider, tooltip, min, max) {
            var value = slider.value;
            var percentage = ((value - min) / (max - min)) * 100;
            tooltip.style.left = percentage + '%';
        }

        function updateSliderBackground(slider, min, max) {
            var value = slider.value;
            var percentage = ((value - min) / (max - min)) * 100;
            slider.style.background = 'linear-gradient(to right, #faa61a 0%, #faa61a ' + percentage + '%, #e5e7eb ' + percentage + '%, #e5e7eb 100%)';
        }

        function drawDonutChart(principalPercentage, interestPercentage) {
            var centerX = 100;
            var centerY = 100;
            var radius = 80;
            var lineWidth = 24;

            ctx.clearRect(0, 0, canvas.width, canvas.height);

            var principalAngle = (principalPercentage / 100) * 2 * Math.PI;
            var interestAngle = (interestPercentage / 100) * 2 * Math.PI;

            // Draw interest arc (orange) - now first
            ctx.beginPath();
            ctx.arc(centerX, centerY, radius, -Math.PI / 2, -Math.PI / 2 + interestAngle);
            ctx.lineWidth = lineWidth;
            ctx.strokeStyle = '#fef5bf';
            ctx.lineCap = 'round';
            ctx.stroke();

            // Draw principal arc (gray) - now second
            ctx.beginPath();
            ctx.arc(centerX, centerY, radius, -Math.PI / 2 + interestAngle, -Math.PI / 2 + interestAngle + principalAngle);
            ctx.lineWidth = lineWidth;
            ctx.strokeStyle = '#faa61a';
            ctx.lineCap = 'round';
            ctx.stroke();

            // Draw background circle
            ctx.beginPath();
            ctx.arc(centerX, centerY, radius, 0, 2 * Math.PI);
            ctx.lineWidth = lineWidth;
            ctx.strokeStyle = '#e5e7eb';
            ctx.globalCompositeOperation = 'destination-over';
            ctx.stroke();
            ctx.globalCompositeOperation = 'source-over';
        }

        function calculateEMI() {
            var totalPrice = parseFloat(principalSlider.value);
            var downPayment = parseFloat(downPaymentSlider.value);
            var p = totalPrice - downPayment;
            var r = parseFloat(rateSlider.value) / 12 / 100;
            var n = parseInt(tenureSlider.value);

            if (p > 0 && r > 0 && n > 0) {
                var emiValue = (p * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
                var total = emiValue * n;
                var interest = total - p;

                var emi = Math.round(emiValue);
                var totalAmount = Math.round(total);
                var totalInterest = Math.round(interest);

                var principalPercentage = (p / totalAmount) * 100;
                var interestPercentage = (totalInterest / totalAmount) * 100;

                principalTooltip.querySelector('div').firstChild.textContent = formatCurrency(totalPrice);
                rateTooltip.querySelector('div').firstChild.textContent = rateSlider.value + '%';
                tenureTooltip.querySelector('div').firstChild.textContent = (n / 12).toFixed(1) + (n === 12 ? ' year' : ' years');
                downPaymentTooltip.querySelector('div').firstChild.textContent = formatCurrency(downPayment);

                emiDisplay.textContent = formatCurrency(emi);
                chartEmiDisplay.textContent = formatCurrency(emi);
                loanAmountDisplay.textContent = formatCurrency(p);
                downPaymentResult.textContent = formatCurrency(downPayment);
                rateResult.textContent = rateSlider.value + '%';
                tenureResult.textContent = (n / 12).toFixed(1) + (n === 12 ? ' year' : ' years');
                interestDisplay.textContent = formatCurrency(totalInterest);
                totalDisplay.textContent = formatCurrency(totalAmount);
                principalAmount.textContent = formatCurrency(p);
                interestAmount.textContent = formatCurrency(totalInterest);

                drawDonutChart(principalPercentage, interestPercentage);
            }
        }

        principalSlider.addEventListener('input', function() {
            updateSliderBackground(this, 50000, 30000000);
            updateTooltipPosition(this, principalTooltip, 50000, 30000000);
            calculateEMI();
        });

        rateSlider.addEventListener('input', function() {
            updateSliderBackground(this, 1, 20);
            updateTooltipPosition(this, rateTooltip, 1, 20);
            calculateEMI();
        });

        tenureSlider.addEventListener('input', function() {
            updateSliderBackground(this, 6, 360);
            updateTooltipPosition(this, tenureTooltip, 6, 360);
            calculateEMI();
        });

        downPaymentSlider.addEventListener('input', function() {
            updateSliderBackground(this, 0, 10000000);
            updateTooltipPosition(this, downPaymentTooltip, 0, 10000000);
            calculateEMI();
        });

        updateSliderBackground(principalSlider, 50000, 30000000);
        updateSliderBackground(rateSlider, 1, 20);
        updateSliderBackground(tenureSlider, 6, 360);
        updateSliderBackground(downPaymentSlider, 0, 10000000);

        updateTooltipPosition(principalSlider, principalTooltip, 50000, 30000000);
        updateTooltipPosition(rateSlider, rateTooltip, 1, 20);
        updateTooltipPosition(tenureSlider, tenureTooltip, 6, 360);
        updateTooltipPosition(downPaymentSlider, downPaymentTooltip, 0, 10000000);

        calculateEMI();
    </script>
</section>