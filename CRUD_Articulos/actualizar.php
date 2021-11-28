<?php 
    //Cesar Melchor Alfaro 5J
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM articulo WHERE IDarticulo='$id'";
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
                                <input type="hidden" class="form-control mb-3" name="IDarticulo" value="<?php echo $row['IDarticulo']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca" value="<?php echo $row['Marca']  ?>">
                                <input type="text" class="form-control mb-3" name="Clasificacion" placeholder="Clasificacion" value="<?php echo $row['Clasificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio" value="<?php echo $row['Precio']  ?>">
                                <input type="text" class="form-control mb-3" name="Talla" placeholder="Talla" value="<?php echo $row['Talla']  ?>">
                                <input type="text" class="form-control mb-3" name="Color" placeholder="Color" value="<?php echo $row['Color']  ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>