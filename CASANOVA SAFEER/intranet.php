<?php 		require_once 'header.php';
			require_once 'seguridad.php';

?>
<!DOCTYPE HTML>
<html>

<head><link rel="shortcut icon" type="image/ico" href="../favicon.ico"/>
   <title>Inmobiliaria Casanova</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="StyleSheet" href="fonts/fuentes.css" type="text/css">
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

<div class="generalGaleriaIntranet">
	

<div class="generalFicha">

		<div id="flecha">
		<a href="index.php">
			<img src="img/volver.png"  style="margin:0px auto 0px auto;" width="60" height="60" alt="flecha volver" title="volver" >
		</a>
	</div>

<div class="textobienvenido">
	
			<h1 style="text-align:center;">INTRANET</h1>
			<h2 style="text-align:center;">GESTION DE LOS INMUEBLES </h2>
<br>
<br>
		<h1 style="text-align:center;font-family:HelveticaLTStd-Light,arial;">VENTA</h1>
	<table id="tablaGestionIntranet">
			<th class="titulos">Pisos de venta</th>
			<th class="titulos">Locales Comerciales</th>
			<th class="titulos">Garajes</th>
		<tr>
			<td id="td"><a href="pisos_venta_insertar.php">INSERTAR UNA FICHA </a></td>
			<td id="td"><a href="locales_comerciales_venta_insertar.php">INSERTAR UNA FICHA </a></td>
			<td id="td"><a href="garajes_venta_insertar.php">INSERTAR UNA FICHA </a></td>
		</tr>


		<tr class="titulosTabla">
			<td id="td"><a href="pisos_venta_modificar.php">MODIFICAR UNA FICHA </a></td>
			<td id="td"><a href="locales_comerciales_venta_modificar.php">MODIFICAR UNA FICHA</a></td>
			<td id="td"><a href="garajes_venta_modificar.php">MODIFICAR UNA FICHA</a></td>
		</tr>

		
		<tr class="titulosTabla">
			<td id="td"><a href="pisos_venta_eliminar.php">ELIMINAR UNA FICHA</a></td>
			<td id="td"><a href="locales_comerciales_venta_eliminar.php">ELIMINAR UNA FICHA</a></td>
			<td id="td"><a href="garajes_venta_eliminar.php">ELIMINAR UNA FICHA</a></td>
		</tr>

	</table>
		<br>
			<br>
			<h1 style="text-align:center;font-family:HelveticaLTStd-Light,arial;">ALQUILER</h1>
					
			<table id="tablaGestionIntranet">
				<th class="titulos">PISOS EN ALQUILER</th>
				<th class="titulos">LOCALES COMERCIALES EN ALQUILER</th>
				<tr>
					<td id="td"><a href="pisos_alq_insertar.php">INSERTAR UNA FICHA </a></td>
					<td id="td"><a href="locales_comerciales_alq_insertar.php">INSERTAR UNA FICHA </a></td>
				</tr>
			
				<tr class="titulosTabla">
					<td id="td"><a href="pisos_alq_eliminar.php">ELIMINAR UNA FICHA</a></td>
					<td id="td"><a href="locales_comerciales_alq_eliminar.php">ELIMINAR UNA FICHA</a></td>
					
				</tr>

			</table>

</div>


<?php require_once 'footer.php' ?>

</body>
</html>



