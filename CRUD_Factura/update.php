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

$sql="UPDATE factura
SET  Producto='$Producto',NombreCliente='$NombreCliente',Fecha='$Fecha',Precio='$Precio',Clasificacion='$Clasificacion',Empresa='$Empresa' 
WHERE RFC='$RFC'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>
