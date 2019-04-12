<?php
	if (empty($_POST['edit_description']) && empty($_POST['edit_quantity']) && empty($_POST['edit_price']) && empty($_POST['edit_total']) ){
		$errors[] = "ID está vacío. Exiten campos vacios.";
	} elseif (!empty($_POST['edit_description']) && !empty($_POST['edit_quantity']) && !empty($_POST['edit_price']) && !empty($_POST['edit_total']) ){
	require_once ("../../config/conexion.php");
	
	$prod_description = mysqli_real_escape_string($con,(strip_tags($_POST["edit_description"],ENT_QUOTES)));
	$quantity = mysqli_real_escape_string($con,(strip_tags($_POST["edit_quantity"],ENT_QUOTES)));
	$price = mysqli_real_escape_string($con,(strip_tags($_POST["edit_price"],ENT_QUOTES)));
	$total = mysqli_real_escape_string($con,(strip_tags($_POST["edit_total"],ENT_QUOTES)));
	$prod_code=$_POST['edit_idcode'];
	//echo $prod_code;

	// UPDATE data into database
    $sql = "UPDATE usuarios SET nombre='".$prod_description."', 
	apellido='".$quantity."', 
	correo='".$price."',
	telefono='".$total."'
	WHERE ncontrol='".$prod_code."' ";
	
	$query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El usuario con el <b>Núm Control ".$prod_code." </b>ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
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