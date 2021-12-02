<?php
include("conexion.php");
$con=conectar();

$idco=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$calorias=$_POST['calorias'];
$sql = "INSERT INTO combo VALUES('$idco','$nombre','$precio','$descripcion','$calorias')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: combo.php");
    
}else {
}
?>