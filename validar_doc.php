<?php 
$obs= $_POST['obs'];
$con= $_GET['con'];
$pos= $_GET['pos'];
session_start();
require_once('conexion.php');
$conexion=Conectar();
$aux=0;
 foreach($_POST['optradio'] as $option_num => $option_val)
 	if ($option_val	== 'nocumple') {
 	
 	$aux=1;
 	}
 	if ($aux == 1) {
 		$consulta= "INSERT INTO observacion VALUES(NULL, '$con', '$pos', '$obs', 'No Valido')";
 	mysqli_query($conexion, $consulta);
 	}else{
 		$consulta= "INSERT INTO observacion VALUES(NULL, '$con', '$pos', '$obs', 'Valido')";
 	mysqli_query($conexion, $consulta);
 	}
   header("Location:calificacion_documentos.php?con=$con");