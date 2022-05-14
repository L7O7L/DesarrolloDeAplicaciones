<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0">
                <img class="bi me-2" width="260" height="50" role="img" src="img/PCM-Comercio-Exterior.png" alt="logo" style="background-color: white;">
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Inicio</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Comercio Exterior</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Turismo</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Servicios</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Contacto</a></li>
            </ul>
        </header>
    </div>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Inicie sesión para continuar</h1>
                <p class="col-lg-10 fs-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis, velit eos illum cum eius, dolorem sapiente excepturi at ratione, impedit distinctio optio autem magni soluta. Velit dicta ratione nobis vel?</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light" action="control.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                        <label for="floatingInput">Dirección Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="contraseña" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Recuerdame
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-secondary" type="submit">Iniciar Sesión</button>
                    <hr class="my-4">
                    <small class="text-muted">Al iniciar sesión, usted esta de acuerdo con los terminos y condiciones.</small>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2022 Ministerio de Comercio Exterior y Turismo</p>

            <a href="index.php" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="img/PCM-Comercio-Exterior.png" class="bi me-2" width="200" height="40" alt="">
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Inicio</a></li>
                <li class="nav-item"><a href="singup.php" class="nav-link px-2 text-muted">Comercio Exterior</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Turismo</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Servicios</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contacto</a></li>
            </ul>
        </footer>
    </div>
</body>
</html>