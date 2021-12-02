<?php
include("conexion (2).php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$sql = "INSERT INTO empleado VALUES('$id','$nombre','$email','$direccion','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>