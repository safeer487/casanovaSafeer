<?php 

require_once 'seguridad.php';



if(!$_POST){
	header('Location: enlaces.php');
	exit;
}

$iId = trim($_POST['id']);
$sNombre = trim($_POST['nombre']);
$iTipo = trim($_POST['tipo']);
$sColor = substr($_POST['color'],1);  // le pusimos el 1 para que sume la # para que que se exporte a la BSD y lea el color
$iTalla = trim($_POST['talla']);
$iGenero = trim($_POST['genero']);


include 'conexion.php';

$sSQL = "UPDATE articulos SET nombre = '$sNombre', id_tipo_articulo = '$iTipo', color = '$sColor', talla = '$iTalla', id_genero = '$iGenero' WHERE id = '$iId'"; 
echo $sSQL;

mysql_query($sSQL,$conexion)or die(mysql_error());

header('Location: modificar.php?modificar=1');   //   ?modificar=1   saldra en la barra de direccion arriba y mostrara un eco con un mensaje" se ha modificado c..."
	//echo 'se ha modificado corectamente';
	exit;



 ?>