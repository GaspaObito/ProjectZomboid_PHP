<!DOCTYPE html>
<html>
    <head>
        <title>GremioTech</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="img/ImagenH1.jpg" rel="icon" type="image/png"/>
        <!-- Boostrap Link, Css,  -->   
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="Style/InicioPag.css" rel="stylesheet" type="text/css"/>     
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Boostrap Link, Css,  -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- Boostrap NAV,  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Boostrap Header -->
        <header> 
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/ImagenH1.jpg" alt="" width="60" height="60">
                    </a>
                    <a class="navbar-brand" style="color: white" >GremioTech</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php" style="color: white" >INICIO</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                                    Categorias
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a  class="dropdown-item" id="CategoriaItem" href="Categorias/Sillas.php">Sillas</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" id="CategoriaItem" href="Categorias/Controles.php">Controles</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" id="CategoriaItem" href="Categorias/Procesadores.php">Procesadores</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" id="CategoriaItem" href="Categorias/Escritorios.php">Escritorios</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" id="CategoriaItem" href="Categorias/FuentePoder.php">Fuente de poder</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" id="CategoriaItem" href="Categorias/MemoriaRam.php">Memoria Ram</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" id="CategoriaItem" href="Categorias/Auriculares.php">Auriculares</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                                    Nosotros
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="Informacion.php">Quienes Somos</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                                    Soporte
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">                    
                                    <li><a class="dropdown-item" href="Formularios/Nosotros.php">Contactanos</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Formularios/IngresarProducto.php">Ingresar Producto</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Formularios/IngresarProveedor.php">Ingresar Proveedor</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Formularios/IngresarUsuario.php">Ingresar Usuario</a></li>
                                </ul>
                            </li>
                        </ul>
                        <nav><form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Buscar..." aria-label="Search">
                            </form></nav>
                        <form action="Formularios/IniciarSesion.php"><input type="submit" class="btn btn-outline-light me-2" value="Iniciar Sesion"/></form>
                        <form action="Formularios/Registro.php"><input type="submit" class="btn btn-outline-light me-2" value="Registrarse"/></form>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Boostrap Header --> 