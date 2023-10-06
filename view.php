<?php
	require_once ('database.php');
	$res = $database->read();
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
    <title>Pizza Hub | View Orders</title>
    <meta name="robots" content="noindex, nofollow">
    <!-- Adding Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Adding Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Font styles from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@100;200;300;400;500;600;700;800;900&family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Outfit:wght@100;300;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Satisfy&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Adding Custom CSS File -->
    <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header class="navigation-container">
        <div class="navigation-content">
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Pizza Hub Logo"></a>
            </div>
            <!-- Menu -->
            <div class="menu">
                <ul>
                    <li><a href="index.php">ORDER AGAIN</a></li>
                    <li><a href="#">OUR MENU</a></li>
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
        <main class="view">
            <div class= "row">
                <table class="table table-hover table-dark">
                    <tr>
				        <th>#</th>
                        <th>Pizza Order</th>
				        <th>First Nane</th>
                        <th>Last Name</th>
				        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Street Address</th>
                        <th>City</th>
                        <th>Province</th>
                        <th>Order Price</th>
			        </tr>
                    <?php
				        while($r = mysqli_fetch_assoc($res)){
					?>
					<tr>
						<td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['pizzaName']; ?></td>
                        <td><?php echo $r['firstName']; ?></td>
                        <td><?php echo $r['lastName']; ?></td>
                        <td><?php echo $r['email']; ?></td>
                        <td><?php echo $r['phone']; ?></td>
                        <td><?php echo $r['streetAddress']; ?></td>
                        <td><?php echo $r['city']; ?></td>
                        <td><?php echo $r['province']; ?></td>
                        <td><?php echo $r['price']; ?></td>
					</tr>
			        <?php
				        }
			        ?>
                </table>
            </div>
        </main>
        <div class="footer-navigation">
            <!-- Footer Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/logo-bw.png" alt="Pizza Hub Logo"></a>
            </div>
            <!-- Footer Menu -->
            <div class="menu footer-menu">
                <ul>
                    <li><a href="index.php">ORDER AGAIN</a></li>
                    <li><a href="view.php">VIEW ORDER</a></li>
                    <li><a href="#">CONTACT US</a></li>
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
