<?php
   $currentPage = 'Home';
   include 'header.php';
   ?>
<section class="container calculator_card my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="hero_area">
                <h1>EV Charge Calculator</h1>
                <h6>Plan your electric vehicle charging time and cost for a hassle-free experience.</h6>
            </div>
        </div>
    </div>
</section>
<section class="container mt-3">
    <div class="row">
        <div class="col-md-4 left_card mb-3">
            <div class="container calculator_card pe-1">
                <div class="description pe-2">
                    <h6>Purpose:</h6>
                    <p>This calculator helps electric vehicle (EV) owners determine the cost of charging their vehicle based on battery capacity and electricity rates.</p>
                    
                    <h6>Process:</h6>
                    <ol>
                        <li>Enter the battery capacity in kWh.</li>
                        <li>Enter the charge used (%) from the battery.</li>
                        <li>Provide the electricity cost per kWh.</li>
                        <li>Click "Calculate Cost" to get the estimated charging expense.</li>
                    </ol>

                    <h6>Required Fields:</h6>
                    <ul>
                        <li>Battery Capacity (kWh)</li>
                        <li>Charge Used (%)</li>
                        <li>Electricity Cost (₹/kWh)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 right_card mb-3">
            <div class="container calculator_card">
                <div class="two_sections">
                    <div class="calculator">
                        <label>Battery Capacity (kWh):</label>
                        <input type="number" id="batteryCapacity" class="form-control mb-2">
                        <label>Charge Used (%):</label>
                        <input type="number" id="chargeUsed" class="form-control mb-2">
                        <label>Electricity Cost (₹/kWh):</label>
                        <input type="number" id="electricityCost" class="form-control mb-2">
                        <div class="d-flex">
                            <button class="btn btn_calculate w-100 me-1" onclick="calculateEVCharge()">Calculate Age</button>
                            <button class="btn btn_reset w-50 ms-1" onclick="resetEV()">Reset</button>
                        </div>
                    </div>
                    <div class="result">
                        <h4 class="text-center mt-3" id="evResult"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>