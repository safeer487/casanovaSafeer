<?php 		require_once 'header.php';

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>I. CASANOVA</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<link rel="StyleSheet" href="fonts/fuentes.css" type="text/css">
		<link rel="StyleSheet" href="css/estilos.css" type="text/css">

		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		<script src="js/modernizr.custom.63321.js"></script>


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

		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.dropdown.js"></script>

		<script type="text/javascript">
		jQuery.noConflict();
			
			jQuery( function() {
				
				jQuery( '#cd-dropdown' ).dropdown( {
					gutter : 5
				} );

			});

		</script>


		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.dropdown.js"></script>
		<script type="text/javascript">
			jQuery.noConflict();
			jQuery( function() {
				
				jQuery( '#cd-dropdown' ).dropdown( {
					gutter : 5
				} );

			});

		</script>

		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.dropdown.js"></script>
		<script type="text/javascript">
			jQuery.noConflict();
			jQuery( function() {
				
				jQuery( '#cd-dropdown' ).dropdown( {
					gutter : 5
				} );

			});

		</script>


</head>

<body>

<div class="box_Galeria">

	<div class="marcador_alq" style="img/marcador.png"></div>

		<h3 style="margin-left:60px;font-family: CaviarDreams,arial;">...Nuestros alquileres..</h3><div class="encuentre_alq"></div> 


	<div id="titulos_de_filtros">
		<div class="titulo_tipo">Tipo de Inmueble</div>
		<div class="titulo_localidad"> Localidad</div>
		<div class="titulo_precio">Precio</div>
	</div>

	<div class="div_envuelde_select_venta" >
		<form action="alquileres.php" method="get">

			<div style="width:310px;margin:0px auto 0px -5px;float:left;">	
				<section class="main clearfix">
					
					<div class="fleft">
						<select id="cd-dropdown" name="filtroTipoInmueble" class="cd-select">
							<option value="pisos_alquiler" selected>VIVIENDAS (PISOS,CASAS,ETC)</option>
							<option value="inmuebles_comerciales_alquiler">LOCALES COMERCIALES</option>
							<option value="garajes_alquiler">GARAJES</option>
						</select>
					</div>
				</section>
			</div>

<br>

<div style="width:310px;margin:-20px auto 0px 0px;float:left;">
			<section class="main clearfix">
				<div class="fleft">
					<select id="cd-dropdown" name="localidad" class="cd-select">
						<option value="VALENCIA" selected>VALENCIA </option>
					<option value="VALENCIA_ALREDEDORES">VALENCIA Y ALREDEDORES</option>
					</select>
				</div>
			</section>
		</div>

<br>

		<div style="width:310px;margin:-40px auto 0px 0px;float:left;">
			<section class="main clearfix">
				<div class="fleft">
					<select id="cd-dropdown" name="preciomaximo" class="cd-select">
						<option value="0" selected>PRECIO MAXIMO</option>	
						<option value="400">400 €</option>
			            <option value="500">500 €</option>
			            <option value="600">700 €</option>
			            <option value="1000">1.000 €</option>
			            <option value="3000">3.000 €</option>
						<option value="9999999">MOSTRAR TODOS</option>
					</select>
				</div>
			</section>
		</div>

		<div class="boton_buscar_index">
			<button type="submit"  class="button_buscar" value="Buscar">Buscar</button>
		</div>		
			</form>

	</div> <!-- div xxx -->	
</div>  <!-- div boxgaleria -->


<div class="100" style="width:100%;
					height:auto;
					background: #F2F2F2 url('../img/bg3.png') repeat center top;
					margin-bottom:20px;">
<div class="Container_alquiler">


	
<?php 	

	
if (isset($_GET['preciomaximo'])) 

echo 	'<div class="cartelresultados">Estos son los resultados de la busqueda..  	</div>';


?>


	
<div class="divEnvuelvepisos" style="background-image:url('img/logo_fondo_resultados_2.png')">
<table class="tabla_resultados_Galeria">
	<th>
		<td>

<?php 	

if (isset($_GET['preciomaximo'])) {

		$iPreciosMax = $_GET['preciomaximo'];
		$sTipoInmueble = $_GET['filtroTipoInmueble'];
		$sLocalidad = $_GET['localidad'];


		include 'conexion.php';

		$sSQL = "SELECT titulo,descripcion_ficha_mini,foto_ficha,img_1,img_2,img_3,img_4,
		img_5,img_6,img_7,img_8,img_9,img_10,id_ref,precio,metros,localidad FROM $sTipoInmueble WHERE precio <= $iPreciosMax AND localidad LIKE '%$sLocalidad%';";
		$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());
/*
if ( !empty($_POST['nombres']) )
 $nombres = $_POST['nombres']; 
else $error = true;	
*/
		

		while($Array = mysql_fetch_assoc($resultados)){
			  $iId_ref = $Array['id_ref'];


				echo '	<td class="div_Result_Galeria">
				
				 <div id="img_piso_Galeria" style="background-image: url(' . $Array['foto_ficha'] . ')"></div>	
					
					<div class="bajo_Foto_Galeria">
						<div class="div_titulo_galeria">
				   		   <div id="titulo_Piso_galeria">' . $Array['titulo'] . '</div>
				   		   <div id="metros_galeria">' . $Array['metros'] . 'M2</div>
						</div>
							
				   		   <div id="Descripcion_galeria_Piso">' . $Array['descripcion_ficha_mini'] . '</div>
				   		
					<div class="galeria_peque">
					   
					</div>
						  <div id="Precio_Piso_galeria">
						  <p id="Rerefencia_Galeria">Ref:' . $Array['id_ref'] . '</p>
						  <p>' . $Array['precio'] . '<span>€</span></p>
						</div>  <div class="divampliarinfoGrande">'
											
				?>		<form action="ficha_alquiler.php" method="post">
							<span class="invisible">					
						<input type="text" name="idref" style="text-decoration:none;" value="<?php  echo $iId_ref; ?>">
						<input type="text" name="filtroTipoInmueble" style="text-decoration:none;" value="<?php  echo $sTipoInmueble; ?>">
					</span>

						<div class="ampliarinfoGrande"><input type="submit"  value="VER FICHA" style="background:none;text-decoration:none;"></div>	
						</form>

					<?php 
				 echo  	'</div>
					
				   		  
				</div>		
		 	</td>';
		 }
		
}
 	
 		?>
 		
 		</td>
		</th>
		</table>
	</div>  <!-- div tabla resultado -->

	</div>
</div>



<?php require_once 'footer.php' ?>

</body>
</html>



