<?php

/* PAGINA WEB */
$servidor = "Localhost";
$usuario = "root";
$clave = "";
$bddatos = "basededatos_sprint2";
$conexion = mysqli_connect($servidor, $usuario, $clave, $bddatos)
        or die("ERROR DE CONEXION");
/* Validar Conexion */
/* if ($conexion) {
  echo("CONEXION EXITOSA");
  } else {
  echo("CONEXION FALLIDA");
  } */

/* Crear Variables */
if (isset($_POST["botonRegistrar"])) {
    $Nombre = $_POST["nombree"];
    $Apellido = $_POST["apellidoo"];
    $Direccion = $_POST["direccionn"];
    $Telefono = $_POST["telefonoo"];
    $Fecha_Nacimiento = $_POST["fechaNacimientoo"];
    $NickName = $_POST["nicknamee"];
    $Contrasena = $_POST["contrasenaa"];
    $Correo = $_POST["correoo"];
    $Tipo_Usuario = $_POST["ForenTipoUsuario"];
    /* Insertar Codigo */
    $insertar = "INSERT INTO registro(Id_Persona,Nombre,Apellido,Direccion,Telefono,Fecha_Nacimiento,NickName,Contrasena,Correo,Id_TipoUsuario) VALUES(
    'NULL',
    '".$Nombre."','".$Apellido."',
    '".$Direccion."','".$Telefono."',
    '".$Fecha_Nacimiento."','".$NickName."','".$Contrasena."','".$Correo."','".$Tipo_Usuario."')";
    /* Validar insercion */
    $resultado = mysqli_query($conexion, $insertar) or die
                    ("ERROR EN LA INSERCION");
    mysqli_close($conexion);
    echo"<script>alert('DATOS INSERTADOS CORRECTAMENTE')</script>";
    echo"<script>location.href='../Formularios/IniciarSesion.php'</script>";
}

/* Inicio Sesion */
if (isset($_POST["botonLogear"])) {
    $Correo = $_POST['correoo'];
    $Contrasena = $_POST['contrasenaa'];
    $sentencia = $conexion->prepare("SELECT * FROM registro WHERE Correo=? AND Contrasena=?");
    $sentencia->bind_param('ss', $Correo, $Contrasena);
    $sentencia->execute();   
    $resultado = $sentencia->get_result();
    if ($fila = $resultado->fetch_assoc()) {
        echo"<script>alert('USUARIO CORRECTO')</script>";
        echo"<script>location.href='../indexUsuario.php'</script>";
    } else {
        echo"<script>alert('USUARIO O CONTRASEÑA INCORRECTA')</script>";
        echo"<script>location.href='../Formularios/IniciarSesion.php'</script>";
    }
    $sentencia->close();
    $conexion->close();
}
//MOSTRAR DATO DE LA TABLA CLIENTES
if (isset($_POST["consultarInformacion"])) {
    $consultar = mysqli_query($conexion, "select * from registro") or die("ERROR AL TRAER LOS DATOS");
    include("../template/cabeceraCategoria.php");
    /* BOTONES DE ACCION */
    echo '<div class="hero-content text-center m-5 p-2">
        <strong><label class="text-black pb-3">ACCIONES</label></strong>
     <form action="conectar_RegistroUsuario.php" method="post">
                <a class="btn btn-outline-dark" href="../Formularios/IngresarUsuario.php">Ingresar Usuario</a>          
                <button class="btn btn-success" type="submit" name="consultarInformacion">Consultar</button>
                <button class="btn btn-warning" type="submit" name="buscarDatos">Buscar</button>
                <button class="btn btn-primary" type="submit" name="actualizarDatos">Actualizar</button>
                <button class="btn btn-danger" type="submit" name="eliminarDatos">Eliminar</button>
                <input type="text" class="form-control mt-3" placeholder="Identificacion del producto" name="Identificacionn">        
          </div>
</form>';
    /* BOTONES DE ACCION */
    /* TITULO DE LAS COLUMNAS */
    echo '</div>';
    echo '<div class="hero-content text-center m-5 p-2">
    <table class="table table-dark table-striped table-bordered table-hover">
    <strong><label class="text-black pb-3">TABLA DE PRODUCTO</label></strong>
    <thead>
    <tr class="table-light">
    <th>Id_Persona</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Fecha_Nacimiento</th>
    <th>NickName</th>
    <th>Contrasena</th>
    <th>Correo</th>
    <th>Id_TipoUsuario</th>
    </tr>
    </thead>';
    /* TITULO DE LAS COLUMNAS */
    /* CUERPO DE LA TABLA */
    echo '<tbody>';
    while ($extraido = mysqli_fetch_array($consultar)) {
            echo '<tr>';
            echo '<th>' . $extraido['Id_Persona'] . '</th>';
            echo '<th>' . $extraido['Nombre'] . '</th>';
            echo '<th>' . $extraido['Apellido'] . '</th>';
            echo '<th>' . $extraido['Direccion'] . '</th>';
            echo '<th>' . $extraido['Telefono'] . '</th>';
            echo '<th>' . $extraido['Fecha_Nacimiento'] . '</th>';
            echo '<th>' . $extraido['NickName'] . '</th>';
            echo '<th>' . $extraido['Contrasena'] . '</th>';
            echo '<th>' . $extraido['Correo'] . '</th>';
            echo '<th>' . $extraido['Id_TipoUsuario'] . '</th>';
            echo '</tr>';
    }
    echo '</tbody>';
    mysqli_close($conexion);
    echo '</table>';
    echo '</div>';
    /* CUERPO DE LA TABLA */
    include("../template/pieCategoria.php");
}

//ELIMINAR DATOS
if (isset($_POST["eliminarDatos"])) {
    $Identificacion = $_POST['Identificacionn'];
    mysqli_query($conexion, "delete from registro WHERE Id_Persona='$Identificacion'") or die("<script>alert('ERROR AL ELIMINAR')</script>" . "<script>location.href='../Formularios/IngresarUsuario.php'</script>");
    if ($Identificacion == "") {
        echo "<script>alert('NO HA INGRESADO UN ID')</script>";
        echo "<script>location.href='../Formularios/IngresarUsuario.php'</script>";
    } else {
        mysqli_close($conexion);
        echo "<script>alert('DATOS ELIMINADOS CORRECTAMENTE')</script>";
        echo "<script>location.href='../Formularios/IngresarUsuario.php'</script>";
    }
}
//BUSCAR DATOS
if (isset($_POST["buscarDatos"])) {
    $Identificacion = $_POST['Identificacionn'];
    $consultar = mysqli_query($conexion, "select * from registro WHERE Id_Persona='$Identificacion'") or die("<script>alert('ERROR AL TRAER LOS DATOS')</script>" . "<script>location.href='../Formularios/IngresarUsuario.php'</script>");
    include("../template/cabeceraCategoria.php");
    if ($Identificacion == "") {
        echo "<script>alert('NO HA INGRESADO UN ID')</script>";
        echo "<script>location.href='../Formularios/IngresarUsuario.php'</script>";
    } else {
        mysqli_close($conexion);
        /* BOTONES DE ACCION */
        echo '<div class="hero-content text-center m-5 p-2">
        <strong><label class="text-black pb-3">ACCIONES</label></strong>
     <form action="conectar_RegistroUsuario.php" method="post">
      <a class="btn btn-outline-dark" href="../Formularios/IngresarUsuario.php">Ingresar Usuario</a>      
                <button class="btn btn-success" type="submit" name="consultarInformacion">Consultar</button>
                <button class="btn btn-warning" type="submit" name="buscarDatos">Buscar</button>
                <button class="btn btn-primary" type="submit" name="actualizarDatos">Actualizar</button>
                <button class="btn btn-danger" type="submit" name="eliminarDatos">Eliminar</button>
                <input type="text" class="form-control mt-3" placeholder="Identificacion del producto" name="Identificacionn">    
                </div>
</form>';
        /* BOTONES DE ACCION */
        /* TITULO DE LAS COLUMNAS */
        echo '<div class="hero-content text-center m-5 p-2">
    <table class="table table-dark table-striped table-bordered table-hover">
    <strong><label class="text-black pb-3">TABLA DE PRODUCTO</label></strong>
    <thead>
    <tr class="table-light">
    <th>Id_Persona</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Fecha_Nacimiento</th>
    <th>NickName</th>
    <th>Contrasena</th>
    <th>Correo</th>
    <th>Id_TipoUsuario</th>
    </tr>
    </thead>';
        /* TITULO DE LAS COLUMNAS */
        /* CUERPO DE LA TABLA */
        echo '<tbody>';
        while ($extraido = mysqli_fetch_array($consultar)) {
            echo '<tr>';
            echo '<th>' . $extraido['Id_Persona'] . '</th>';
            echo '<th>' . $extraido['Nombre'] . '</th>';
            echo '<th>' . $extraido['Apellido'] . '</th>';
            echo '<th>' . $extraido['Direccion'] . '</th>';
            echo '<th>' . $extraido['Telefono'] . '</th>';
            echo '<th>' . $extraido['Fecha_Nacimiento'] . '</th>';
            echo '<th>' . $extraido['NickName'] . '</th>';
            echo '<th>' . $extraido['Contrasena'] . '</th>';
            echo '<th>' . $extraido['Correo'] . '</th>';
            echo '<th>' . $extraido['Id_TipoUsuario'] . '</th>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        /* CUERPO DE LA TABLA */
        echo '</div>';
        include("../template/pieCategoria.php");
        mysqli_close($conexion);
    }
}

//ACTUALIZAR O MODIFICAR DATOS
if (isset($_POST["actualizarDatos"])) {
    $Identificacion = $_POST["Identificacionn"];
    $consulta = mysqli_query($conexion, "select * from registro WHERE Id_Persona=$Identificacion") or die("<script>alert('NO HA INGRESADO UN ID')</script>" . "<script>location.href='../Formularios/IngresarUsuario.php'</script>");
    /* TITULO DE LA TABLA */
    include("../template/cabeceraCategoria.php");
    echo '<div class="hero-content text-center m-5 p-2">
    <table class="table table-dark table-striped table-bordered table-hover"> 
    <thead>
     <tr class="table-light">
    <th>Id_Persona</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Fecha_Nacimiento</th>
    <th>NickName</th>
    <th>Contrasena</th>
    <th>Correo</th>
    <th>Id_TipoUsuario</th>
    </tr>
    </thead>';
    /* TITULO DE LA TABLA */
    /* CUERPO DE LA TABLA */
    echo '<tbody>';
    ($extraido = mysqli_fetch_array($consulta));
    echo '<tr>';
    echo '<th>' . $extraido['Id_Persona'] . '</th>';
    echo '<th>' . $extraido['Nombre'] . '</th>';
    echo '<th>' . $extraido['Apellido'] . '</th>';
    echo '<th>' . $extraido['Direccion'] . '</th>';
    echo '<th>' . $extraido['Telefono'] . '</th>';
    echo '<th>' . $extraido['Fecha_Nacimiento'] . '</th>';
    echo '<th>' . $extraido['NickName'] . '</th>';
    echo '<th>' . $extraido['Contrasena'] . '</th>';
    echo '<th>' . $extraido['Correo'] . '</th>';
    echo '<th>' . $extraido['Id_TipoUsuario'] . '</th>';
    echo '</tr>';
    echo '</tbody>';
    /* CUERPO DE LA TABLA */
    /* ACTUALIZAR LA TABLA */
    echo '<form action="conectar_RegistroUsuario.php" method="post" class="form_cliente" id="form" >      
          <strong><label class="text-black pb-3">TABLA DE PROOVEDOR ACTUALIZAR</label></strong>  
           <div class="row">
          <div class="col-sm-2">
          <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Id_Persona</laber>
            <input type="number" class="form-control" name="Id_Persona2" readonly=»readonly value="'.$extraido['Id_Persona'].'"/> 
            </div>
            </div>
            <div class="col-sm-2">
         <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Nombre del Usuario</laber>
            <input type="text" class="form-control" name="Nombre2" placeholder="Nombre del Usuario" value="'.$extraido['Nombre'].'"/> 
            </div>  
             </div>
            <div class="col-sm-2">
         <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Apellido del Usuario</laber>
            <input type="text" class="form-control" name="Apellido2" placeholder="Apellido del Usuario" value="'.$extraido['Apellido'].'"/> 
            </div>  
             </div>
            <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Direccion</laber>
            <input type="text" class="form-control" name="Direccion2" placeholder="Direccion" value="'.$extraido['Direccion'].'"/> 
            </div> 
            </div>
             <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Telefono</laber>
            <input type="number" class="form-control" name="Telefono2" placeholder="Telefono" value="'.$extraido['Telefono'].'"/> 
            </div> 
             </div>
             <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Fecha de Nacimiento</laber>
            <input type="date" class="form-control" name="Fecha_Nacimiento2" placeholder="Fecha de Nacimiento" value="'.$extraido['Fecha_Nacimiento'].'"/> 
            </div>  
            </div>
            <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">NickName</laber>
            <input type="text" class="form-control" name="NickName2" placeholder="NickName del Usuario" value="'.$extraido['NickName'].'"/> 
            </div> 
            </div>
            <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Contraseña</laber>
            <input type="text" class="form-control" name="Contrasena2" placeholder="Contrasena" value="'.$extraido['Contrasena'].'"/> 
            </div>  
            </div>
            <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Correo</laber>
            <input type="text" class="form-control" name="Correo2" placeholder="Correo electronico" value="'.$extraido['Correo'].'"/> 
            </div>  
            </div>
            <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Id_TipoUsuario</laber>
            <input type="text" class="form-control" name="Id_TipoUsuario2" readonly=»readonly value="'.$extraido['Id_TipoUsuario'].'"/> 
            </div>  
            </div>
            </div>
            </table>
            <button class="btn btn-outline-dark " type="submit" name="actualizardatos2">Actualizar Datos</button>
            </form>';
    echo '</table>';
    echo '</div>';
    /* ACTUALIZAR LA TABLA */
    include("../template/pieCategoria.php");
    mysqli_close($conexion);
}
///MODIFICAR DATOS
if (isset($_POST["actualizardatos2"])) { 
    $Identificacion = $_POST["Id_Persona2"];
    $NombreCc = $_POST["Nombre2"];
    $ApellidoCc = $_POST["Apellido2"];
    $DireccionCc = $_POST["Direccion2"];
    $TelefonoCc = $_POST["Telefono2"];
    $Fecha_NacimientoCc = $_POST["Fecha_Nacimiento2"];
    $NickNameCc = $_POST["NickName2"];
    $ContrasenaCc = $_POST["Contrasena2"];
    $CorreoCc = $_POST["Correo2"];
    $modificar = mysqli_query($conexion, "UPDATE registro set Nombre='$NombreCc',Apellido='$ApellidoCc',Direccion='$DireccionCc',Telefono='$TelefonoCc',Fecha_Nacimiento='$Fecha_NacimientoCc',NickName='$NickNameCc',Contrasena='$ContrasenaCc',Correo='$CorreoCc'
        where Id_Persona='$Identificacion'") or die("NO ES POSIBLE ACTUALIZAR");
    mysqli_close($conexion);
    echo"<script>alert('DATOS ACTUALIZADOS CON EXITO')</script>";
    echo "<script>location.href='../Formularios/IngresarUsuario.php'</script>";
}

?>