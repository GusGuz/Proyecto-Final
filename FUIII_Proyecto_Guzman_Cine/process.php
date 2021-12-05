
<?php include('header.php')?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro de peliculas</h1>
			</div>
			<div class="articulo">
            <?php
            echo "Pelicula <br/>";
            echo "Fecha de Estreno: "; echo $_POST['estreno']; echo "<br/>";
            echo "Titulo: "; echo $_POST['titulo']; echo "<br/>";
            echo "Director(es): "; echo $_POST['director']; echo "<br/>";
            echo "Pais: "; echo $_POST['pais']; echo "<br/>";
            echo "Rating: "; echo $_POST['star']; echo "<br/>";
            echo "Genero: "; echo $_POST['genero']; echo "<br/>";
            ?>
			</div>
		</div>
	</section>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<?php include('footer.php')?>
</body>
</html>