
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

		<link rel="stylesheet" href="light/lightbox.css" type="text/css" media="screen" />
</head>

<body style="font-family:arial;">


	
	<div id="titulo_utlimos_pisos_h3" style="font-weight: bold;">
		<h3 style="text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
						-webkit-background-clip: text;
						-moz-background-clip: text;
						-ms-background-clip: text;font-size:40px;margin: 20px auto 0px auto;">
						ULTIMAS VIVIENDAS PUBLICADAS</h3>
						<h4>EN VALENCIA CAPITAL</h4>
	</div>

<div class="Container_index">
	<div class="ultimospublicados">   
		<table class="ultimospublicados_tabla">
		<th>
			
<?php  

include 'conexion.php';

$sSQL = "SELECT titulo,descripcion,foto_ficha,img_1,img_2,img_3,img_4,
		img_5,img_6,img_7,img_8,img_9,img_10,id_ref,precio,metros,localidad,habitaciones FROM pisos_venta ORDER BY id_ref DESC LIMIT 0,4;";


		$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

		while($Array = mysql_fetch_assoc($resultados)){
			$iId_ref = $Array['id_ref'];
				
	echo '	<td class="divResultmini">
				
				 <div id="imgpisomini" style="background-image: url(' . $Array['foto_ficha'] . ')"></div>	
					
				<div class="bajoFotomini">
						<div class="div_titulo_galeriamini">
				   		   <div id="tituloPisomini">' . $Array['titulo'] . '</div>
				   		   <div id="metrosmini">' . $Array['metros'] . 'M2</div>
				   		 </div>
				   		  			   		  
				   		  <div  id="imgFloatmini">
							<a href="' . $Array['img_1'] . '" width="640" height="480" title="galeria de fotos" rel="lightbox[roadtrip]">
							<img src="img/ojo_index.png" width="40" height="23" title="galeria de fotos" style="margin:0px auto 0px auto;">
							</a>
														
							<a href="' . $Array['img_2'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_3'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_4'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_5'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_6'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_7'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_8'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_9'] . '" width="640" height="480" rel="lightbox[roadtrip]"></a>
							<a href="' . $Array['img_10'] . '" width="640" height="480" el="lightbox[roadtrip]"></a>
						</div>
						<p class="texgaleriamini">Galeria</p>

						<div class="precioyreferencia">
						  <div id="Rerefenciamini">Ref:' . $Array['id_ref'] . '
						  </div>
						  <div id="PrecioPisomini">	' . $Array['precio'] . '<span>€</span>
						 </div>
				  		</div>

				   		   <div class="divampliarinfo">'
											
				?>		<form action="fichas_ultimos_pisos_publi.php" method="post" accept-charset="utf-8">
							<span class="invisible">					
						<input type="text" name="idref" value="<?php  echo $iId_ref; ?>"></span>	
						<div class="ampliarinfo"><input type="submit"  value="ver ficha" style="background:none;"></div>	
						</form>

					<?php 
				 echo  	'</div>
				
							</div> 	
							</div>		
					 	</td>';
		}
 	
?>	</th>
		</table>

	
	</div>
</div>


<!--//BLOQUE COOKIES-->
<div id="barraaceptacion" style="display: block;">
    <div class="inner">
        Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real 
        Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.
        <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a> | 
        <a href="politica_cookie.php" class="info">Más información</a>
    </div>
</div>
 
<script>
function getCookie(c_name){
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1){
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1){
        c_value = null;
    }else{
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1){
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start,c_end));
    }
    return c_value;
}
 
function setCookie(c_name,value,exdays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}
 
if(getCookie('tiendaaviso')!="1"){
    document.getElementById("barraaceptacion").style.display="block";
}
function PonerCookie(){
    setCookie('tiendaaviso','1',365);
    document.getElementById("barraaceptacion").style.display="none";
}
</script>
<!--//FIN BLOQUE COOKIES-->





<?php require_once 'footer.php' ?>

</body>
</html>



