<?php

include("db.php");
$con=conectar();

$id=$_GET['ID'];

$sql="DELETE FROM usuarios WHERE ID='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios_page.php");
    }
?>