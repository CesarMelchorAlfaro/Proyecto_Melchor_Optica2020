<?php
//Cesar Melchor Alfaro 5J
include("conexion.php");
$con=conectar();

$NumSucursal=$_POST['NumSucursal'];
$Direccion=$_POST['Direccion'];
$Tipo=$_POST['Tipo'];
$Localidad=$_POST['Localidad'];
$Estado=$_POST['Estado'];
$Gerente=$_POST['Gerente'];
$Capacidad=$_POST['Capacidad'];

$sql="UPDATE sucursal
SET  Direccion='$Direccion',Tipo='$Tipo',Localidad='$Localidad',Estado='$Estado',Gerente='$Gerente',Capacidad='$Capacidad' 
WHERE NumSucursal='$NumSucursal'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>
