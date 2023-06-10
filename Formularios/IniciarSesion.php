<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Style/estilosRegistroCuenta.css" rel="stylesheet" type="text/css"/>
    <title>Iniciar Sesión</title>  
</head>
<body>
    <form action="../ConexionBD/conectar_RegistroUsuario.php" method="post">
        <section class="form-register">   
            <h4>Cuenta</h4>
            <div class="center"><img id="img-center" src="../img/user.png"></div>
            <input class="controls" type="email" name="correoo" placeholder="Ingrese su Correo" required="required">
            <input class="controls" type="password" name="contrasenaa" placeholder="Ingrese su Contraseña" required="required">
            <button class="boton" type="submit" name="botonLogear">Iniciar Sesion</button>        
            <p><a href="Registro.php">Crear cuenta</a></p>
            <p><a href="#">¿Olvidastes contraseña?</a></p>
            <p><a href="../index.php">Regresar</a></p>
        </section>
    </form>
</body>
</html>

