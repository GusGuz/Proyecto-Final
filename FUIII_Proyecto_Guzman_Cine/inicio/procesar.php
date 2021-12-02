
<?php include('header.php')?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro de empleados</h1>
			</div>

			<div class="articulo">
            <?php
            echo "Id. de empleado: "; echo $_POST['idem']; echo "<br/>";
            echo "Fecha de nacimiento: "; echo $_POST['bday']; echo "<br/>";
            echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
            echo "Apellido: "; echo $_POST['apellido']; echo "<br/>";
            echo "Direccion: "; echo $_POST['direccion']; echo "<br/>";
            echo "Telefono: "; echo $_POST['tlfno']; echo "<br/>";
            echo "Sexo: "; echo $_POST['sexo']; echo "<br/>";
            ?>
			</div>
		</div>
	</section>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<?php include('footer.php')?>
</body>
</html>