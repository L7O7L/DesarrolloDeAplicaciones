<?php 

include("seguridad.php"); 
include("db.php");

$conexion = conectar();

$id = $_GET['ID'];

$request = "SELECT * FROM usuarios WHERE ID='$id'";
$query = mysqli_query($conexion, $request);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar variables de una relacion diplomatica</title>

    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/info.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <div class="row" style="--bs-gutter-x: 0.6rem;">

        <div class="col-sm-2" id="div">

        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" id="sidebar">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="img/PCM-Comercio-Exterior.png" class="bi me-2" width="190" height="40" alt="Ministerio de Comercio Exterior y Turismo">
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="aplicacion.php" class="nav-link active" style="background-color: grey;" aria-current="page">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="relaciones.php" class="nav-link link-dark">
                            Relaciones Diplomaticas
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Productos 
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Comercio de Exportación 
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Comercio de Importación 
                        </a>
                    </li>

                    <?php
                    
                    if($_SESSION["nivel"] == 'Administrador'){

                    ?>

                        <li>
                            <a href=""class="nav-link link-dark">

                                Administrar Usuarios

                            </a>
                        </li>    

                    <?php

                    }

                    ?>

                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong><?php echo $_SESSION["user"]; ?></strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">Configuración</a></li>
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="salir.php">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <br><br>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Modificar Varibles de Usuario</h4>
                <hr>
                <br>
                <form class="needs-validation" action="usuarios_edit.php" method="POST"> 
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="Nombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="Nombres" name="Nombres" value="<?php echo $row['Nombres'] ?>">
                        </div>

                        <div class="col-sm-6">
                            <label for="Apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="Apellidos" name="Apellidos" value="<?php echo $row['Apellidos'] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="Email" name="Email" value="<?php echo $row['Email'] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="Edad" class="form-label">Edad</label>
                            <input type="text" class="form-control" id="Edad" name="Edad" value="<?php echo $row['Edad'] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="DNI" class="form-label">DNI</label>
                            <input type="text" class="form-control" id="DNI" name="DNI" value="<?php echo $row['DNI'] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="Telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $row['Telefono'] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="Contraseña" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" id="Contraseña" name="Contraseña" value="<?php echo $row['Contraseña'] ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="Nivel" class="form-label">Nivel</label>
                            <input type="text" class="form-control" id="Nivel" name="Nivel" value="<?php echo $row['Nivel'] ?>">
                        </div>
                        <br>

                        <hr class="my-4">

                        <button class="w-100 btn btn-secondary btn-lg" type="submit">Editar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>