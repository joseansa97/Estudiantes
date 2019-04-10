<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">

				<form name="edit_product" id="edit_product" enctype="application/x-www-form-urlencoded">
					<div class="modal-header">						
						<h3 class="modal-title">Editar Libro</h3>
						<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">SALIR</button>
					</div>


					<div class="modal-body">					
							<div class="form-group">
								<label for="edit_code">Código</label>
								<input type="text" name="edit_code"  id="edit_code" class="form-control" disabled />
								<input type="hidden" name="edit_idcode" id="edit_idcode" class="form-control" />
							</div>

							<div class="form-group">
								<label for="edit_name">Nombre</label>
								<input type="text" name="edit_name" id="edit_name" class="form-control" required />
								<div id="edit_info_description" class="valida_info"></div>
							</div>
						
								<div class="form-group">
									<label for="edit_editorial">Editorial</label>
									<input type="text" name="edit_editorial" id="edit_editorial" class="form-control" required />
									<div id="edit_info_quantity" class="valida_info"></div>
								</div>
							
								<div class="form-group">
									<label for="edit_author">Autor</label>
									<input type="text" name="edit_author" id="edit_author" class="form-control" required />
									<div id="edit_info_price" class="valida_info"></div>
								</div>			

							<div class="form-group">
								<label for="edit_edition">Edición</label>
								<input type="number" name="edit_edition" id="edit_edition" class="form-control" required />
								<div id="edit_info_good" class="valida_info"></div>
							</div>

							<div class="form-group">
								<label for="edit_numpage">Num Páginas</label>
								<input type="number" name="edit_numpage" id="edit_numpage" class="form-control" required />
								<div id="edit_info_good" class="valida_info"></div>
							</div>


					</div>


					<div class="modal-footer">
						<input type="button" class="btn btn-info" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" id="edit_btn" name="edit_btn" value="Guardar datos">
					</div>
				</form>

			</div>
		</div>
	</div>