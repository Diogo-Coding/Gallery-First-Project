<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<title>Galeria</title>
</head>
<body>
	<?php include('includes/header.php')?>
	<main>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">
			<div class="carousel-caption">
				<h5>Galeria</h5>
				<p>Crea tu propia galeria</p>
			</div>
			</div>
			<div class="carousel-item" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1920x1080')">
			<div class="carousel-caption">
				<h5>Almacena</h5>
				<p>Unete y sube tus fotos aqui, nunca las perderas en nuestro almacenamiento</p>
			</div>
			</div>
			<div class="carousel-item" style="background-image: url('https://source.unsplash.com/lHGeqh3XhRY/1920x1080')">
			<div class="carousel-caption">
				<h5>TOTALMENTE SEGURO, SEGURISIMO</h5>
				<p>Aqui la seguridad lo primero, 100% fiable este lugar</p>
			</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
		</div>
	</main>
	<?php include('includes/footer.php') ?>
</body>
</html>

