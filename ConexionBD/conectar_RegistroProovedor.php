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
    $nombrePp = $_POST["nombreProve"];
    $direccionPp = $_POST["direccionProve"];
    $empresaPp = $_POST["empresaProve"];
    $nameproductPp = $_POST["nombreProduc"];
    $cantidadPp = $_POST["cantidadProduc"];
    $precioPp = $_POST["precioProduc"];
    /* Insertar Codigo */
    $insertar = "INSERT INTO proveedor(NombreProveedor,Direccion,Empresa,NombreProducto,Cantidad,PrecioMercancia) VALUES(
    '".$nombrePp."','".$direccionPp."','".$empresaPp."',    '".$nameproductPp."','".$cantidadPp."','".$precioPp."')";

    /* VALIDA GUARDADO */
    $resultado = mysqli_query($conexion, $insertar) or die
                    ("ERROR EN LA INSERCION");
    mysqli_close($conexion);
    echo"<script>alert('DATOS INSERTADOS CORRECTAMENTE')</script>";
    echo"<script>location.href='../Formularios/IngresarProveedor.php'</script>";
}
//MOSTRAR DATO DE LA TABLA CLIENTES
if (isset($_POST["consultarInformacion"])) {
    $consultar = mysqli_query($conexion, "select * from proveedor") or die("ERROR AL TRAER LOS DATOS");
    include("../template/cabeceraCategoria.php");
    /* BOTONES DE ACCION */
    echo '<div class="hero-content text-center m-5 p-2">
        <strong><label class="text-black pb-3">ACCIONES</label></strong>
     <form action="conectar_RegistroProovedor.php" method="post">
                <a class="btn btn-outline-dark" href="../Formularios/IngresarProveedor.php">Ingresar Proovedor</a>          
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
    <th>Id_Proovedor</th>
    <th>NombreProducto</th>
    <th>Direccion</th>
    <th>Empresa</th>
    <th>NombreProducto</th>
    <th>Cantidad</th>
    <th>PrecioMercancia</th>
    </tr>
    </thead>';
    /* TITULO DE LAS COLUMNAS */
    /* CUERPO DE LA TABLA */
    echo '<tbody>';
    while ($extraido = mysqli_fetch_array($consultar)) {
        echo '<tr>';
        echo '<th>' . $extraido['Id_Proveedor'] . '</th>';
        echo '<th>' . $extraido['NombreProveedor'] . '</th>';
        echo '<th>' . $extraido['Direccion'] . '</th>';
        echo '<th>' . $extraido['Empresa'] . '</th>';
        echo '<th>' . $extraido['NombreProducto'] . '</th>';
        echo '<th>' . $extraido['Cantidad'] . '</th>';
        echo '<th>' . $extraido['PrecioMercancia'] . '</th>';
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
    mysqli_query($conexion, "delete from proveedor where Id_Proveedor='$Identificacion'") or die("<script>alert('ERROR AL ELIMINAR')</script>" . "<script>location.href='../Formularios/IngresarProveedor.php'</script>");
    if ($Identificacion == "") {
        echo "<script>alert('NO HA INGRESADO UN ID')</script>";
        echo "<script>location.href='../Formularios/IngresarProveedor.php'</script>";
    } else {
        mysqli_close($conexion);
        echo "<script>alert('DATOS ELIMINADOS CORRECTAMENTE')</script>";
        echo "<script>location.href='../Formularios/IngresarProveedor.php'</script>";
    }
}
//BUSCAR DATOS
if (isset($_POST["buscarDatos"])) {
    $Identificacion = $_POST['Identificacionn'];
    $consultar = mysqli_query($conexion, "select * from proveedor where Id_Proveedor='$Identificacion'") or die("<script>alert('ERROR AL TRAER LOS DATOS')</script>" . "<script>location.href='../Formularios/IngresarProveedor.php'</script>");
    include("../template/cabeceraCategoria.php");
    if ($Identificacion == "") {
        echo "<script>alert('NO HA INGRESADO UN ID')</script>";
        echo "<script>location.href='../Formularios/IngresarProveedor.php'</script>";
    } else {
        mysqli_close($conexion);
        /* BOTONES DE ACCION */
        echo '<div class="hero-content text-center m-5 p-2">
        <strong><label class="text-black pb-3">ACCIONES</label></strong>
     <form action="conectar_RegistroProovedor.php" method="post">
      <a class="btn btn-outline-dark" href="../Formularios/IngresarProveedor.php">Ingresar Producto</a>      
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
    <th>Id_Proovedor</th>
    <th>NombreProducto</th>
    <th>Direccion</th>
    <th>Empresa</th>
    <th>NombreProducto</th>
    <th>Cantidad</th>
    <th>PrecioMercancia</th>
    </tr>
    </thead>';
        /* TITULO DE LAS COLUMNAS */
        /* CUERPO DE LA TABLA */
        echo '<tbody>';
        while ($extraido = mysqli_fetch_array($consultar)) {
            echo '<tr>';
            echo '<th>' . $extraido['Id_Proveedor'] . '</th>';
            echo '<th>' . $extraido['NombreProveedor'] . '</th>';
            echo '<th>' . $extraido['Direccion'] . '</th>';
            echo '<th>' . $extraido['Empresa'] . '</th>';
            echo '<th>' . $extraido['NombreProducto'] . '</th>';
            echo '<th>' . $extraido['Cantidad'] . '</th>';
            echo '<th>' . $extraido['PrecioMercancia'] . '</th>';
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
    $consulta = mysqli_query($conexion, "select * from proveedor where Id_Proveedor=$Identificacion") or die("<script>alert('NO HA INGRESADO UN ID')</script>" . "<script>location.href='../Formularios/IngresarProveedor.php'</script>");
    /* TITULO DE LA TABLA */
    include("../template/cabeceraCategoria.php");
    echo '<div class="hero-content text-center m-5 p-2">
    <table class="table table-dark table-striped table-bordered table-hover"> 
    <thead>
     <tr class="table-light">
    <th>Id_Proovedor</th>
    <th>NombreProducto</th>
    <th>Direccion</th>
    <th>Empresa</th>
    <th>NombreProducto</th>
    <th>Cantidad</th>
    <th>PrecioMercancia</th>
    </tr>
    </thead>';
    /* TITULO DE LA TABLA */
    /* CUERPO DE LA TABLA */
    echo '<tbody>';
    ($extraido = mysqli_fetch_array($consulta));
   echo '<tr>';
    echo '<th>' . $extraido['Id_Proveedor'] . '</th>';
    echo '<th>' . $extraido['NombreProveedor'] . '</th>';
    echo '<th>' . $extraido['Direccion'] . '</th>';
    echo '<th>' . $extraido['Empresa'] . '</th>';
    echo '<th>' . $extraido['NombreProducto'] . '</th>';
    echo '<th>' . $extraido['Cantidad'] . '</th>';
    echo '<th>' . $extraido['PrecioMercancia'] . '</th>';
    echo '</tr>';
    echo '</tbody>';
    /* CUERPO DE LA TABLA */
    /* ACTUALIZAR LA TABLA */
    echo '<form action="conectar_RegistroProovedor.php" method="post" class="form_cliente" id="form" >      
          <strong><label class="text-black pb-3">TABLA DE PROOVEDOR ACTUALIZAR</label></strong>  
           <div class="row">
          <div class="col-sm-2">
          <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Id_Proveedor</laber>
            <input type="text" class="form-control" name="Id_Proveedor2" readonly=»readonly value="'.$extraido['Id_Proveedor'].'"/> 
            </div>
            </div>
            <div class="col-sm-2">
         <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Nombre del Proovedor</laber>
            <input type="text" class="form-control" name="NombreProveedor2" placeholder="Nombre del proveedor" value="'.$extraido['NombreProveedor'].'"/> 
            </div>  
             </div>
            <div class="col-sm-2">
         <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Direccion</laber>
            <input type="text" class="form-control" name="Direccion2" placeholder="Direccion de la empresa" value="'.$extraido['Direccion'].'"/> 
            </div>  
             </div>
            <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Empresa</laber>
            <input type="text" class="form-control" name="Empresa2" placeholder="Nombre de la Empresa" value="'.$extraido['Empresa'].'"/> 
            </div> 
            </div>
             <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Nombre del Producto</laber>
            <input type="text" class="form-control" name="NombreProducto2" placeholder="Nombre del Producto" value="'.$extraido['NombreProducto'].'"/> 
            </div> 
             </div>
             <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">Cantidad</laber>
            <input type="text" class="form-control" name="Cantidad2" placeholder="Cantidad del Producto" value="'.$extraido['Cantidad'].'"/> 
            </div>  
            </div>
            <div class="col-sm-2">
            <div class="form-group">
            <label class="dispaly-text text-prmary text-center my-3">PrecioMercancia</laber>
            <input type="text" class="form-control" name="PrecioMercancia2" placeholder="Precio del Producto" value="'.$extraido['PrecioMercancia'].'"/> 
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
    $Identificacion = $_POST['Id_Proveedor2'];
    $NombrePp = $_POST["NombreProveedor2"];
    $DireccionPp = $_POST["Direccion2"];
    $EmpresaPp = $_POST["Empresa2"];
    $NombrePPp = $_POST["NombreProducto2"];
    $CantidadPp = $_POST["Cantidad2"];
    $PrecioMerPp = $_POST["PrecioMercancia2"];
    $modificar = mysqli_query($conexion, "UPDATE proveedor set NombreProveedor='$NombrePp',Direccion='$DireccionPp',Empresa='$EmpresaPp',NombreProducto='$NombrePPp',Cantidad='$CantidadPp',PrecioMercancia='$PrecioMerPp'
        where Id_Proveedor='$Identificacion'") or die("NO ES POSIBLE ACTUALIZAR");
    mysqli_close($conexion);
    echo"<script>alert('DATOS ACTUALIZADOS CON EXITO')</script>";
    echo "<script>location.href='../Formularios/IngresarProveedor.php'</script>";
}
?>