<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de usuario</title>
        <link rel="stylesheet" href="../../../public/css/style.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div class="contenedor">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">
                        <img src="../../../public/img/Logo.png" alt="" width="55" height="35" class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <form class="d-flex navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../login.php"> <i class="fas fa-sign-in-alt"></i> <b>Iniciar sesión</b></a>
                            </li>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        
        <section>
            <form action="">
                <div class="container py-3 bg-light rounded-2">
                    <main class="full-box main-container">
                        <!-- Page content -->
                        <section class="full-box page-content">
                            <h1 style="margin-bottom: 20px;" class="text-center fs-2">
                                Formulario de registro
                            </h1>

                            <div class="container-fluid">

                                <fieldset class="Formulario">
                                    <div class="container-fluid">
                                        <div class="row">

                                            <div class="form-floating col-12 col-md-6">
                                                <input type="text" class="form-control" id="floatingInput">
                                                <label for="floatingInput">Número de identificación</label>
                                            </div>
                                            <div class="form-floating col-12 col-md-6">
                                                <select class="form-control rounded-3" id="ProductProvider">
                                                    <option selected>Tipo de documento</option>
                                                    <option>Cedula de ciudadanía</option>
                                                    <option>Cedula de extranjería</option>
                                                    <option>Pasaporte</option>
                                                </select>
                                            </div>
                                            <div class="form-floating col-12 col-md-6">
                                                <input type="text" class="form-control" id="floatingInput">
                                                <label for="floatingInput">Primer nombre</label>
                                            </div>
                                            <div class="form-floating col-12 col-md-6">
                                                <input type="text" class="form-control" id="floatingInput">
                                                <label for="floatingInput">Segundo nombre</label>
                                            </div>
                                            <div class="form-floating col-12 col-md-6">
                                                <input type="text" class="form-control" id="floatingInput">
                                                <label for="floatingInput">Primer apellido</label>
                                            </div>
                                            <div class="form-floating col-12 col-md-6">
                                                <input type="text" class="form-control" id="floatingInput">
                                                <label for="floatingInput">Segundo apellido</label>
                                            </div>
                                            <div class="form-floating col-12 col-md-6">
                                                <input type="email" class="form-control" id="floatingInput">
                                                <label for="floatingInput">Correo electrónico</label>
                                            </div>
                                            <div class="form-floating col-12 col-md-6">
                                                <input type="password" class="form-control" id="floatingInput">
                                                <label for="floatingInput">Contraseña</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="text-center">
                                    <button type="button" class="btn btn-primary"> <i class="fas fa-check"></i> Registrar</button>
                                    <button type="button" class="btn btn-danger"> <i class="fas fa-times"></i> Cancelar</button>
                                </div>
                            </div>
                        </section>
                    </main>
                </div>

            </form>
        </section>
    </body>
</html>