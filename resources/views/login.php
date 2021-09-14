<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div class="contenedor">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="../../public/img/Logo.png" alt="" width="55" height="35" class="d-inline-block align-text-top">
                </a>                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <form class="d-flex navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Usuario/Create.php"><b>Registrarse</b></a>
                        </li>
                    </form>
                </div> -->
            </div>
        </nav>
    </div>

    <section class="main">
        <div class="card" style="background-color: white;">
            <div class="card-body">
                <div class="login">
                    <div class="card">
                        <div class="card-doby">
                            <div class="form-floating mb-3 mg-3">
                                <h3 style="text-align: center;">Login - Inicio de sesión</h3>
                            </div>

                            <div class="form-floating mb-3 mg-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Correo electrónico</label>
                            </div>

                            <div class="form-floating mb-3 mg-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Contraseña</label>
                            </div>

                            <h6 style="text-align: center;"><a href="">¿Olvido su contraseña?</a></h6>

                            <h2 style="text-align: center;">
                                <button type="button" class="btn btn-primary">Iniciar sesión</button>
                            </h2>

                            <h6 style="text-align: center;"><a href="Usuario/Create.php">¿No tiene cuenta? Regístrate</a></h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
</body>
</html>