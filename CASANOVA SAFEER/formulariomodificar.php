
<?php 

//comprueba que se ha dado de alta la seccion

require_once 'seguridad.php';


if(!isset($_GET['id'])) {
	header('Location: modificar.php');
	exit;
}


// variables

$iId = $_GET['id'];
$sNombre = '';
$iTipo = 0;
$sColor = '';
$iTalla = 0;
$iGenero = 0;


$conexion = mysql_connect('localhost', 'root','');
mysql_select_db('tiendaweb1',$conexion);


//SELECIONA TODA LA FILA DE LA BASE DE DATOS DE articulos don el id viene de la variable $iId ..de arriba, que viene a la ves del GET
$sSQL = "SELECT * FROM articulos WHERE id = $iId;";	
$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

// hacemos un bucle para que cada vez q se agrege informacion o se modifique se ejecute // mysql_fetch_assoc busca asociaciones en la BDT
while($Array = mysql_fetch_assoc($resultados)) {		

	$sNombre = $Array['nombre'];
	$iTipo = $Array['id_tipo_articulo'];
	$sColor = '#' . $Array['color'];           // EN la base de datos no esta la # y en PHP necesitamos que este la # para que lea el color .. lo concatenamos  #336633 asi lo leera
 	$iTalla = $Array['talla'];
	$iGenero = $Array['id_genero'];
}

 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NUEVA</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php

						if(isset($_GET['error'])) {
						echo '<div class="alerta"> <ul>';

						
						$aErrores = unserialize($_GET['error']);     //convertimos el serialize en array 

						foreach($aErrores as $key => $value) {     //recorremos el array
								
							
						switch ($value) {
							case 1:
								echo '<li>El campo <strong>Nombre</strong> no puede estar vacio</li>';
								break;
							
							case 2:
								echo '<li>El campo <strong>Nombre</strong> no puede superar los 200 caracteres</li>';
								break;
						
							case 3:
								echo '<li>El campo <strong>Color</strong> no puede estar vacio</li>';
								break;

							case 4:
								echo '<li>El campo <strong>Color</strong> no tiene el formato correcto, Ej: #332211';	
								break;

							case 5:
								echo '<li>El campo <strong>Talla</strong> no puede estar vacio</li>';
								break;

							case 6:
								echo '<li>El campo <strong>Talla</strong> no utliza textos solo numericos </li>';
								break;	
								}
							} 
								echo '</ul><div>';
							}
					?>

	<h1> formulario de modificacion de Articulos </h1>

	<div class="general">

		<div id="formularionuevo">

			<!-- form action="actualizarformulariomodificacion.php?Id=<?php //echo $iId; ?>" method="post"> -->

			<form action="actualizarformulariomodificacion.php" method="post">    

			<input type="hidden" name="id" value="<?php echo $iId;?>">

			<label>ingresar nombre del producto</label>
			<br>
				<input type="text" name="nombre" size="40" value="<?php echo $sNombre?>">
				<br>
				<br>
			
			<label>tipo de producto</label><br>
			<select name="tipo">
				<?php

					$conexion = mysql_connect('localhost', 'root', '');
					mysql_select_db('tiendaweb1',$conexion);

					$sSQL = "SELECT id, nombre FROM tipo_articulos";
					$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

					/*obtener datos */

					while ($Array = mysql_fetch_assoc($resultados)) {
						$iId = $Array['id'];
						$sNombre = $Array['nombre'];

					if($iId == $iTipo) {
						echo "<option value='$iId' selected>$sNombre</option>";
					} else {
						echo "<option value='$iId'>$sNombre</option>";
					}
				}

				?>



			</select>
		
			 <br>

			<label>color del producto</label>
			<br>
			<input type="color" name="color" value="<?php echo $sColor; ?>">
				
				<br>

			<label>talla del producto</label>
			<br>
			<input type="number" name="talla" value="<?php echo $iTalla; ?>">
			<br>
			<label>tipo genero</label>
			<br>
			<select name="genero">
				<?php

				$sSQL = "SELECT id,nombre FROM genero";
				$resultados = mysql_query($sSQL,$conexion)or die(mysql_error());

					/*obtener datos */

					while ($Array = mysql_fetch_assoc($resultados)) {
						$iId = $Array['id'];
						$sNombre = $Array['nombre'];
						if($iId == $iTipo) {
						echo "<option value='$iId' selected>$sNombre</option>";
					} else {
						echo "<option value='$iId'>$sNombre</option>";
					}
				}

				?>
			</select>






			<br>

			<input type="submit" value="guardar" id="guardarmodificar">

			</form>
		</div>
	</div>


</body>
</html>