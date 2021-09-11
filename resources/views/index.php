<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
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
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ofertas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Celulares</a></li>
                                <li><a class="dropdown-item" href="#">Compuadores</a></li>
                                <li><a class="dropdown-item" href="#">Tablets</a></li>
                                <li><a class="dropdown-item" href="#">Smartwatch</a></li>
                                <li><a class="dropdown-item" href="#">Televisores</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Acesorios</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <ul>
                                <div class="search">
                                    <form class="d-flex">
                                        <input class="form-control" size="85" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php"><b>Iniciar sesion</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><b>Registrarse</b></a>
                        </li>
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button> -->
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../public/img/1.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../public/img/2.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../public/img/3.jpg" class="d-block" alt="...">
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


    <section class="main">
        <div class="card">
            <div class="row">            
                <div class="card-body">

                    <div class="page-header">
                        <h1 class="text-center">Celulares</h1>
                    </div>

                    <div class="thumbnail">                                       
                        <div class="card" style="width: 18rem;">
                            <img src="../../public/img/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn btn-danger">Favoritos</a>
                            </div>
                        </div>
                    </div>                    
                    <div class="thumbnail">                                       
                        <div class="card" style="width: 18rem;">
                            <img src="../../public/img/2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn btn-danger">Favoritos</a>                            </div>
                        </div>
                    </div>
                    <div class="thumbnail">                                       
                        <div class="card" style="width: 18rem;">
                            <img src="../../public/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn btn-danger">Favoritos</a>                            </div>
                        </div>
                    </div>
                    <div class="thumbnail">                                       
                        <div class="card" style="width: 18rem;">
                            <img src="../../public/img/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn btn-danger">Favoritos</a>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main">
        <div class="card">
            <div class="row">            
                <div class="card-body">

                    <div class="page-header">
                        <h1 class="text-center">Compuadores</h1>
                    </div>

                    <div class="thumbnail">                                       
                        <div class="card" style="width: 18rem;">
                            <img src="../../public/img/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn btn-danger">Favoritos</a>
                            </div>
                        </div>
                    </div>                    
                    <div class="thumbnail">                                       
                        <div class="card" style="width: 18rem;">
                            <img src="../../public/img/2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn btn-danger">Favoritos</a>                            </div>
                        </div>
                    </div>
                    <div class="thumbnail">                                       
                        <div class="card" style="width: 18rem;">
                            <img src="../../public/img/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn btn-danger">Favoritos</a>                            </div>
                        </div>
                    </div>
                    <div class="thumbnail">                                       
                        <div class="card" style="width: 18rem;">
                            <img src="../../public/img/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn btn-danger">Favoritos</a>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="footer">
        <div class="card">
            <div class="card-body">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum voluptatum error libero eos! Molestiae voluptate ex quos architecto, voluptas alias facilis beatae maxime iure dolore at quidem deleniti molestias commodi.</p>
            </div>
        </div>
    </section>
</body>
</html>