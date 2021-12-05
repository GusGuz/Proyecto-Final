<?php

include("../conexion.php");
$con=conectar();

$idp=$_POST['id'];
$nombre=$_POST['nombre'];
$director=$_POST['director'];
$rating=$_POST['rating'];
$descripcion=$_POST['descripcion'];
$genero=$_POST['genero'];
$fecha_estreno=$_POST['fecha_estreno'];
$sql="UPDATE pelicula SET  nombre='$nombre',director='$director',rating='$rating',descripcion='$descripcion',genero='$genero',fecha_estreno='$fecha_estreno' WHERE id='$idp'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pelicula.php");
    }
?>