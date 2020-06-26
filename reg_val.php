<?php 
include "includes/cabecera_home.inc";
require_once('conexion.php');
$conexion = Conectar();
$id=$_GET['id'];
$consulta="select * from postulante where ID_POSTULANTE = '$id' ";
$sql= mysqli_query($conexion,$consulta);
$dato= mysqli_fetch_array($sql);
?>

<div class="container">
    <div id="wrapper">
		<?php
			$hoy = date("F j, Y");
			include "includes/nav_home.inc";						
        ?>
         <div id="page-wrapper"><br>
			
			
			
			
						<section>
							<div class='row'>
								<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
									<div class='row'>
										
										<div class='col-xs-12 col-sm-9 col-md-6 col-lg-6'>
											<h3 style="color:black;">Se registro correctamente</h3><hr>

											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label>Nombre</label>
											</div>
											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label><?php echo "".$dato['NOM_POSTULANTE'].""; ?></label>
											</div>

											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label>Apellido Paterno</label>
											</div>
											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label><?php echo "".$dato['APE_PAT_POSTULANTE'].""; ?></label>
											</div>

											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label>Apellido Materno</label>
											</div>
											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label><?php echo "".$dato['APE_MAT_POSTULANTE'].""; ?></label>
											</div>

											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label>E-mail</label>
											</div>
											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label><?php echo "".$dato['EMAIL'].""; ?></label>
											</div>

											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label>Codigo Sis</label>
											</div>
											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label><?php echo "".$dato['COD_SIS_POSTULANTE'].""; ?></label>
											</div>

											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label>C.I.</label>
											</div>
											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
											<label><?php echo "".$dato['CI_POSTULANTE'].""; ?></label>
											</div>
											<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																
												<a href="home.php" class="btn btn-warning btn-sm"><i class="fa fa-hand-o-left"></i> Salir</a>
																															
											</div>
										</div>
										<div class='hidden-xs col-sm-3 col-md-4 col-lg-4'>
						
											<h3 style='color:green;'>Descargar Rotulo PDF</h3><hr>
											<ul>
												<div class='btn-group-vertical'>
												
												<div class='btn-group'>
												<a type='button' href="descarga.php?id=<?php echo "".$dato['PDF_CONVOCATORIA'].""; ?>" class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='center' title='pdf'><img src='img/iconoPDF.png' height='40' width='40'/></a>
											
												</div>
											</ul>
											
										</div>
										
									</div>
								</div>
							</div>
					
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>
<!-- /#container -->
<?php      
include "includes/pie_home.inc";
?>

