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
			include "includes/nav_home_adm.inc";
        ?>


        <div id="page-wrapper"></br>
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li class="active">Listado de Convocatorias</li>
			</ol>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Listado de Convocatorias - Laboratorios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

							<form method="post" action="configure.php" accept-charset="utf-8">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Cod. Convocatoria</th>
												<th>Nombre Convocatoria</th>
												<th>Auxiliaturas</th>
												<th>Informacion</th>
												<th>Requisitos</th>
												<th>Areas Evaluacion</th>
												<th>Editar</th>
												
											</tr>
										</thead>
										<tbody>
											<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from convocatoria";
											$query=mysqli_query($conexion,$consulta);	
											$identi=0;
											while($dato=mysqli_fetch_array($query))
											{
												$cont++;
												?>
												<tr>
													<td><?php  echo "".$cont."";?></td>
													<td><?php  echo "".$dato['COD_CONVOCATORIA']."";?></td>
													<td ><?php  echo "".$dato['NOM_CONVOCATORIA']."";?></td>
													<td ></td>

													<?php
													$consulta2= "select * from requisito where COD_CONVOCATORIA = '$cod'";
													$query2=mysqli_query($conexion,$consulta2);
													if (mysqli_fetch_array($query)) {
													?>
													<td ><a  href="requisito_con.php?cod=<?php  echo "".$dato['COD_CONVOCATORIA']."";?>" class="btn btn-primary btn-sm"></i>Sin Datos</a></td>
													<?php
													}
													else 
													{
														?>
														<td ><a  href="requisito_con.php?cod=<?php  echo "".$dato['COD_CONVOCATORIA']."";?>" class="btn btn-primary btn-sm"></i>Ver</a></td>
														<?php
													}
													?>

													<?php
													$consulta3= "select * from requisito where COD_CONVOCATORIA = '$cod'";
													$query2=mysqli_query($conexion,$consulta3);
													if (mysqli_fetch_array($query)) {
													?>
													<td ><a  href="requisito_con.php?cod=<?php  echo "".$dato['COD_CONVOCATORIA']."";?>" class="btn btn-primary btn-sm"></i>Sin Datos</a></td>
													<?php
													}
													else 
													{
														?>
														<td ><a  href="requisito_con.php?cod=<?php  echo "".$dato['COD_CONVOCATORIA']."";?>" class="btn btn-primary btn-sm"></i>Ver</a></td>
														<?php
													}
													?>
													<td ><a  href="requisito_con.php?cod=<?php  echo "".$dato['COD_CONVOCATORIA']."";?>" class="btn btn-primary btn-sm"></i>Sin Datos</a></td>
													<td ><a  href="#new_user" data-toggle="modal" class="btn btn-primary btn-sm"></i>Sin Datos</a></td>
													
												
													
												
												<?php  


												$identi++;
											}
										?>
										
										</tbody>
										
									</table>
									
									<div class="control-group">
										<div class="controls">
											<a a href="#new_user" data-toggle="modal" class="btn btn-primary btn-sm"></i> Nueva Convocatoria</a>
											
											
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
					<h4 class="modal-title"></i>Llenar los datos de la Convocatoria para Laboratorio</h4>
					<h4 class="modal-title"></i>Paso 1 de 3</h4>
				</div>
				<div class="modal-body">
					<!-- aca empieza la ventana modal !-->
					<form class="form-signin" action="crear_convocatoria_lab.php" method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Codigo</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon" ></span>
								<input type="text" class="form-control" name="cod_con" id="cod_con" required placeholder="Codido de la Convocatoria">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Nombre</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" class="form-control" name="nom_con" id="nom_con" required placeholder="Nombre de la Convocatoria">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Fecha Inicio</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="date" class="form-control" name="fecha_ini" id="fecha_ini" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Fecha Conclusion</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="date" class="form-control" name="fecha_fin" id="fecha_fin" required>
							</div>
						</div>
						
						
						
						
						<div class="modal-footer">
							</br><button name="new_con" type="submit" class="btn btn-success btn-sm" id="new_con"></i>Ir a Paso 2</button>
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
