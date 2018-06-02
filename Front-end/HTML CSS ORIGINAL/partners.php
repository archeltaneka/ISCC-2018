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
</body>
</html>