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

<div class="generalGaleria_intranet_insertar">
	<div class="boxIntranetInserta">
		
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

		<div class="envuelve_titulo_gestion">
			<h2 id="tiulo_gestionDeinmuebles">GESTION DE LOS INMUEBLES</h2>
			<h2 id="titulo_insertar">LOCALES COMERCIALES EN VENTA  
												<br>
											INSERTAR UN ANUNCIO</h2>
		</div>

	</div>	

<table id="tablaInsertar">
  <tr>
    <td>
    	
    	<form action="locales_comerciales_venta_insertar_formulario.php" method="post" enctype="multipart/form-data"> 
				
		<div style="padding15px;border:3px solid white;text-align:center;">
    	<h4>SELECCIONA UNA IMAGEN DE TU ORDENARDOR.(FOTO PRINCIPAL) </h4> 		
    	<form action="pisos_venta_insertar_formulario.php" method="post" enctype="multipart/form-data"> 
			
			<input type="file" id="archivo" name="archivo"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> <br>
			(No mas de 200 kb en lo posible	en formato para web )<br>
			(editado con las medidas 640px(pixeles) de ancho por 480 px(pixeles) de alto )<br>
			(seleccionar de la carpeta /foto_ficha)
		</div>

			<br>
			<br>

		
			Titulo ( max. 20 caracteres)<br>
			<input type="text"  name="titulo" maxlength="20" required><br>

			Descripcion del Inmueble (max. 250 caracteres)<br>
			MUY IMPORTANTE !!! CUANDO LLEGUES AL BORDE LE TIENES QUE <br> DAR ENTER Y BAJAR LA LINEA <br>
			PARA SEGUIR ESCRIBIENDO.--> ANTES QUE BAJE SOLO EL CURSOR <--<br> (EJ. XXXXXXXXXXX (PULSAR ENTER) XXXXXXXXXXXXXX  ETC 
			<textarea rows="3" maxlength="250" name="descripcion" required style="resize:none;width:400px;"></textarea><br>
<br>
			!!! ATENCION !! <strong> Descripcion del Inmueble PARA LA FICHA PEQUEÑA </strong>!!!! <br> (max. 165 caracteres)<br>
			MUY IMPORTANTE !!! CUANDO LLEGUES AL BORDE LE TIENES QUE <br> DAR ENTER Y BAJAR LA LINEA <br>
			PARA SEGUIR ESCRIBIENDO. --> ANTES QUE BAJE SOLO EL CURSOR <-- <br>(EJ. XXXXXXXXXXX (PULSAR ENTER) XXXXXXXXXXXXXX  ETC <br>
			<textarea rows="3" maxlength="165" name="descripcion_ficha_mini" style="resize:none;" required></textarea><br>


			Metros <br>(solo caracteres numericos)<br>
			<input type="text" class="form-control" id="exampleInputPassword1" maxlength="6" name="metros" placeholder="ej. 100" required>M2 <br>	
			Precio: (solo caracteres numericos, separado con un punto,<br> no coma y sin el signo del €)<br>
			<input type="text" class="form-control" id="exampleInputPassword1" maxlength="11" name="precio" placeholder="ej. 100.000" required><br>
			Localidad <br>
			 <select name="localidad" >
				<option value="VALENCIA" selected>VALENCIA Y ALREDEDORES</option>
	            <option value="CASTELLON">CASTELLON</option>
	    		<option value="ALICANTE">ALICANTE</option>
	          </select>
	          <br>
			Habitaciones: (3/4/... ej. 4 habitaciones) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="habitaciones" maxlength="20" required><br>
			Terraza: (Si/No - m2 ej: 25 m2) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="terraza" maxlength="20" required ><br>
    		Acceso Minusvalido: (Si/No) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="AccMinus" maxlength="4" required><br>
			Garaje Incluido: (Si/No)<br>
			<input type="text" class="form-control" id="exampleInputPassword1" name="GarajeIncl" maxlength="4" required><br>
			
	 </td>

    <td>	
			Altura: (ej: 8 planta / bajo / atico, no mas de 20 caracteres)<br>
			<input type="text" class="form-control" id="exampleInputPassword1" name="altura" maxlength="20" required><br>
			Ascensor: (Si/No/Con posibilidad, max 15 caracteres)<br>
			<input type="text" class="form-control" id="exampleInputPassword1" name="ascensor" maxlength="15"required><br>
			Balcon: (Si/No)<br>
			<input type="text" class="form-control" id="exampleInputPassword1" name="balcon" maxlength="4" required><br>
			Edad de la Finca: (ej: 20 años, maximo 10 caracteres) <br>
			<input type="text" class="form-control" id="exampleInputPassword1" name="EdadFinca" maxlength="10" required><br>
			Certificado Energetico: (ej. En tramite)<br>
			<input type="text" class="form-control" id="exampleInputPassword1" name="CertEnerg" maxlength="15" required><br>
			
			Extras_1: (max. 25 caracteres) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="extra_1" maxlength="20" required ><br>
    		
    		Extras_2: (max. 25 caracteres) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="extra_2" maxlength="20" required ><br>
    		
			Extras_3: (max. 25 caracteres) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="extra_3" maxlength="20" required ><br>
    		
			Extras_4: (max. 25 caracteres) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="extra_4" maxlength="20" required ><br>

			Extras_5: (max. 25 caracteres) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="extra_5" maxlength="20" required ><br>

			Extras_6: (max. 25 caracteres) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="extra_6" maxlength="20" required ><br>


			Extras_7: (max. 25 caracteres) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="extra_7" maxlength="20" required ><br>


			Extras_8: (max. 25 caracteres) <br>			
			<input type="text" class="form-control" id="exampleInputPassword1" name="extra_8" maxlength="20" required ><br>


			Mapa ubicacion: (pegar aqui lo que se copia de google maps)<br>
			<textarea rows="3" maxlength="5000" name="mapa" placeholder="pegar aqui la direccion de google map, donde dice insertar mapa, y sale ej: <frame>..." required></textarea>
			
			<br>
			Localidad:<br>
			<section >
			<div >
				<select name="localidad" >
					<option value="VALENCIA" selected>VALENCIA </option>
					<option value="VALENCIA_ALREDEDORES">VALENCIA Y ALREDEDORES</option>
				</select>
			</div>
		</section>
    </td>
  </tr>
  <tr>
    <td colspan="2"  style="text-align:center;">
		<h3 id="tituloGaleria" style="text-align:center;">GALERIA</h3>
			<input type="file" id="archivo" name="archivo"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> <br>
			(No mas de 200 kb en lo posible	en formato para web )<br>
			(editado con las medidas 290px(pixeles) de ancho <br>por 300 px(pixeles) de alto)
			(seleccionar de la carpeta /foto_ficha)
			<br>
			
			(RECUERDA SOLO SE PUEDE INSERTAR UNA VEZ LA IMAGENES, SI QUIERES MODIFICARLA DEBES IR AL APARTADO DE MODIFICACIONES)<br>
			( Seleccionar  de la carpeta /img_galeria, ESTA la 1º debe ser la misma foto que la de la ficha )
			<br>
			<br>
			(MUY IMPORTANTE ! SI NO TIENES 10 FOTOS PARA INCORPORAR, DEBE SELECCIONAR LA IMAGEN NoImg.png de la carpeta IMG/img_galeria/ y rellenar la galeria el resto de la galeria (NO DEBE QUEDAR SIN IMAGENES LA GALERIA))	<br>
		<br>
		<span style="border: 1px solid silver;">
			<input type="file" id="archivo" name="archivo1"/><br>
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> 
		</span>

			<input type="file" id="archivo" name="archivo2"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> 

			<input type="file" id="archivo" name="archivo3"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> 

			<input type="file" id="archivo" name="archivo4"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> 

			<input type="file" id="archivo" name="archivo5"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> 

			<input type="file" id="archivo" name="archivo6"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> 

			<input type="file" id="archivo" name="archivo7"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> 

			<input type="file" id="archivo" name="archivo8"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> 

			<input type="file" id="archivo" name="archivo9"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> 

			<input type="file" id="archivo" name="archivo10"/> 
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/> <br><br>

		<tr style="background:none;">
    		<td colspan="2" style="text-align:center;">	
				<input class="btn btn-large btn" type="submit" value="GUARDAR">
				</form>			
    		</td>
 		</tr>
  </tr> 
</table>
<div id="tituloPisoInsertar"> ULTIMO INMUEBLE PUBLICADO</div>

<table id="tablaresultadosInserta">
		<tr>
		<td>
		<?php 

			$sHtml1 = '';
			$sHtml2 = '';
			$sHtml3 = '';
			$sHtml4 = '';
			$sHtml5 = '';
			$sHtml6 = '';
			$sHtml7 = '';
			$sHtml8 = '';
			$sHtml9 = '';
			$sHtml10 = '';


		include 'conexion.php';

		$sSQL = "SELECT titulo,descripcion,foto_ficha,img_1,img_2,img_3,img_4,img_5,img_6,img_7,img_8,img_9,img_10,id_ref,precio,metros,localidad,acceso_minusvalido,garaje_incluido,altura,ascensor,balcon,edad_finca,certificado_energetico,mapa,habitaciones,terraza,extra_1,extra_2,extra_3,extra_4,extra_5,extra_6,extra_7,extra_8  FROM inmuebles_comerciales ORDER BY id_ref DESC LIMIT 0,1";
		$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

		while($Array = mysql_fetch_assoc($resultados)){
			
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

			 				
	echo '		
				<div class="tdResultFicha">

					 <div id="imgpisoFicha" style="background-image: url(' . $Array['foto_ficha'] . ')">
						 </div>

<div class="envuelvegaleriaFicha">
						
		<table width="100%" border="1">
		 <tr>
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml1 . ')"></div></td>
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml2 . ')"></div></td>
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml3 . ')"></div></td>
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml4 . ')"></div></td>
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml5 . ')"></div></td>
		    
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml6 . ')"></div></td>
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml7 . ')"></div></td>
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml8 . ')"></div></td>
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml9 . ')"></div></td>
		    <td width="40"><div id="imgpisoGaleriaFicha" style="background-image: url(' . $sHtml10 . ')"></div></td>
		  </tr>


		</table>
</div>


<div class="envuelvegaleriaFicha2">

 <a href="' . $Array['img_1'] . '" width="640" height="480" rel="lightbox[roadtrip]">

				<div style="float:left;margin:0px auto 0px auto;">
				 <img src="img/ojo.png" alt="galeria"  title="galeria de fotos" width="89" height="55"><br></a>
				  Galeria
				
				</div>

							<a href="' . $Array['img_2'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_3'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_4'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_5'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_6'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_7'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_8'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_9'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_10'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>

</div>

<table id="tabla_textoyMapa">
  <tr>    
	 <td colspan="2" rowspan="2">
		<div id="DescripcionPisoFicha" >' . $Array['descripcion'] . '</div>
	 </td>
  </tr>
  <tr>
    <td height="66" colspan="2" style="color:#66ccff;padding:5px 10px 0px 10px;opacity:0.8;" widht="400">
			<h3 style="text-align:center;line-height: 30px;">MAPA UBICACIÓN</h3>
    </td>
  </tr>
  <tr>
    <td width="224" style="background-color: #66ccff;color:white;padding:5px 10px 0px 10px;text-align:center;line-height:20px;"> Localidad				      <br>
	</td>

    <td width="253" style="background-color: #66ccff;color:white;padding:5px 10px 0px 10px;text-align:center;line-height:20px;"> Edad de la Finca	  <br>
    </td>
    <td colspan="2" rowspan="8" ><div style="background-color: #E9E7E7;" id="mapaficha">' . $Array['mapa'] . ' </div> <br>
    </td>
  </tr>
  <tr>
    <td style="padding:5px 10px 0px 10px;" height="30"><div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">' . $Array['localidad'] . '</div></td>
    
    <td width="253" height="20" style="padding:5px 10px 0px 10px;text-align:center;line-height:20px;">
    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:20px;">' . $Array['edad_finca'] . '</div
    ></td>
    
  </tr>
  
 
  <tr>
    <td style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;line-height:20px;">	Habitaciones	    <br>
	</td>
    <td style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;line-height:20px;">Metros       <br>
    </td>
  </tr>
  <tr>
    <td style="padding:5px 10px 0px 10px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;" >' . $Array['habitaciones'] . ' </div>
    </td>
    <td style="padding:5px 10px 0px 10px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">' . $Array['metros'] . ' m2</div>
    </td>
  </tr>


  <tr>
    <td style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;line-height:20px;">Terraza		   		       <br>
    </td>
    <td style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;line-height:20px;">Acceso Minusvalidos</td>
  </tr>
  <tr>
    <td style="padding:5px 10px 0px 10px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">' . $Array['terraza'] . ' m2</div>
    </td>
    <td style="padding:5px 10px 0px 10px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">' . $Array['acceso_minusvalido'] . '</div></td>
  </tr>
  <tr>
    <td style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;line-height:20px;"> Garaje Incluido
</td>
    <td style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;line-height:20px;">Altura
</td>
  </tr>
  <tr>
    <td style="padding:5px 10px 0px 10px;">
    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;"> ' . $Array['garaje_incluido'] . '</div>
    </td>
	    <td style="padding:5px 10px 0px 10px;">
	    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">' . $Array['altura'] . '
	    </div>
    </td>
  </tr>
  <tr>
    <td style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;line-height:20px;"> Ascensor
</td>
    <td style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;line-height:20px;">Balcon
</td>
    <td width="291" style="background-color: #66ccff;padding:5px 10px 0px 10px;text-align:center;line-height:20px;"><span style="padding:5px 10px 0px 10px;color:white;">Certificado Energetico </span>
    </td>
    <td width="196" style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;line-height:20px;" >Ref</td>
  </tr>
  <tr>
    <td height="32" style="padding:5px 10px 0px 10px;"><div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">' . $Array['ascensor'] . '</div>
    </td>

    <td style="padding:5px 10px 0px 10px;">
    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">' . $Array['balcon'] . '</div>
    </td>

    <td style="padding:5px 10px 0px 10px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">' . $Array['certificado_energetico'] . '</div>
    </td>

    <td style="padding:5px 10px 0px 10px;">
    <div id="RerefenciaFicha"  style="text-align:center;line-height:30px;text-align:center;line-height:30px;">' . $Array['id_ref'] . '</div> 
    </td>
</tr>


<tr>
    <td colspan="4">
	   	<div id="Extras_Ficha" style="background-color: #66ccff;padding:5px 10px 0px 10px;color:white;text-align:center;"> EXTRAS</div>
	</td>
  </tr>



  <tr>
    <td height="auto" style="padding:5px 5px 0px 10px;"><div style="padding:5px 5px 0px 0px;text-align:center;line-height:20px;">' . $Array['extra_1'] . '</div>
    </td>

    <td height="auto" style="padding:5px 5px 0px 10px;">
    <div style="padding:5px 5px 0px 0px;text-align:center;line-height:20px;">' . $Array['extra_2'] . '</div>
    </td>

    <td height="auto" style="padding:5px 5px 0px 10px;">
    	<div style="padding:5px 5px 0px 0px;text-align:center;line-height:20px;">' . $Array['extra_3'] . '</div>
    </td>

    <td height="auto" style="padding:5px 5px 0px 10px;">
    <div style="text-align:center;line-height:20px;text-align:center;line-height:30px;">' . $Array['extra_4'] . '</div> 
    </td>
</tr>



  <tr>
    <td height="auto" style="padding:5px 5px 0px 10px;"><div style="padding:5px 5px 0px 0px;text-align:center;line-height:30px;">' . $Array['extra_5'] . '</div>
    </td>

    <td height="auto" style="padding:5px 5px 0px 10px;">
    <div style="padding:5px 5px 0px 0px;text-align:center;line-height:20px;">' . $Array['extra_6'] . '</div>
    </td>

    <td height="auto" style="padding:5px 5px 0px 10px;">
    	<div style="padding:5px 5px 0px 0px;text-align:center;line-height:20px;">' . $Array['extra_7'] . '</div>
    </td>

     <td height="auto" style="padding:5px 5px 0px 10px;">
    	<div style="padding:5px 5px 0px 0px;text-align:center;line-height:20px;">' . $Array['extra_8'] . '</div>
    </td>
</tr>






<tr>
    <td colspan="4">
	   	<div id="PrecioPisoFicha"> 
		Precio:' . $Array['precio'] . '<span>€</span></div>
	</td>
  </tr>


</table>

 	</td>
	</tr>
	
</table>';

			
}			

 ?>

</div>




<?php require_once 'footer.php' ?>

</body>
</html>



