<?php 
require_once 'seguridad.php';

if (!isset($_POST['idref'])) {
	header('Location: locales_comerciales_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];

$max_size = 2097152;
if ($_FILES['archivo9']['size'] < $max_size) {

	$origen9 = $_FILES['archivo9']['tmp_name'];
	$destino9 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo9']['name']);
		
	move_uploaded_file($origen9,$destino9);   

include 'conexion.php';

$sSQL = "UPDATE inmuebles_comerciales SET img_9 = '$destino9' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());

}

header('Location: locales_comerciales_venta_modificar.php');
exit;



