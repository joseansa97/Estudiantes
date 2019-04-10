<?php
	if (empty($_POST['delete_code'])){
		$errors[] = "Id vacío.";
	} elseif (!empty($_POST['delete_code'])){
		require_once ("../../config/conexion.php");

		$book_code = $_POST['delete_code'];
		//echo $prod_code;

		$sql = "DELETE FROM libros WHERE codigo='".$book_code."'";
		
		$query = mysqli_query($con,$sql);

		if ($query) {
			$messages[] = "El libro con el <b>CÓDIGO ".$book_code." </b>ha sido eliminado con éxito.";
		} else {
			$errors[] = "Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.";
		}
	} 
		else 
	{
		$errors[] = "desconocido.";
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