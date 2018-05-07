<!DOCTYPE HTML>
<html>
<head>
	<title>Information System Case Competition - 2018</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>
<body>
	<?php include("header.php");?>
	<div class="container home">
		<img src="/assets/img/logo.png">
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/1.1.0/trianglify.min.js"></script>
	<script>
		var pattern = Trianglify({
			seed: 'ISCC2018',
			cell_size: 90,
			variance: 1,
			x_colors: ['#ACACAC', '#FFFFFF', '#ACACAC'],
			y_colors: 'match_x',
			width: window.innerWidth,
			height: window.innerHeight
		});
		document.body.appendChild(pattern.canvas())
	</script>
</body>
</html>