<?php
   $currentPage = 'Home';
   include 'header.php';
   ?>
    <section class="container calculator_card my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="hero_area">
                    <h1>Your All-in-One Solution for Everyday Calculations!</h1>
                    <h6>Simplify your daily tasks with our easy-to-use, accurate, and free calculators.</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="container calculator_card mb-3">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="hero_area text-center mt-3">
                    <h2>From EMI to BMI, Fuel Costs to EV Charging - We've Got You Covered!</h2>
                    <p>Explore our collection of essential calculators, carefully designed to simplify your daily tasks
                        and make your life easier. From financial planning to health tracking, our tools are here to
                        save you time and effort while providing accurate results for all your calculation needs.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="simple_calc_card">
                    <div class="info_items">
                        <img src="./assets/images/emi.png" alt="EMI Calculator">
                        <h4>EMI Calculator</h4>
                        <p>Easily calculate your monthly loan installments and plan your finances efficiently.</p>
                        <a class="btn btn_simple" href="emi.php">Calculate</a>
                    </div>
                    <div class="design"></div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="simple_calc_card">
                    <div class="info_items">
                        <img src="./assets/images/age.png" alt="Age Calculator">
                        <h4>Age Calculator</h4>
                        <p>Find out your exact age in years, months, and days with a simple date entry.</p>
                        <a class="btn btn_simple" href="age.php">Calculate</a>
                    </div>
                    <div class="design"></div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="simple_calc_card">
                    <div class="info_items">
                        <img src="./assets/images/bmi.png" alt="BMI Calculator">
                        <h4>BMI Calculator</h4>
                        <p>Check if your Body Mass Index (BMI) is within a healthy range based on your weight and height.</p>
                        <a class="btn btn_simple" href="bmi.php">Calculate</a>
                    </div>
                    <div class="design"></div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="simple_calc_card">
                    <div class="info_items">
                        <img src="./assets/images/fuel.png" alt="Fuel Cost Calculator">
                        <h4>Fuel Cost Calculator</h4>
                        <p>Estimate the total fuel cost for your journey based on distance and fuel efficiency.</p>
                        <a class="btn btn_simple" href="fuel.php">Calculate</a>
                    </div>
                    <div class="design"></div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="simple_calc_card">
                    <div class="info_items">
                        <img src="./assets/images/ev.png" alt="EV Charge Calculator">
                        <h4>EV Charge Calculator</h4>
                        <p>Plan your electric vehicle charging time and cost for a hassle-free experience.</p>
                        <a class="btn btn_simple" href="ev.php">Calculate</a>
                    </div>
                    <div class="design"></div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>