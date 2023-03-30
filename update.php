<?php

include("conexion.php");
$con = conectar();

$codigo_id = $_POST['codigo_id'];
$fecha_orden = $_POST['fecha_orden'];
$id_cte = $_POST['id_cte'];
$id_pdto = $_POST['id_pdto'];
$cantidad = $_POST['cantidad'];
$creado = $_POST['creado'];

$sql = "UPDATE orden SET  fecha_orden= '$fecha_orden',id_cte= '$id_cte',id_pdto= '$id_pdto',cantidad= '$cantidad', creado='$creado' WHERE codigo_id='$codigo_id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: orden.php");
}
