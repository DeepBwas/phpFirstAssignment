<?php
// Process the order and customer information
require_once('database.php');
?>

<!DOCTYPE html>
<!-- Assignment One: Capturing Data & Variables -->
<!-- HTML Code by Deep Biswas, Georgian College, ON, Canada. -->
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Assignment One: Capturing Data & Variables">
    <title>Pizza Hub | Order</title>
    <meta name="robots" content="noindex, nofollow">
    <!-- Adding Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font styles from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@100;200;300;400;500;600;700;800;900&family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Outfit:wght@100;300;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Satisfy&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Adding Custom CSS File -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Navigation -->
    <header class="navigation-container">
        <div class="navigation-content">
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Pizza Hub Logo"></a>
            </div>
            <!-- Menu -->
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">MENU</a></li>
                    <li><a href="view.php">VIEW ORDERS</a></li>
                </ul>
            </div>
            <!-- Cart -->
            <div class="cart">
                <img src="img/cart.png" alt="Cart">
                <a href="#">Cart</a>
            </div>
        </div>
    </header>
    <!-- Navigation End -->
    <main class="pizzas-container">
        <div class="pizzas">
            <!-- Pizza-1 -->
            <div class="pizza">
                <img src="./img/pizzamargherita.png" alt="Margherita Pizza">
                <div class="pizza-details">
                    <p>Margherita Pizza</p>
                    <p>CA$10.99</p>
                </div>
            </div>
            <!-- Pizza-2 -->
            <div class="pizza">
                <img src="./img/pizzachicken.png" alt="Chicken Pizza">
                <div class="pizza-details">
                    <p>Chicken Pizza</p>
                    <p>CA$12.99</p>
                </div>
            </div>
            <!-- Pizza-3 -->
            <div class="pizza">
                <img src="./img/pizzapepperoni.png" alt="Pepperoni Pizza">
                <div class="pizza-details">
                    <p>Pepperoni Pizza</p>
                    <p>CA$11.99</p>
                </div>
            </div>
            <!-- Pizza-4 -->
            <div class="pizza">
                <img src="./img/pizzaitalianolive.png" alt="Italian Olive Pizza">
                <div class="pizza-details">
                    <p>Italian Olive Pizza</p>
                    <p>CA$13.99</p>
                </div>
            </div>
            <!-- Pizza-5 -->
            <div class="pizza">
                <img src="./img/pizzavegetable.png" alt="Vegetable Pizza">
                <div class="pizza-details">
                    <p>Vegetable Pizza</p>
                    <p>CA$12.49</p>
                </div>
            </div>
            <!-- Pizza-6 -->
            <div class="pizza">
                <img src="./img/pizzanyc.png" alt="NYC Style Pizza">
                <div class="pizza-details">
                    <p>NYC Style Pizza</p>
                    <p>CA$14.99</p>
                </div>
            </div>
            <!-- Pizza-7 -->
            <div class="pizza">
                <img src="./img/pizzamushroom.png" alt="Mushroom Pizza">
                <div class="pizza-details">
                    <p>Mushroom Pizza</p>
                    <p>CA$11.49</p>
                </div>
            </div>
            <!-- Pizza-8 -->
            <div class="pizza">
                <img src="./img/pizzafourseasons.png" alt="Four Seasons Pizza">
                <div class="pizza-details">
                    <p>Four Seasons Pizza</p>
                    <p>CA$15.99</p>
                </div>
            </div>
            <!-- Pizza-9 -->
            <div class="pizza">
                <img src="./img/pizzaalfredo.png" alt="Alfredo Pizza">
                <div class="pizza-details">
                    <p>Alfredo Pizza</p>
                    <p>CA$14.49</p>
                </div>
            </div>
        </div>
        <!-- Creating the Form -->
        <div class="forms">
            <form method="POST" action="processOrder.php">
                <label for="selectedPizza">Select a Pizza:</label>
                <select id="selectedPizza" name="selectedPizza" required>
                    <option value="" disabled selected>Please select a pizza of your choice</option>
                    <option value="Margherita Pizza">Margherita Pizza</option>
                    <option value="Chicken Pizza">Chicken Pizza</option>
                    <option value="Pepperoni Pizza">Pepperoni Pizza</option>
                    <option value="Italian Olive Pizza">Italian Olive Pizza</option>
                    <option value="Vegetable Pizza">Vegetable Pizza</option>
                    <option value="NYC Style Pizza">NYC Style Pizza</option>
                    <option value="Mushroom Pizza">Mushroom Pizza</option>
                    <option value="Four Seasons Pizza">Four Seasons Pizza</option>
                    <option value="Alfredo Pizza">Alfredo Pizza</option>
                </select>
                <!-- First Name Field -->
                <label for="fname">First Name*:</label>
                <input type="text" id="fname" name="fname" required>
                <!-- Last Name Field -->
                <label for="lname">Last Name*:</label>
                <input type="text" id="lname" name="lname" required>
                <!-- Email Field -->
                <label for="email">Email*:</label>
                <input type="email" id="email" name="email" required>
                <!-- Number Field -->
                <label for="number">Number*:</label>
                <input type="tel" id="number" name="phone" pattern="+[1]{1}-[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                <!-- Street Address Field -->
                <label for="address-street">Street Address*:</label>
                <input type="text" id="address-street" name="sAddress" required>
                <!-- City Field -->
                <label for="address-city">City*:</label>
                <input type="text" id="address-city" name="city" required>
                <!-- Province Selection -->
                <label for="address-province">Province*:</label>
                <select id="address-province" name="province" required>
                    <!-- Province Options -->
                    <option value="" disabled selected>Please Select a Province</option>
                    <option value="AB">Alberta</option>
                    <option value="BC">British Columbia</option>
                    <option value="MB">Manitoba</option>
                    <option value="NB">New Brunswick</option>
                    <option value="NL">Newfoundland and Labrador</option>
                    <option value="NS">Nova Scotia</option>
                    <option value="ON">Ontario</option>
                    <option value="PE">Prince Edward Island</option>
                    <option value="QC">Québec</option>
                    <option value="SK">Saskatchewan</option>
                </select>
                <button type="submit">Pay & Order</button>
            </form>
        </div>
        <!-- Adding Supported Payment Logos -->
        <div class="pay-logos">
            <div class="visa">
                <img src="./img/visa.png" alt="VISA">
            </div>
            <div class="applepay">
                <img src="./img/applepay.png" alt="APPLE PAY">
            </div>
            <div class="mastercard">
                <img src="./img/mastercard.png" alt="MASTERCARD">
            </div>
            <div class="googlepay">
                <img src="./img/googlepay.png" alt="GOOGLE PAY">
            </div>
            <div class="paypal">
                <img src="./img/paypal.png" alt="PAYPAL">
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-navigation">
            <!-- Footer Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/logo-bw.png" alt="Pizza Hub Logo"></a>
            </div>
            <!-- Footer Menu -->
            <div class="menu footer-menu">
                <ul>
                    <li><a href="view.php">VIEW ORDER</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">PRIVACY PROTECTION</a></li>
                </ul>
            </div>
            <!-- Social Media Links -->
            <div class="social">
                <ul>
                    <li><a href="#"><img src="./img/facebook.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="./img/twitter.png" alt="Twitter"></a></li>
                    <li><a href="#"><img src="./img/youtube.png" alt="YouTube"></a></li>
                </ul>
            </div>
        </div>
        <!-- Fake Copyright & Information -->
        <div class="copyright">
            <p>*Pricing may vary by location. An additional charge may apply for premium toppings, sauces, extra cheese, and special pizza types including: Handmade Pan Pizzas, Thin Crust Pizzas, Gluten Free Pizzas and Feast Pizzas.</p>
            <p>Please refer to offer when ordering. Prices, participation, delivery area, terms and charges may vary.</p>
            <p>COPYRIGHT (2023) - DEEP BISWAS. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>
</body>
</html>
