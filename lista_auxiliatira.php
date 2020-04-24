<?php 

session_start(); 
$yes = $_SESSION['log']; 
$cod = $_SESSION['cod'];
$ids = $_SESSION['usr'];
    
include "includes/cabecera_home.inc";
?>


<div class="container">
  
    <div id="wrapper">
		<?php
			// codigo para menu navegacion
			$hoy = date("F j, Y");
			include "includes/nav_home.inc";
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
                            <i class="fa fa-user"></i> Listado de Auxiliaturas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

							<form method="post" action="configure.php" accept-charset="utf-8">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Cod. de la Auxiliatura</th>
												<th>Nombre de la Auxiliatura </th>
												<th>Cant.</th>
												<th>Hrs. Acadenicas</th>
												
											</tr>
										</thead>
										<tbody>
											<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from auxiliatura";
											$query=mysqli_query($conexion,$consulta);	
											$identi=0;
											while($dato=mysqli_fetch_array($query))
											{
												$cont++;
												?>
												<tr>
													<td><?php  echo "".$cont."";?></td>
													<td><?php  echo "".$dato['COD_AUXILIATURA']."";?></td>
													<td ><?php  echo "".$dato['NOM_AUXILIATURA']."";?></td>
													<td ><?php  echo "".$dato['NUM_AUXILIATURA']."";?></td>
													<td ><?php  echo "".$dato['HRS_AUXILIATURA']."";?></td>
													
												
												<?php  


												$identi++;
											}
										?>
										
										</tbody>
										
									</table>
									<?php echo "<input type=\"hidden\" id=count name=count value=".$identi." ></input>"; ?>
									<div class="control-group">
										<div class="controls">
											<a a href="#new_user" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Nuevo Auxiliatura</a>
											
											
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
					<h4 class="modal-title"> <i class="fa fa-user-plus"></i> Registrar Nueva Auxiliatura</h4>
				</div>
				<div class="modal-body">

					<form class="form-signin" action=""  method="post" enctype="multipart/form-data">
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Codigo Auxiliatura </label>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
							
								<input type="text" class="form-control" name="cod_mat" id="cod_mat" required >
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Nombre Auxiliatura </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								
								
								<input type="text" class="form-control" name="sig_mat" id="sig_mat" required >
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Nro. Auxiliares </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								
								
								<input type="text" class="form-control" name="asi_mat" id="asi_mat" required >
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Carga horaria hrs/mes </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								
								
								<input type="text" class="form-control" name="asi_mat" id="asi_mat" required >
							</div>
						</div>

			
						
						<div class="modal-footer">
							</br><button name="new_mat" type="submit" class="btn btn-success btn-sm" id="new_user"><i class="fa fa-user-plus"></i>Crear Nueva Materia </button>
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
