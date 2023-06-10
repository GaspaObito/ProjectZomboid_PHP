<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Style/estilosRegistroCuenta.css" rel="stylesheet" type="text/css"/>
        <title>Formulario Registro</title>
    </head>
    <body>
        <form action="../ConexionBD/conectar_RegistroInicio.php" method="post">
            <section class="form-register">
                <h4>Formulario Registro</h4>          
                <h3>Nombre</h3><input class="controls" type="text" name="nombree" placeholder="Ingrese su Nombre" required="required">
                <h3>Apellido</h3><input class="controls" type="text" name="apellidoo" placeholder="Ingrese su Apellido" required="required">
                <h3>Direccion</h3><input class="controls" type="text" name="direccionn" placeholder="Ingrese su Direccion" required="required">
                <h3>Telefono</h3><input class="controls" type="number" name="telefonoo" placeholder="Ingrese su Telefono" required="required">
                <h3>Fecha Nacimiento</h3><input class="controls" type="date" name="fechaNacimientoo" min="1970-01-01" max="2022-10-31" required="required">
                <h3>NickName</h3><input class="controls" type="text" name="nicknamee" min="5" placeholder="Ingrese su Nombre Usuario" required="required">
                <h3>Contraseña</h3><input class="controls" type="password" name="contrasenaa" placeholder="Ingrese su Contraseña" required="required">
                <h3>Correo Electronico</h3><input class="controls" type="email" name="correoo" placeholder="Ingrese su Correo" required="required">     
                <h3 class="form-label">Tipo de Usuario</h3>
                <select name="ForenTipoUsuario" class="controls" >
                    <?php
                    include '../ConexionBD/conectar_RegistroProducto.php';
                    $consulta = "SELECT * FROM tipousuario";
                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                    ?>
                    <?php foreach ($ejecutar as $opciones): ?>
                        <option value="<?php echo $opciones['Id_TipoPersona'] ?>"><?php echo $opciones['Tipo_Usuario'] ?></option>
                    <?php endforeach; ?>  
                </select>
                <p>Estoy de acuerdo con <a href="#">Terminos y condiciones</a> </p>   
                <button class="boton" type="submit" name="botonRegistrar">Registrarse</button>
                <p><a href="IniciarSesion.php">Ya tengo cuenta</a></p>
                <p><a href="../index.php">Regresar</a></p>
            </section>       
        </form>
    </body>
</html>