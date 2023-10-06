<?php
// Process the order and customer information
require_once('database.php');
// Display Errors
error_reporting(E_ALL);
ini_set('display_errors', 10);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get customer information
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $streetAddress = $_POST["sAddress"];
    $city = $_POST["city"];
    $province = $_POST["province"];

    // Define pizza prices as an associative array
    $pizzaPrices = [
        "Margherita Pizza" => 10.99,
        "Chicken Pizza" => 12.99,
        "Pepperoni Pizza" => 11.99,
        "Italian Olive Pizza" => 13.99,
        "Vegetable Pizza" => 12.49,
        "NYC Style Pizza" => 14.99,
        "Mushroom Pizza" => 11.49,
        "Four Seasons Pizza" => 15.99,
        "Alfredo Pizza" => 14.49,
    ];

    // Get selected pizza name
    $selectedPizza = $_POST["selectedPizza"];

    // Retrieve the corresponding pizza price
    $selectedPizzaPrice = isset($pizzaPrices[$selectedPizza]) ? $pizzaPrices[$selectedPizza] : 0.00;

    // Process and store the order
    $order = [
        "customer" => [
            "firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "phone" => $phone,
            "streetAddress" => $streetAddress,
            "city" => $city,
            "province" => $province,
        ],
        "selectedPizza" => $selectedPizza,
        "selectedPizzaPrice" => $selectedPizzaPrice,
    ];

    // Store the order in the database
    $database = new Database();
    $database->create(
        $selectedPizza,
        $firstName,
        $lastName,
        $email,
        $phone,
        $streetAddress,
        $city,
        $province,
        $selectedPizzaPrice
    );

    // Redirect to a thank you page
    header("Location: thankYou.php");
    exit;
} else {
    // If the form was not submitted, redirect to the order page
    header("Location: index.php");
    exit;
}
?>
