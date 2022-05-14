<?php

include("db.php");
$con = conectar();

$nombre = $_POST['Nombre'];
$fecha = $_POST['Fecha'];
$motivo = $_POST['Motivo'];

$sql="UPDATE paises SET Nombre='$nombre', `Fecha`='$fecha', `Motivo`='$motivo' WHERE `Nombre`='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: relaciones.php");
    }
?>