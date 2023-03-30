<?php
include("conexion.php");
$con=conectar();

$codigo_id=$_POST['codigo_id'];
$fecha_orden=$_POST['fecha_orden'];
$id_cte=$_POST['id_cte'];
$id_pdto=$_POST['id_pdto'];
$cantidad=$_POST['cantidad'];
$creado=$_POST['creado'];


$sql="INSERT INTO orden VALUES('$codigo_id','$fecha_orden','$id_cte','$id_pdto', '$cantidad', '$creado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: orden.php");
    
}else {
}
?>