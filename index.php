<?php 
	if(isset($_COOKIE['logged'])){
		unset($_COOKIE['logged']);
	}
	if(isset($_COOKIE['userEmail'])){
		unset($_COOKIE['userEmail']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<title>Galeria Adrian y Diogo</title>
</head>
<body>
	<?php include('includes/header.php')?>
	<main>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" style="background-image: url('/images/bg-04.jpg')">
				<div class="carousel-caption">
					<h5>Galeria</h5>
					<p>Crea tu propia galeria</p>
				</div>
			</div>
			<!-- |----------------------------------------------------------| -->
			<div class="carousel-item" style="background-image: url('/images/bg-05.jpg')">
				<div class="carousel-caption">
					<h5>Almacena tus fotos</h5>
					<p>Unete y sube tus fotos aqui, nunca las perderas en nuestro almacenamiento</p>
				</div>
			</div>
			<!-- |----------------------------------------------------------| -->
			<div class="carousel-item" style="background-image: url('/images/bg-06.jpg')">
				<div class="carousel-caption">
					<h5>TOTALMENTE SEGURO, SEGURISIMO</h5>
					<p>Aqui la seguridad lo primero, 100% fiable este lugar</p>
				</div>
			</div>
			<!-- |----------------------------------------------------------| -->
			<div class="carousel-item" style="background-image: url('/images/bg-07.jpg')">
				<div class="carousel-caption">
					<h5>Suelo antartico</h5>
					<p>Muestra tus imagenes de mayor calidad</p>
				</div>
			</div>
			<!-- |----------------------------------------------------------| -->
			<div class="carousel-item" style="background-image: url('/images/bg-09.jpg')">
				<div class="carousel-caption">
					<h5>New York Sign Build</h5>
					<p>Demuestra a la gente tu talento</p>
				</div>
			</div>
			<!-- Para añadir mas imagenes provenientes de carpeta /images
			<div class="carousel-item" style="background-image: url('/images/bg-07.jpeg')">
				<div class="carousel-caption">
					<h5>TOTALMENTE SEGURO, SEGURISIMO</h5>
					<p>Aqui la seguridad lo primero, 100% fiable este lugar</p>
				</div>
			</div> -->
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

