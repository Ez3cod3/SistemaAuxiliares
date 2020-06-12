<?php
require_once('conexion.php');
$conexion=Conectar();
if(isset($_REQUEST['new_user']))
{
$usu=$_POST['usr'];
$nom= $_POST['nom'];
$app=$_POST['app'];
$apm=$_POST['apm'];
$con=$_POST['pwd'];
$ci=$_POST['ci'];
$exp=$_POST['exp'];
$rol=$_POST['rol'];

$consulta="INSERT INTO usuario VALUES ('$con', '$usu', '$nom', '$app', '$apm', '$ci', '$exp', 1)";

mysqli_query($conexion, $consulta);



header("Location:lista_usuario.php?m=3");
}

$des=$_GET['des'];
if($des == 1){

	$id=$_GET['id'];

	$consulta="UPDATE `usuario` SET `HABILITADO_USU` = '0' WHERE `usuario`.`COD_USUARIO` = '$id'";
	mysqli_query($conexion, $consulta);
header("Location:lista_usuario.php?m=3");
}

if($des == 0){

	$id=$_GET['id'];

	$consulta="UPDATE `usuario` SET `HABILITADO_USU` = '1' WHERE `usuario`.`COD_USUARIO` = '$id'";
	mysqli_query($conexion, $consulta);
header("Location:lista_usuario.php?m=3");
}

?>