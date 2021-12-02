<?php
include("conexion.php");
$con=conectar();
$idc=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$fecha_nac=$_POST['fecha_nacimiento'];
$sexo=$_POST['sexo'];
$sql = "INSERT INTO cliente VALUES('$idc','$nombre','$email','$direccion','$telefono','$fecha_nac','$sexo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>