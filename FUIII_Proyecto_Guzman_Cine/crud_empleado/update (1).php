<?php

include("conexion (2).php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$sql="UPDATE empleado SET  nombre='$nombre',email='$email',direccion='$direccion',telefono='$telefono' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>