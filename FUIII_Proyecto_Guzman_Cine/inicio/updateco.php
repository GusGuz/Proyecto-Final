<?php

include("conexion.php");
$con=conectar();

$idco=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$calorias=$_POST['calorias'];
$sql="UPDATE combo SET  nombre='$nombre',precio='$precio',descripcion='$descripcion',calorias='$calorias' WHERE id='$idco'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: combo.php");
    }
?>