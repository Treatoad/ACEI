<?php
	$server="127.0.0.1";
	$username="root";
	$password="123456";
	$db='carrito';
	// $con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	// $sdb=mysqli_connect($db,$con)or die("la base de datos no existe");

	$con = new mysqli($server, $username, $password ,$db);

	if($con->connect_errno){
			 //die();
			 die($con->connect_error);
	}
?>
