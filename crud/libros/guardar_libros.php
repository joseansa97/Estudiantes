<?php
	if (empty($_POST['bookcode']) && empty($_POST['bookname']) && empty($_POST['bookeditorial']) && empty($_POST['bookauthor']) && empty($_POST['bookedition']) && empty($_POST['booknumpage']) ){
		$errors[] = "Rellena todos los campos correctamente.";
		//$errors[1] = "Ingresa el codigo del producto.";
		//$errors[2] = "Ingresa la cantidad del producto.";
	}	
	else if (!empty($_POST['bookcode']) && !empty($_POST['bookname']) && !empty($_POST['bookeditorial']) && !empty($_POST['bookauthor']) && !empty($_POST['bookedition']) && !empty($_POST['booknumpage']) ){
		require_once ("../../config/conexion.php");
		
		$codigo=$_POST['bookcode'];
		$consulta = "select * from libros where codigo='$codigo'";
		$result = mysqli_query($con,$consulta);
		$NFilas = $result->num_rows;
		if($NFilas>0)
		{
?>
			<div class="alert alert-warning" alert>
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Advertencia!</strong> El registro del material con el <b>CÓDIGO <?php echo $codigo ?> </b> ya existe.
			</div>
<?php
		} else {

				$book_code = mysqli_real_escape_string($con,(strip_tags($_POST["bookcode"],ENT_QUOTES)));
				$book_name = mysqli_real_escape_string($con,(strip_tags($_POST["bookname"],ENT_QUOTES)));
				$book_editorial = mysqli_real_escape_string($con,(strip_tags($_POST["bookeditorial"],ENT_QUOTES)));
				$book_author = mysqli_real_escape_string($con,(strip_tags($_POST["bookauthor"],ENT_QUOTES)));
				$book_edition = intval($_POST["bookedition"]);
				$book_numpage = intval($_POST["booknumpage"]);

				// REGISTER data into database
				$sql = "INSERT INTO libros (codigo, nombre, editorial, autor, edicion, numpage) 
								VALUES ('$book_code','$book_name','$book_editorial','$book_author','$book_edition','$book_numpage')";
				$query = mysqli_query($con,$sql);
			
				// if product has been added successfully
				if ($query) {
					$messages[] = "El libro con el <b>CÓDIGO ".$book_code." </b>ha sido guardado con éxito.";
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