<?php 
require_once 'seguridad.php';
if (!isset($_POST['idref'])) {
	header('Location: locales_comerciales_venta_modificar.php');
	exit;
}
$iId_ref = $_POST['idref'];
$max_size = 2097152;
	
if ($_FILES['archivo2']['size'] < $max_size) {

	$origen2 = $_FILES['archivo2']['tmp_name'];
	$destino2 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo2']['name']);
		
	move_uploaded_file($origen2,$destino2);   

include 'conexion.php';

$sSQL = "UPDATE inmuebles_comerciales SET img_2 = '$destino2' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());
}

header('Location: locales_comerciales_venta_modificar.php');
exit;



