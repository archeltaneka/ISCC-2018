<!DOCTYPE HTML>
<html>
<head>
	<title>Information System Case Competition - 2018</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
	<script type="text/javascript" src="/assets/js/countdown.min.js"></script>
</head>
<body>
	<?php include("header.php");?>
	<div class="container home">
		<img src="/assets/img/logo.png">
		<div class="header">
			<div class="header-text">
				<h2 class="subtitle">challenge yourself bla bla bla</h2>
				<h2 class="subtitle">be a part of the future</h2>
				<a href="#" class="button">Register here</a>
			</div>
		</div>
		<div class="countdown">
			<h1 class="subtitle">registration closes in:</h1>
			<p id="countdown"></p>
		</div>
	</div>
    <script type="text/javascript">
    	currentDate = new Date(2018, 8, 20, 23, 59, 59);
		countdown.setLabels(
			"|s |m |hr | Day - |||||||",
			"|s |m |hr | Days - |||||||",
			"",
			" ",
			"");
		count = countdown(currentDate, null, countdown.DAYS|countdown.HOURS|countdown.MINUTES|countdown.SECONDS);
		document.getElementById("countdown").innerHTML = count;
		setInterval(function(){
			count = countdown(currentDate, null, countdown.DAYS|countdown.HOURS|countdown.MINUTES|countdown.SECONDS);
			document.getElementById("countdown").innerHTML = count;
		}, 1000);
    </script>
</body>
</html>