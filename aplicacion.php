<?php include("seguridad.php"); ?>

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
                            Comercio de Exportaci??n 
                        </a>
                    </li>
                    <li>
                        <a href="comercio_importancion.php" class="nav-link link-dark">
                            Comercio de Importaci??n 
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
                        <li><a class="dropdown-item" href="#">Configuraci??n</a></li>
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="salir.php">Cerrar Sesi??n</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-10">

            <div class="container my-2">
                <div class="row p-4 pb-0 pe-lg-4 pt-lg-3 align-items-center rounded-3 border shadow-lg">
                    <div class="col-lg-12 p-3 p-lg-5 pt-lg-4">
                        <h1 class="display-4 fw-bold lh-1">COMERCIO EXTERIOR</h1>
                        <br>
                        <hr>
                        <p class="lead">

                            El comercio exterior beneficia a los pa??ses de distintas maneras. En primer lugar, existen beneficios derivados de un mejor uso de los recursos, ya que cada pa??s puede especializarse en las mercanc??as que produce m??s eficientemente o para las cuales est?? mejor dotado. El Per??, por su parte, empez?? su apertura comercial en los a??os 90, la cual se ha consolidado como una pol??tica de estado que nos ha permitido aprovechar nuestros recursos naturales e ir fortaleciendo otros bienes y servicios producidos en el pa??s para colocarlos en el extranjero.

                        </p>
                        <br>
                        <p class="lead">

                            Adem??s, los pa??ses se benefician del aumento de la competencia, ya que la apertura del comercio reduce la brecha entre el costo de producci??n de una mercanc??a y su precio de venta, permitiendo a los consumidores tener acceso a productos de m??s bajo precio. Los consumidores tambi??n se ven beneficiados por la mayor variedad de mercanc??as y servicios disponibles para ellos mediante la apertura comercial.

                        </p>
                        <br>
                        <p class="lead">

                        Adicionalmente, el comercio incentiva la innovaci??n y transferencia tecnol??gica, ya que al aumentar el tama??o del mercado aumenta tambi??n la competencia extranjera, lo cual lleva a las empresas a invertir en investigaci??n y desarrollo, as?? como al intercambio de estas innovaciones. Esto beneficia directamente a los pa??ses en desarrollo, ya que facilita el acceso a tecnolog??a producida en el extranjero e incentiva la generaci??n de tecnolog??as propias en pa??ses como el nuestro.
                        </p>
                        <br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                            <button type="button" class="btn btn-secondary btn-lg px-4 me-md-2 fw-bold">Saber m??s</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    
</body>
</html>