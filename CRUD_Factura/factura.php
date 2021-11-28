<?php 
    //Cesar Melchor Alfaro 5J
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM factura";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Factura</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Factura</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="Producto" placeholder="Producto">
                                    <input type="text" class="form-control mb-3" name="NombreCliente" placeholder="Cliente">
                                    <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha">
                                    <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="Clasificacion" placeholder="Clasificacion">
                                    <input type="text" class="form-control mb-3" name="Empresa" placeholder="Empresa">

                                    <input type="submit" class="btn btn-primary"> <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>RFC</th>
                                        <th>Producto</th>
                                        <th>Cliente</th>
                                        <th>Fecha</th>
                                        <th>Precio</th>
                                        <th>Clasificacion</th>
                                        <th>Empresa</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['RFC']?></th>
                                                <th><?php  echo $row['Producto']?></th>
                                                <th><?php  echo $row['NombreCliente']?></th> 
                                                <th><?php  echo $row['Fecha']?></th>
                                                <th><?php  echo $row['Precio']?></th> 
                                                <th><?php  echo $row['Clasificacion']?></th> 
                                                <th><?php  echo $row['Empresa']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['RFC'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['RFC'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }while($row=mysqli_fetch_array($query));
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>