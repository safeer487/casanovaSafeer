<?php 		require_once 'header.php';
require_once 'seguridad.php';
?>

<!DOCTYPE HTML>
<html>

<head>
		<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/ico" href="../favicon.ico"/>
   <title>Inmobiliaria Casanova</title>
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
		<div class="envuelve_titulo_gestion_elimina">
			<h2 id="tiulo_gestionDeinmueblesModificar">GESTI&Oacute;N DE LOS INMUEBLES</h2>
			<h2>LOCALES COMERCIALES EN VENTA <br> ELIMINAR UN ANUNCIO</h2>
		</div>
	<div class="divbuscarModificar">
		<br>
		<h4>BUSCAR POR REFERENCIA</h4>
		<form action="locales_comerciales_venta_eliminar.php" method="get">
			<input type="text" placeholder="NUMERO de referencia" name="buscar" id="input_buscar"><br>
			<input type="submit" value="buscar" class="btn btn-default" id="botonbuscar_mod">
		</form>	
	</div>
<?php 
		if (isset($_GET['eliminado'])) {
			switch ($_GET['eliminado']) {
				case 1:
					echo '<div class="eliminado">FICHA ELIMINADA CORRECTAMENTE!</div>';
					break;
				}
		}

 ?>


<table id="tablaresultadosInserta">
		<tr>
		<td>
		<?php 

		if(isset($_GET['buscar'])) {
			
		$iBuscar = trim($_GET['buscar']);

		include 'conexion.php';

		$sSQL = "SELECT titulo,descripcion,foto_ficha,img_1,img_2,img_3,img_4,img_5,img_6,img_7,img_8,img_9,img_10,id_ref,precio,metros,localidad,acceso_minusvalido,garaje_incluido,altura,ascensor,balcon,edad_finca,certificado_energetico,mapa,habitaciones,terraza FROM inmuebles_comerciales WHERE id_ref = '$iBuscar';";
		$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

		while($Array = mysql_fetch_assoc($resultados)){
		
								
	echo '	<td class="divResultminiElimina">
				
				 <div id="imgpisomini" style="background-image: url(' . $Array['foto_ficha'] . ')">
				 </div>	
					
					<div class="bajoFotominiEliminar">
						<div class="divtitulomini">
				   		   <div id="tituloPisominiElimina">' . $Array['titulo'] . '</div>
				   		   <div id="metrosmini" style="color:#333333">' . $Array['metros'] . 'M2</div>
						
						</div>'




				?>		<form action="locales_comerciales_venta_eliminar_formulario.php" method="post" >
					<span class="invisible">	<input type="text" name="id_ref" value="<?php echo $Array['id_ref']; ?>">
					</span>	
							<div style="margin:0px auto 0px auto;float:left">
							<input type="submit" class="btn btn-default btn-lg" value="eliminar">
						</div>
						</form>

					<?php 
									  
				'</div>		
		 	</td>';
		}
			
	}
 		?>
 	</td>
	</tr>
	
</table>

</div>
	
</div>


<?php require_once 'footer.php' ?>

</body>
</html>


