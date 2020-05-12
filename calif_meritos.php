<?php 
include "includes/cabecera_modal.inc";
include_once('conexion.php');
$conexion=Conectar();
session_start(); //Iniciamos o Continuamos la sesion
$yes = $_SESSION['log']; 
$cod = $_SESSION['cod'];
$ids = $_SESSION['usr'];
$con = $_GET['cod'];
$pos = $_GET['post'];
$consulta="select * from postulante where ID_POSTULANTE = '$pos'";
$query=mysqli_query($conexion, $consulta);
$dato=mysqli_fetch_array($query);
?>

<div class="container">
		<div class="modal-lg" >
			<div class="modal-content" >
				<div class="modal-header">
					<a class="close" href="javascript:history.go(-1)"><i class="fa fa-times"></i></a>
					<h4 class="modal-title"> <i class="fa fa-file-text"></i> Formulario de Calificacion de Meritos</h4>
				</div>
				<div class="modal-body"  >
					<form action="validacion.php?cod=<?php echo "$con"; ?>" method="post" enctype="multipart/form-data">
						<center><laber> Postulante: <?php echo "".$dato['NOM_POSTULANTE'].""; ?> <?php echo "".$dato['APE_PAT_POSTULANTE'].""; ?> <?php echo "".$dato['APE_MAT_POSTULANTE'].""; ?></label></center>
						<center><h6> <i class="fa fa-info-circle"></i> Llene con mucho cuidado toda la informacion.</h6></center>
						<ul>		
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<label>Rendimiento Academico (65pts)</label>
								
			 					<div class="input-group">
			 						<label>a) Promedio general de las materias cursadas (Incluye reprobadas y abandonos) 35%</label>
									
								</div>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input name="puntaje1" placeholder="Ingrese el total de puntaje" style="width: 100%;"></input>
								</div>
								<div class="input-group">
			 						<label>b) Promedio general de materias en el periodo académico anterior 30%</label>
									
								</div>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input name="puntaje2" placeholder="Ingrese el total de puntaje" style="width: 100%;"></input>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<label>EXPERIENCIA GENERAL</label>
								<div class="input-group">
									<label>Documentos de experiencia en laboratorios: (20)</label>	
								</div>
								<div class="input-group">
									<label>a)Auxiliar de Laboratorio Departamento de Informática - Sistemas del item respectivo (12pts)</label>	
								</div>
								<div class="input-group">
									<label>a. 2 pts/semestre Auxiliar titular.</label>	
								</div>
								<div class="input-group">
									<label>b. 1 pts/semestre Auxiliar Invitado.</label>	
								</div>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input name="puntaje3" placeholder="Ingrese el total de puntaje" style="width: 100%;"></input>
								</div>
								<div class="input-group">
									<label>b) Auxiliares de Practicas Laboratorio Departamento de Informática - Sistemas (6pts)</label>	
								</div>
								<div class="input-group">
									<label>a. 1 pts/semestre Auxiliar.</label>	
								</div>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input name="puntaje4" placeholder="Ingrese el total de puntaje" style="width: 100%;"></input>
								</div>
								<div class="input-group">
									<label>c) Otros auxiliares en laboratorios de computación (2pts)</label>	
								</div>
								<div class="input-group">
									<label>a. 1 pts/semestre Auxiliar.</label>	
								</div>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input name="puntaje5" placeholder="Ingrese el total de puntaje" style="width: 100%;"></input>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<label>Producción: (5 )</label>
								<div class="input-group">
									<label>a) Disertación cursos y/o participación en Proyectos: (5pts)</label>	
								</div>
								<div class="input-group">
									<label>a. 2.5 pts/certificado</label>	
								</div>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input name="puntaje6" placeholder="Ingrese el total de puntaje" style="width: 100%;"></input>
								</div>
								
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<label>Documentos de experiencia extrauniversitaria y de capacitación: (10pts)</label>
								<div class="input-group">
									<label>a) Experiencia como operador, programador, analista de sistemas, cargo directivo en centro de cómputo (6pts)</label>	
								</div>
								<div class="input-group">
									<label>a. 2 puntos por certificado</label>	
								</div>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input name="puntaje7" placeholder="Ingrese el total de puntaje" style="width: 100%;"></input>
								</div>
								<div class="input-group">
									<label>b) Certificación de capacitación en el área específica expedidos por el sistema universitario (4pts)</label>	
								</div>
								<div class="input-group">
									<label>a. 2 pts/certificado aprobación</label>	
								</div>
								<div class="input-group">
									<label>b. 1 pts/certificado asistencia</label>	
								</div>
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input name="puntaje8" placeholder="Ingrese el total de puntaje" style="width: 100%;"></input>
								</div>
								
							</div>

						</ul>
						<div class="modal-footer">
							</br><button name="new_nota" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Terminar Calificacion</button>
						</div>												
					</form>
				</div><!-- End of Modal body -->
			</div><!-- End of Modal content -->
		</div><!-- End of Modal dialog -->


<?php
	include "includes/pie_modal.inc";
	include "includes/pie_home.inc"; 

	
  
?>   

		