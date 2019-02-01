<?php



     $servidor = "localhost";
     $usuario = "root";
     $password = "";
     $basededatos = "yapo_macer";
     $link;


    $conexion = mysqli_connect( $servidor, $usuario, "$password" ) or die ("No se ha podido conectar al servidor de Base de datos");

    	// Selección del a base de datos a utilizar
    	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>
