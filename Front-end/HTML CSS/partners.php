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
	<div class="container">
		<h1 class="title">sponsors</h1>
		<div class="grid">
			<?php
				$dir = new DirectoryIterator("assets/img/partners/sponsors/");
				foreach ($dir as $fileinfo) {
					if($fileinfo->isFile() && $fileinfo->getFilename()!=".DS_Store"){
			?>
			<div class="grid-item">
				<img src="<?php echo($fileinfo->getPathname())?>">
			</div>
			<?php
					}
				}
			?>
		</div>
		<h1 class="title">media partners</h1>
		<div class="grid">
			<?php
				$dir = new DirectoryIterator("assets/img/partners/media/");
				foreach ($dir as $fileinfo) {
					if($fileinfo->isFile() && $fileinfo->getFilename()!=".DS_Store"){
			?>
			<div class="grid-item">
				<img src="<?php echo($fileinfo->getPathname())?>">
			</div>
			<?php
					}
				}
			?>
		</div>
		<h1 class="title">case partner</h1>
		<div class="grid">
			<?php
				$dir = new DirectoryIterator("assets/img/partners/case/");
				foreach ($dir as $fileinfo) {
					if($fileinfo->isFile() && $fileinfo->getFilename()!=".DS_Store"){
			?>
			<div class="grid-item">
				<img src="<?php echo($fileinfo->getPathname())?>">
			</div>
			<?php
					}
				}
			?>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/1.1.0/trianglify.min.js"></script>
	<script>
		var myCanvas = document.createElement('canvas');
		var pattern = Trianglify({
			seed: 'ISCC2018',
			cell_size: 90,
			variance: 0.1,
			x_colors: ['#ACACAC', '#FFFFFF', '#ACACAC'],
			y_colors: 'match_x',
			width: window.innerWidth,
			height: window.innerHeight
		});
		// console.log(pattern.setAttribute("variance",0));
		document.body.appendChild(pattern.canvas())

		var screen = $(window).height();
		var body = $(document).height();
		$(window).scroll(function (event) {
			var top = $(window).scrollTop();
			var ratio = top/(body-screen);
			var ratiorounded = parseFloat(ratio.toFixed(2));
			if(ratiorounded>=0.1 && top <= body-screen){
				if($("canvas").length>2){
					$("canvas")[0].remove();
				}
				pattern = Trianglify({
					seed: 'ISCC2018',
					cell_size: 90,
					variance: ratiorounded,
					// x_colors: ['#ACACAC', '#FFFFFF', '#ACACAC'],
					x_colors: ['#ACACAC', '#FFFFFF', '#ACACAC'],
					y_colors: 'match_x',
					width: window.innerWidth,
					height: window.innerHeight
				});
				document.body.appendChild(pattern.canvas())
				// console.log(top/(body-screen));
			}
		});
	</script>
</body>
</html>