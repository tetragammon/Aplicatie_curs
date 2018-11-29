<?php

include_once ('connection.php');

$ip = $_SERVER['REMOTE_ADDR'];

$sql3 = "select ip from ip_table where ip='$ip'";

$mysql3 = $conn->query($sql3)  or die (mysqli_error($conn));


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class= "container">
		<h1 class ="brand">Coca Cola Contest </div>
		<div class ="wrapper animated bounceInLeft">
			<div class="company-info">
				<h3 style="text-align:center">Win your Coca Cola Gift</h3>
				<ul style="font-size:29px; text-align:center">
					<li class="li">It's easy to win our Gifts</li>
					<li class="li">Call us: 0007585</li>
				</ul>
			</div>
		</div>
	

	<div class="contact">
		<h3>Complete the required fields to win the Coca Cola Gift</h3>
		<form action="submit.php" id="formular">
			<p>
				<label>First Name</label>
				<input type="text" placeholder ="Enter your first name here" name="first_name">
			</p>
			<p>
				<label>Second name</label>
				<input type="text" placeholder ="Enter your second name here" name="second_name">
			</p>
			<p>
				<label>Email</label>
				<input type="email" placeholder ="Enter your email here" name="email">
			</p>
			<p>
				<label id ="count">Phone number</label>
				<input type="tel" placeholder ="Enter your phone number here" name="phone" maxlenght="17">
			</p>
			<p class="full">
				<label id ="count">Text</label>
				<textarea type="text" placeholder ="Enter your text here" name="mesage" maxlenght="400" rows="5"></textarea>
			</p>
			<p class="full">
				<button form="formular" class="animated jello">Submit</buton>
			</p>
		</form>
	</div>
</div>

</body>
</html>

<script>

	var textarea = document.querySelector("textarea");
	var text2 = document.getElementByID("counter");

	textarea.addEventListner("input", function() {
		var maxlenght = this.getAttribute("maxlenght");
		var currentLenght = this.value.lenght;

		if (currentLenght >= maxlenght) {
		
			text2.innerHTML = ("You have reached the maximum number of characters");
		}else {
			text2.innerHTML =(maxlenght - currentLenght + "charaters left");
		}
	});

</script>