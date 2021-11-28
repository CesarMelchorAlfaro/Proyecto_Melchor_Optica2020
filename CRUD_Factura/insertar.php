<?php
//Cesar Melchor Alfaro 5J
include("conexion.php");
$con=conectar();

$RFC=$_POST['RFC'];
$Producto=$_POST['Producto'];
$NombreCliente=$_POST['NombreCliente'];
$Fecha=$_POST['Fecha'];
$Precio=$_POST['Precio'];
$Clasificacion=$_POST['Clasificacion'];
$Empresa=$_POST['Empresa'];

$sql="INSERT INTO factura VALUES('$RFC','$Producto','$NombreCliente','$Fecha','$Precio','$Clasificacion','$Empresa')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: factura.php");
    
}else {
}
?>