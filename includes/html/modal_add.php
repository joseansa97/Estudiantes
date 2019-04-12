	<div id="addProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_product" id="add_product" enctype="application/x-www-form-urlencoded">
					<div class="modal-header">						
						<h3 class="modal-title">Registrar Nuevo Usuario</h3>
						<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">SALIR</button>
					</div>
							<div class="modal-body">
					
									<div class="form-group">
										<label for="code">Num. Control</label>
										<input type="text" name="code"  id="code" class="form-control" onblur="this.value=this.value.toUpperCase()" placeholder="Número de Control" required />
										<div id="info_code" class="valida_info"></div>
									</div>
									
									<div class="form-group">
										<label for="description">Nombre</label>
										<input type="text" name="description" id="description" class="form-control" placeholder="Nombre" required />
										<!--<textarea rows="4" cols="50" name="description" id="description" class="form-control" placeholder="Ingresa la descripción" required></textarea>-->
										<div id="info_description" class="valida_info"></div>
									</div>
									
										<div class="form-group">
											<label for="quantity">Apellido</label>
											<input type="text" name="quantity" id="quantity" class="form-control" placeholder="Apellido" required />
											<div id="info_quantity" class="valida_info"></div>
										</div>

										<div class="form-group">
											<label for="price">Correo</label>
											<input type="email" name="price" id="price" class="form-control" placeholder="Correo" required />
											<div id="info_price" class="valida_info"></div>
										</div>							
								
									<div class="form-group">
										<label for="good">Telefono</label>
										<input type="text" name="aportacion" id="aportacion" class="form-control" placeholder="Telefono" required />
										<div id="info_good" class="valida_info"></div>
									</div>
								
<!--
									<div class="form-group">
										<label for="aportacion">Aportacion</label>
										
										<select name="aportacion" id="aportacion" class="form-control" required>
											<option value=""> Selecciona una opción </option>
											<option value="CDI">Comisión Nacional para el Desarrollo de los Pueblos Indígenas</option>
											<option value="COMUNIDAD">COMUNIDAD</option>
										</select>
										<div id="info_aportacion" class="valida_info"></div>
									</div>
									
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="good">Bueno</label>
											<input type="number" name="good" id="good" class="form-control" placeholder="Ingresa el estado" required />
											<div id="info_good" class="valida_info"></div>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<label for="regular">Regular</label>
											<input type="number" name="regular" id="regular" class="form-control" placeholder="Ingresa el estado" required />
											<div id="info_regular" class="valida_info"></div>
										</div>
									</div>	

								
									<div class="col-md-4">
										<div class="form-group">
											<label for="bad">Malo</label>
											<input type="number" name="bad" id="bad" class="form-control" placeholder="Ingresa el estado" required />
											<div id="info_bad" class="valida_info"></div>
										</div>
									</div>
								</div>
											
										<div class="form-group">
											<label for="daterec">Fecha Recibido</label>
											<input type="date" name="daterec" id="daterec" class="form-control" placeholder="Ingresa la fecha" required />
											<div id="info_daterec" class="valida_info"></div>
										</div>-->

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
