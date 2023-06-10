<?php include("../template/cabeceraFormularios.php"); ?>
<!-- Crea Conexion  -->
<?php
include ("../ConexionBD/conectar_RegistroUsuario.php");
$sql_Producto = mysqli_query($conexion, "select * from registro") or die("ERROR AL TRAER LOS DATOS");
?>
<!-- Crea Conexion  -->
<!-- Formulario Producto -->
<section class="hero pt-3">
    <div class="container">
        <ul class="breadcrumb justify-content-center">
            <li ><a href="index.php" id="TextoDirec">Inicio</a></li>
            <li class="separacion" id="TextoDirec">Ingresar Usuarios</li>
        </ul>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
            <div class="titulo pt-3"><h1> Ingresar Usuarios </h1></div>
            <div class="row">   
                <div class="col-xl-8 offset-xl-2"><p class="lead text-black pt-3">Registre usuarios atraves del formulario</p></div>
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
            
            <form action="../ConexionBD/conectar_RegistroUsuario.php" method="post">         
                <div class="mb-4">
                    <label class="form-label">Nombre *</label>
                    <input class="form-control" type="text" name="nombree" placeholder="Ingrese su Nombre" required="required">
                </div>
               <div class="mb-4">
                    <label class="form-label">Apellido *</label>
                    <input class="form-control" type="text" name="apellidoo" placeholder="Ingrese su Apellido" required="required">
                </div>
                <div class="mb-4">
                    <label class="form-label">Direccion *</label>
                    <input class="form-control" type="text" name="direccionn" placeholder="Ingrese su Direccion" required="required">
                </div>
                <div class="mb-4">
                    <label class="form-label">Telefono *</label>
                    <input class="form-control"  type="number" name="telefonoo" placeholder="Ingrese su Telefono" required="required">
                </div>
                <div class="mb-4">
                    <label class="form-label">Fecha Nacimiento *</label>
                    <input class="form-control"type="date" name="fechaNacimientoo"  min="1970-01-01" max="2022-10-31" required="required">
                </div>
                <div class="mb-4">
                    <label class="form-label">NickName *</label>
                    <input class="form-control" type="text" name="nicknamee"  placeholder="Ingrese su Nombre Usuario" required="required">
                </div>
                <div class="mb-4">
                    <label class="form-label">Contraseña *</label>
                    <input class="form-control"  type="password" name="contrasenaa" placeholder="Ingrese su Contraseña" required="required">
                </div>
                <div class="mb-4">
                    <label class="form-label">Correo Electronico *</label>
                    <input class="form-control"  type="email" name="correoo" placeholder="Ingrese su Correo" required="required">
                </div>
                 <div class="mb-4">
                    <label class="form-label">Tipo Usuario *</label>
                    <select name="ForenTipoUsuario" class="form-control" >
                    <?php
                    include '../ConexionBD/conectar_RegistroProducto.php';
                    $consulta = "SELECT * FROM tipousuario";
                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                    ?>
                    <?php foreach ($ejecutar as $opciones): ?>
                        <option value="<?php echo $opciones['Id_TipoPersona'] ?>"><?php echo $opciones['Tipo_Usuario'] ?></option>
                    <?php endforeach; ?>  
                </select>
                </div>
                <button class="btn btn-outline-dark mb-4" type="submit" name="botonRegistrar">Enviar</button>
          </form>   
            <form action="../ConexionBD/conectar_RegistroUsuario.php" method="post">
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

<!-- Formulario Producto -->
<?php include("../template/pieCategoria.php"); ?>         
