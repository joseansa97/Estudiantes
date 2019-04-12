$(function() {
    load(1);
});

function load(page) {
    var query = $("#q").val();
    var per_page = 10;
    var parametros = { "action": "ajax", "page": page, 'query': query, 'per_page': per_page };
    $("#loader").fadeIn('slow');
    $.ajax({
        url: 'crud/libros/listar_libros.php',
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
    var book_code = button.data('code')
    $('#edit_code').val(book_code)
    $('#edit_idcode').val(book_code)
    var book_name = button.data('name')
    $('#edit_name').val(book_name)
    var book_editorial = button.data('editorial')
    $('#edit_editorial').val(book_editorial)
    var book_author = button.data('author')
    $('#edit_author').val(book_author)
    var book_edition = button.data('edition')
    $('#edit_edition').val(book_edition)
    var book_numpage = button.data('numpage')
    $('#edit_numpage').val(book_numpage)

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
        url: "crud/libros/editar_libros.php",
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
        url: "crud/libros/guardar_libros.php",
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
        url: "crud/libros/eliminar_libros.php",
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