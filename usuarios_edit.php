<?php

include("db.php");

$con=conectar();

$nombres=$_POST['Nombres'];
$apellidos=$_POST['Apellidos'];
$email = $_POST['Email'];
$edad=$_POST['Edad'];
$dni=$_POST['DNI'];
$telefono = $_POST['Telefono'];
$contraseña = $_POST['Contraseña'];
$nivel = $_POST['Nivel'];

$sql="UPDATE usuarios SET `Nombres`='$nombres', `Apellidos`='$apellidos', `Email`='$email', `Edad`='$edad', `DNI`='$dni', `Telefono`='$telefono', `Contraseña`='$contraseña', `Nivel`='$nivel' WHERE `DNI`='$dni'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios_page.php");
    }
?>