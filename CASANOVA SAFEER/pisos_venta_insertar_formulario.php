<?php 

require_once 'seguridad.php';

if (!$_POST) {
	header('Location: pisos_venta_insertar.php');
	exit;
}



$sTitulo = $_POST['titulo'];
$sDescripcion = $_POST['descripcion'];
$sDescripcion_ficha_mini = $_POST['descripcion_ficha_mini'];
$sPrecio = $_POST['precio'];	
$sMetro = $_POST['metros'];
$sLocalidad = $_POST['localidad'];
$sAccMinus = $_POST['AccMinus'];

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


$max_size = 2097152;
$sImgProduct = '';	
if ($_FILES['archivo']['size'] < $max_size) {

	$origen = $_FILES['archivo']['tmp_name'];
	$destino = "img/" .  time() . trim($_FILES['archivo']['name']);
		
	move_uploaded_file($origen,$destino);   


include 'conexion.php';


}



if ($_FILES['archivo1']['size'] < $max_size) {

	$origen1 = $_FILES['archivo1']['tmp_name'];
	$destino1 = "img/" .  time() . trim($_FILES['archivo1']['name']);
		
	move_uploaded_file($origen1,$destino1); 


include 'conexion.php';
	
}




if ($_FILES['archivo2']['size'] < $max_size) {

	$origen2 = $_FILES['archivo2']['tmp_name'];
	$destino2 = "img/" .  time() . trim($_FILES['archivo2']['name']);
		
	move_uploaded_file($origen2,$destino2); 


include 'conexion.php';	
	
}



if ($_FILES['archivo3']['size'] < $max_size) {

	$origen3 = $_FILES['archivo3']['tmp_name'];
	$destino3 = "img/" .  time() . trim($_FILES['archivo3']['name']);
		
	move_uploaded_file($origen3,$destino3); 


include 'conexion.php';	
	
}


if ($_FILES['archivo4']['size'] < $max_size) {

	$origen4 = $_FILES['archivo4']['tmp_name'];
	$destino4 = "img/" .  time() . trim($_FILES['archivo4']['name']);
		
	move_uploaded_file($origen4,$destino4); 


include 'conexion.php';
	
}


if ($_FILES['archivo5']['size'] < $max_size) {

	$origen5 = $_FILES['archivo5']['tmp_name'];
	$destino5 = "img/" .  time() . trim($_FILES['archivo5']['name']);
		
	move_uploaded_file($origen5,$destino5); 


include 'conexion.php';	
	
}

if ($_FILES['archivo6']['size'] < $max_size) {

	$origen6 = $_FILES['archivo6']['tmp_name'];
	$destino6 = "img/" .  time() . trim($_FILES['archivo6']['name']);
		
	move_uploaded_file($origen6,$destino6); 


include 'conexion.php';	
	
}


if ($_FILES['archivo7']['size'] < $max_size) {

	$origen7 = $_FILES['archivo7']['tmp_name'];
	$destino7 = "img/" .  time() . trim($_FILES['archivo7']['name']);
		
	move_uploaded_file($origen7,$destino7); 


include 'conexion.php';	
	
}

if ($_FILES['archivo8']['size'] < $max_size) {

	$origen8 = $_FILES['archivo8']['tmp_name'];
	$destino8 = "img/" .  time() . trim($_FILES['archivo8']['name']);
		
	move_uploaded_file($origen8,$destino8); 


include 'conexion.php';
	
}


if ($_FILES['archivo9']['size'] < $max_size) {

	$origen9 = $_FILES['archivo9']['tmp_name'];
	$destino9 = "img/" .  time() . trim($_FILES['archivo9']['name']);
		
	move_uploaded_file($origen9,$destino9); 


include 'conexion.php';
	
}


if ($_FILES['archivo10']['size'] < $max_size) {

	$origen10 = $_FILES['archivo10']['tmp_name'];
	$destino10 = "img/" .  time() . trim($_FILES['archivo10']['name']);
		
	move_uploaded_file($origen10,$destino10); 


include 'conexion.php';


	
}




$sSQL = "INSERT INTO pisos_venta VALUES (NULL,'$sTitulo','$sDescripcion','$destino','$sPrecio','$destino1',	'$destino2','$destino3','$destino4','$destino5',
			'$destino6','$destino7','$destino8','$destino9','$destino10',
			'$sMetro','$sLocalidad','$sAccMinus','$sGarajeIncl','$sAltura','$sAscensor','$sBalcon','$sEdadFinc','$sCertEnerg','$sMapa','$iHabitaciones','$sTerraza','$sDescripcion_ficha_mini','$sExtras_1','$sExtras_2','$sExtras_3','$sExtras_4','$sExtras_5','$sExtras_6','$sExtras_7','$sExtras_8');";
mysql_query($sSQL,$conexion)or die(mysql_error());



header("Location: pisos_venta_insertar.php");
exit;




