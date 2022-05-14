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

$sql = "INSERT INTO `usuarios`(`ID`, `Nombres`, `Apellidos`, `Email`, `Edad`, `DNI`, `Telefono`, `Contraseña`, `Nivel`) VALUES(null, '$nombres','$apellidos', '$email', '$edad','$dni', '$telefono', '$contraseña', '$nivel')";
$query= mysqli_query($con, $sql);

if($query){

    Header("Location: usuarios_page.php");
    
}else {
}
?>