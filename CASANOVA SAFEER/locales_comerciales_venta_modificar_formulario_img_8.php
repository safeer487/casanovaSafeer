<?php 
require_once 'seguridad.php';

if (!isset($_POST['idref'])) {
	header('Location: locales_comerciales_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];

$max_size = 2097152;
if ($_FILES['archivo8']['size'] < $max_size) {

	$origen8 = $_FILES['archivo8']['tmp_name'];
	$destino8 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo8']['name']);
		
	move_uploaded_file($origen8,$destino8);   

include 'conexion.php';

$sSQL = "UPDATE inmuebles_comerciales SET img_8 = '$destino8' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());

}

header('Location: locales_comerciales_venta_modificar.php');
exit;



