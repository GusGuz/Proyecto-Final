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
$sql="UPDATE cliente SET  nombre='$nombre',email='$email',direccion='$direccion',telefono='$telefono',fecha_nacimiento='$fecha_nac',sexo='$sexo' WHERE id='$idc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>