<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Yemen Cafe, Lunch Menu">
	<meta name="description" content="Yemen Cafe order online">
	<title>Cis Restaurant Menu</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
	<script type="text/javascript">
	<!--

	function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
		}
		return true;
		}
</script>

</head>

	
	<body>
		<section>
	
			
			<div id="container">
				<img src="Images/home_body.jpg" alt="Inside Restaurant Image" width="100%" height="300px"/>
			
			<h1 class="center" id="color"> Please Review and Submit Your Order<h1>
			<?php
			
			// Get post variables from HTML form
			// Appetizers
			$hommos = (isset($_POST['hommos']) ? $_POST['hommos'] : null);
			$ghanoush = (isset($_POST['ghanoush']) ? $_POST['ghanoush'] : null);
			$labneh = (isset($_POST['labneh']) ? $_POST['labneh'] : null);
			$cheese = (isset($_POST['cheese']) ? $_POST['cheese'] : null);
			$nachos = (isset($_POST['nachos']) ? $_POST['nachos'] : null);
			
			// Sandwiches
			$taouk = (isset($_POST['taouk']) ? $_POST['taouk'] : null);
			$kibdah = (isset($_POST['kibdah']) ? $_POST['kibdah'] : null);
			$kufta = (isset($_POST['kufta']) ? $_POST['kufta'] : null);
			$turkey = (isset($_POST['turkey']) ? $_POST['turkey'] : null);
			$chicken_burger = (isset($_POST['chicken_burger']) ? $_POST['chicken_burger'] : null);
			$burger = (isset($_POST['burger']) ? $_POST['burger'] : null);
			
			// Drinks //
			$cocktail = (isset($_POST['cocktail']) ? $_POST['cocktail'] : null);
			$mango = (isset($_POST['mango']) ? $_POST['mango'] : null);
			$coke_product = (isset($_POST['coke_product']) ? $_POST['coke_product'] : null);
			
			// Side Orders //
			$fries = (isset($_POST['fries']) ? $_POST['fries'] : null);
			$mozzarella = (isset($_POST['mozzarella']) ? $_POST['mozzarella'] : null);
			
			//Famous Dishes//
			$kabsah_lamb = (isset($_POST['kabsah_lamb']) ? $_POST['kabsah_lamb'] : null);
			$kabsah_chicken = (isset($_POST['kabsah_chicken']) ? $_POST['kabsah_chicken'] : null);
			$beef_kabob = (isset($_POST['beef_kabob']) ? $_POST['beef_kabob'] : null);
			$chicken_kabob = (isset($_POST['chicken_kabob']) ? $_POST['chicken_kabob'] : null);
			$mixed_kabob = (isset($_POST['mixed_kabob']) ? $_POST['mixed_kabob'] : null);
			$shrimp_kabob = (isset($_POST['shrimp_kabob']) ? $_POST['shrimp_kabob'] : null);
			
			//Salads and Entrées// 
			$fattoush = (isset($_POST['fattoush']) ? $_POST['fattoush'] : null);
			$tabouleh = (isset($_POST['tabouleh']) ? $_POST['tabouleh'] : null);
			$chicken_salad = (isset($_POST['chicken_salad']) ? $_POST['chicken_salad'] : null);
			$shawarma = (isset($_POST['shawarma']) ? $_POST['shawarma'] : null);
			$ghallaba = (isset($_POST['ghallaba']) ? $_POST['ghallaba'] : null);
			$fish = (isset($_POST['fish']) ? $_POST['fish'] : null);
			
			//Cakes//
			$cheese_cake = (isset($_POST['cheese_cake']) ? $_POST['cheese_cake'] : null);
			$choclate_cheese = (isset($_POST['choclate_cheese']) ? $_POST['choclate_cheese'] : null);
			$four_cakes = (isset($_POST['four_cakes']) ? $_POST['four_cakes'] : null);
			$middle_cake = (isset($_POST['middle_cake']) ? $_POST['middle_cake'] : null);
			
			//Ice Cream//
			$icecream_sundae = (isset($_POST['icecream_sundae']) ? $_POST['icecream_cone'] : null);
			$icecream_cone = (isset($_POST['icecream_cone']) ? $_POST['icecream_cone'] : null);
			
			//couponcode
			$couponcode = (isset($_POST['couponcode']) ? $_POST['couponcode'] : null);
			
			
			echo "<table class=\"centertable\">";
			echo "<tr><th>Menu Item</th><th>Quantity</th><th>Price</th><th>Sub Total</th></tr>";
			$subtotal=0;
			$ordertotal=0;
			$special=0;
			$total_special=0;
			// Appetizers 
			if ($hommos > 0) {
			$subtotal = $hommos * 5.95;
			$ordertotal = $ordertotal + $subtotal;
			$special = $hommos * -2.96;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Hommos
				</td><td>$hommos</td><td>$5.95</td><td>$$subtotal</td></tr>";
			}
			if ($ghanoush > 0) {
			$subtotal = $ghanoush * 5.95;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Baba Ghanoush
				</td><td>$ghanoush</td><td>$5.95</td><td>$$subtotal</td></tr>";
			}
			if ($labneh > 0) {
			$subtotal = $labneh * 4.95;
			$ordertotal = $ordertotal + $subtotal;
			$special= $labneh * -2.96;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Labneh W/ Garlic
				</td><td>$labneh</td><td>4.95</td><td>$$subtotal</td></tr>";
			}
			
			if ($cheese > 0) {
			$subtotal = $cheese * 4.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Feta Cheese
				</td><td>$cheese</td><td>4.99</td><td>$$subtotal</td></tr>";
			}
			if ($nachos > 0) {
			$subtotal = $kibdah * 6.99;
			$ordertotal = $ordertotal + $subtotal;
			$special= $kibdah * -3;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Chicken Nachos
				</td><td>$nachos</td><td>6.99</td><td>$$subtotal</td></tr>";
			}
			// Sandwiches
			if ($taouk > 0) {
			$subtotal = $taouk * 4.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Shish Taouk
				</td><td>$taouk</td><td>4.99</td><td>$$subtotal</td></tr>";
			}
			if ($kibdah > 0) {
			$subtotal = $kibdah * 7.99;
			$ordertotal = $ordertotal + $subtotal;
			$special= $kibdah * -3;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Kibdah Sandwhich
				</td><td>$kibdah</td><td>7.99</td><td>$$subtotal</td></tr>";
			}
			if ($kufta > 0) {
			$subtotal = $kufta * 3.99;
			$ordertotal = $ordertotal + $subtotal;
			$special= $kufta *  -2;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Kfuta Sandwhich
				</td><td>$kufta</td><td>3.99</td><td>$$subtotal</td></tr>";
			}
			if ($turkey > 0) {
			$subtotal = $turkey * 5.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Turkey Sub
				</td><td>$turkey</td><td>5.99</td><td>$$subtotal</td></tr>";
			}
			if ($chicken_burger > 0) {
			$subtotal = $chicken_burger * 4.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Grilled Chicken Burger
				</td><td>$chicken_burger</td><td>4.99</td><td>$$subtotal</td></tr>";
			}
			if ($burger > 0) {
			$subtotal = $burger * 7.99;
			$ordertotal = $ordertotal + $subtotal;
			$special= -$burger * -3;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Double Burger
				</td><td>$burger</td><td>7.99</td><td>$$subtotal</td></tr>";
			}
			// Drinks
			if ($cocktail > 0) {
			$subtotal = $cocktail * 3.49;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Fruit Cocktail
				</td><td>$cocktail</td><td>3.49</td><td>$$subtotal</td></tr>";
			}
			if ($mango > 0) {
			$subtotal = $mango * 4.19;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Mambo Mango
				</td><td>$mango</td><td>4.19</td><td>$$subtotal</td></tr>";
			}
			if ($coke_product > 0) {
			$subtotal = $coke_product * 2.19;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Coke Product
				</td><td>$coke_product</td><td>2.19</td><td>$$subtotal</td></tr>";
			}
			
			//Side Orders
			if ($fries > 0) {
			$subtotal = $fries * 1.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>	French Fries
				</td><td>$fries</td><td>1.99</td><td>$$subtotal</td></tr>";
			}	
			if ($mozzarella > 0) {
			$subtotal = $mozzarella * 3.49;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>	Mozzarella Cheese Sticks
				</td><td>$mozzarella</td><td>3.49</td><td>$$subtotal</td></tr>";
			}	
			
			// Famous Dishes
			if ($kabsah_lamb > 0) {
			$subtotal = $kabsah_lamb * 18.99;
			$ordertotal = $ordertotal + $subtotal;
			$special= $kabsah_lamb * -7;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Kabsah W/ Lamb
				</td><td>$kabsah_lamb</td><td>18.99</td><td>$$subtotal</td></tr>";
			}
			if ($kabsah_chicken > 0) {
			$subtotal = $kabsah_chicken * 15.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Kabsah W/ Chicken
				</td><td>$kabsah_chicken</td><td>15.99</td><td>$$subtotal</td></tr>";
			}
			if ($beef_kabob > 0) {
			$subtotal = $beef_kabob * 13.95;
			$ordertotal = $ordertotal + $subtotal;
			$special= $beef_kabob * -5.96;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Beef Kabob
				</td><td>$beef_kabob </td><td>$13.95</td><td>$$subtotal</td></tr>";
			}
			if ($chicken_kabob > 0) {
			$subtotal = $chicken_kabob * 10.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Chicken Kabob
				</td><td>$chicken_kabob</td><td>10.99</td><td>$$subtotal</td></tr>";
			}
			if ($mixed_kabob > 0) {
			$subtotal = $mixed_kabob * 25.99;
			$ordertotal = $ordertotal + $subtotal;
			$special= $mixed_kabob * -11;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Complete Kabob Dish
				</td><td>$mixed_kabob </td><td>$25.99</td><td>$$subtotal</td></tr>";
			}
			if ($shrimp_kabob > 0) {
			$subtotal = $shrimp_kabob * 21.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Shrimp Kabob
				</td><td>$shrimp_kabob</td><td>21.99</td><td>$$subtotal</td></tr>";
			}
			// Salads & Entrées
			if ($fattoush > 0) {
			$subtotal = $fattoush * 4.99;
			$ordertotal = $ordertotal + $subtotal;
			$special= $fattoush * -3;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Fattoush Salad
				</td><td>$fattoush</td><td>4.99</td><td>$$subtotal</td></tr>";
			}
			if ($tabouleh > 0) {
			$subtotal = $tabouleh * 3.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Tabouleh Salad 
				</td><td>$tabouleh</td><td>3.99</td><td>$$subtotal</td></tr>";
			}
			if ($chicken_salad > 0) {
			$subtotal = $chicken_salad * 5.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Chicken Salad  
				</td><td>$chicken_salad</td><td>5.99</td><td>$$subtotal</td></tr>";
			}
			if ($shawarma > 0) {
			$subtotal = $shawarma * 6.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Shawarma 
				</td><td>$shawarma</td><td>6.99</td><td>$$subtotal</td></tr>";
			}
			if ($ghallaba > 0) {
			$subtotal = $ghallaba * 5.99;
			$ordertotal = $ordertotal + $subtotal;
			$special= $ghallaba * -3;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Ghallaba
				</td><td>$ghallaba</td><td>5.99</td><td>$$subtotal</td></tr>";
			}
			if ($fish > 0) {
			$subtotal = $fish * 7.99;
			$ordertotal = $ordertotal + $subtotal;
			$special= $fish * -3;
			$total_special = $total_special + $special;
			echo "<tr class=\"center\"><td>Grilled Pepper Fish  
				</td><td>$fish</td><td>7.99</td><td>$$subtotal</td></tr>";
			}
			//Cakes
			if ($cheese_cake > 0) {
			$subtotal = $cheese_cake * 5.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Cheese Cake 
				</td><td>$cheese_cake</td><td>5.99</td><td>$$subtotal</td></tr>";
			}
			if ($choclate_cheese > 0) {
			$subtotal = $choclate_cheese * 3.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Choclate Cheese Cake 
				</td><td>$choclate_cheese</td><td>3.99</td><td>$$subtotal</td></tr>";
			}
			if ($four_cakes > 0) {
			$subtotal = $shawarma * 4.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Mix or Choose One Cake 
				</td><td>$four_cakes</td><td>4.99</td><td>$$subtotal</td></tr>";
			}
			if ($middle_cake > 0) {
			$subtotal = $middle_cake * 2.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Middle Eastern Cake
				</td><td>$middle_cake</td><td>2.99</td><td>$$subtotal</td></tr>";
			}
			// Ice Cream
			if ($icecream_sundae > 0) {
			$subtotal = $icecream_sundae * 4.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Ice Cream Sundae
				</td><td>$icecream_sundae</td><td>4.99</td><td>$$subtotal</td></tr>";
			}
			if ($icecream_cone > 0) {
			$subtotal = $icecream_cone * 2.99;
			$ordertotal = $ordertotal + $subtotal;
			echo "<tr class=\"center\"><td>Ice Cream Cone 
				</td><td>$icecream_cone</td><td>2.99</td><td>$$subtotal</td></tr>";
			}
			// Display order total
			$subtotal3 = $ordertotal + $total_special;
			echo "<tr class=\"center\"><td></td><td colspan=\"2\">Order Total</td><td>$$ordertotal</td></tr>";
			$ordertotal2 = $ordertotal * 1.06;
			echo "<tr class=\"center\"><td></td><td colspan=\"2\">Plus 6% Taxes</td><td>$" .
			number_format($ordertotal2,2) . "</td></tr>";
			echo "<tr class=\"center\"><td></td><th colspan=\"2\">Today's Special Deduction</th><th>$". number_format($total_special,2) ."</th></tr>";
			// Start Coupon code code ***************************
			if ($couponcode == "1234" or $couponcode == "5678")
			{
			$subtotal3 = ($ordertotal2 + $total_special) * .9;
			echo "<tr class=\"center\"><td></td><th colspan=\"2\">Total with 10% Discount</th><th>$" .
			number_format($subtotal3,2) . "</th></tr>";
			}
			elseif ($couponcode == "2345" or $couponcode == "6789")
			{
			$subtotal3 = ($ordertotal2 + $total_special) * .8;
			echo "<tr class=\"center\"><td></td><th colspan=\"2\">Total with 20% Discount</th><th>$" .
			number_format($subtotal3,2) . "</th></tr>";
			}
			
			elseif ( $couponcode >= "0")
			{
			$subtotal3 = $ordertotal2 + $total_special;
			echo "<tr class=\"center\"><td></td><th colspan=\"2\">Total Bill</th><th>$" . number_format($subtotal3,2) ."</th></tr>
			<tr class=\"center\"><td></td><td colspan=\"2\">(Invalid code)</td></tr>";
			}
			elseif ($ordertotal2 >= "100")
			{
			$subtotal3 = $ordertotal2 + $total_special;
			echo "<tr class=\"center\"><td></td><th colspan=\"2\">Total Bill</th><th>$" . number_format($subtotal3,2) ."</th></tr>
			<tr class=\"center\"><td>Coupon code for your next order</td><td colspan=\"2\">".rand(10000, 99999)."</td></tr>";
			}
			
			else
			{
			$subtotal3 = $ordertotal2 + $total_special;
			echo "<tr class=\"center\"><td></td><th colspan=\"2\">Total Bill</th><th>$". number_format($subtotal3,2) ."</th></tr>";
			}
			
			
			// End Coupon code code ***************************
			echo "</table>";
			echo "<p class=\"center\">Enter payment information below or 
			<a href=\"javascript:history.go(-1)\">go back</a> and change the order.</p>"
			
			
			?>
			<h1 class="center" id="color">Payment Information<h1>
				<table class="centertable">
					<tr class="bottom_space">
						<td>First Name</td>
						<td>Last Name</td>
					</tr>
					<tr class="bottom_space">
						<td><input type="text" name="first_name" size="20" maxlength="30" required autofocus></td>
						<td><input type="text" name="last_name" size="20" maxlength="35" required></td>
					</tr>
					<tr class="bottom_space">
						<td>Phone Number</td>
						<td>E-Mail Address</td>
					</tr>
					<tr class="bottom_space">
						<td>(<input type="text" name="phone_1" size="3" maxlength="3" onkeypress="return isNumber(event)" required>)
							<input type="text" name="phone_2" size="3" maxlength="3" onkeypress="return isNumber(event)" required>
							-<input type="text" name="phone_3" size="4" maxlength="4" onkeypress="return isNumber(event)" required></td>
						<td><input type="text" name="email" size="25" maxlength="25"  required></td>
					</tr>
					<tr class="bottom_space">
						<td>Credit Card No</td>
						<td>Zip Code</td>
					</tr>
					<tr class="bottom_space">
						<td>
							<select id="CardType" name="CardType">
							<option value="AmEx">American Express</option>
							<option value="Discover">Discover</option>
							<option value="MasterCard">MasterCard</option>
							<option value="Visa">Visa</option>
							</select>
							<input type="text" id="CardNumber" name="CardNumber" size="24" maxlength="24"  onkeypress="return isNumber(event)" required>
						</td>
						<td><input type="text" name="zip_code" size="5" maxlength="5" required></td>
					</tr>
					<tr class="bottom_space">
						
						<td colspan="2" class="center"><input type="submit" value="submit">&emsp;&emsp;<button type="reset" value="Reset">Reset</button></td>
					</tr>
				</table>

			
			</div>
			
		</section>
			
			
	
	</body>
</html>
	
