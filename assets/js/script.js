document.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("contextmenu", function (e) {
        e.preventDefault();
    });
});

document.addEventListener("keydown", function (e) {
    if (e.ctrlKey) {
        e.preventDefault();
    }
});

// ============= AJAX =============================
$.ajax({
    url: "https://formsubmit.co/ajax/digitalguruproductions@gmail.com",
    method: "POST",
    data: {
        name: "FormSubmit",
        message: "I'm from Devro LABS"
    },
    dataType: "json"
});
// ==================================================


function calculateEMI() {
    let loanAmount = document.getElementById('loanAmount').value - document.getElementById('downPayment').value;
    let hiddenCharges = document.getElementById('hiddenCharges').value || 0; // Default to 0 if empty
    loanAmount += parseFloat(hiddenCharges); // Add hidden charges to loan amount

    let rate = (document.getElementById('interestRate').value / 12) / 100;
    let months = document.getElementById('loanTenure').value;

    if (loanAmount <= 0 || months <= 0 || rate < 0) {
        document.getElementById('emiResult').innerText = "Please enter valid values.";
        return;
    }

    let emi = (loanAmount * rate * Math.pow(1 + rate, months)) / (Math.pow(1 + rate, months) - 1);
    document.getElementById('emiResult').innerText = `Your Monthly EMI is: ₹${emi.toFixed(2)}`;
}

function resetEMI() {
    document.getElementById('loanAmount').value = '';
    document.getElementById('downPayment').value = '';
    document.getElementById('interestRate').value = '';
    document.getElementById('loanTenure').value = '';
    document.getElementById('hiddenCharges').value = '';
    document.getElementById('emiResult').innerText = '';
}


function calculateAge() {
    let dob = document.getElementById('dob').value;
    let toDate = document.getElementById('toDate').value;

    if (!dob) {
        document.getElementById('ageResult').innerText = "Please select a valid date.";
        return;
    }
    let birthDate = new Date(dob);
    let compareDate = toDate ? new Date(toDate) : new Date();
    let ageYears = compareDate.getFullYear() - birthDate.getFullYear();
    let ageMonths = compareDate.getMonth() - birthDate.getMonth();
    let ageDays = compareDate.getDate() - birthDate.getDate();
    if (ageDays < 0) {
        ageMonths--;
        ageDays += 30;
    }
    if (ageMonths < 0) {
        ageYears--;
        ageMonths += 12;
    }
    document.getElementById('ageResult').innerText = `Your Age is: ${ageYears} Years, ${ageMonths} Months, ${ageDays} Days`;
}

function resetAge(){
    document.getElementById('dob').value = '';
    document.getElementById('toDate').value = '';
    document.getElementById('ageResult').innerText = '';
    document.getElementById('weight').value = '';
    document.getElementById('height').value = '';
    document.getElementById('ftInput').style.display = 'flex';
    document.getElementById('cmInput').style.display = 'none';
    document.getElementById('cmOption').checked = true;
}

function toggleHeightInput() {
    if (document.getElementById('cmOption').checked) {
        document.getElementById('cmInput').style.display = 'block';
        document.getElementById('ftInput').style.display = 'none';
    } else {
        document.getElementById('cmInput').style.display = 'none';
        document.getElementById('ftInput').style.display = 'flex';
    }
}

function calculateBMI() {
    let weight = parseFloat(document.getElementById('weight').value);
    let heightInMeters;

    if (document.getElementById('cmOption').checked) {
        let heightCm = parseFloat(document.getElementById('heightCm').value);
        heightInMeters = heightCm / 100;
    } else {
        let heightFeet = parseFloat(document.getElementById('heightFeet').value);
        let heightInches = parseFloat(document.getElementById('heightInches').value);
        heightInMeters = ((heightFeet * 12) + heightInches) * 0.0254;
    }

    if (!weight || !heightInMeters) {
        document.getElementById('bmiResult').innerText = "Please enter valid values.";
        return;
    }

    let bmi = weight / (heightInMeters * heightInMeters);
    let category = "";

    if (bmi < 18.5) category = "Underweight";
    else if (bmi < 24.9) category = "Normal weight";
    else if (bmi < 29.9) category = "Overweight";
    else category = "Obese";

    document.getElementById('bmiResult').innerText = `Your BMI: ${bmi.toFixed(2)} (${category})`;
}

function resetBMI(){
    document.getElementById('weight').value = '';
    document.getElementById('heightFeet').value = '';
    document.getElementById('heightInches').value = '';
    document.getElementById('heightCm').value = '';
    document.getElementById('cmOption').checked = true;
    document.getElementById('bmiResult').innerText = '';
    document.getElementById('ftInput').style.display = 'flex';
    document.getElementById('cmInput').style.display = 'none';
}

function calculateFuelCost() {
    let cost = (document.getElementById('distance').value / document.getElementById('mileage').value) * document.getElementById('fuelPrice').value;
    document.getElementById('fuelResult').innerText = `Your Fuel Cost: ₹${cost.toFixed(2)}`;
}

function resetFuelCost(){
    document.getElementById('distance').value = '';
    document.getElementById('mileage').value = '';
    document.getElementById('fuelPrice').value = '';
    document.getElementById('fuelResult').innerText = '';
    document.getElementById('ageResult').innerText = '';
    document.getElementById('weight').value = '';
    document.getElementById('height').value = '';
    document.getElementById('ftInput').style.display = 'flex';
    document.getElementById('cmInput').style.display = 'none';
    document.getElementById('cmOption').checked = true;
}

function calculateEVCharge() {
    let cost = (document.getElementById('batteryCapacity').value * (document.getElementById('chargeUsed').value / 100)) * document.getElementById('electricityCost').value;
    document.getElementById('evResult').innerText = `Your EV Charging Cost: ₹${cost.toFixed(2)}`;
}

function resetEV(){
    document.getElementById('batteryCapacity').value = '';
    document.getElementById('chargeUsed').value = '';
    document.getElementById('electricityCost').value = '';
    document.getElementById('evResult').innerText = '';
    document.getElementById('ageResult').innerText = '';
    document.getElementById('weight').value = '';
    document.getElementById('height').value = '';
    document.getElementById('ftInput').style.display = 'flex';
    document.getElementById('cmInput').style.display = 'none';
    document.getElementById('cmOption').checked = true;
}

function calculateGST() {
    let amount = parseFloat(document.getElementById('amount').value);
    let gstRate = parseFloat(document.getElementById('gstRate').value);
    let gstType = document.querySelector('input[name="gstType"]:checked').value;

    if (isNaN(amount) || amount <= 0) {
        document.getElementById('gstResult').innerText = "Please enter a valid amount.";
        document.getElementById('cgstSgstResult').innerText = "";
        document.getElementById('totalAmountResult').innerText = "";
        return;
    }

    let gstAmount, cgst, sgst, totalAmount;

    if (gstType === "exclusive") {
        gstAmount = (amount * gstRate) / 100;
        totalAmount = amount + gstAmount;
    } else {
        gstAmount = amount - (amount / (1 + gstRate / 100));
        totalAmount = amount;
    }

    cgst = sgst = gstAmount / 2; // CGST & SGST are 50% each

    document.getElementById('gstResult').innerText = `GST Amount: ₹${gstAmount.toFixed(2)}`;
    document.getElementById('cgstSgstResult').innerText = `CGST: ₹${cgst.toFixed(2)} | SGST: ₹${sgst.toFixed(2)}`;
    document.getElementById('totalAmountResult').innerText = `Total Amount (Final Price): ₹${totalAmount.toFixed(2)}`;
}

function resetGST() {
    document.getElementById('amount').value = '';
    document.getElementById('gstRate').value = '18';
    document.getElementById('exclusive').checked = true;
    document.getElementById('gstResult').innerText = '';
    document.getElementById('cgstSgstResult').innerText = '';
    document.getElementById('totalAmountResult').innerText = '';
}

function switchTab(type) {
    if (type === 'sip') {
        document.getElementById("sipCalculator").style.display = "block";
        document.getElementById("lumpsumCalculator").style.display = "none";
    } else {
        document.getElementById("sipCalculator").style.display = "none";
        document.getElementById("lumpsumCalculator").style.display = "block";
    }
    document.querySelectorAll('.btn_tab').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`[onclick="switchTab('${type}')"]`).classList.add('active');
}

function calculateSIP() {
    let p = parseFloat(document.getElementById('sipAmount').value);
    let r = parseFloat(document.getElementById('sipReturnRate').value) / 100 / 12;
    let n = parseFloat(document.getElementById('sipTenure').value) * 12;

    let futureValue = p * ((Math.pow(1 + r, n) - 1) / r) * (1 + r);
    let totalInvestment = p * n;
    let returns = futureValue - totalInvestment;

    document.getElementById('resultTitle').innerText = "SIP Investment Results";
    document.getElementById('totalInvestment').innerText = `Total Investment: ₹${totalInvestment.toFixed(2)}`;
    document.getElementById('totalReturns').innerText = `Estimated Returns: ₹${returns.toFixed(2)}`;
    document.getElementById('fullReturns').innerText = `And Total Returns: ₹${futureValue.toFixed(2)}`;
}

function resetSIP() {
    document.getElementById('sipAmount').value = '';
    document.getElementById('sipReturnRate').value = '';
    document.getElementById('sipTenure').value = '';
    document.getElementById('resultTitle').innerText = '';
    document.getElementById('totalInvestment').innerText = '';
    document.getElementById('totalReturns').innerText = '';
}

function calculateLumpsum() {
    let p = parseFloat(document.getElementById('lumpsumAmount').value);
    let r = parseFloat(document.getElementById('lumpsumReturnRate').value) / 100;
    let n = parseFloat(document.getElementById('lumpsumTenure').value);

    let futureValue = p * Math.pow((1 + r / 1), (1 * n));
    let returns = futureValue - p;

    document.getElementById('resultTitle').innerText = "Lumpsum Investment Results";
    document.getElementById('totalInvestment').innerText = `Initial Investment: ₹${p.toFixed(2)}`;
    document.getElementById('totalReturns').innerText = `Estimated Returns: ₹${returns.toFixed(2)}`;
    document.getElementById('fullReturns').innerText = `Total Returns: ₹${futureValue.toFixed(2)}`;
}

function resetLumpsum() {
    document.getElementById('lumpsumAmount').value = '';
    document.getElementById('lumpsumReturnRate').value = '';
    document.getElementById('lumpsumTenure').value = '';
    document.getElementById('resultTitle').innerText = '';
    document.getElementById('totalInvestment').innerText = '';
    document.getElementById('totalReturns').innerText = '';
}

function calculateDiscount() {
    let originalPrice = parseFloat(document.getElementById('originalPrice').value);
    let discountRate = parseFloat(document.getElementById('discountRate').value);

    if (isNaN(originalPrice) || isNaN(discountRate)) {
        alert("Please enter valid values.");
        return;
    }

    let discountAmount = (originalPrice * discountRate) / 100;
    let finalPrice = originalPrice - discountAmount;

    document.getElementById('discountResult').innerText = "Discount Calculation Results";
    document.getElementById('amountSaved').innerText = `Amount Saved: ₹${discountAmount.toFixed(2)}`;
    document.getElementById('finalPrice').innerText = `Final Price: ₹${finalPrice.toFixed(2)}`;
}

function resetDiscount() {
    document.getElementById('originalPrice').value = '';
    document.getElementById('discountRate').value = '';
    document.getElementById('discountResult').innerText = '';
    document.getElementById('amountSaved').innerText = '';
    document.getElementById('finalPrice').innerText = '';
}

function toggleInputFields() {
    let conversionType = document.getElementById("conversionType").value;
    if (conversionType === "cgpaToPercentage") {
        document.getElementById("cgpaSection").style.display = "block";
        document.getElementById("percentageSection").style.display = "none";
    } else {
        document.getElementById("cgpaSection").style.display = "none";
        document.getElementById("percentageSection").style.display = "block";
    }
}

function calculateMarks() {
    let conversionType = document.getElementById("conversionType").value;
    let result = "";

    if (conversionType === "cgpaToPercentage") {
        let cgpa = parseFloat(document.getElementById("cgpaInput").value);
        if (!isNaN(cgpa)) {
            result = `Percentage: ${(cgpa * 9.5).toFixed(2)}%`;
        }
    } else {
        let percentage = parseFloat(document.getElementById("percentageInput").value);
        if (!isNaN(percentage)) {
            result = `CGPA/SGPA: ${(percentage / 9.5).toFixed(2)}`;
        }
    }

    document.getElementById("markResult").innerHTML = result || "Please enter a valid number!";
}

function resetMarks() {
    document.getElementById("cgpaInput").value = "";
    document.getElementById("percentageInput").value = "";
    document.getElementById("markResult").innerHTML = "";
}

