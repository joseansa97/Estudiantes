<section class="container  fixed-top  batman" id="batman">
	<!--<h2 class="p1  center">SAN MIGUEL EL GRANDE</h2>
	<article class="container  flex  flex-wrap-reverse  md-flex-wrap">
		<p class="p1  lg-f1_25">
		Bruce Wayne es un filantropo, multimillonario y presidente corporativo de las Industrias Wayne.
		</p>				
	</article>-->
</section>
<div class="container">
        <div class="table-wrapper">

            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Lista de <b>Libros de la Biblioteca</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Agregar nuevo libro</span></a>
					</div>
                </div>
            </div>

			<div class='col-sm-4 pull-right'>
				<div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button" onclick="load(1);">
								<i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                </div>
			</div>

			<div class='clearfix'></div>
			<hr>
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
            
        </div>
		
    </div>
	
	<?php 
		include("crud/libros/modal/modal_add.php");
		include("crud/libros/modal/modal_edit.php");
		include("crud/libros/modal/modal_delete.php");
	?>
	<script src="crud/js/libros.js"></script>