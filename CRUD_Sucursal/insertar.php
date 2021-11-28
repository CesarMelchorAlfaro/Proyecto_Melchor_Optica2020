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

$sql="INSERT INTO sucursal VALUES('$NumSucursal','$Direccion','$Tipo','$Localidad','$Estado','$Gerente','$Capacidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: sucursal.php");
    
}else {
}
?>