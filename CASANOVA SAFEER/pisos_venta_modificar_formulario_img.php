<?php 
require_once 'seguridad.php';
if (!isset($_POST['idref'])) {
	header('Location: pisos_venta_modificar.php');
	exit;
}
$iId_ref = $_POST['idref'];
$max_size = 2097152;

if ($_FILES['archivo']['size'] < $max_size) {

	$origen = $_FILES['archivo']['tmp_name'];
	$destino = "img/" .  time() . trim($_FILES['archivo']['name']);
		
	move_uploaded_file($origen,$destino);   


include 'conexion.php';

$sSQL = "UPDATE pisos_venta SET foto_ficha = '$destino' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());
}



header('Location: pisos_venta_modificar.php');
exit;



