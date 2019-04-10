<?php
	if (empty($_POST['code']) && empty($_POST['description']) && empty($_POST['quantity']) && empty($_POST['price']) && empty($_POST['aportacion']) ){
		$errors[] = "Rellena todos los campos correctamente.";
	} else if (!empty($_POST['code']) && !empty($_POST['description']) && !empty($_POST['quantity']) && !empty($_POST['price']) && !empty($_POST['aportacion']) ){
		require_once ("../../config/conexion.php");
		
		$clave=$_POST['code'];
		$consulta = "select * from usuarios where ncontrol='$clave'";
		$result = mysqli_query($con,$consulta);
		$NFilas = $result->num_rows;
		if($NFilas>0)
		{
			?>
			<div class="alert alert-warning" alert>
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Advertencia!</strong> El registro del material con el <b>CÓDIGO <?php echo $clave ?> </b> ya existe.
			</div>
<?php
		} else {

				$prod_code = mysqli_real_escape_string($con,(strip_tags($_POST["code"],ENT_QUOTES)));
				$prod_description = mysqli_real_escape_string($con,(strip_tags($_POST["description"],ENT_QUOTES)));
				$quantity = mysqli_real_escape_string($con,(strip_tags($_POST["quantity"],ENT_QUOTES)));
				$price = mysqli_real_escape_string($con,(strip_tags($_POST["price"],ENT_QUOTES)));
				$prod_aportacion = mysqli_real_escape_string($con,(strip_tags($_POST["aportacion"],ENT_QUOTES)));
				
				// REGISTER data into database
				$sql = "INSERT INTO usuarios(ncontrol, nombre, apellido, correo, telefono) 
								VALUES ('$prod_code','$prod_description','$quantity','$price','$prod_aportacion')";
				$query = mysqli_query($con,$sql);
			
				// if product has been added successfully
				if ($query) {
					$messages[] = "El usuarios con el <b>Numero de Control ".$prod_code." </b>ha sido guardado con éxito.";
				} else {
					$errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
				}
			}	
	} else {
		$errors[] = "Verifica tu información. Todos los campos son requeridos.";
	}

	if (isset($errors)){
?>
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Error!</strong> 
				<?php
					foreach ($errors as $error) {
						echo $error;
					}
				?>
		</div>

<?php
	}

	if (isset($messages)){
?>
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Bien hecho!</strong>
				<?php
					foreach ($messages as $message) {
						echo $message;
					}
				?>
		</div>
<?php
}
?>