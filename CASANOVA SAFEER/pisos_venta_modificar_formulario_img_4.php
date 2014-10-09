<?php 
require_once 'seguridad.php';

if (!isset($_POST['idref'])) {
	header('Location: pisos_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];

$max_size = 2097152;
	
if ($_FILES['archivo4']['size'] < $max_size) {

	$origen4 = $_FILES['archivo4']['tmp_name'];
	$destino4 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo4']['name']);
		
	move_uploaded_file($origen4,$destino4);   

include 'conexion.php';

$sSQL = "UPDATE pisos_venta SET img_4 = '$destino4' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());

}

header('Location: pisos_venta_modificar.php');
exit;



