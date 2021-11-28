<?php
//Cesar Melchor Alfaro 5J
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM articulo WHERE IDarticulo='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>
