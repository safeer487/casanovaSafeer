<?php 

require_once 'seguridad.php';
if (!isset($_POST['idref'])) {
	header('Location: locales_comerciales_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];

$max_size = 2097152;

if ($_FILES['archivo3']['size'] < $max_size) {

	$origen3 = $_FILES['archivo3']['tmp_name'];
	$destino3 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo3']['name']);
		
	move_uploaded_file($origen3,$destino3);   

include 'conexion.php';

$sSQL = "UPDATE inmuebles_comerciales SET img_3 = '$destino3' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());

}

header('Location: locales_comerciales_venta_modificar.php');
exit;



