<?php
session_start();
require_once('conexion.php');
$conexion=Conectar();

$cod=$_GET['cod'];
$postulante=$_GET['postu'];
$postulacion=$_GET['post'];

$nota1 = $_POST['puntaje1'];
$nota2 = $_POST['puntaje2'];
$nota3 = $_POST['puntaje3'];
$nota4 = $_POST['puntaje4'];
$nota5 = $_POST['puntaje5'];
$nota6 = $_POST['puntaje6'];
$nota7 = $_POST['puntaje7'];
$nota8 = $_POST['puntaje8'];

$total = 0;

$total = $nota1 + $nota2 + $nota3 + $nota4 + $nota5 + $nota6 + $nota7 + $nota8;
		
		
		
$insertarDato = "INSERT INTO nota VALUES (1, '$cod', '$postulacion', 1, '$total')";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:calificacion_meritos.php?cod=$cod&m=3");
?>