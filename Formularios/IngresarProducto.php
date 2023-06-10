<?php include("../template/cabeceraFormularios.php"); ?>
<!-- Formulario Producto -->
<section class="hero pt-3">
    <div class="container">
        <ul class="breadcrumb justify-content-center">
            <li ><a href="index.php" id="TextoDirec">Inicio</a></li>
            <li class="separacion" id="TextoDirec">Ingresar Productos</li>
        </ul>   
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
            <div class="titulo pt-3"><h1> Ingresar Productos </h1></div>
            <div class="row">   
                <div class="col-xl-8 offset-xl-2"><p class="lead text-black pt-3">Ingresar datos de los productos</p></div>
            </div>
        </div>
    </div>
</section>
<div class="container pb-5">   
    <header class="mb-5">    
        <h2 class="text-uppercase h5">Formulario</h2>
    </header>
    <div class="row">               
        <div class="col-md-7 mb-5 mb-md-0">
            <form action="../ConexionBD/conectar_RegistroProducto.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label class="form-label">Nombre del Producto *</label>
                            <input class="form-control" type="text" name="nombrePp" placeholder="Ingrese su nombre del producto" required="required">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label class="form-label">Precio *</label>
                            <input class="form-control" type="number" name="precioPp" placeholder="Ingrese su Precio" required="required">
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Cantidad *</label>
                    <input class="form-control" type="number" name="cantidadPp" placeholder="Ingrese la Cantidad" required="required">
                </div>
                <div class="mb-4">
                    <label class="form-label">Descripcion *</label>
                    <textarea class="form-control" rows="4"  type="text" name="descripcionPp" placeholder="ingrese su Descripcion" required="required"></textarea>
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Empresa Distribuidora *</label>
                    <select name="ForenProveedorr" class="form-control" >
                        <?php
                        include '../ConexionBD/conectar_RegistroProducto.php';
                        $consulta = "SELECT * FROM proveedor";
                        $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                        ?>
                        <?php foreach ($ejecutar as $opciones): ?>
                            <option value="<?php echo $opciones['Id_Proveedor'] ?>"><?php echo $opciones['Empresa'] ?></option>
                        <?php endforeach; ?>  
                    </select>
                </div>
                <button class="btn btn-outline-dark mt-3" type="submit" name="enviarf">Enviar</button>
            </form>
            <form action="../ConexionBD/conectar_RegistroProducto.php" method="post">
                <button class="btn btn-success mt-3" type="submit" name="consultarInformacion">Consultar datos Tabla</button>                     
            </form>

        </div>             
        <div class="col-md-5">
            <p id="TextoDirec">Los mensajes se envian sólo a números de línea telefónica fija elegibles dentro de EE. UU (se excluyen los territorios y dominios de los EE. UU.). No disponible con roaming internacional, incluso si la mensajería de texto está disponible. Debes seleccionar cada número de teléfono fijo de forma individual para enviar mensajes a ese número. Una vez que hayas seleccionado un número, todos los mensajes de texto futuros enviados a ese número se enviarán como mensajes de texto a línea telefónica fija y se facturarán como tal solo si se reciben correctamente. </p>
            <p id="TextoDirec">Al acceder o utilizar cualquier parte de GremioTech, usted declara haber leído, comprendido y aceptado estar sujeto a estos Términos y Condiciones, incluyendo cualquier modificación futura. GremioTech podrá actualizar o modificar estos Términos y Condiciones</p>
            <div class="social">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-vimeo"></i></a></li>
                </ul>
            </div>
        </div>
    </div>              
</div>  

<!-- Buscar Usuario -->
<!-- Formulario Producto -->
<?php include("../template/pieCategoria.php"); ?>       
