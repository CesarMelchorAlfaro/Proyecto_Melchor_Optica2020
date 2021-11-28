<?php 
    //Cesar Melchor Alfaro 5J
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM sucursal WHERE NumSucursal='$id'";
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
                                <input type="hidden" class="form-control mb-3" name="NumSucursal" value="<?php echo $row['NumSucursal']  ?>">
                                <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="Tipo" placeholder="Tipo" value="<?php echo $row['Tipo']  ?>">
                                <input type="text" class="form-control mb-3" name="Localidad" placeholder="Localidad" value="<?php echo $row['Localidad']  ?>">
                                <input type="text" class="form-control mb-3" name="Estado" placeholder="Estado" value="<?php echo $row['Estado']  ?>">
                                <input type="text" class="form-control mb-3" name="Gerente" placeholder="Gerente" value="<?php echo $row['Gerente']  ?>">
                                <input type="text" class="form-control mb-3" name="Capacidad" placeholder="Capacidad" value="<?php echo $row['Capacidad']  ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>