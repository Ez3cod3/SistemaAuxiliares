<?php 
session_start(); 
$yes = $_SESSION['log']; 
$cod = $_SESSION['cod'];
$ids = $_SESSION['usr'];

$valor= $_GET['m'];
    
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
				<li class="active"> Listado de Funciones del Sistema</li>
			</ol>
            <div class="row">
				<?php
					if($valor==1){
				?>
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Exito!</strong> Datos Actualizados Correctamente.
					</div>
					<?php
					}if($valor==2){
					?>
						<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>¡Exito!</strong> Se elimino el elemento Seleccionado.
						</div>
					<?php
					}if($valor==3){
					?>
						<div class="alert alert-info alert-dismissable">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>¡Exito!</strong> Datos Ingresados Correctamente.
						</div>
					<?php
					}
					?>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-briefcase"></i> Listado de Funciones del Sistema
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Funcion</th>
												<th>Descripcion</th>
												<th>Editar</th>
												<th>Eliminar</th>
											</tr>
										</thead>
										<tbody>
										<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from funcion";
											$query=mysqli_query($conexion, $consulta);	
											$identi=0;
											while($dato=mysqli_fetch_array($query))
											{
												$cont++;
												echo "
												<tr>
													<td >".$cont."</td>
													<td>".$dato["NOM_FUNCION"]."</td>
													<td >".$dato["DESCRIPCION_FUNCION"]."</td>
													<td ></td>
													<td ></td>
													";
													//<td ><center><a href ='upd_func.php?id=".$dato['ID_FUNCION']."'><img src='img/editar.png' height='32' width='32'/></a></center></td>
													//<td ><center><a href ='del_func.php?id=".$dato['ID_FUNCION']."'><img src='img/eliminar.png' height='32' width='32'/></a></center></td>
											}
										?>
										</tbody>
										
									</table>
									<div class="control-group">
										<div class="controls">
											<a a href="#new_func" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i> Nuevo</a>
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
	<div id="new_func" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"> <i class="fa fa-plus-square"></i> Nueva Funcion del Sistema</h4>
				</div>
				<div class="modal-body">
					<form class="form-signin" action="configuracion.php" method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<label>Funcion </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" class="form-control" name="funcion" id="funcion" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<label>Descripcion</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<textarea class="form-control" name="des_fun" id="des_fun" required rows="3"></textarea>
							</div>
						</div>
						
						<div class="modal-footer">
							</br><button name="insert_func" type="submit" class="btn btn-success btn-sm" id="insert_func"><i class="fa fa-check"></i> Insertar Datos</button>
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