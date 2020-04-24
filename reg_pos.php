<?php
		include_once('conexion.php');

		$codcon=$_GET['con'];
		$codaux=$_GET['aux'];
		$nompos=$_POST['nom_pos'];
		$apepat=$_POST['ape_pat_pos'];
		$apermat=$_POST['ape_mat_pos'];
		$mailpos=$_POST['mail_pos'];
		$codsis=$_POST['cod_sis_pos'];
		$cipos=$_POST['ci_pos'];
		
		$conexion=Conectar();
		$insertar="INSERT INTO postulante values (null,'$nompos', '$apepat','$apermat', '$mailpos', '$cipos', '$codsis' )";
		mysqli_query($conexion,$insertar);
		$consulta1="select MAX(ID_POSTULANTE) from postulante where CI_POSTULANTE = $cipos and COD_SIS_POSTULANTE ";
		$sql=mysqli_query($conexion, $consulta1);
		$dato=mysqli_fetch_array($sql);
		$aux=$dato['MAX(ID_POSTULANTE)'];
		echo "$aux";
		$insertar1="INSERT INTO postulacion values ('$codcon', '$codaux', '$aux', null)";
		$sql1=mysqli_query($conexion, $insertar1);

		header("Location:reg_val.php?id=$aux")
	
?>