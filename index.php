<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="La  coca cola es una bebida unica">
	<meta name="keywords" content="bebida, coca cola">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Incio - Coca Cola</title>
	<link rel="shortcut icon" href="img/favicon.png">
	<link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 400; 500; 700; 900 & display = swap" rel = "stylesheet">
	<link rel="stylesheet"  href="css/normalize.css">
	<link rel="stylesheet"  href="style.css">
	<script src="https://kit.fontawesome.com/9678a7b7d0.js" crossorigin="anonymous"></script>
	
</head>
<body>
	<header>
		<div class="container">
			<a href="index.html">
				<img src="img/logo.svg" class="logo">
			</a>
			<nav>
				<a href="#inicio">Inicio</a>
				<a href="#nosotros">Nosotros</a>
				<a href="#servicios">Servicios</a>
				<a href="#galeria">Galeria</a>
				<a href="#contactenos">Contactenos</a>
			</nav>
			<a href="" class="hamb"> <i class="fas fa-bars"></i> </a>
		</div>
	</header>
	<main>
		<section id="inicio">
			<img src="img/bannerprincipal.jpg">
			<div class="bloque-inicio">
				<h1>Bienvenidos a Coca Cola</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				 </p>
				<a href="#nosotros" class="boton boton-rojo">Ver más</a>
			</div>
		</section>
		<section id="nosotros" class="seccion">
			<div class="container">
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint</p> 
			</div>
		</section>
		<section id="servicios" class="seccion">
			<div class="container">
				<div class="row">
					<div class="columna columna-33 columna-mobile-100">
						<div class="bloque-servicio">
							<div class="bloque-img-servicio cuadrado-perfecto">
								<img src="img/servicio1.jpg">
							</div>
							<div class="bloque-contenido-servicio">
								<h3>Servicio 1</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a href="#" class="boton boton-blanco">Ver más</a>
							</div>
						</div>
					</div>
					<div class="columna columna-33 columna-mobile-100">
						<div class="bloque-servicio">
							<div class="bloque-img-servicio cuadrado-perfecto">
								<img src="img/servicio2.jpg">
							</div>
							<div class="bloque-contenido-servicio">
								<h3>Servicio 2</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a href="#" class="boton boton-blanco">Ver más</a>
							</div>
						</div>
					</div>
					<div class="columna columna-33 columna-mobile-100">
						<div class="bloque-servicio">
							<div class="bloque-img-servicio cuadrado-perfecto">
								<img src="img/servicio3.jpg">
							</div>
							<div class="bloque-contenido-servicio">
								<h3>Servicio 3</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a href="#" class="boton boton-blanco">Ver más</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="galeria">
			<div class="container-fluid">
				<div class="row">
					<div class="columna-33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio1.jpg">
							<h4>Imagen1</h4>
						</div>
					</div>
					<div class="columna-33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio2.jpg">
							<h4>Imagen2</h4>
						</div>
					</div>
					<div class="columna-33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio3.jpg">
							<h4>Imagen3</h4>
						</div>
					</div>
					<div class="columna-33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio1.jpg">
							<h4>Imagen4</h4>
						</div>
					</div>
					<div class="columna-33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio2.jpg">
							<h4>Imagen5</h4>
						</div>
					</div>
					<div class="columna-33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio3.jpg">
							<h4>Imagen6</h4>
						</div>
					</div>
				</div>
			</div>			
		</section>
		<section id="contactenos" class="seccion">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7969.339539896575!2d-79.03558097352709!3d-2.9110540368417053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x590730edf582438b!2sLiceo%20Americano%20Catolico!5e0!3m2!1ses-419!2sec!4v1607574398711!5m2!1ses-419!2sec" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			<div class="container-fluid">
				<div class="row">
					<div class="columna columna-41 columna-mobile-100 empujar-58 empujar-movile-0 sinpadding-movile">
						<form action="index.php" method="post">
							<div class="form-block">
								<input type="text" name="nombre" class="form-control" placeholder="Nombre" >							
							</div>
							<div class="form-block">
								<input type="mail" name="mail" class="form-control" placeholder="Mail">							
							</div>
							<div class="form-block">
								<textarea name="mensaje" placeholder="Mensaje"></textarea>							
							</div>
							<div class="form-block bloqueultimo" >
								<input type="submit" value="Enviar" class="boton boton-negro">	
							</div>
							<?php
								if($_SERVER["REQUEST_METHOD"]=="POST")
								{
									$nombre=$_POST["nombre"];	
									$mail=$_POST["mail"];	
									$mensaje=$_POST["mensaje"];	

									if(isset($nombre))
									{
										if(isset($mail))
										{
											if(isset($mensaje))
											{
												$para = "homero64.vuele@gmail.com";
												$asunto = "Esto es una prueba";
												$cuerpo = $nombre."\n".$mail."\n".$mensaje;
												$adicional= "from: liceo3roin@gmail.com";

												mail($para,$asunto,$cuerpo,$adicional);

											?>
												<p>Envio Exitoso</p>
											<?php

											}
										}

									}
								} 

							?>
						</form>
					</div>
				</div>
			</div>
			
		</section>
	</main>
	<footer>
		<div class="container">
			<div class="row">
				<div class="columna columna-25 columna-mobile-100">
					<img src="img/logo-blanco.png" class="logo-footer">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
				<div class="columna columna-25 columna-mobile-100" >
					<h3>
						Temas relacionados
					</h3>
					<ul>
						<li><a href="#">Tema1</a></li>
						<li><a href="#">Tema2</a></li>
						<li><a href="#">Tema3</a></li>
					</ul>
				</div>
				<div class="columna columna-25 columna-mobile-100">
					<h3>
						Datos de contacto
					</h3>
					<ul>
						<li>homero64.vuele@gmail.com</li>
						<li>095940637</li>
						<li>General Escandon y tomas alvarado<br>Cuenca-Ecuador</li>
					</ul>
				</div>
				<div class="columna columna-25 columna-mobile-100" >
					<h3>
						Redes sociales
					</h3>
					<ul>
						<li><a href="#">
								<i class="fab fa-facebook-f redes"></i>
							</a>
						</li>
						<li><a href="#">
								<i class="fab fa-twitter-square redes"></i>
							</a>
						</li>

						<li><a href="#">
								<i class="fab fa-instagram-square redes"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="barra-footer">
			&copy; Derechos reservados - 2020
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/funciones.js"></script>
</body>
</html>