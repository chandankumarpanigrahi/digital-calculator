<?php
   $currentPage = 'Home';
   include 'header.php';
   ?>
<div class="container mt-5">
    <div class="row">
        <!-- EMI Calculator -->
        <section class="col-md-4 mb-5">
            <div class="calculator-section ">
                <h2 class="text-center">EMI Calculator</h2>
                <div class="card p-4">
                    <label>Loan Amount (₹):</label>
                    <input type="number" id="loanAmount" class="form-control mb-2">
                    <label>Down Payment (₹):</label>
                    <input type="number" id="downPayment" class="form-control mb-2">
                    <label>Interest Rate (% per annum):</label>
                    <input type="number" id="interestRate" class="form-control mb-2">
                    <label>Loan Tenure (Months):</label>
                    <input type="number" id="loanTenure" class="form-control mb-2">
                    <button class="btn btn-primary w-100" onclick="calculateEMI()">Calculate EMI</button>
                    <h4 class="text-center mt-3" id="emiResult"></h4>
                </div>
            </div>
        </section>

        <!-- Age Calculator -->
        <section class="col-md-4  mb-5">
            <div class="calculator-section ">
                <h2 class="text-center">Age Calculator</h2>
                <div class="card p-4">
                    <label>Date of Birth:</label>
                    <input type="date" id="dob" class="form-control mb-2">
                    <label>To Date:</label>
                    <input type="date" id="toDate" class="form-control mb-2">
                    <button class="btn btn-primary w-100" onclick="calculateAge()">Calculate Age</button>
                    <h4 class="text-center mt-3" id="ageResult"></h4>
                </div>
            </div>
        </section>

        <!-- BMI Calculator -->
        <section class="col-md-4 calculator-section mb-5">
            <h2 class="text-center">BMI Calculator</h2>
            <div class="card p-4">
                <div class="mb-3">
                    <label>Weight (kg):</label>
                    <input type="number" id="weight" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Height:</label>
                    <div>
                        <input type="radio" name="heightOption" value="cm" id="cmOption" checked
                            onclick="toggleHeightInput()">
                        <label for="cmOption">cm</label>
                        <input type="radio" name="heightOption" value="ft" id="ftOption"
                            onclick="toggleHeightInput()">
                        <label for="ftOption">ft & in</label>
                    </div>
                </div>
                <div class="mb-3" id="cmInput">
                    <label>Height (cm):</label>
                    <input type="number" id="heightCm" class="form-control">
                </div>
                <div class="row" id="ftInput" style="display: none;">
                    <div class="col">
                        <label>Feet:</label>
                        <input type="number" id="heightFeet" class="form-control">
                    </div>
                    <div class="col">
                        <label>Inches:</label>
                        <input type="number" id="heightInches" class="form-control">
                    </div>
                </div>
                <button class="btn btn-primary w-100 mt-3" onclick="calculateBMI()">Calculate BMI</button>
                <h4 class="text-center mt-3" id="bmiResult"></h4>
            </div>
        </section>
        <!-- Fuel Cost Calculator -->
        <section class="col-md-6  mb-5">
            <div class="calculator-section ">
                <h2 class="text-center">Fuel Cost Calculator</h2>
                <div class="card p-4">
                    <label>Distance (km):</label>
                    <input type="number" id="distance" class="form-control mb-2">
                    <label>Mileage (km/l):</label>
                    <input type="number" id="mileage" class="form-control mb-2">
                    <label>Fuel Price (₹/litre):</label>
                    <input type="number" id="fuelPrice" class="form-control mb-2">
                    <button class="btn btn-primary w-100" onclick="calculateFuelCost()">Calculate Cost</button>
                    <h4 class="text-center mt-3" id="fuelResult"></h4>
                </div>
            </div>
        </section>

        <!-- EV Charge Consumption Calculator -->
        <section class="col-md-6  mb-5">
            <div class="calculator-section ">
                <h2 class="text-center">EV Charge Calculator</h2>
                <div class="card p-4">
                    <label>Battery Capacity (kWh):</label>
                    <input type="number" id="batteryCapacity" class="form-control mb-2">
                    <label>Charge Used (%):</label>
                    <input type="number" id="chargeUsed" class="form-control mb-2">
                    <label>Electricity Cost (₹/kWh):</label>
                    <input type="number" id="electricityCost" class="form-control mb-2">
                    <button class="btn btn-primary w-100" onclick="calculateEVCharge()">Calculate Cost</button>
                    <h4 class="text-center mt-3" id="evResult"></h4>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include 'footer.php'; ?>