<?php
		session_start();
		include_once('conexion.php');
		
		$cod_us=$_REQUEST['cod_usu'];
		$con_us=$_REQUEST['con_usu'];
		
		$conexion=Conectar();
		$consulta="SELECT * FROM usuario where COD_USUARIO='$cod_us' and CI_USUARIO='$con_us'";
		

		$query=mysqli_query($conexion,$consulta);
		$dato=mysqli_fetch_array($query);
		$count = mysqli_num_rows($query);
	
		if($count == 1)
		{ 
		
		$_SESSION['log'] = true; 
		$_SESSION['cod'] = $dato['COD_USUARIO'];
		$_SESSION['usr'] = $dato['NOM_USUARIO'];

		Desconectar($conexion);
		header ("Location: home_adm.php");
		exit;
		}

		else {
			echo "Error";
		
		exit;
		}
 
?>