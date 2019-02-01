<?
include_once("indexPte.php");
include_once 'clases/servicio.php';
include_once 'clases/conexion.php';

$nombreEm = $_POST["txtNombre"];
$direccionEm = $_POST["txtDireccion"];
$telefonoEm = $_POST["txtTelefono"];
$correoEm = $_POST["txtCorreo"];
$categoriaEm = $_POST["selectCat"];
$regionEm = $_POST["selectRegion"];
$ciudadEm = $_POST["selectCiudad"];
$descripcionEm = $_POST["txtDescripcion"];


$consulta = "SELECT * FROM empresa WHERE correo_empresa='$correoEm'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal  a la base de datos");
$fila = mysqli_fetch_array($resultado);
$scan = $fila[0];
if($scan ==0)
{
  $ConsultaInsert = "INSERT INTO empresa( nombre_empresa, direccion_empresa, telefono_empresa, correo_empresa, id_categoria,descripcion_empresa)
  VALUES('".$nombreEm."', '".$direccionEm."', '".$telefonoEm."', '".$correoEm."', '".$categoriaEm."', '".$descripcionEm."')";
  $resultado = mysqli_query( $conexion, $ConsultaInsert ) or die ( "Algo ha ido mal9 en la consulta a la base de datos");

  $consulta = "SELECT id_empresa FROM empresa order by id_empresa desc limit 0,1";
  $resultado2 = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en 09la consulta a la base de datos");
  while ($columna = mysqli_fetch_array( $resultado2 ))
  {
    $consulta2 = "INSERT INTO empresa_usuario(id_empresa, id_usuario) VALUES ('".$columna['id_empresa']."', '".$_SESSION['idUsuario']."') ";
    $resultado = mysqli_query( $conexion, $consulta2 ) or die ( "Algo ha ido mal en la c999onsulta a la base de datos");

    $consulta3 = "SELECT id_empresa FROM empresa order by id_empresa desc limit 0,1";
    $resultado3 =  mysqli_query( $conexion, $consulta3 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    while ($columna3 = mysqli_fetch_array( $resultado3))
    {
      $consulta4 = "INSERT INTO empresa_ciudad (id_empresa, id_ciu) VALUES('".$columna3['id_empresa']."', '".$ciudadEm."')";
      $resultado4 =  mysqli_query( $conexion, $consulta4 ) or die ( "Algo ha ido mal en 09la consulta a la base de datos");
      if($resultado4)
      {
        echo "<script>
           alert('Registro de Empresa exitoso);
           window.location= 'registroEmpresaPte.php'
          </script>";
      }
    }


  }

}
else
{
  echo "<script>
     alert('Correo ya existe');
     window.location= 'registroEmpresaPte.php'
    </script>";
}
?>
