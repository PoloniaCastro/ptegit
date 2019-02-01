<?
include_once("indexPte.php");
include_once 'clases/servicio.php';
include_once 'clases/conexion.php';

$tituloAnun = $_POST["txtTitulo"];
$telefonoAnun = $_POST["txtTelefono"];
$precioAnun = $_POST["txtValor"];
$descripcionAnun = $_POST["txtDescripcion"];
$idTipo = $_POST["selectTipo"];



$consultaInsert = "INSERT INTO anuncio (nombre_anun, descripcion_anun, telefono_anun, valor_anun,id_tipo, imagen_princ_anun)
VALUES ('".$tituloAnun."', '".$descripcionAnun."', '".$telefonoAnun."', '".$precioAnun."','".$idTipo."', 'imgagenPrincipal')";
$resultado = mysqli_query( $conexion, $consultaInsert ) or die ( "Algo ha ido mal  a la base de datos");
/*while ($columna = mysqli_fetch_array($resultado))
{
  $idAnun = $columna['id_anun'];
  if(is_uploaded_file($_FILES['imgagenPrincipal']['tmp_name']))
  {

    $imagen1= $idAnun."_1".".jpg";
    $img_notBD1= "img/$imagen1";
    $img_not1= "img/$imagen1";
    if(copy($_FILES['imgagenPrincipal']['tmp_name'], $img_not1))
    {
    }
    $consulta = "UPDATE anuncio SET imagen_princ_anuns='$img_notBD1' WHERE id_anun='$idAnun'";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal  a la base de datos");


  }

}*/


?>
