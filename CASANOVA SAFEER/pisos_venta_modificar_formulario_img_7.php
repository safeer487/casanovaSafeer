<?php 

require_once 'seguridad.php';
if (!isset($_POST['idref'])) {
	header('Location: pisos_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];

$max_size = 2097152;
if ($_FILES['archivo7']['size'] < $max_size) {

	$origen7 = $_FILES['archivo7']['tmp_name'];
	$destino7 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo7']['name']);
		
	move_uploaded_file($origen7,$destino7);   

include 'conexion.php';

$sSQL = "UPDATE pisos_venta SET img_7 = '$destino7' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());

}

header('Location: pisos_venta_modificar.php');
exit;



