<?php
//Cesar Melchor Alfaro 5J
include("conexion.php");
$con=conectar();

$IDarticulo=$_POST['IDarticulo'];
$Nombre=$_POST['Nombre'];
$Marca=$_POST['Marca'];
$Clasificacion=$_POST['Clasificacion'];
$Precio=$_POST['Precio'];
$Talla=$_POST['Talla'];
$Color=$_POST['Color'];

$sql="INSERT INTO articulo VALUES('$IDarticulo','$Nombre','$Marca','$Clasificacion','$Precio','$Talla','$Color')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulo.php");
    
}else {
}
?>