<?php 
require_once 'seguridad.php';

if(!isset($_POST['idref'])) {
	header('Location: pisos_venta_modificar.php');
	exit;
}

$iId_ref = $_POST['idref'];
$sTitulo = $_POST['titulo'];

$sDescripcion = $_POST['descripcion'];
$sPrecio = $_POST['precio'];



$sDescripcion_ficha_mini = $_POST['descripcion_ficha_mini'];
	
$sMetro = $_POST['metros'];

$sAcceso_Minusvalido = $_POST['AccMinus'];

$sGarajeIncl = $_POST['GarajeIncl'];
$sAltura = $_POST['altura'];
$sAscensor = $_POST['ascensor'];
$sBalcon = $_POST['balcon'];

$sEdadFinc = $_POST['EdadFinca'];	
$sCertEnerg = $_POST['CertEnerg'];

$sMapa = trim($_POST['mapa']);
$iHabitaciones = trim($_POST['habitaciones']);
$sTerraza = trim($_POST['terraza']);

$sExtras_1 = trim($_POST['extra_1']);
$sExtras_2 = trim($_POST['extra_2']);
$sExtras_3 = trim($_POST['extra_3']);
$sExtras_4 = trim($_POST['extra_4']);
$sExtras_5 = trim($_POST['extra_5']);
$sExtras_6 = trim($_POST['extra_6']);
$sExtras_7 = trim($_POST['extra_7']);
$sExtras_8 = trim($_POST['extra_8']);




include 'conexion.php';

$sSQL = "UPDATE pisos_venta SET titulo = '$sTitulo', descripcion = '$sDescripcion', precio = '$sPrecio', metros = '$sMetro', acceso_minusvalido = '$sAcceso_Minusvalido', garaje_incluido = '$sGarajeIncl', altura = '$sAltura', ascensor = '$sAscensor', balcon = '$sBalcon', edad_finca = '$sEdadFinc',certificado_energetico = '$sCertEnerg', mapa = '$sMapa', habitaciones = '$iHabitaciones', terraza = '$sTerraza', descripcion_ficha_mini = '$sDescripcion_ficha_mini', extra_1 = '$sExtras_1',extra_2 = '$sExtras_2', extra_3 = '$sExtras_3', extra_4 = '$sExtras_4', extra_5 = '$sExtras_5',
extra_6 = '$sExtras_6', extra_7 = '$sExtras_7', extra_8 = '$sExtras_8' WHERE id_ref = '$iId_ref';";
mysql_query($sSQL,$conexion)or die(mysql_error());


header('Location: pisos_venta_modificar.php');
exit;

?>

