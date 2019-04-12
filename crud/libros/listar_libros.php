<?php
	require_once ("../../config/conexion.php");

	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

	if($action == 'ajax'){
		$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

		$tables="libros";
		$campos="*";
		$sWhere=" codigo LIKE '%".$query."%' OR edicion LIKE '%".$query."%'";
		$sWhere.=" order by codigo";
		
		include '../../config/pagination.php'; 
		
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = intval($_REQUEST['per_page']); //Cuantos reguistro quiere mostrar
		$adjacents  = 4; //brecha entre paginas despues de un numero adyacente
		$offset = ($page - 1) * $per_page;
		
		//Cuenta el total de filas de una tabla
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
		if ($row= mysqli_fetch_array($count_query))
		{
			$numrows = $row['numrows'];
		}
		else {
			echo mysqli_error($con);
		}
		$total_pages = ceil($numrows/$per_page);

		//Consulta principal de cada dato
		$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
		
		if ($numrows>0){
?>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th class='text-center'>Código</th>
							<th class='text-center'>Nombre</th>
							<th class='text-center'>Editorial</th>
							<th class='text-right'>Autor</th>
							<th class='text-right'>Edición</th>
							<th class='text-center'>Num. Páginas</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>	
						<?php 
							$finales=0;
							while($row = mysqli_fetch_array($query))
							{	
								$book_code=$row['codigo'];
								$book_name=$row['nombre'];
								$book_editorial=$row['editorial'];
								$book_author=$row['autor'];
								$book_edition=$row['edicion']; 
								$book_numpage=$row['numpage'];					
								$finales++;
						?>	
								<tr class="<?php echo $text_class;?>">
									<td class='text-center'><?php echo $book_code;?></td>
									<td class='text-right'><?php echo $book_name;?></td>
									<td class='text-center' ><?php echo $book_editorial;?></td>
									<td class='text-right'><?php echo $book_author;?></td>
									<td class='text-center'><?php echo number_format($book_edition);?></td>
									<td class='text-center'><?php echo number_format($book_numpage);?></td>
									<td>
										<a href="#" data-target="#editProductModal" class="edit" data-toggle="modal" data-name="<?php echo $book_name?>" data-editorial="<?php echo $book_editorial?>" data-author="<?php echo $book_author?>" data-edition="<?php echo $book_edition?>" data-numpage="<?php echo $book_numpage?>" data-code='<?php echo $book_code?>' ><i class="fa fa-pencil-square-o" aria-hidden="true" data-toggle="tooltip" title="Editar" ></i></a>
									</td>
									<td>
										<a href="#deleteProductModal" class="delete" data-toggle="modal" data-code="<?php echo $book_code;?>"><i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" title="Eliminar"></i></a>
									</td>
								</tr>
							<?php 
							}
							?>
							<tr>
								<td colspan='10'> 
									<?php 
										$inicios=$offset+1;
										$finales+=$inicios -1;
										echo "Mostrando $inicios al $finales de $numrows registros";
										echo paginate( $page, $total_pages, $adjacents);
									?>
								</td>
							</tr>
					</tbody>			
				</table>
			</div>	
	<?php	
		}
		else
		{
	?>
			<div class="alert alert-warning" align="center">
				<b>NO SE ENCONTRARON REGISTROS EN ESTA ÁREA</b>
			</div>
<?php
		}	
	}
?>          
		  
