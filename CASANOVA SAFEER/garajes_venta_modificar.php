<?php 		require_once 'header.php';
require_once 'seguridad.php';
?>

<!DOCTYPE HTML>
<html>

<head>
		<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/ico" href="../favicon.ico"/>
   <title>I. CASANOVA</title>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="StyleSheet" href="css/estilos.css" type="text/css">
 <link rel="StyleSheet" href="css/lightbox.css" type="text/css">
  <link rel="StyleSheet" href="css/bootstrap.css" type="text/css">
  <link rel="StyleSheet" href="css/bootstrap-responsive.min.css" type="text/css">
  <link rel="StyleSheet" href="css/bootstrap-responsive.css" type="text/css">  

<script type="text/javascript" src="light/prototype.js"> </script> 
<script type="text/javascript" src="light/scriptaculous.js?load=effects"> </script>
 <script type = "text / javascript" src = "light/lightbox.js"> </script>

	<script src="light/jquery-1.7.2.min.js"></script>
		<script src="light/lightbox.js"></script>

<link rel="stylesheet" href="light/lightbox.css" type="text/css" media="screen" />


</head>

<body>

<div class="general_Modificar_venta_pisos">
	<div class="boxIntranetModificar">

		<table class="tablebotonyintranetModificar" >
		  <tr>
		    <td>
		    	<div class="buttons_volver">
		    	<div class="buttons">
					<a class="twitter" href="intranet.php">
						<img src="img/boton_volver_intra_modifi2.png" alt="boton volver intranet" id="img_botonModificar" title="volver a la intranet" width="80" height="86">
					</a>
				 </div>
				</div>
			</td>
		    <td>
		    	<div id="titulo_intranetModificar">INTRANET</div>
		    </td>
		  </tr>
		</table>

		<div class="envuelve_titulo_gestionModificar">
			<h2 id="tiulo_gestionDeinmueblesModificar">GESTI&Oacute;N DE LOS INMUEBLES</h2>
			<h2>VIVIENDAS/PISOS EN VENTA <br> MODIFICAR UN ANUNCIO</h2>
		</div>

		<div class="divbuscarModificar">
			<br>
			<h4>BUSCAR POR REFERENCIA</h4>
			<form action="garajes_venta_modificar_formulario_ingresa_datos.php" method="get">
				<input type="text" placeholder="NUMERO de referencia" name="buscar" id="input_buscar"><br>
				<input type="submit" value="buscar" class="btn btn-default" id="botonbuscar_mod">
			</form>	
		</div>


	
	</div>
</div>

<?php require_once 'footer.php' ?>

</body>
</html>


