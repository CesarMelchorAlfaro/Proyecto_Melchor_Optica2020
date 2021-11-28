<?php
//Cesar Melchor Alfaro 5J
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="bd_optica2020";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
