<?
include_once 'clases/conexion.php';
$correo = $_POST["txtCorreo"];
$contrasenia = $_POST["txtContrasenia"];

$consulta = "SELECT * FROM usuario where correo_usuario = '$correo' and contrasenia_usuario = '$contrasenia'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
if($fila = mysqli_fetch_array( $resultado ))
{
  session_start();
  $_SESSION['idUsuario'] = $fila['id_usuario'];
  $_SESSION['nombreUsu'] = $fila['nombre_usuario'];
  header("location: indexPte.php");
}
else
{
  echo "<script>
             alert('contraseña o correo incorrectos');
             window.location= 'loginPte.php'
 </script>";
}
?>
