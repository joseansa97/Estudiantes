<?php 
if( !isset( $_GET['p'] ) )
{
	//Cargar el contenido de inicio
	$titulo = 'Inicio';
	$contenido = 'crud/inicio.php';
}
else if( $_GET['p'] == 'usuarios' )
{
	//Cargar el contenido de usuarios
	$titulo = 'Usuarios';
	$contenido = 'crud/usuarios.php';
}
else if( $_GET['p'] == 'libros' )
{
	//Cargar el contenido de libros
	$titulo = 'Libros';
	$contenido = 'crud/libros.php';
} else {
	//Cargar Error 404
	$titulo = 'Error 404';
	$contenido = 'config/404.php';
}

?>