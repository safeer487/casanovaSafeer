<?php 


if(!isset($_GET['usuarioMail']) || !isset($_GET['password'])) {
	header("Location: accesointranet.php.php");
	exit;
}

	
$sUsuarioMail = trim($_GET['usuarioMail']);
$sPassword = trim($_GET['password']);

$iId = 0;

include 'conexion.php';

$sSQL = "SELECT id FROM usuario WHERE mail = '$sUsuarioMail' and password ='$sPassword';";
$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

while($row = mysql_fetch_assoc($resultados)) {
	$iId = $row['id'];						
}


if($iId != 0 ){
	session_start();
		$_SESSION['usuarioMail'] = $iId;
		header('Location: intranet.php');
		exit;
} 


$aErrores = array();

if(strlen($sUsuarioMail) == 0) $aErrores[] = 1;
if(strlen($sUsuarioMail) > 60) $aErrores[] = 2;
if(!strstr($sUsuarioMail, '@') || !strstr($sUsuarioMail, '.')) $aErrores[] = 3;

if(strlen($sPassword) == 0) $aErrores[] = 4;
if(strlen($sPassword) > 12) $aErrores[] = 5;
if(strlen($sPassword) < 4) $aErrores[] = 6;


if(count($aErrores) != 0){
	$aSerializeErrores = serialize($aErrores);
	header("Location: accesointranet.php?errores=" . $aSerializeErrores);
	exit;
}


$iError = 0;

include 'conexion.php';

$sSQL = "SELECT mail FROM usuario ";
$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

while ($Array = mysql_fetch_assoc($resultados)) {
	if ($Array['mail'] != $sUsuarioMail) $iError = 1; 
	 } 

$sSQL = "SELECT password FROM usuario WHERE mail = '$sUsuarioMail' and password !='$sPassword';";
$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

while ($aRow = mysql_fetch_assoc($resultados)) {
	if ($aRow['password'] != $sPassword) $iError = 2;


	 header("Location: accesointranet.php?error1=" . $iError);
	 exit;
	 } 


 ?>