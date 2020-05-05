<?php
session_start();
require_once('conexion.php');
$conexion=Conectar();
$cod_mat = $_POST['cod_mat'];
		$codigo = $_POST['cod_aux'];
		$nombre = $_POST['nom_aux'];
		$horas = $_POST['hrs_aux'];
		$cantidad = $_POST['cant_aux'];
		
		
			$insertarDato = "INSERT INTO auxiliatura VALUES ('$codigo', '$nombre', '$horas', '$cantidad')";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:lista_auxiliatira.php?m=3");
?>