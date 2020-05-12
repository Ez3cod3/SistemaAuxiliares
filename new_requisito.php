<?php
session_start();
require_once('conexion.php');
$conexion=Conectar();
$cod = $_GET['cod'];
$req = $_POST['requisito'];
		
		
		
$insertarDato = "INSERT INTO requisito VALUES (null, '$cod', '$req')";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:requisito_con.php?m=3");
?>