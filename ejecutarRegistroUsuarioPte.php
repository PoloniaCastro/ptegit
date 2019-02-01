<?
include_once("indexPte.php");
include_once 'clases/servicio.php';
include_once 'clases/conexion.php';

$nombreUsu = $_POST["txtNombre"];
$apellidoUsu = $_POST["txtApellido"];
$telefonoUsu = $_POST["txtTelefono"];
$correoUsu = $_POST["txtCorreo"];
$contrasenia = $_POST["txtContrasenia"];
$pass = sha1($contrasenia);

$consulta = "SELECT * FROM usuario WHERE correo_usuario = '$correoUsu'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$fila = mysqli_fetch_array($resultado);
$scan = $fila[0];
if($scan ==0)
{
  $ConsultaInsert = "INSERT INTO usuario(nombre_usuario, apellido_usuario, telefono_usuario,correo_usuario,contrasenia_usuario )
                    VALUES ('".$nombreUsu."', '".$apellidoUsu."', '".$telefonoUsu."', '".$correoUsu."', '".$pass."' )";
  $resultado = mysqli_query( $conexion, $ConsultaInsert ) or die ( "Algo ha ido mal en la consulta a la base de datos");

  if($resultado)
  {
    header("location: registroUsuarioPte.php");
  }
}
  else
  {
    echo "<script>
       alert('Correo ya existe');
       window.location= 'registroUsuarioPte.php'
      </script>";
  }

?>
