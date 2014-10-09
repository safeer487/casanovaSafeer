<?php 		require_once 'header.php';
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="shortcut icon" type="image/ico" href="../favicon.ico"/>
		<link rel="StyleSheet" href="css/estilos.css" type="text/css">
		<title>I. CASANOVA</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		 <meta charset="utf-8">
		 <link rel="StyleSheet" href="fonts/fuentes.css" type="text/css">
	</head>


<body>
     	<div class="div_texto_contacto_direcc">
     		<div class="div_texto_contacto_direcc2" >
			<h3 style="font-family: HelveticaNeue-UltraLigExt,arial;letter-spacing:5px;">INVERSIONES CASANOVA </h3>
			<span style="margin-left:20px;font-size:16px;">C/ Humanista Mariner 10 2p BJ IZq (para google Maps la direccion es Carrer del Music Barbieri, N 4)</span><br><br>
<img src="img/telefono-icono.png" width="40" height="42"alt="">
			 <span id="telefono">962.064.191 &nbsp;&nbsp;&nbsp; 673.235.189 </span>
						<span style="margin-left:100px;font-size:25px;">i.casanova@terra.com</span>
			</div>
		</div>

<div class="generalContacto">
			<div class="barraRedesSociales">
				<a href="https://es-es.facebook.com/">
					<div id="botonFace" alt="boton facebook" title="ir a Facebook" style="background-image: url('img/face.png');">
					</div>
				</a>

   			     <a href="https://twitter.com/twitter_es">
   			     	<div id="botonFace" alt="boton twitter_es" title="ir a twitter" style="background-image: url('img/tw.png');">
   			     	</div>
   			     </a>

				<a href="https://es.linkedin.com">
					<div id="botonFace" alt="boton linkedin" title="ir a linkedin" style="background-image: url('img/linke.png');">
					</div>
				</a>
			</div>

	    	<div class="formulario">
		        <form action="formulariocontacto.php" method="post">
					<label for="nombre">Ingrese su Nombre:</label>
					<input type="text" name="nombre" alt="ingrese su nombre" id="nombre" required>
					<br>
					<label for="mail">Ingrese su Mail:</label>
					<input type="text" name="mail" alt="mail" id="mail" required>
					<br>
					<label>Ingrese su Comentario:</label>
					<textarea type="text" id="comentarios" maxlength="150" name="comentarios" required></textarea>
					<br>
					<input type="submit" name="enviar" value="Enviar" id="botonenviar">
					<br>
					<input type="reset" name="resetear" value="Restaurar" id="botonresetear">
					
				</form>
			</div>
			<br>
			

			<?php 
					if(isset($_GET['errores'])){
						echo '<div class="alertaMens"><ul id="alertalist"> ';
						
						$aErrores = unserialize($_GET['errores']);     

						foreach($aErrores as $key => $value) {     
								
							switch ($value) {
								case 1:
									echo '<li>El campo NOMBRE no debe estar vacio. <li>';
									break;
								case 2:
									echo '<li>El campo NOMBRE no debe llevar caracteres numericos.</li>';
									break;
								case 3:
									echo '<li>El campo NOMBRE debe llevar mas de 2 caracteres.</li> ';
									break;
								case 4: 
									echo "<li>El campo NOMBRE no debe superar los 50 caracteres.</li>";
									break;
								case 5:
									echo '<li>En el campo NOMBRE no debe llevar Mail.</li>';
									break;
								case 6:
									echo '<li>El campo MAIL no es correcto.</li>';
									break;
								case 7:
									echo '<li>El campo MAIL no debe estar vacio.</li>';
									break;
								case 8:
									echo '<li>El campo COMENTARIO no debe estar vacio.</li>';
									break;
								case 9:
									echo '<li>El campo COMENTARIO no debe superar los 200 caracteres.</li>';
									break;
							}	
						}
						echo '</ul></div> ';  
					}
					 ?>	

<?php 
				if(isset($_GET['enviado'])) {
					echo "<div id='MensOk'>Gracias por contactar! En breve nos pondremos con Usted. </div>";
				}
					
 ?>	

		<div class="mapacontacto">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d770.0911522581666!2d-0.393716!3d39.461091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f3e2020338f%3A0xac2a2b0211f1ea44!2sCarrer+del+M%C3%BAsic+Barbieri%2C+4%2C+46018+Val%C3%A8ncia%2C+Valencia!5e0!3m2!1ses!2ses!4v1407331854859" width="940" height="400" frameborder="0" style="border:0">
			</iframe>
		</div>

			
</div>


<?php require_once 'footer.php' ?>
	
</body>
</html>
