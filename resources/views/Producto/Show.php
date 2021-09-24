<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Techno shop</title>
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
                            <!-- <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"> <b>Inicio</b> </a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#"> <b>Ofertas</b> </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <b>Categorias</b> 
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Celulares</a></li>
                                    <li><a class="dropdown-item" href="#">Computadores</a></li>
                                    <li><a class="dropdown-item" href="#">Tablets</a></li>
                                    <li><a class="dropdown-item" href="#">Smartwatch</a></li>
                                    <li><a class="dropdown-item" href="#">Televisores</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Acesorios</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Producto/Create.php"> <b>Vender</b> </a>
                            </li>

                            <li class="nav-item">
                                <ul>
                                    <div class="search">
                                        <form class="d-flex">
                                            <input class="form-control" size="50" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-success" type="submit">Buscar</button>
                                        </form>
                                    </div>
                                </ul>
                            </li>


                        </ul>
                        <form class="d-flex navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../login.php"> <i class="fas fa-sign-in-alt"></i> <b>Iniciar sesión</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../Usuario/Create.php"><b>Registrarse</b></a>
                            </li>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <section>
            <div class="card">
                <div class="card-body">
                    <div class="row">                    
                        <div class="col-12 col-md-6">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../../../public/img/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../public/img/2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../public/img/3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../public/img/4.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../public/img/5.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div>
                                <h2>Nombre del producto</h2> 
                                <h4>Estado del producto</h4>
                            </div>
                            <div>
                                <h4><b>Formas de pago</b></h4>
                                <ul>
                                    <li><h6>Formas de pago</h6></li>
                                    <li><h6>Formas de pago</h6></li>
                                    <li><h6>Formas de pago</h6></li>
                                    <li><h6>Formas de pago</h6></li>
                                    <li><h6>Formas de pago</h6></li>
                                </ul>
                            </div>
                            <div>
                                <h2><b>Descripcion</b></h2>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem vitae placeat unde ab culpa amet. Cum distinctio, rerum non dicta consectetur pariatur, cumque explicabo repudiandae eveniet unde reiciendis sunt vero.
                                </p>
                            </div>
                            <div>
                                <button type="button" class="btn btn-outline-primary"> <i class="fas fa-check"></i> Comprar</button>
                                <button type="button" class="btn btn-outline-danger"> <i class="fas fa-heart"></i> Agregar a favoritos</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>