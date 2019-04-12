<?php
	if (empty($_POST['edit_name']) && empty($_POST['edit_editorial']) && empty($_POST['edit_author']) && empty($_POST['edit_edition']) && empty($_POST['edit_numpage']) ){
		$errors[] = "ID está vacío. Exiten campos vacios.";
	} elseif (!empty($_POST['edit_name']) && !empty($_POST['edit_editorial']) && !empty($_POST['edit_author']) && !empty($_POST['edit_edition']) && !empty($_POST['edit_numpage']) ){
	require_once ("../../config/conexion.php");
	
	$book_name = mysqli_real_escape_string($con,(strip_tags($_POST["edit_name"],ENT_QUOTES)));
	$book_editorial = mysqli_real_escape_string($con,(strip_tags($_POST["edit_editorial"],ENT_QUOTES)));
	$book_author = mysqli_real_escape_string($con,(strip_tags($_POST["edit_author"],ENT_QUOTES)));
	$book_edition = intval($_POST["edit_edition"]);
	$book_numpage = intval($_POST["edit_numpage"]);
	$book_code = mysqli_real_escape_string($con,(strip_tags($_POST['edit_idcode'],ENT_QUOTES)));
	//echo $prod_code;
	
	// UPDATE data into database
    $sql = "UPDATE libros SET nombre='".$book_name."', 
	editorial='".$book_editorial."', 
	autor='".$book_author."',
	edicion='".$book_edition."', 
	numpage='".$book_numpage."' 
	WHERE codigo='".$book_code."' ";
	
	$query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El libros con el <b>CÓDIGO ".$book_code." </b>ha sido actualizado con éxito.";
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