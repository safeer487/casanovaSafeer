<?php 		require_once 'header.php';


?>
<!DOCTYPE HTML>
<html>

<head><link rel="shortcut icon" type="image/ico" href="../favicon.ico"/>
   <title>Inmobiliaria Casanova</title>

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


	
<div class="generalGaleriaIntranet_acc" >
	<h1 style="text-align:center"> ACCESO INTRANET</h1>
		
	
				<div class="formularioseccion"> 
					<div class="divinicioseccion">
					       <form action="accesointranet_procesar.php" method="get">
							
							<label for="usuarioMail" id="labelusuario" >Mail</label>
							<input type="text" name="usuarioMail" id="usuarioMail" required><br><br>

							<label for="password" id="labelpassword" >Password</label>						
							<input type="password" name="password" id="password" required> <br><br>

							<input type="submit"   class="btn btn-default btn-lg" onclick="validaformJava()" value="Entrar" id="botonenviarseccion">
							</form>
					</div>
				</div>
	<script>

						function validaformJava() {

						var mail = document.getElementById('usuarioMail');
						var password1 = document.getElementById('password');

						var bError = false;
						var simbolos = false;					
						var lengPass = 12;
						var lengMail = 60;

							if(mail.value.length == 0){
								bError = true;
								alert('Debes rellenar el campo Mail');
							}	

							
							if(mail.value.length > lengMail){
								bError = true;
								alert('El campo Mail no debe superar los 60 caracteres.');
							}
						

							if(mail.value.search('@') == -1 || nombre.value.search('.') == -1 ){
								bError = true;
								alert('El campo Mail no es correcto');
							}


							if(password1.value.length > lengPass) {
								bError = true;
								alert('El Password no debe superar los 12 caracteres.');
							}
						

						}

		</script>


											
							<?php 

					if(isset($_GET['errores'])){
						echo '<div class="alertaMens_Acc"><ul id="alertalist_Acc"> ';
						
						$aErrores = unserialize($_GET['errores']);     

						foreach($aErrores as $key => $value) {     
								
							switch ($value) {
								case 1:
									echo '<li>Debes rellenar este campo<li>';
									break;
								case 2:
									echo '<li>El Mail no debe superar los 60 caracteres</li>';
									break;
								case 3:
									echo '<li>EL Mail no es correcto</li> ';
									break;
								case 4:	
									echo '<li>Debes rellenar el Password</li>';
									break;
								case 5:
									echo '<li>El password debe tener Maximo 12 caracteres</li> ';
									break;
								case 6:
									echo '<li>El password debe tener minimo 4 caracteres</li>';
									break;
							}	

						}
						echo '</ul></div> ';  
					}

				 if(isset($_GET['error1'])){
					 echo '<div class="alertaMens_Acc"><ul id="alertalist_Acc"> ';

						 switch ($_GET['error1']) {
									case 1:
										echo '<li>No existe este usuario<li>';
										break;
									case 2:
										echo '<li>Password incorrecto<li>';
										break;

						 }
					echo '</ul></div> '; 	 
					}	


					 ?>	

</div>


<?php require_once 'footer.php' ?>

</body>
</html>



