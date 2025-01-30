<?php
   $currentPage = 'Home';
   include 'header.php';
   ?>
<section class="container calculator_card my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="hero_area">
                <h1>Age Calculator</h1>
                <h6>Find out your exact age in years, months, and days with a simple date entry.</h6>
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
                    <p>The Age Calculator helps users determine their exact age from their date of birth to a specific date.</p>
                    
                    <h6>Process:</h6>
                    <ol>
                        <li>Enter the date of birth.</li>
                        <li>Optionally, enter a custom "To Date" or use today's date by default.</li>
                        <li>Click "Calculate Age" to get age in years, months, and days.</li>
                    </ol>

                    <h6>Required Fields:</h6>
                    <ul>
                        <li>Date of Birth</li>
                        <li>To Date (Optional)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 right_card mb-3">
            <div class="container calculator_card">
                <div class="two_sections">
                    <div class="calculator">
                    <label>Date of Birth:</label>
                    <input type="date" id="dob" class="form-control mb-2">
                    <label>To Date:</label>
                    <input type="date" id="toDate" class="form-control mb-2">
                        <div class="d-flex">
                            <button class="btn btn_calculate w-100 me-1" onclick="calculateAge()">Calculate Age</button>
                            <button class="btn btn_reset w-50 ms-1" onclick="resetAge()">Reset</button>
                        </div>
                    </div>
                    <div class="result">
                        <h4 class="text-center mt-3" id="ageResult"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>