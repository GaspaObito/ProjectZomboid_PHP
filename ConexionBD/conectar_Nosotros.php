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
if (isset($_POST["enviarf"])) {
    $Nombre = $_POST["nombref"];
    $Apellido = $_POST["apellidof"];
    $CorreoElectronico = $_POST["emailf"];
    $Descripcion = $_POST["descripcionf"];
    /*$Id_Persona = $conexion->insert_id;
    $Id_Persona = mysqli_insert_id($conexion);
    $consultar = mysqli_query($conexion, "select * from registro where Id_Persona='$Id_Persona2'") or die("ERROR AL TRAER LOS DATOS");
    while ($Id_Persona2 = $Id_Persona) {
    $Id_Persona++;  
}*/
    $sql_detalle = "INSERT INTO contactar(Id_contactar,Nombre,Apellido,CorreoElectronico,Descripcion) VALUES('NULL',
    '".$Nombre."','".$Apellido."','".$CorreoElectronico."','".$Descripcion."')";
    /* Validar insercion */
    $resultado = mysqli_query($conexion, $sql_detalle) or die
                    ("ERROR EN LA INSERCION".$Id_Persona);

    mysqli_close($conexion);
    
    echo "(<script>alert('LOS REGISTROS SE INSERTARON CORRECTAMENTE')</script>)";
    echo "<script>location.href='../Formularios/Nosotros.php'</script>";
}
?>