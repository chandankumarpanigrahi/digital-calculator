function calculateEMI() {
    let loanAmount = document.getElementById('loanAmount').value - document.getElementById('downPayment').value;
    let rate = (document.getElementById('interestRate').value / 12) / 100;
    let months = document.getElementById('loanTenure').value;
    let emi = (loanAmount * rate * Math.pow(1 + rate, months)) / (Math.pow(1 + rate, months) - 1);
    document.getElementById('emiResult').innerText = `Your Monthly EMI is: ₹${emi.toFixed(2)}`;
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

function calculateFuelCost() {
    let cost = (document.getElementById('distance').value / document.getElementById('mileage').value) * document.getElementById('fuelPrice').value;
    document.getElementById('fuelResult').innerText = `Your Fuel Cost: ₹${cost.toFixed(2)}`;
}

function calculateEVCharge() {
    let cost = (document.getElementById('batteryCapacity').value * (document.getElementById('chargeUsed').value / 100)) * document.getElementById('electricityCost').value;
    document.getElementById('evResult').innerText = `Your EV Charging Cost: ₹${cost.toFixed(2)}`;
}