<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM orden WHERE codigo_id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="codigo_id" value="<?php echo $row['codigo_id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="fecha_orden" placeholder="Fecha de orden" value="<?php echo $row['fecha_orden']  ?>">
                                <input type="text" class="form-control mb-3" name="id_cte" placeholder="ID de cliente" value="<?php echo $row['id_cte']  ?>">
                                <input type="text" class="form-control mb-3" name="id_pdto" placeholder="ID de producto" value="<?php echo $row['id_pdto']  ?>">
                                <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad']  ?>">
                                <input type="text" class="form-control mb-3" name="creado" placeholder="Creación" value="<?php echo $row['creado']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>