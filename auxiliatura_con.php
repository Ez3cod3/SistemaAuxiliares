<?php 

session_start(); 
$yes = $_SESSION['log']; 
$cod = $_SESSION['cod'];
$ids = $_SESSION['usr'];

$con = $_GET['con'];
    
include "includes/cabecera_home.inc";
?>


<div class="container">
  
    <div id="wrapper">
		<?php
			// codigo para menu navegacion
			$hoy = date("F j, Y");
			include "includes/nav_home_adm.inc";
        ?>


        <div id="page-wrapper"></br>
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li class="active">Listado de Auxiliaturas</li>
			</ol>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i>Paso 4 - Listado de Auxiliaturas vinculdas a la convocatoria - <?php  echo "".$con."";?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

							<form method="post" action="configure.php" accept-charset="utf-8">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Codigo Auxiliatura</th>
												<th>Nombre Auxiliatura</th>
											
												
												
											</tr>
										</thead>
										<tbody>
											<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from con_aux, auxiliatura where con_aux.COD_CONVOCATORIA = '$con' and con_aux.COD_AUXILIATURA = auxiliatura.COD_AUXILIATURA";
											$query=mysqli_query($conexion,$consulta);	
											$identi=0;
											while($dato=mysqli_fetch_array($query))
											{
												$cont++;
												?>
												<tr>
													<td><?php  echo "".$cont."";?></td>
													<td><?php  echo "".$dato['COD_AUXILIATURA']."";?></td>
													
													<td><?php  echo "".$dato['NOM_AUXILIATURA']."";?></td>
													
													
													
													
													
													
												
												<?php  


												$identi++;
											}
										?>
										
										</tbody>
										
									</table>
									
									<div class="control-group">
										<div class="controls">
											<a a href="#new_user" data-toggle="modal" class="btn btn-primary btn-sm"></i> Ingresar nuevo dato</a>
											<a href="pruebas_con.php?con=<?php echo"$con"; ?>"  class="btn btn-primary btn-sm"></i> Ir a Paso 5  </a>
											
											
										</div>
									</div>
								</div>
							</form>	    
                        </div>
                        <!-- /.panel-body -->
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	<div id="new_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"></i>Llenar los datos</h4>
					
				</div>
				<div class="modal-body">
					<form class="form-signin" action="crear_convocatoria_lab.php?con=<?php echo"$con"; ?>" method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Seleccione una Auxiliatura:</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon" ></span>
								<select name="auxiliatura" id="auxiliatura" class="form-control"> 
									<option value="">--Seleccione una Auxiliatura</option>
									<?php 
										$consulta1="select * from auxiliatura";
										$query1 = mysqli_query($conexion, $consulta1);

										while ($dato1=mysqli_fetch_array($query1)) {
										?>
										<option value='<?php echo"".$dato1['COD_AUXILIATURA'].""; ?>'><?php echo"".$dato1['NOM_AUXILIATURA'].""; ?></option>
										<?php  
									}
									 ?>
								</select>
							</div>
						</div>
						
						
						
						
						
						<div class="modal-footer">
							</br><button name="new_aux" type="submit" class="btn btn-success btn-sm" id="new_aux"></i>Ingresar Datos</button>
						</div>												
					</form>
				</div><!-- End of Modal body -->
			</div><!-- End of Modal content -->
		</div><!-- End of Modal dialog -->
	</div><!-- End of Modal -->
</div>
<!-- /.container -->
<?php      
include "includes/pie_home.inc";
?>
