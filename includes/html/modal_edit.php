<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_product" id="edit_product" enctype="application/x-www-form-urlencoded">
					<div class="modal-header">						
						<h3 class="modal-title">Editar Usuario</h3>
						<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">SALIR</button>
					</div>


					<div class="modal-body">					
							<div class="form-group">
								<label>Num Control</label>
								<input type="text" name="edit_code"  id="edit_code" class="form-control" disabled />
								<input type="hidden" name="edit_idcode" id="edit_idcode" class="form-control" />
							</div>

							<div class="form-group">
								<label>Nombre</label>
								<input type="text" name="edit_description" id="edit_description" class="form-control" required />
								<!--<textarea name="edit_description" id="edit_description" rows="4" cols="50" class="form-control" placeholder="Ingresa la descripción del material" required></textarea>-->
								<div id="edit_info_description" class="valida_info"></div>
							</div>
						
								<div class="form-group">
									<label>Apellido</label>
									<input type="text" name="edit_quantity" id="edit_quantity" class="form-control" required />
									<div id="edit_info_quantity" class="valida_info"></div>
								</div>
							
								<div class="form-group">
									<label>Correo</label>
									<input type="email" name="edit_price" id="edit_price" class="form-control" required />
									<div id="edit_info_price" class="valida_info"></div>
								</div>			

							<div class="form-group">
								<label>Telefono</label>
								<input type="text" name="edit_total" id="edit_total" class="form-control" required />
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