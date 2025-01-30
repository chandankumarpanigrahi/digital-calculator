<?php
   $currentPage = 'Home';
   include 'header.php';
   ?>
<section class="container calculator_card my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="hero_area">
                <h1>Fuel Cost Calculator</h1>
                <h6>Estimate the total fuel cost for your journey based on distance and fuel efficiency.</h6>
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
                    <p>This calculator helps users estimate the total cost of fuel required for a trip based on vehicle mileage and fuel prices.</p>
                    
                    <h6>Process:</h6>
                    <ol>
                        <li>Enter the total distance to be traveled (in km).</li>
                        <li>Enter the vehicle’s mileage (km per liter).</li>
                        <li>Provide the current fuel price per liter.</li>
                        <li>Click "Calculate Cost" to get the total fuel expense.</li>
                    </ol>

                    <h6>Required Fields:</h6>
                    <ul>
                        <li>Distance (km)</li>
                        <li>Mileage (km/l)</li>
                        <li>Fuel Price (₹/litre)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 right_card mb-3">
            <div class="container calculator_card">
                <div class="two_sections">
                    <div class="calculator">
                        <label>Distance (km):</label>
                        <input type="number" id="distance" class="form-control mb-2">
                        <label>Mileage (km/l):</label>
                        <input type="number" id="mileage" class="form-control mb-2">
                        <label>Fuel Price (₹/litre):</label>
                        <input type="number" id="fuelPrice" class="form-control mb-2">
                        <div class="d-flex">
                            <button class="btn btn_calculate w-100 me-1" onclick="calculateFuelCost()">Calculate Fuel Cost</button>
                            <button class="btn btn_reset w-50 ms-1" onclick="resetFuelCost()">Reset</button>
                        </div>
                    </div>
                    <div class="result">
                        <h4 class="text-center mt-3" id="fuelResult"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>