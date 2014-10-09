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


<?php 


if(isset($_GET['buscar'])) {
	
$iBuscar = trim($_GET['buscar']);




include 'conexion.php';

$sSQL = "SELECT titulo,descripcion,foto_ficha,img_1,img_2,img_3,img_4,img_5,img_6,img_7,img_8,img_9,img_10,id_ref,precio,metros,localidad,acceso_minusvalido,garaje_incluido,altura,ascensor,balcon,edad_finca,certificado_energetico,mapa,habitaciones,terraza,descripcion_ficha_mini,extra_1,extra_2,extra_3,extra_4,extra_5,extra_6,extra_7,extra_8 FROM garajes WHERE id_ref = '$iBuscar';";

$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

while($Array = mysql_fetch_assoc($resultados)){

		$sTitulo = $Array['titulo'];


			$sTitulo = $Array['titulo'];
			$sDescripcion = $Array['descripcion'];
			$sDescripcion_ficha_mini = $Array['descripcion_ficha_mini'];

			$sFotoficha = $Array['foto_ficha'];
			
			$sHtml1 = $Array['img_1'];
			$sHtml2 = $Array['img_2'];
			$sHtml3 = $Array['img_3'];
			$sHtml4 = $Array['img_4'];
			$sHtml5 = $Array['img_5'];
			$sHtml6 = $Array['img_6'];
			$sHtml7 = $Array['img_7'];
			$sHtml8 = $Array['img_8'];
			$sHtml9 = $Array['img_9'];
			$sHtml10 = $Array['img_10'];

			$sPrecio = $Array['precio'];
			$sMetro = $Array['metros'];
			
			$sAcceso_Minusvalido = $Array['acceso_minusvalido'];
			$sGaraje_Incluido = $Array['garaje_incluido'];
			$sAltura = $Array['altura'];
			$sAscensor = $Array['ascensor'];
			$sBalcon = $Array['balcon'];

			$sEdad_Finca = $Array['edad_finca'];
			$sCert_Ener = $Array['certificado_energetico'];
			$sHabitaciones = $Array['habitaciones'];
			$sTerraza = $Array['terraza'];	
			$sMapa = $Array['mapa'];

			$sId_ref = $Array['id_ref'];


			$sExtras_1 = $Array['extra_1'];
			$sExtras_2 = $Array['extra_2'];
			$sExtras_3 = $Array['extra_3'];
			$sExtras_4 = $Array['extra_4'];
			$sExtras_5 = $Array['extra_5'];
			$sExtras_6 = $Array['extra_6'];
			$sExtras_7 = $Array['extra_7'];
			$sExtras_8 = $Array['extra_8'];	
	
		}
	
}
?>
<p class="titulo_importante">
	<strong><em><u>Importante:</u></em></strong> Los textos se editan independientemente de las imágenes. Las imagenes tanto la de la ficha principal<br>como todas las <u>imágenes de la galería deben editarse individualmente</u>, se selecciona una imagen y se guarda y así sucesivamente.

</p>
	<div class="edicionModificar">
		
<table id="tablaModificar">
  <tr>
    <td>
    	<form action="garajes_venta_modificar_formulario.php" method="post" >

		
		<p id="titulo_inmu_ref">Inmueble con Referencia Nº<?php  echo $sId_ref ?>
		
		<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		 </p>    
		
<div id="invisible_garaje">	</div>

		T&iacute;tulo ( max. 20 car&aacute;cteres)<br>  
		<input type="text" name="titulo" maxlength="20" required value="<?php 	echo  $sTitulo ?>"><br>

		Descripcion del Inmueble (max. 250 caracteres)<br>
		<textarea rows="3" maxlength="250" name="descripcion"><?php echo $sDescripcion; ?></textarea>	
		<br>

		!!! ATENCION ESTA ES LA DESCRIPCION DE LA FICHA PEQUEÑA!!
		Descripcion del Inmueble (max. 165 caracteres)<br>
		<textarea rows="3" maxlength="165" name="descripcion_ficha_mini"><?php echo $sDescripcion_ficha_mini; ?></textarea><br>	


		Metros <br>(solo car&aacute;cteres numericos)<br>  
		<input type="text" class="form-control" id="exampleInputPassword1" maxlength="6" name="metros" placeholder="ej. 100" required value="<?php echo $sMetro  ?>">M2 <br>


		Precio: (solo car&aacute;cteres numericos, separado con un punto,<br> no coma y sin el signo del €)
		<br> 
		<input type="text" class="form-control" id="exampleInputPassword1" maxlength="10" name="precio" placeholder="ej. 100.000" required value="<?php echo $sPrecio ?>"><br>

		Habitaciones: (3/4/... ej. 4 habitaciones) <br>			
		<input type="text" class="form-control" id="exampleInputPassword1" name="habitaciones" maxlength="20"
		value="<?php echo $sHabitaciones ?>" required><br>

		Terraza: (Si/No - m2 ej: 25 m2) <br>			
		<input type="text" class="form-control" id="exampleInputPassword1" name="terraza" maxlength="20" 
		value="<?php echo $sTerraza ?>" required ><br>


		Acceso Minusvalido: (Si/No) <br>			
		<input type="text" class="form-control" id="exampleInputPassword1" name="AccMinus" maxlength="4" 
		value="<?php echo $sAcceso_Minusvalido ?>" required><br>

		Garaje Incluido: (Si/No)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="GarajeIncl" 
		maxlength="4" value="<?php echo $sGaraje_Incluido ?>" required><br>

		Altura: (ej: 8 planta / bajo / &aacute;tico, no mas de 15 car&aacute;cteres)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="altura" maxlength="15" 
		value="<?php echo $sAltura ?>" required><br>
		
		Ascensor: (Si/No/Con posibilidad, max 15 car&aacute;cteres)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="ascensor" maxlength="15" value="<?php echo $sAscensor ?>" required><br>


 </td>

<td>	
		<br>
		<br>

		Extra_1: ( 20 car&aacute;cteres)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="extra_1" maxlength="20" 
		value="<?php echo $sExtras_1 ?>" required><br>
		
		Extra_2: ( 20 car&aacute;cteres)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="extra_2" maxlength="20" 
		value="<?php echo $sExtras_2 ?>" required><br>

		Extra_3: ( 20 car&aacute;cteres)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="extra_3" maxlength="20"
		value="<?php echo $sExtras_3 ?>" required><br>
		
		Extra_4: ( 20 car&aacute;cteres)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="extra_4" maxlength="20"
		 value="<?php echo $sExtras_4 ?>" required><br>
		
		Extra_5: ( 20 car&aacute;cteres)<br>  
		<input type="text" class="form-control" id="exampleInputPassword1" name="extra_5" maxlength="20"
		value="<?php  echo $sExtras_5 ?>" required><br> 

		Extra_6: ( 20 car&aacute;cteres)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="extra_6" maxlength="20"
		maxlength="4" value="<?php echo $sExtras_6 ?>" required><br>

		Extra_7: ( 20 car&aacute;cteres)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="extra_7" maxlength="20" 
		value="<?php echo $sExtras_7 ?>" required><br>
		
		Extra_8: ( 20 car&aacute;cteres)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="extra_8" maxlength="20"
		 value="<?php echo $sExtras_8 ?>" required><br>

	
	
		
		Balcon: (Si/No)<br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="balcon" maxlength="4"
		value="<?php echo $sBalcon ?>" required><br>
		
		Edad de la Finca: (ej: 20 a&ñacute;os, m&aacute;ximo 15 car&aacute;cteres) <br>
		<input type="text" class="form-control" id="exampleInputPassword1" name="EdadFinca" maxlength="15" value="<?php echo $sEdad_Finca ?>" required><br>
		
		Certificado Energetico: (ej. En tr&aacute;mite)<br>  
		<input type="text" class="form-control" id="exampleInputPassword1" name="CertEnerg" maxlength="15"
		value="<?php  echo $sCert_Ener ?>" required><br> 
		
		Mapa ubicaci&oacute;n: (pegar aqu&iacute; lo que se copia de google maps)<br>  
		<textarea rows="3" maxlength="2000" name="mapa"><?php echo $sMapa; ?></textarea>

    </td>
  </tr>
	<tr style="background:none;">
    <td colspan="2" style="text-align:center;">	

				<input type="submit" class="btn btn-default" value="GUARDAR"><br><br>

				</form>			
    </td>
  </tr>
<br>
 </table>

 <!--   -------------------------------GALERIA PARA EDITAR IMG INDIVIDUAL -------------------  -->

<p class="titulo_Modif_img_indiv">GALERIA PARA EDITAR LAS IMAGENES INDIVIDUALMENTE</p>
<table id="tabla_Galeria_modificar_1">
  <tr>
    <td>
	<div style="margin-left:55px;">
		<img id="imgpisoModifica" src="<?php echo $sFotoficha;  ?>" alt="">
	</div> 
 	<form action="garajes_venta_modificar_formulario_img.php" method="post" enctype="multipart/form-data">  
	  
<div id="invisible_1"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		
	   	
		<input type="file" id="archivo" class="btn btn-default" name="archivo"/> 
		<input type="hidden" name="size" value="2097152"/> <br>
		<button type="submit" class="button" value="GUARDAR">GUARDAR</button>
		<br>

	</form>
	</td>
    <td>
    	<p style="text-align:center;">- Foto principal de la ficha -</p>
	(No mas de 200 kb en lo posible	en formato para web )<br>
	(editado con las medidas 640px(pixeles) de ancho por 480px(pixeles) de alto )<br>
	(seleccionar de la carpeta /foto_ficha)  
	<br>
	<br>
	 
</td>
  </tr>
 </table>

<table id="tabla_Galeria_modificar_2">
  <tr>
     <td style="border-right:20px solid #666666">
    	<form action="garajes_venta_modificar_formulario_img_1.php" method="post" enctype="multipart/form-data">


	<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		
			<div>
				<img  id="imgpisoGaleriaModificar" src="<?php echo $sHtml1; ?>">	
			</div>
			<input type="file" id="archivo" class="btn btn-default" name="archivo1">	
			<input type="hidden" name="size" value="2097152"/> <br>

			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
			(ESTA debe ser la misma foto que la de la ficha) 

		</form>		
	</td>
    <td style="border-left:20px solid #666666">
		<form action="garajes_venta_modificar_formulario_img_2.php" method="post" enctype="multipart/form-data">
			
		<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
	
			<div id="imgpisoGaleriaModificar" style="background-image: url('<?php echo $sHtml2; ?>');margin:0px auto 10px auto;">
			</div>
			<input type="file" id="archivo" class="btn btn-default" name="archivo2"><br>	
			<input type="hidden" name="size" value="2097152"/> 
			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
			(Esta es la segunda foto que la de la ficha ) 
		
		</form>

    </td>
 <tr>  
    <td style="border-right:20px solid #666666">
		<form action="garajes_venta_modificar_formulario_img_3.php" method="post" enctype="multipart/form-data">
		
		<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
	
			<div id="imgpisoGaleriaModificar" style="background-image: url('<?php echo $sHtml3; ?>');margin:0px auto 10px auto;">
			</div>
			<input type="file" id="archivo" class="btn btn-default" name="archivo3"><br>	
			<input type="hidden" name="size" value="2097152"/> 
			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
		</form>
    </td>
  
	    <td style="border-left:20px solid #666666" >
			<form action="garajes_venta_modificar_formulario_img_4.php" method="post" enctype="multipart/form-data">
		<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		
			<div id="imgpisoGaleriaModificar" style="background-image: url('<?php echo $sHtml4; ?>');margin:0px auto 10px auto;">
			</div>
			<input type="file" id="archivo"  class="btn btn-default" name="archivo4"><br>	
			<input type="hidden" name="size" value="2097152"/> 
			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
		</form>
	    </td>
</tr> 	    
	    <td style="border-right:20px solid #666666">
		<form action="garajes_venta_modificar_formulario_img_5.php" method="post" enctype="multipart/form-data">
		<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		
			<div id="imgpisoGaleriaModificar" style="background-image: url('<?php echo $sHtml5; ?>');margin:0px auto 10px auto;">
			</div>
			<input type="file" id="archivo"  class="btn btn-default" name="archivo5"><br>	
			<input type="hidden" name="size" value="2097152"/> 
			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
		</form>
	    </td>
	    <td style="border-left:20px solid #666666">
	    	<form action="garajes_venta_modificar_formulario_img_6.php" method="post" enctype="multipart/form-data">
		<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		
			<div id="imgpisoGaleriaModificar" style="background-image: url('<?php echo $sHtml6; ?>');margin:0px auto 10px auto;">
			</div>
			<input type="file" id="archivo" class="btn btn-default" name="archivo6"><br>	
			<input type="hidden" name="size" value="2097152"/> 
			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
		</form>
	    </td>
<tr>	    
	    <td style="border-right:20px solid #666666">
	    	<form action="garajes_venta_modificar_formulario_img_7.php" method="post" enctype="multipart/form-data">
		<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		
			<div id="imgpisoGaleriaModificar" style="background-image: url('<?php echo $sHtml7; ?>');margin:0px auto 10px auto;">
			</div>
			<input type="file" id="archivo" class="btn btn-default" name="archivo7"><br>	
			<input type="hidden" name="size" value="2097152"/> 
			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
		</form>
	    </td>
	    <td style="border-left:20px solid #666666">
	    	<form action="garajes_venta_modificar_formulario_img_8.php" method="post" enctype="multipart/form-data">
		<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		
			<div id="imgpisoGaleriaModificar" style="background-image: url('<?php echo $sHtml8; ?>');margin:0px auto 10px auto;">
			</div>
			<input type="file" id="archivo" class="btn btn-default" name="archivo8"><br>	
			<input type="hidden" name="size" value="2097152"/> 
			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
		</form>
	</td>
</tr>
<tr>	
	    <td style="border-right:20px solid #666666">
			<form action="garajes_venta_modificar_formulario_img_9.php" method="post" enctype="multipart/form-data">
		<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		
			<div id="imgpisoGaleriaModificar" style="background-image: url('<?php echo $sHtml9; ?>');margin:0px auto 10px auto;">
			</div>
			<input type="file" id="archivo" class="btn btn-default" name="archivo9"><br>	
			<input type="hidden" name="size" value="2097152"/> 
			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
		</form>
	    </td>
  
   </td>
	    <td style="border-left:20px solid #666666">
			<form action="garajes_venta_modificar_formulario_img_10.php" method="post" enctype="multipart/form-data">
		<div id="invisible_3"></div>
			<input type="text" name="idref" id="input_referencia" value="<?php  echo $sId_ref ?>">
		
			<div id="imgpisoGaleriaModificar" style="background-image: url('<?php echo $sHtml10; ?>');margin:0px auto 10px auto;">
			</div>
			<input type="file" id="archivo" class="btn btn-default" name="archivo10"><br>	
			<input type="hidden" name="size" value="2097152"/> 
			<button type="submit" class="button_mini" value="GUARDAR">GUARDAR</button><br><br>
		</form>
	    </td>
   </tr>
</table>

</div>
	
</div>
</div>

<?php require_once 'footer.php' ?>

</body>
</html>


