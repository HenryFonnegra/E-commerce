<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Techno shop - Registro de usuario</title>
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
                <a class="navbar-brand" href="../../../index.php">
                    <img src="../../../public/img/Logo2.png" alt="" width="150" height="40" class="d-inline-block align-text-top">
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
            <div class="container py-3 bg-light rounded-2" >
                <main class="full-box main-container">
                    <!-- Page content -->
                    <section class="full-box page-content">
                        <h1 style="margin-bottom: 20px;" class="text-center fs-2">
                            Registro del producto
                        </h1>
                        <div class="container-fluid">
                            <fieldset class="Formulario">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="form-floating col-12 col-md-6">
                                            <input type="text" class="form-control" id="floatingInput">
                                            <label for="floatingInput">Marca</label>
                                        </div>
                                        <div class="form-floating col-12 col-md-6">
                                            <select class="form-control rounded-3" id="ProductProvider">
                                                <option selected>Categorías</option>
                                                <option value="">Celulares</option>
                                                <option value="">Computadores</option>
                                                <option value="">Tablets</option>
                                                <option value="">Smartwatch</option>
                                                <option value="">Televisores</option>
                                                <option value="">Acesorios</option>
                                            </select>
                                        </div>
                                        <div class="form-floating col-12 col-md-6">
                                            <input type="text" class="form-control" id="floatingInput">
                                            <label for="floatingInput">Nombre </label>
                                        </div>
                                        <div class="form-floating col-12 col-md-6">
                                            <input type="text" class="form-control" id="floatingInput">
                                            <label for="floatingInput">Modelo</label>
                                        </div>
                                        <div class="form-floating col-12 col-md-6">
                                            <input type="text" class="form-control" id="floatingInput">
                                            <label for="floatingInput">Precio</label>
                                        </div>
                                        <div class="form-floating col-12 col-md-6">
                                            <select class="form-control rounded-3" id="ProductProvider">
                                                <option selected>Estado del producto</option>
                                                <option value="">Nuevo</option>
                                                <option value="">Usado</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div>
                                                <label for=""> <b>Medios de pago</b> </label>
                                            </div>
                                            <div class="form-check form-check-inline col-12 col-md-2">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Tarjeta de credito</label>
                                            </div>
                                            <div class="form-check form-check-inline col-12 col-md-2">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Efecty</label>
                                            </div>
                                            <div class="form-check form-check-inline col-12 col-md-2">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3">Baloto</label>
                                            </div>
                                            <div class="form-check form-check-inline col-12 col-md-2">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                                <label class="form-check-label" for="inlineCheckbox3">PSE</label>
                                            </div>
                                            <div class="form-check form-check-inline col-12 col-md-2">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                                <label class="form-check-label" for="inlineCheckbox3">Contra entrega</label>
                                            </div>
                                        </div>
                                        <div class="form-floating col-12 col-md-12">
                                            <div>
                                                <label for=""> <b>Subir fotos</b> </label>
                                            </div>
                                            <div class="form-check form-check-inline col-12 col-md-12">
                                                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                            </div>
                                        </div>
                                        <div class="form-floating col-12 col-md-12">
                                            <textarea class="form-control" id="floatingTextarea" maxlength="300"></textarea>
                                            <label for="floatingTextarea">Descripción </label>
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