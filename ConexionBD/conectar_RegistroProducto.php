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

/* GUARDAR DATOS PRODUCTO */
if (isset($_POST["enviarf"])) {
    $nombrePp = $_POST["nombrePp"];
    $precioPp = $_POST["precioPp"];
    $cantidadPp = $_POST["cantidadPp"];
    $descripcionPp = $_POST["descripcionPp"];
    $IdProveedor = $_POST["ForenProveedorr"];
    /* Insertar Codigo */
    $insertar = "INSERT INTO producto(Id_Producto,NombreProducto,Precio,Cantidad,Descripcion,Id_proovedor) VALUES(
    'NULL',
    '".$nombrePp."',
    '".$precioPp."',
    '".$cantidadPp."',    
    '".$descripcionPp."',
    '".$IdProveedor."')";

    /* VALIDA GUARDADO */
    $resultado = mysqli_query($conexion, $insertar) or die
                    ("ERROR EN LA INSERCION");
    mysqli_close($conexion);
    echo"<script>alert('DATOS INSERTADOS CORRECTAMENTE')</script>";
    echo"<script>location.href='../Formularios/IngresarProducto.php'</script>";
}
//MOSTRAR DATO DE LA TABLA CLIENTES
if (isset($_POST["consultarInformacion"])) {
    $consultar = mysqli_query($conexion, "select * from producto") or die("ERROR AL TRAER LOS DATOS");
    include("../template/cabeceraCategoria.php");
    /* BOTONES DE ACCION */
    echo '<div class="hero-content text-center m-5 p-2">
        <strong><label class="text-black pb-3">ACCIONES</label></strong>
     <form action="conectar_RegistroProducto.php" method="post">
                <a class="btn btn-outline-dark" href="../Formularios/IngresarProducto.php">Ingresar Producto</a>          
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
    echo '<div class="hero-content text-center m-5 p-2">';
    echo '<table class="table table-dark table-striped table-bordered table-hover">';
    echo '<strong><label class="text-black pb-3">TABLA DE PRODUCTO</label></strong>';
    echo '<thead>';
    echo '<tr class="table-light">';
    echo '<th>Id_Producto</th>';
    echo '<th>NombreProducto</th>';
    echo '<th>Precio</th>';
    echo '<th>Cantidad</th>';
    echo '<th>Descripcion</th>';
    echo '<th>Id_Proovedor</th>';
    echo '</tr>';
    echo '</thead>';
    /* TITULO DE LAS COLUMNAS */
    /* CUERPO DE LA TABLA */
    echo '<tbody>';
    while ($extraido = mysqli_fetch_array($consultar)) {
        echo '<tr>';
        echo '<th>' . $extraido['Id_Producto'] . '</th>';
        echo '<th>' . $extraido['NombreProducto'] . '</th>';
        echo '<th>' . $extraido['Precio'] . '</th>';
        echo '<th>' . $extraido['Cantidad'] . '</th>';
        echo '<th>' . $extraido['Descripcion'] . '</th>';
        echo '<th>' . $extraido['Id_proovedor'] . '</th>';
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
    mysqli_query($conexion, "delete from producto where Id_Producto='$Identificacion'") or die("<script>alert('ERROR AL ELIMINAR')</script>" . "<script>location.href='../Formularios/IngresarProducto.php'</script>");
    if ($Identificacion == "") {
        echo "<script>alert('NO HA INGRESADO UN ID')</script>";
        echo "<script>location.href='../Formularios/IngresarProducto.php'</script>";
    } else {
        mysqli_close($conexion);
        echo "<script>alert('DATOS ELIMINADOS CORRECTAMENTE')</script>";
        echo "<script>location.href='../Formularios/IngresarProducto.php'</script>";
    }
}
//BUSCAR DATOS
if (isset($_POST["buscarDatos"])) {
    $Identificacion = $_POST['Identificacionn'];
    $consultar = mysqli_query($conexion, "select * from producto where Id_Producto='$Identificacion'") or die("<script>alert('ERROR AL TRAER LOS DATOS')</script>" . "<script>location.href='../Formularios/IngresarProducto.php'</script>");
    include("../template/cabeceraCategoria.php");
    if ($Identificacion == "") {
        echo "<script>alert('NO HA INGRESADO UN ID')</script>";
        echo "<script>location.href='../Formularios/IngresarProducto.php'</script>";
    } else {
        mysqli_close($conexion);
        /* BOTONES DE ACCION */
        echo '<div class="hero-content text-center m-5 p-2">
        <strong><label class="text-black pb-3">ACCIONES</label></strong>
     <form action="conectar_RegistroProducto.php" method="post">
      <a class="btn btn-outline-dark" href="../Formularios/IngresarProducto.php">Ingresar Producto</a>      
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
    <th>Id_Producto</th>
    <th>NombreProducto</th>
    <th>Precio</th>   
    <th>Cantidad</th>
    <th>Descripcion</th>
    <th>Id_Proovedor</th>
    </tr>
    </thead>';
        /* TITULO DE LAS COLUMNAS */
        /* CUERPO DE LA TABLA */
        echo '<tbody>';
        while ($extraido = mysqli_fetch_array($consultar)) {
            echo '<tr>';
            echo '<th>' . $extraido['Id_Producto'] . '</th>';
            echo '<th>' . $extraido['NombreProducto'] . '</th>';
            echo '<th>' . $extraido['Precio'] . '</th>';
            echo '<th>' . $extraido['Cantidad'] . '</th>';
            echo '<th>' . $extraido['Descripcion'] . '</th>';
            echo '<th>' . $extraido['Id_proovedor'] . '</th>';
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
    $consulta = mysqli_query($conexion, "select * from producto where Id_Producto=$Identificacion") or die("<script>alert('NO HA INGRESADO UN ID')</script>" . "<script>location.href='../Formularios/IngresarProducto.php'</script>");
    /* TITULO DE LA TABLA */
    include("../template/cabeceraCategoria.php");
    echo '<div class="hero-content text-center m-5 p-2">
    <table class="table table-dark table-striped table-bordered table-hover"> 
    <thead>
    <tr class="table-light">
    <th>Id_Producto</th>
    <th>NombreProducto</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Descripcion</th>
    </tr>
    </thead>';
    /* TITULO DE LA TABLA */
    /* CUERPO DE LA TABLA */
    echo '<tbody>';
    ($extraido = mysqli_fetch_array($consulta));
    echo '<tr>';
    echo '<th>' . $extraido['Id_Producto'] . '</th>';
    echo '<th>' . $extraido['NombreProducto'] . '</th>';
    echo '<th>' . $extraido['Precio'] . '</th>';
    echo '<th>' . $extraido['Cantidad'] . '</th>';
    echo '<th>' . $extraido['Descripcion'] . '</th>';
    echo '</tr>';
    echo '</tbody>';
    /* CUERPO DE LA TABLA */
    /* ACTUALIZAR LA TABLA */
    echo '<form action="conectar_RegistroProducto.php" method="post" class="form_cliente" id="form" >      
          <strong><label class="text-black pb-3">TABLA DE PRODUCTO ACTUALIZAR</label></strong>  
           <div class="row">
          <div class="col-sm-2">
          <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3" id="Identificacion2">Identificacion</laber>
            <input type="text" class="form-control" name="Identificacion2" readonly=»readonly value="' . $extraido['Id_Producto'] . '"/> 
            </div>
            </div>
            <div class="col-sm-2">
         <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Nombre Producto</laber>
            <input type="text" class="form-control" name="NombreProducto2" placeholder="Nombre del Producto" value="' . $extraido['NombreProducto'] . '"/> 
            </div>  
             </div>
            <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Precio</laber>
            <input type="text" class="form-control" name="Precio2" placeholder="Precio del Producto" value="' . $extraido['Precio'] . '"/> 
            </div> 
            </div>
             <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Cantidad</laber>
            <input type="text" class="form-control" name="Cantidad2" placeholder="Cantidad del Producto" value="' . $extraido['Cantidad'] . '"/> 
            </div> 
             </div>
             <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Descripcion</laber>
            <input type="text" class="form-control" name="Descripcion2" placeholder="Descripcion del Producto" value="' . $extraido['Descripcion'] . '"/> 
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
    $Identificacion = $_POST['Identificacion2'];
    $NombreP = $_POST['NombreProducto2'];
    $PrecioP = $_POST['Precio2'];
    $CantidadP = $_POST['Cantidad2'];
    $descripcionP = $_POST['Descripcion2'];
    $modificar = mysqli_query($conexion, "UPDATE producto set NombreProducto='$NombreP', Precio='$PrecioP', Cantidad='$CantidadP', Descripcion='$descripcionP'
        where Id_Producto='$Identificacion'") or die("NO ES POSIBLE ACTUALIZAR");
    mysqli_close($conexion);
    echo"<script>alert('DATOS ACTUALIZADOS CON EXITO')</script>";
    echo "<script>location.href='../Formularios/IngresarProducto.php'</script>";
}
?>