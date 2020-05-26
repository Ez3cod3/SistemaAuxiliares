<?php 
//importamos la conexion 
session_start();
require_once('conexion.php');
$conexion=Conectar();
if (isset($_REQUEST['new_con'])) 
{	
//recibimos los datos mediante el metodo post 
$con = $_POST['cod_con'];
$nom = $_POST['nom_con'];
$f_ini = $_POST['fecha_ini'];
$f_fin = $_POST['fecha_fin'];
//hacemos la consulta para ingresar los datos al sistema
$consulta = "INSERT INTO convocatoria VALUES ('$con', '$nom', '$f_ini', '$fecha_fin')";
//mandamos la consulta a la base de datos
mysqli_query($conexion, $consulta);
//mandamos la direccion de la pagina a la cual nos enviara una ves termando todo con el codigo de la nueva convocatoria
header("Location:requisito_con.php?con=$con");
}
// para crear un nuevo requisito
if (isset($_REQUEST['new_requisito'])) 
{
	$con=$_GET['con'];
	$req=$_POST['requisito'];
	$insertarDato = "INSERT INTO requisito VALUES (null, '$con', '$req')";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:requisito_con.php?con=$con");
}
//para crear un nuevo documento
if (isset($_REQUEST['new_doc'])) 
{
	$con=$_GET['con'];
	$doc=$_POST['documento'];
	$insertarDato = "INSERT INTO documento VALUES (null, '$con', '$doc', '$doc')";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:documento_con.php?con=$con");
}
// para crear la lista de auxiliaturas por convocatoria
if (isset($_REQUEST['new_aux'])) 
{
	$con=$_GET['con'];
	$aux=$_POST['auxiliatura'];
	$insertarDato = "INSERT INTO con_aux VALUES (null, '$aux', '$con')";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:auxiliatura_con.php?con=$con");
}

?>
