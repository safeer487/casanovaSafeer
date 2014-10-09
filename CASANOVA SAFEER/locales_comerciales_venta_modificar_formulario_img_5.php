<?php 
require_once 'seguridad.php';

if (!isset($_POST['idref'])) {
	header('Location: locales_comerciales_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];
$max_size = 2097152;
	
if ($_FILES['archivo5']['size'] < $max_size) {

	$origen5 = $_FILES['archivo5']['tmp_name'];
	$destino5 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo5']['name']);
		
	move_uploaded_file($origen5,$destino5);   

include 'conexion.php';

$sSQL = "UPDATE inmuebles_comerciales SET img_5 = '$destino5' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());

}

header('Location: locales_comerciales_venta_modificar.php');
exit;



