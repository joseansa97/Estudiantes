<?php
	require_once ("../../config/conexion.php");

	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

	if($action == 'ajax'){
		$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

		$tables="usuarios";
		$campos="*";
		$sWhere=" ncontrol LIKE '%".$query."%' OR correo LIKE '%".$query."%'";
		$sWhere.=" order by ncontrol";
		
		include '../../config/pagination.php'; 
		
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = intval($_REQUEST['per_page']); //Cuantos reguistro quiere mostrar
		$adjacents  = 4; //brecha entre paginas despues de un numero adyacente
		$offset = ($page - 1) * $per_page;
		
		//Cuenta el total de filas de una tabla
		$count_query = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
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
							<th class='text-center'>N Control</th>
							<th class='text-center'>Nombre</th>
							<th class='text-center'>Apellido</th>
							<th class='text-right'>Correo</th>
							<th class='text-right'>Telefono</th>
							<th class='text-center'>Editar</th>
							<th class='text-center'>Eliminar</th>
						</tr>
					</thead>
					<tbody>	
						<?php 
							$finales=0;
							while($row = mysqli_fetch_array($query))
							{	
								$prod_code=$row['ncontrol'];
								$prod_description=$row['nombre'];
								$prod_quantity=$row['apellido'];
								$price=$row['correo'];
								$total=$row['telefono']; 				
								$finales++;
						?>	
								<tr class="<?php echo $text_class;?>">
									<td class='text-center'><?php echo $prod_code;?></td>
									<td ><?php echo $prod_description;?></td>
									<td class='text-center' ><?php echo $prod_quantity;?></td>
									<td class='text-right'><?php echo $price;?></td>
									<td class='text-right'><?php echo $total;?></td>
									<td>
										<a href="#" data-target="#editProductModal" class="edit" data-toggle="modal" data-description="<?php echo $prod_description?>" data-quantity="<?php echo $prod_quantity?>" data-price="<?php echo $price?>" data-total="<?php echo $total?>" data-code='<?php echo $prod_code?>' ><i class="fa fa-pencil-square-o" aria-hidden="true" data-toggle="tooltip" title="Editar" ></i></a>
									</td>
									<td>
										<a href="#deleteProductModal" class="delete" data-toggle="modal" data-code="<?php echo $prod_code;?>"><i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" title="Eliminar"></i></a>
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
		  
