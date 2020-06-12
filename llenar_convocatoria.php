<?php 
include "includes/cabecera_modal.inc";

session_start();
$con = $_GET['con'];
require_once('conexion.php');
$conexion=Conectar();
$consulta = "select * from convocatoria whEre COD_CONVOCATORIA = '$con'";
$query = mysqli_query($conexion, $consulta);
$dato = mysqli_fetch_array($query);
?>

<div class="container">
		<div class="modal-lg" >
			<div class="modal-content" >
				<div class="modal-header">
					<a class="close" href="javascript:history.go(-1)"><i class="fa fa-times"></i></a>
					<h4 class="modal-title"> <i class="fa fa-file-text"></i> Formulario Para la convocatoria - <?php echo "".$dato['COD_CONVOCATORIA'].""; ?></h4>
				</div>
				<div class="modal-body"  >
					<form action="configuracionPG.php" method="post" enctype="multipart/form-data">
						<center><h6> <i class="fa fa-info-circle"></i> Llene con mucho cuidado toda la informacion.</h6></center>
						<ul><h4>REQUERIMIENTOS</h4>	
						<label>Llene los Requerimientos correspondientes a la convocatoria</label>			
							<div >
								<label>Lista de Requerimientos</label>
								
							</div>
							<div >
								<a name="new_plan" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Ingresar Requerimientos</a>
								
							</div>

							<div >
								<h4>REQUISITOS</h4>
								
								
							</div>

							<div>
								<a name="new_plan" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Ingresar Requisitos</a>
							</div>

							<div >
								<h4>DOCUMENTOS A PRESENTAR</h4>
								
								
							</div>

							<div>
								<a name="new_plan" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Ingresar Documentacion</a>
							</div>

							<div >
								<h4>CALIFICACION DE MERITOS</h4>

							</div>

							<div>
								<a name="new_plan" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Ingresar Parametros para la Calificacion</a>
							</div>

							<div >
								<h4>PRUEBAS ESCRITAS</h4>

							</div>

							<div>
								<a name="new_plan" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Ingresar Parametros para la Calificacion</a>
							</div>

							<div >
								<h4>CALIFICACION DE CONOCIMIENTOS</h4>
								
								
							</div>

							<div>
								<a name="new_plan" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Ingresar Parametros para la Calificacion</a>
							</div>
								
						</ul>
						<div class="modal-footer">
							</br><button name="new_plan" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>FINALIZAR Y PUBLICAR CONVOCATORIA</button>
						</div>												
					</form>
				</div><!-- End of Modal body -->
			</div><!-- End of Modal content -->
		</div><!-- End of Modal dialog -->


<?php
	include "includes/pie_modal.inc";
	include "includes/pie_home.inc"; 

	
  
?>   

		