<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<title>Netflix</title>
	<!-- Bootstrap para el carrusel -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">FalconMasters</h2>
			<nav>
				<a href="index.php" class="activo">Inicio</a>
				<a href="peliculas.php">Programas</a>
				<a href="indexAndres.php">Películas</a>
				<a href="#">Más Recientes</a>
				<a href="#">Mi lista</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Interestellar</h3>
				<p class="descripcion">
					Narra las aventuras de un grupo de exploradores que hacen uso de un agujero de gusano recientemente descubierto para superar las limitaciones de los viajes espaciales tripulados y vencer las inmensas distancias que tiene un viaje interestelar.
				</p>
				<button role="button" class="boton"><i class="fas fa-play"></i> Reproducir</button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i> Más información</button>
			</div>
		</div>
		
		  <div class="b-example-divider"></div>
		  <div class="px-4 pt-5 my-5 text-center border-bottom">
			<h1 class="display-4 fw-bold text-body-emphasis">Centered screenshot</h1>
			<div class="col-lg-6 mx-auto">
			  <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
			  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
				<button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
				<button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
			  </div>
			</div>
			<div class="overflow-hidden" style="max-height: 30vh;">
			  <div class="container px-5">
				<img src="img/2.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
			  </div>
			</div>
		  </div>
		  <div class="b-example-divider"></div>



		  <div class="container mt-5">
			<h2 class="text-center mb-4">Latest TV Shows</h2>
			<div id="movieCarousel" class="carousel slide" data-bs-ride="carousel">
				<!-- Indicadores Personalizados -->
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#movieCarousel" data-bs-slide-to="0" class="active"></button>
					<button type="button" data-bs-target="#movieCarousel" data-bs-slide-to="1"></button>
					<button type="button" data-bs-target="#movieCarousel" data-bs-slide-to="2"></button>
				</div>
	
				<!-- Carrusel -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="d-flex justify-content-around">
							<img src="https://via.placeholder.com/250x300" alt="Película 1">
							<img src="https://via.placeholder.com/250x300" alt="Película 2">
							<img src="https://via.placeholder.com/250x300" alt="Película 3">
							<img src="https://via.placeholder.com/250x300" alt="Película 4">
						</div>
					</div>
					<div class="carousel-item">
						<div class="d-flex justify-content-around">
							<img src="https://via.placeholder.com/250x300" alt="Película 5">
							<img src="https://via.placeholder.com/250x300" alt="Película 6">
							<img src="https://via.placeholder.com/250x300" alt="Película 7">
							<img src="https://via.placeholder.com/250x300" alt="Película 8">
						</div>
					</div>
					<div class="carousel-item">
						<div class="d-flex justify-content-around">
							<img src="https://via.placeholder.com/250x300" alt="Película 9">
							<img src="https://via.placeholder.com/250x300" alt="Película 10">
							<img src="https://via.placeholder.com/250x300" alt="Película 11">
							<img src="https://via.placeholder.com/250x300" alt="Película 12">
						</div>
					</div>
				</div>
			</div>
		</div>
<br><br>





		<div id="carouselExampleDark" class="carousel carousel-dark slide">
			<div class="carousel-indicators">
			  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
			  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
			  <div class="carousel-item active" data-bs-interval="10000">
				<img style=" filter: brightness(40%); " src="img/carrusel1.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				  <h5 style="color: white;">First slide label</h5>
				  <p style="color: white;">Some representative placeholder content for the first slide.</p>
				</div>
			  </div>
			  <div class="carousel-item" data-bs-interval="2000">
				<img style=" filter: brightness(40%); " src="img/carrusel2.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				  <h5 style="color: white;">Second slide label</h5>
				  <p style="color: white;">Some representative placeholder content for the second slide.</p>
				</div>
			  </div>
			  <div class="carousel-item">
				<img style=" filter: brightness(40%); " src="img/carrusel3.jpeg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
				  <h5 style="color: white;">Third slide label</h5>
				  <p style="color: white;">Some representative placeholder content for the third slide.</p>
				</div>
			  </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		  </div>
	</main>
<br>
<br>
	<!-- Footer -->
	<div class="container">
		<footer class="py-5">
		  <div class="row">
			<div class="col-6 col-md-2 mb-3">
			  <h5>Section</h5>
			  <ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
			  </ul>
			</div>
	  
			<div class="col-6 col-md-2 mb-3">
			  <h5>Section</h5>
			  <ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
			  </ul>
			</div>
	  
			<div class="col-6 col-md-2 mb-3">
			  <h5>Section</h5>
			  <ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
			  </ul>
			</div>
	  
			<div class="col-md-5 offset-md-1 mb-3">
			  <form>
				<h5>Subscribe to our newsletter</h5>
				<p>Monthly digest of what's new and exciting from us.</p>
				<div class="d-flex flex-column flex-sm-row w-100 gap-2">
				  <label for="newsletter1" class="visually-hidden">Email address</label>
				  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
				  <button class="btn btn-primary" type="button">Subscribe</button>
				</div>
			  </form>
			</div>
		  </div>
	  
		  <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
			<p>&copy; 2024 Company, Inc. All rights reserved.</p>
			<ul class="list-unstyled d-flex">
				<li class="ms-3">
					<a class="link-body-emphasis" href="#">
						<i class="bi bi-twitter" style="font-size: 24px;"></i>
					</a>
				</li>
				<li class="ms-3">
					<a class="link-body-emphasis" href="#">
						<i class="bi bi-instagram" style="font-size: 24px;"></i>
					</a>
				</li>
				<li class="ms-3">
					<a class="link-body-emphasis" href="#">
						<i class="bi bi-facebook" style="font-size: 24px;"></i>
					</a>
				</li>
			</ul>
		</div>		
		</footer>
	  </div>

	<!-- Font Awesome y Bootstrap JS -->
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/main.js"></script>
	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>