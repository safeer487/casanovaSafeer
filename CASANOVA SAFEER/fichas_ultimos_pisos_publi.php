<?php 		require_once 'header.php';

?>
<!DOCTYPE HTML>
<html>

<head>	
	<title>I. CASANOVA</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="StyleSheet" href="css/estilos.css" type="text/css">
		<link rel="StyleSheet" href="fonts/fuentes.css" type="text/css">

		<link rel="StyleSheet" href="css/lightbox.css" type="text/css">
		<link rel="StyleSheet" href="css/bootstrap.css" type="text/css">
		<link rel="StyleSheet" href="css/bootstrap-responsive.min.css" type="text/css">
		<link rel="StyleSheet" href="css/bootstrap-responsive.css" type="text/css">  

		<script type="text/javascript" src="light/prototype.js"> </script> 
		<script type="text/javascript" src="light/scriptaculous.js?load=effects"> </script>
		<script type = "text / javascript" src = "light/lightbox.js"> </script>

		<script src="light/jquery-1.7.2.min.js"></script>
		<script src="light/lightbox.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" href="light/lightbox.css" type="text/css" media="screen" />
</head>

<body>
<div class="generalFicha">

		<div id="flecha">
		<a href="index.php">
			<img src="img/volver.png"  style="margin:0px auto 0px auto;" width="60" height="60" alt="flecha volver" title="volver" >
		</a>
	</div>

		
<div class="divresultadosFicha">
				
				<?php 

				if (isset($_POST['idref'])) {

				$iId_ref = $_POST['idref'];
				

				include 'conexion.php';

				$sSQL = "SELECT titulo,descripcion,foto_ficha,img_1,img_2,img_3,img_4,img_5,img_6,img_7,img_8,img_9,img_10,id_ref,precio,metros,localidad,acceso_minusvalido,garaje_incluido,altura,ascensor,balcon,edad_finca,certificado_energetico,mapa,habitaciones,terraza,extra_1,extra_2,extra_3,extra_4,extra_5,extra_6,extra_7,extra_8 FROM pisos_venta WHERE id_ref = '$iId_ref'";
				
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
				 <img src="img/ojo_5.png" alt="galeria"  title="galeria de fotos" width="89" height="52"><br></a>
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
	 <td colspan="2" rowspan="2" style="padding-left:10px;padding-right:10px;" height="130px;>
		<div id="DescripcionPisoFicha" >' . $Array['descripcion'] . '</div>
	 </td>
  </tr>
  <tr>
    <td height="66" colspan="2" style="color:#66ccff;padding:5px 10px 0px 10px;opacity:0.8;" widht="400">
			<h3 style="text-align:center;line-height: 30px;">MAPA UBICACIÓN</h3>
    </td>
  </tr>
  <tr>
    <td width="224" style="background-color: #66ccff;color:white;padding:5px 5px 0px 5px;text-align:center;line-height:20px;"> Localidad				      <br>
	</td>

    <td width="253" style="background-color: #66ccff;color:white;padding:5px 5px 0px 5px;text-align:center;line-height:20px;"> Edad de la Finca	  <br>
    </td>
    <td colspan="2" rowspan="8" ><div style="background-color: #E9E7E7;" id="mapaficha">' . $Array['mapa'] . ' </div> <br>
    </td>
  </tr>
  <tr>
    <td style="padding:5px 5px 0px 5px;" height="30">
	    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">
	    ' . $Array['localidad'] . '
	    </div>
	    </td>
    
    <td width="253" height="30" style="padding:5px 5px 0px 5px;text-align:center;line-height:20px;">
	    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">'
	     . $Array['edad_finca'] . '
	     </div>
     </td>
    
  </tr>
  
 
  <tr>
    <td style="background-color: #66ccff;padding:5px 5px 0px 5px;color:white;text-align:center;line-height:20px;">
   		 Habitaciones
	</td>

    <td style="background-color: #66ccff;padding:5px 5px 0px 5px;color:white;text-align:center;line-height:20px;">Metros
    </td>
  </tr>
  <tr>
    <td style="padding:5px 5px 0px 5px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:20px;" >' 
    	. $Array['habitaciones'] . ' 
    	</div>
    </td>
    <td style="padding:5px 5px 0px 5px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:20px;">' 
    	. $Array['metros'] . ' m2
    	</div>
    </td>
  </tr>


  <tr>
    <td style="background-color: #66ccff;padding:5px 5px 0px 5px;color:white;text-align:center;line-height:20px;">Terraza	
    </td>

    <td style="background-color: #66ccff;padding:5px 5px 0px 5px;color:white;text-align:center;line-height:20px;">Acceso Minusvalidos
    </td>
  </tr>
  <tr>
    <td style="padding:5px 5px 0px 5px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:20px;">
    	' . $Array['terraza'] . ' m2
    	</div>
    </td>
    <td style="padding:5px 5px 0px 5px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:20px;">' . $Array['acceso_minusvalido'] . '</div></td>
  </tr>
  <tr>
    <td style="background-color: #66ccff;padding:5px 5px 0px 5px;color:white;text-align:center;line-height:20px;"> Garaje 
</td>
    <td style="background-color: #66ccff;padding:5px 5px 0px 5px;color:white;text-align:center;line-height:20px;">Altura
</td>
  </tr>
  <tr>
    <td style="padding:5px 5px 0px 5px;">
	    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:20px;">'
	     . $Array['garaje_incluido'] . '
	     </div>
    </td>
	  <td style="padding:5px 5px 0px 5px;">
	    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:20px;">'
	     . $Array['altura'] . '
	    </div>
    </td>
  </tr>
  <tr>
    <td style="background-color: #66ccff;padding:5px 5px 0px 5px;color:white;text-align:center;line-height:20px;"> Ascensor
	</td>
    <td style="background-color: #66ccff;padding:5px 5px 0px 5px;color:white;text-align:center;line-height:20px;">Balcon
</td>
    <td width="291" style="background-color: #66ccff;padding:5px 10px 0px 10px;text-align:center;line-height:20px;"><span style="padding:5px 10px 0px 10px;color:white;">Certificado Energetico </span>
    </td>
    <td width="196" style="background-color: #66ccff;padding:5px 5px 0px 5px;color:white;text-align:center;line-height:20px;" >Ref
    </td>
  </tr>
  <tr>
    <td height="32" style="padding:5px 5px 0px 5px;">
    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:30px;">' . $Array['ascensor'] . '
    </div>
    </td>

    <td style="padding:5px 5px 0px 5px;">
	    <div style="padding:5px 10px 0px 0px;text-align:center;line-height:20px;">'
	     . $Array['balcon'] . '
	     </div>
    </td>

    <td style="padding:5px 5px 0px 5px;">
    	<div style="padding:5px 10px 0px 0px;text-align:center;line-height:20px;">' . $Array['certificado_energetico'] . '</div>
    </td>

    <td style="padding:5px 5px 0px 5px;">
    <div id="RerefenciaFicha"  style="text-align:center;line-height:20px;text-align:center;line-height:30px;">' . $Array['id_ref'] . '</div> 
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
    <div style="text-align:center;line-height:20px;text-align:center;line-height:20px;">' . $Array['extra_4'] . '</div> 
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

	';

			}
}				


 ?>
		
	</div>  <!-- div tabla resultado -->
</div>
</div>

<?php require_once 'footer.php' ?>

</body>
</html>



