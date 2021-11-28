<?php
//Cesar Melchor Alfaro 5J
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM sucursal WHERE NumSucursal='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>
