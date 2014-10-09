<?php 


if (!$_GET) {
	header('Location:galeria.php');
	exit;

}


$sHTML = '';
$iPreciosMenor10000 = 40000;
$iPreciosMax = $_GET['preciomaximo'];

include 'conexion.php';

$sSQL = "SELECT titulo_piso,descripcion_piso,foto_ficha,img_1,img_2,img_3,img_4,img_5,img_6,img_7,img_8,img_9,img_10,id_ref,precio FROM pisos_venta WHERE precio = $iPreciosMax";
$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

while($Array = mysql_fetch_assoc($resultados)){
	$sHTML .= '
				
			<td class="divResult">
				
				 <div id="imgpiso" style="background-image: url(' . $Array['foto_ficha'] . '")></div>	
					
					<div class="bajoFoto">
				   		   <div id="tituloPiso">' . $Array['titulo_piso'] . '</div>
				   		   <div id="DescripcionPiso">' . $Array['descripcion_piso'] . '</div>
				   		   <p id="PrecioPiso">' . $Array['precio'] . '<span>€</span></p>
					

					<div class="galeriapeque">
					   	<div  id="imgFloat">
							<a href="' . $Array['img_1'] . '" width="640" height="480" rel="lightbox[roadtrip]">
							<img src="img/ojo.png" width="58" height="57">
							</a>
							
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
					</div>
				   		  <div id="Rerefencia">
							Num. Ref:' . $Array['id_ref'] . '
						</div>
				</div>		
		 	</td>
			';
}



 ?>


 ?>
