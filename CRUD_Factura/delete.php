<?php
//Cesar Melchor Alfaro 5J
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM factura WHERE RFC='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>
