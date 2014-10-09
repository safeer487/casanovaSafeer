<?php 

require_once 'seguridad.php';
if (!isset($_POST['idref'])) {
	header('Location: locales_comerciales_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];
$max_size = 2097152;

if ($_FILES['archivo6']['size'] < $max_size) {

	$origen6 = $_FILES['archivo6']['tmp_name'];
	$destino6 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo6']['name']);
		
	move_uploaded_file($origen6,$destino6);   

include 'conexion.php';

$sSQL = "UPDATE inmuebles_comerciales SET img_6 = '$destino6' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());

}

header('Location: locales_comerciales_venta_modificar.php');
exit;



