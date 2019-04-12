	<div id="addProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<form name="add_product" id="add_product" enctype="application/x-www-form-urlencoded">
					<div class="modal-header">						
						<h3 class="modal-title">Registrar Nuevo libro</h3>
						<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">SALIR</button>
					</div>
							<div class="modal-body">
					
									<div class="form-group">
										<label for="bookcode">Código</label>
										<input type="text" name="bookcode"  id="bookcode" class="form-control" onblur="this.value=this.value.toUpperCase()" placeholder="Código" required />
										<div id="info_code" class="valida_info"></div>
									</div>
									
									<div class="form-group">
										<label for="bookname">Nombre</label>
										<input type="text" name="bookname" id="bookname" class="form-control" placeholder="Nombre" required />
										<div id="info_description" class="valida_info"></div>
									</div>
									
										<div class="form-group">
											<label for="bookeditorial">Editorial</label>
											<input type="text" name="bookeditorial" id="bookeditorial" class="form-control" placeholder="Editorial" required />
											<div id="info_quantity" class="valida_info"></div>
										</div>

										<div class="form-group">
											<label for="bookauthor">Autor</label>
											<input type="text" name="bookauthor" id="bookauthor" class="form-control" placeholder="Autor" required />
											<div id="info_price" class="valida_info"></div>
										</div>							
								
									<div class="form-group">
										<label for="bookedition">Edición</label>
										<input type="number" name="bookedition" id="bookedition" class="form-control" placeholder="Edición" required />
										<div id="info_good" class="valida_info"></div>
									</div>

									<div class="form-group">
										<label for="booknumpage">Num. Páginas</label>
										<input type="number" name="booknumpage" id="booknumpage" class="form-control" placeholder="Num Páginas" required />
										<div id="info_good" class="valida_info"></div>
									</div>

							</div>

					<div class="modal-footer">
						<input type="button" class="btn btn-danger" id="limpiar" name="limpiar_btn" value="Limpiar" />
						<input type="button" class="btn btn-info" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="enviar_btn" value="Guardar datos">
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
