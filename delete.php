<?php

include("conexion.php");
$con=conectar();

$codigo_id=$_GET['id'];

$sql="DELETE FROM orden  WHERE codigo_id='$codigo_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: orden.php");
    }
?>
