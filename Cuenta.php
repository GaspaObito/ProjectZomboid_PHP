<?php include("template/template_Usuario/cabeceraIndex.php"); ?>
<!-- Crea Conexion  -->
<?php
include ("ConexionBD/conectar_RegistroUsuario.php");
$sql_Producto = mysqli_query($conexion, "select * from registro ") or die("ERROR AL TRAER LOS DATOS");
?>
<!-- Crea Conexion  -->
<section class="hero pt-3">
    <div class="container">
        <ul class="breadcrumb justify-content-center">
            <li ><a href="index.php" id="TextoDirec">Inicio</a></li>
            <li class="separacion" id="TextoDirec">Cuenta</li>
        </ul>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
            <div class="titulo pt-3"><h1> Tu Cuenta </h1></div>
            <div class="row">   
                <div class="col-xl-8 offset-xl-2"><p class="lead text-black pt-3">En esta seccion puedes modificar tus campos de registro como Tus datos personales o tu Nombre de usuario</p></div>
            </div>
        </div>
    </div>
</section>
<section>  
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="block mb-5">
                    <div class="subTitulo"><strong class="text-uppercase">Cambiar Tu Contraseña</strong></div>
                    <div class="block-body ">
                        <form action="ConexionBD/conectar_RegistroUsuario.php" method="post">
                            <?php ($extraido = mysqli_fetch_array($sql_Producto)); ?>
                            <div class="row pt-3">
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="password_old">Contraseña Antigua *</label>
                                        <input class="form-control" type="text" value="<?php echo $extraido['Contrasena'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="password_1">Contraseña Nueva *</label>
                                        <input class="form-control" type="text" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="password_2">Repetir Contraseña Nueva *</label>
                                        <input class="form-control" type="password" required="required" >
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button class="btn btn-outline-dark" type="submit" required="required"><i class="far fa-save me-2"></i>Cambiar Contraseña</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="block mb-5">
                    <div class="subTitulo"><strong class="text-uppercase">Datos Personales</strong></div>
                    <div class="block-body">
                        <form action="ConexionBD/conectar_RegistroUsuario.php" method="post">
                            <div class="row pt-3">
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label">Nombre</label>
                                        <input class="form-control" type="text" value="<?php echo $extraido['Nombre'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label">Apellido</label>
                                        <input class="form-control" type="text" r value="<?php echo $extraido['Apellido'] ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label">Direccion</label>
                                        <input class="form-control" type="text" value="<?php echo $extraido['Direccion'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label">Telefono</label>
                                        <input class="form-control" type="number"  value="<?php echo $extraido['Telefono'] ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label">Fecha de Nacimiento</label>
                                        <input class="form-control" type="date" name="fechaNacimientoo" min="1970-01-01" max="2022-10-31"  value="<?php echo $extraido['Fecha_Nacimiento'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label">NickName</label>
                                        <input class="form-control" type="email"  value="<?php echo $extraido['NickName'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Correo Electronico</label>
                                <input class="form-control" type="email"  value="<?php echo $extraido['Correo'] ?>">
                            </div>
                            <!-- /.row-->
                            <div class="text-center mt-4">
                                <button class="btn btn-outline-dark" type="submit"><i class="far fa-save me-2"></i>Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Customer Sidebar-->
            <div class="col-xl-3 col-lg-4 mb-5">
                <div class="customer-sidebar card border-0"> 
                    <div class="customer-profile pb-4 pt-4 text-center"><img class="img-fluid rounded-circle customer-image shadow" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/photo/kyle-loftus-589739-unsplash-avatar.jpg" alt="" width="150px" height="150px" ></a>
                        <h5><?php echo $extraido['NickName'] ?></h5>
                        <p class="text-sm mb-0">Colombia, Cundinamarca</p>
                    </div>
                    <nav class="list-group customer-nav"><a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="Cuenta.php"><span>
                                <img src="img/Usuario.png" alt="" width="20px" height="20px">
                                Cuenta</span></a><a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="customer-addresses.html"><span>
                                <img src="img/GpsImg.png" alt="" width="20px" height="20px">
                                Direccion</span></a><a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="customer-addresses.html"><span>
                                <img src="img/pedidos.png" alt="" width="20px" height="20px">
                                Pedidos</span></a><a class="list-group-item d-flex justify-content-between align-items-center text-decoration-none" href="index.php"><span>
                                <img src="img/salir.png" alt="" width="20px" height="20px">
                                Salir</span></a>
                    </nav>
                </div>
            </div>
            <!-- /Customer Sidebar-->
        </div>
    </div>
</section>
<?php include ("template/pieIndex.php"); ?>
