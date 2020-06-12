<?php 
session_start(); 
$yes = $_SESSION['log']; 
$cod = $_SESSION['cod'];
$ids = $_SESSION['usr'];
$con= $_GET['con'];
include "includes/cabecera_home.inc";
?>
<div class="container">
    <div id="wrapper">
		<?php
			// codigo para menu navegacion
			$hoy = date("F j, Y");
			include "includes/nav_home_adm.inc";
        ?>
        <div id="page-wrapper">
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li class="active"> Listado de Postulantes - Documentacion <?php echo"$con" ?></li>
			</ol>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-briefcase"></i>Lista de Postulantes - Documentacion <?php echo"$con" ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Postulante</th>
												<th>Auxiliatura(s)</th>
												<th>Estado</th>
												
												
											</tr>
										</thead>
										<tbody>
										<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from postulacion, postulante, convocatoria where convocatoria.COD_CONVOCATORIA = '$con' and postulacion.COD_CONVOCATORIA = convocatoria.COD_CONVOCATORIA and postulacion.ID_POSTULANTE = postulante.ID_POSTULANTE	";
											$query=mysqli_query($conexion, $consulta);	
											$identi=0;
											while($dato=mysqli_fetch_array($query))
											{

												$cont++;
												?>
												
												<tr>
													<td ><?php echo "$cont"; ?></td>
													<td ><?php echo "".$dato['NOM_POSTULANTE'].""; ?> <?php echo "".$dato['APE_PAT_POSTULANTE'].""; ?> <?php echo "".$dato['APE_MAT_POSTULANTE'].""; ?></td>
													<?php 
													include_once('conexion.php');
													$conexion=Conectar();
													$aux1 = $dato['ID_POSTULACION'];
													$aux2 = $dato['COD_CONVOCATORIA'];
													$aux3 = 0;
													$consulta1="select * from nota where ID_POSTULACION = '$aux1' and COD_CONVOCATORIA = '$aux2' and NOTA_MERITOS = '$aux3' ";
													$query1=mysqli_query($conexion, $consulta1);
													$consulta2="select * from con_aux where COD_AUXILIATURA = '$con'";
													$query2=mysqli_query($conexion, $consulta2);
													$dato2=mysqli_fetch_array($query2);
													?>
													<td >	LCO-ADM</td>
													<?php
													$consulta3="select * from observacion where COD_CONVOCATORIA = '$aux2' and ID_POSTULACION = '$aux1'";
													$query3=mysqli_query($conexion, $consulta3);
													if ($dato3=mysqli_fetch_array($query3)) {
													 		?>
													 		<td ><?php echo "".$dato3['validez'].""; ?></td>

													<?php	 		
													 	}else {
													 	?>
													 	<td ><a href="validacion_documentos.php?con=<?php echo"$con" ?>&post=<?php echo"$aux1" ?>" class="btn btn-primary btn-sm"></i>Validar</a></td>

													 	<?php	
													 	}	

													 ?>
													
													
													
													
										<?php
											}
										?>
										</tbody>
										
									</table>
									<div class="control-group">
										<div class="controls">
											<a a href="crearPdf.php?con=<?php echo "$con"; ?>" class="btn btn-primary btn-sm"></i>Generar documento de resultados: Validación</a>
											
											
											
										</div>
									</div>
								</div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</div>
<!-- /.container -->
<?php      
include "includes/pie_home.inc";
?>