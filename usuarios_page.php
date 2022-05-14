<?php 
include("seguridad.php");
include("db.php");

$con = conectar();

$request02 = "SELECT * FROM `usuarios`";

$query = mysqli_query($con, $request02);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercio Exterior</title>

    <link rel="stylesheet" href="css/design.css">

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
                        <a href="comercio_exportacion.php" class="nav-link link-dark">
                            Comercio de Exportación 
                        </a>
                    </li>
                    <li>
                        <a href="comercio_importancion.php" class="nav-link link-dark">
                            Comercio de Importación 
                        </a>
                    </li>

                    <?php
                    
                    if($_SESSION["nivel"] == 'Administrador'){

                    ?>

                        <li>
                            <a href="usuarios_page.php" class="nav-link link-dark">

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

            <div class="container my-2">
                <div class="row p-4 pb-0 pe-lg-4 pt-lg-3 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-12 p-3 p-lg-5 pt-lg-4">
                        <h1 class="display-4 fw-bold lh-1">ADMINISTRADOR DE USUARIOS</h1>
                        <hr>
                        <br>
                        <table class="table table-striped custom-table">

                            <thead>

                                <tr>

                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Contraseña</th>
                                    <th scope="col">Nivel</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php 
                
                                while($row = mysqli_fetch_array($query)){
            
                                ?>

                                    <tr scope="row">

                                        <td><?php echo $row['Nombres'] ?></td>
                                        <td><?php echo $row['Apellidos'] ?></td>
                                        <td><?php echo $row['Email'] ?></td>
                                        <td><?php echo $row['Edad'] ?></td>
                                        <td><?php echo $row['DNI'] ?></td>
                                        <td><?php echo $row['Telefono'] ?></td>
                                        <td><?php echo $row['Contraseña'] ?></td>
                                        <td><?php echo $row['Nivel'] ?></td>
                                        <td><a href="usuarios_edit_page.php?ID=<?php echo $row['ID'] ?>" class="more">Editar</a></td>
                                        <td><a href="usuarios_elim.php?ID=<?php echo $row['ID'] ?>" class="more">Eliminar</a></td>
        
                                    </tr>

                                <?php

                                }
            
                                ?>

                            </tbody>

                        </table>
                    </div>

                    <?php

                    if($_SESSION["nivel"] == 'Administrador'){

                    ?>        

                        <a href="usuarios_insert_page.php"><button type="submit" class="btn btn-secondary">AGREGAR UNA NUEVA RELACIÓN DIPLOMATICA</button></a>
                        <br><br><br><br><br>
                    <?php

                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
    
    

    
</body>
</html>