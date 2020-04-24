<?php

function Conectar(){
	$conn = mysqli_connect("localhost","root","") or die("Error en conexion");
	mysqli_select_db($conn, "auxiliatura") or die("Error en base de datos");
	//mysqli_query($conexion,  , $conxecion, "SET NAMES 'utf8'");
	return $conn;
}
function Desconectar($conn){
	mysqli_close($conn);
}
?>
