<?php
   $currentPage = 'Home';
   include 'header.php';
   ?>
<section class="container calculator_card my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="hero_area">
                <h1>EMI Calculator</h1>
                <h6>Easily calculate your monthly loan installments and plan your finances efficiently.</h6>
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
                    <p>The EMI (Equated Monthly Installment) Calculator helps users calculate their monthly loan repayment based on the loan amount, interest rate, and tenure.</p>
                    
                    <h6>Process:</h6>
                    <ol>
                        <li>Enter the loan amount and down payment (if applicable).</li>
                        <li>Provide the annual interest rate (in percentage).</li>
                        <li>Enter the loan tenure in months.</li>
                        <li>Click "Calculate EMI" to get the monthly installment amount.</li>
                    </ol>

                    <h6>Required Fields:</h6>
                    <ul>
                        <li>Loan Amount (₹)</li>
                        <li>Down Payment (₹)</li>
                        <li>Interest Rate (% per annum)</li>
                        <li>Loan Tenure (Months)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 right_card mb-3">
            <div class="container calculator_card">
                <div class="two_sections">
                    <div class="calculator">
                        <label>Loan Amount (₹):</label>
                        <input type="number" id="loanAmount" class="form-control mb-2">
                        <label>Down Payment (₹):</label>
                        <input type="number" id="downPayment" class="form-control mb-2">
                        <label>Interest Rate (% per annum):</label>
                        <input type="number" id="interestRate" class="form-control mb-2">
                        <label>Loan Tenure (Months):</label>
                        <input type="number" id="loanTenure" class="form-control mb-2">
                        <div class="d-flex">
                            <button class="btn btn_calculate w-100 me-1" onclick="calculateEMI()">Calculate EMI</button>
                            <button class="btn btn_reset w-50 ms-1" onclick="resetEMI()">Reset</button>
                        </div>
                    </div>
                    <div class="result">
                        <h4 class="text-center mt-3" id="emiResult"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>