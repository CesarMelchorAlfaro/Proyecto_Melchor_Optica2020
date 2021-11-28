<?php 
    //Cesar Melchor Alfaro 5J
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM sucursal";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sucursal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Sucursal</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="Tipo" placeholder="Tipo">
                                    <input type="text" class="form-control mb-3" name="Localidad" placeholder="Localidad">
                                    <input type="text" class="form-control mb-3" name="Estado" placeholder="Estado">
                                    <input type="text" class="form-control mb-3" name="Gerente" placeholder="Gerente">
                                    <input type="text" class="form-control mb-3" name="Capacidad" placeholder="Capacidad">

                                    <input type="submit" class="btn btn-primary"> <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Sucursal</th>
                                        <th>Direccion</th>
                                        <th>Tipo</th>
                                        <th>Localidad</th>
                                        <th>Estado</th>
                                        <th>Gerente</th>
                                        <th>Capacidad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['NumSucursal']?></th>
                                                <th><?php  echo $row['Direccion']?></th>
                                                <th><?php  echo $row['Tipo']?></th> 
                                                <th><?php  echo $row['Localidad']?></th>
                                                <th><?php  echo $row['Estado']?></th> 
                                                <th><?php  echo $row['Gerente']?></th> 
                                                <th><?php  echo $row['Capacidad']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['NumSucursal'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['NumSucursal'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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