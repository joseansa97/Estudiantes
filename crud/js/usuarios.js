		$(function() {
		    load(1);
		});

		function load(page) {
		    var query = $("#q").val();
		    var per_page = 10;
		    var parametros = { "action": "ajax", "page": page, 'query': query, 'per_page': per_page };
		    $("#loader").fadeIn('slow');
		    $.ajax({
		        url: 'crud/usuarios/listar_usuarios.php',
		        data: parametros,
		        beforeSend: function(objeto) {
		            $("#loader").html("Cargando...");
		        },
		        success: function(data) {
		            $(".outer_div").html(data).fadeIn('slow');
		            $("#loader").html("");
		        }
		    })
		}
		$('#editProductModal').on('show.bs.modal', function(event) {
		    var button = $(event.relatedTarget) // Button that triggered the modal
		    var code = button.data('code')
		    $('#edit_code').val(code)
		    $('#edit_idcode').val(code)
		    var description = button.data('description')
		    $('#edit_description').val(description)
		    var quantity = button.data('quantity')
		    $('#edit_quantity').val(quantity)
		    var price = button.data('price')
		    $('#edit_price').val(price)
		    var total = button.data('total')
		    $('#edit_total').val(total)
		        //$('#edit_totalop').val(total)
		        //var aportacion = button.data('aportacion')
		        //$('#edit_aportacion').val(aportacion)
		        //var good = button.data('good')
		        //$('#edit_good').val(good)
		        //var regular = button.data('regular')
		        //$('#edit_regular').val(regular)
		        //var bad = button.data('bad')
		        //$('#edit_bad').val(bad)
		        //var daterec = button.data('daterec')
		        //$('#edit_daterec').val(daterec)
		        //var id = button.data('id')
		        //$('#edit_id').val(id)
		})

		$('#deleteProductModal').on('show.bs.modal', function(event) {
		    var button = $(event.relatedTarget) // Button that triggered the modal
		    var code = button.data('code')
		    $('#delete_code').val(code)
		})


		$("#edit_product").submit(function(event) {
		    var parametros = $(this).serialize();
		    $.ajax({
		        type: "POST",
		        url: "crud/usuarios/editar_usuarios.php",
		        data: parametros,
		        beforeSend: function(objeto) {
		            $("#resultados").html("Enviando...");
		        },
		        success: function(datos) {
		            $("#resultados").html(datos);
		            load(1);
		            $('#editProductModal').modal('hide');
		        }
		    });
		    event.preventDefault();
		});


		$("#add_product").submit(function(event) {
		    var parametros = $(this).serialize();
		    $.ajax({
		        type: "POST",
		        url: "crud/usuarios/guardar_usuarios.php",
		        data: parametros,
		        beforeSend: function(objeto) {
		            $("#resultados").html("Enviando...");
		        },
		        success: function(datos) {
		            $("#resultados").html(datos);
		            load(1);
		            $('#addProductModal').modal('hide');
		        }
		    });
		    event.preventDefault();
		});

		$("#delete_product").submit(function(event) {
		    var parametros = $(this).serialize();
		    $.ajax({
		        type: "POST",
		        url: "crud/usuarios/eliminar_usuarios.php",
		        data: parametros,
		        beforeSend: function(objeto) {
		            $("#resultados").html("Enviando...");
		        },
		        success: function(datos) {
		            $("#resultados").html(datos);
		            load(1);
		            $('#deleteProductModal').modal('hide');
		        }
		    });
		    event.preventDefault();
		});
		s