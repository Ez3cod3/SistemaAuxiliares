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
// Cómo subir el archivo
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "pdf/".$fichero["name"]);
//hacemos la consulta para ingresar los datos al sistema
$consulta = "INSERT INTO convocatoria VALUES ('$con', '$nom', '$f_ini', '$fecha_fin')";
//mandamos la consulta a la base de datos
mysqli_query($conexion, $consulta);
//mandamos la direccion de la pagina a la cual nos enviara una ves termando todo con el codigo de la nueva convocatoria
header("Location:convocatoria_laboratorio.php?con=$con");
}
// para crear un nuevo requisito
if (isset($_REQUEST['new_requisito'])) 
{
	$con=$_GET['con'];
	$cant=$_POST['cantidad'];
	$horas=$_POST['horas'];
	$nombre=$_POST['nombre'];
	$codigo=$_POST['codigo'];

	$insertarDato = "INSERT INTO auxiliatura VALUES ('$codigo', '$nombre', '$horas', '$cant')";
	$insertarDato1 = "INSERT INTO con_aux VALUES (null, '$codigo', '$con')";
		
		mysqli_query($conexion, $insertarDato);
		mysqli_query($conexion, $insertarDato1);
		header("Location:convocatoria_laboratorio.php?con=$con");
}
//para crear un nuevo documento
if (isset($_REQUEST['new_req'])) 
{
	$con=$_GET['con'];
	$req=$_POST['requisito'];
	$insertarDato = "INSERT INTO requisito VALUES (null, '$con', '$req')";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:convocatoria_laboratorio.php?con=$con");
}
// para crear la lista de auxiliaturas por convocatoria
if (isset($_REQUEST['new_doc'])) 
{
	$con=$_GET['con'];
	$doc=$_POST['docu'];
	$insertarDato = "INSERT INTO documento VALUES (null, '$con', '$doc')";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:convocatoria_laboratorio.php?con=$con");
}
if (isset($_REQUEST['new_merito'])) 
{
	$con=$_GET['con'];
	$area=$_POST['area'];
	$puntaje=$_POST['puntaje'];
	$insertarDato = "INSERT INTO merito VALUES (null, '$con', '$area', '$puntaje', 0)";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:convocatoria_laboratorio.php?con=$con");
}
if (isset($_REQUEST['new_cono'])) 
{
	$con=$_GET['con'];
	$tema=$_POST['tema'];
	$puntaje=$_POST['puntaje'];
	$insertarDato = "INSERT INTO conocimiento VALUES (null, '$con', '$tema')";
		
		mysqli_query($conexion, $insertarDato);
		header("Location:convocatoria_laboratorio.php?con=$con");
}

?>
