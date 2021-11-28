<?php
//Cesar Melchor Alfaro 5J
include("conexion.php");
$con=conectar();

$DNI=$_POST['DNI'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];
$Correo=$_POST['Correo'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];

$sql="INSERT INTO cliente VALUES('$DNI','$Nombre','$Apellido','$Edad','$Correo','$Direccion','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>