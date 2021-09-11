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
</head>
<body>
    <div class="contenedor">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <form class="d-flex navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><b>Registrarse</b></a>
                        </li>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <section class="main">
        <div class="card">
            <div class="card-body">
                <div class="login">
                    <div class="card">
                        <div class="card-doby">
                            <h2>Login - Inicio de sesion</h2>

                            <div class="form-floating mb-3 mg-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Correo electronico</label>
                            </div>
                            <div class="form-floating mb-3 mg-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Contraseña</label>
                            </div>
                            <h2>
                                <button type="button" class="btn btn-primary">Iniciar</button>
                                <button type="button" class="btn btn-danger">Cancelar</button>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
</body>
</html>