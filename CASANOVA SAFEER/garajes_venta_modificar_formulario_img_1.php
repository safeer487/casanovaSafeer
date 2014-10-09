<?php 
require_once 'seguridad.php';

if (!isset($_POST['idref'])) {
	header('Location: garajes_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];

$max_size = 2097152;
$sImgProduct = '';	
if ($_FILES['archivo1']['size'] < $max_size) {

	$origen1 = $_FILES['archivo1']['tmp_name'];
	$destino1 = "img/img_galeria/modificadas/" .  time() . trim($_FILES['archivo1']['name']);
		
	move_uploaded_file($origen1,$destino1);   

include 'conexion.php';

$sSQL = "UPDATE garajes SET img_1 = '$destino1' WHERE id_ref = '$iId_ref';";	
mysql_query($sSQL,$conexion)or die(mysql_error());

}

header('Location: garajes_venta_modificar.php');
exit;



