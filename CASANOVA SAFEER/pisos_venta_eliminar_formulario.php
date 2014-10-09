
<?php  
require_once 'seguridad.php';
if(!isset($_POST['id_ref'])) {
	header('Location: pisos_venta_eliminar.php');
	exit;
}


$iId = $_POST['id_ref'];


include 'conexion.php';

$sSQL = "DELETE FROM pisos_venta WHERE id_ref = $iId;";
mysql_query($sSQL,$conexion)or die(mysql_error());

header('Location: pisos_venta_eliminar.php?eliminado=1');
exit;



?>
