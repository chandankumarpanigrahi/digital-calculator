<?php
   $currentPage = 'Home';
   include 'header.php';
   ?>
<section class="container calculator_card my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="hero_area">
                <h1>BMI Calculator</h1>
                <h6>Check if your Body Mass Index (BMI) is within a healthy range based on your weight and height.</h6>
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
                    <p>The BMI (Body Mass Index) Calculator helps users check if they are underweight, normal, overweight, or obese based on their height and weight.</p>
                    
                    <h6>Process:</h6>
                    <ol>
                        <li>Enter your weight in kg..</li>
                        <li>Select height input type: centimeters or feet & inches..</li>
                        <li>Enter height accordingly.</li>
                        <li>Click "Calculate BMI" to get BMI value and category.</li>
                    </ol>

                    <h6>Required Fields:</h6>
                    <ul>
                        <li>Weight (kg)</li>
                        <li>Height (cm OR Feet & Inches)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 right_card mb-3">
            <div class="container calculator_card">
                <div class="two_sections">
                    <div class="calculator">
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
                        <div class="d-flex">
                            <button class="btn btn_calculate w-100 me-1" onclick="calculateBMI()">Calculate BMI</button>
                            <button class="btn btn_reset w-50 ms-1" onclick="resetBMI()">Reset</button>
                        </div>
                    </div>
                    <div class="result">
                        <h4 class="text-center mt-3" id="bmiResult"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>