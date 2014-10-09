<?php 
require_once 'seguridad.php';

if (!isset($_POST['idref'])) {
	header('Location: pisos_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];

$max_size = 2097152;
	
if ($_FILES['archivo10']['size'] < $max_size) {

	$origen10 = $_FILES['archivo10']['tmp_name'];
	$destino10 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo10']['name']);
		
	move_uploaded_file($origen10,$destino10);   

include 'conexion.php';

$sSQL = "UPDATE pisos_venta SET img_10 = '$destino10' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());

}

header('Location: pisos_venta_modificar.php');
exit;



