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
$sql = "INSERT INTO pelicula VALUES('$idp','$nombre','$director','$rating','$descripcion','$genero','$fecha_estreno')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pelicula.php");
    
}else {
}
?>