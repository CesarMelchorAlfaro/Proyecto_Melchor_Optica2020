<?php 
    //Cesar Melchor Alfaro 5J
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alta Articulos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Alta Articulos</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca">
                                    <input type="text" class="form-control mb-3" name="Clasificacion" placeholder="Clasificacion">
                                    <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="Talla" placeholder="Talla">
                                    <input type="text" class="form-control mb-3" name="Color" placeholder="Color">

                                    <input type="submit" class="btn btn-primary"> <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Marca</th>
                                        <th>Clasificacion</th>
                                        <th>Precio</th>
                                        <th>Talla</th>
                                        <th>Color</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDarticulo']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Marca']?></th> 
                                                <th><?php  echo $row['Clasificacion']?></th>
                                                <th><?php  echo $row['Precio']?></th> 
                                                <th><?php  echo $row['Talla']?></th> 
                                                <th><?php  echo $row['Color']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['IDarticulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDarticulo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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