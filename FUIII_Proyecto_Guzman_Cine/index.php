<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>17 Guzman Hernandez Gustavo</title>
    
	<link rel="stylesheet" href="../estilos.css">
</head>
<body>
	<header>
		<div class="wrapp">
			<div class="logo">
				<a href="#"><img src="img/carrete-de-cine.png" alt="FalconMasters"></a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="crud_empleado/empleado.php">Empleados</a></li>
					<li><a href="crud_cliente/cliente.php">Cliente</a></li>
					<li><a href="crud_pelicula/pelicula.php">Pelicula</a></li>
					<li><a href="crud_combo/combo.php">Combo</a></li>
				</ul>
			</nav>
		</div>
	</header>
<link rel="stylesheet" href="estilos.css">
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Bienvenidos! al Portal de Cine</h1>
			</div>

			<div class="articulo">
				<article>
					<p>Cine</p>
					<br/>
					<p> Registro de empleados para laborar</p>
					<br/>
					<p>Registro de peliculas para cartelera</p>
					<br/>
					<p>Pagina de empleados para actualizacion de pagina principal de cine</p>
				</article>
			</div>
            <?php include('sidebar.php')?>
		</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<?php include('footer.php')?>
</body>
</html>