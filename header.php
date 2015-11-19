<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="cheese, cheeses, cheese of the month, cheese club, club, monthly club, cheese of the month club, cheese delivery, organic cheese, artisan cheese, hand crafted cheese, hand crafted, goat cheese, cow's milk cheese, cows milk, cows, sheep milk cheese, sheep, sheep's milk, aged cheese, semi aged cheese, semi-aged cheese, hard cheese, soft cheese, semi soft cheese, semi-soft cheese, triple creme cheese, fromage, natural ingredients, natural food, natural, organic ingredients, organic, natural, healthy, local cheese, fresh cheese, farm, local farm, local, farm to table, locavore, green market, gift, gifts, food gifts, healthy gifts, dairy, produce, dairy farm, dairy products, cream cheese, triple cream cheese">
	<title>NYC Cheese of the Month Club</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="chosen/chosen.css" />
	<?php 
		function curPageName() {
 			return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
		} 
	?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
	<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
	<script src="chosen/chosen.jquery.js"></script>
	<script>
		$(document).ready(function(){
			$('select').chosen();
		})
	</script>
</head>
<body>
	<div class="main">
		<div id="cheeses">
			<img src="images/cheeses/cheddar.jpg" alt="" />
			<img src="images/cheeses/blue.jpg" alt="" />
			<img src="images/cheeses/curd.jpg" alt="" />
			<img src="images/cheeses/goat.jpg" alt="" />
			<img src="images/cheeses/parmesan.jpg" alt="" />
			<img src="images/cheeses/feta.jpg" alt="" />
			<img src="images/cheeses/swiss.jpg" alt="" />
			<div style="clear:both"></div>
		</div>
		<div class="content">
			<div class="left_rail">
				<img class="logo" src="images/logo.png" alt="NYC Cheese of the Month Club">
				<ul class="nav">
					<li><a <?php echo curPageName() == 'index.php' ? 'class="current"' : 'href="index.php"'?>">Home</a></li>
					<li><a <?php echo curPageName() == 'faq.php' ? 'class="current"' : 'href="faq.php"'?>">FAQ</a></li>
					<li><a <?php echo curPageName() == 'signup.php' ? 'class="current"' : 'class="last" href="signup.php"'?>>Sign Up</a></li>
					<li><a <?php echo curPageName() == 'contact.php' ? 'class="current last"' : 'class="last" href="contact.php"'?>>Contact</a></li>
				</ul>
			</div>
			<div class="description">