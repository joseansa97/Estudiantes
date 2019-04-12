<?php

/*Conexion a azure*/
//Database=biblioteca;
//Data Source=bibliotecapp2019.mysql.database.azure.com;
//User Id=josemyapp@bibliotecapp2019;
//Password=Josesito97

	// Conexion en la nube con Microsoft Azure
    //define('DB_HOST','bibliotecapp2019.mysql.database.azure.com');
	//define('DB_USER','josemyapp@bibliotecapp2019');
	//define('DB_PASS','Josesito97');
	//define('DB_NAME','biblioteca');
	
	// Conexion local
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','crud_google');
    
    # conectare la base de datos
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
