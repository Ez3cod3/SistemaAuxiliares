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
				<li class="active"> Listado de Funciones por Rol</li>
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
                            <i class="fa fa-university"></i> Listado de Funciones por Rol
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Rol</th>
												<th>Funcion</th>
												<th>Eliminar</th>
											</tr>
										</thead>
										<tbody>
										<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from rol,funcion,rol_fun where rol.ID_ROL = rol_fun.ID_ROL and rol_fun.id_funcion = funcion.id_funcion";
											$query=mysqli_query($conexion, $consulta);	
											$identi=0;
											
											while($dato=mysqli_fetch_array($query))
											{
												$cont++;
												echo "
												<tr>
													<td >".$cont."</td>
													<td>".$dato["NOM_ROL"]."</td>
													<td >".$dato["NOM_FUNCION"]."</td>
													<td ></td>
													";
													//<td ><center><a href ='del_rol_func.php?id=".$dato['ID_ROL_FUN']."'><img src='img/eliminar.png' height='32' width='32'/></a></center></td>
											}
										?>
										</tbody>
										
									</table>
									<div class="control-group">
										<div class="controls">
											<a a href="#new_rol_func" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i> Nuevo</a>
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



	<div id="new_rol_func" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"> <i class="fa fa-plus-square"></i> Asignar Funcion para cada Rol</h4>
				</div>
				<div class="modal-body">
					<form class="form-signin" action="configuracion.php" method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<label>Rol</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<select class="form-control" name='rol1' id="rol1" required>
									<option value="">--Seleccione Rol--</option>
									<?php
										$consulta1="select * from rol";
										$query1=mysqlI_query($conexion, $consulta1);
										while($dato1=mysqlI_fetch_array($query1)){
										?>
											<option value="<?php echo $dato1['ID_ROL']; ?>"><?php echo $dato1['NOM_ROL']; ?></option>
										<?php 
										} 
										?>
								</select>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<label>Funcion</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<select class="form-control" name='func1' id="func1" required>
									<option value="">--Seleccione Funcion--</option>
									<?php
										$consulta1="select * from funcion";
										$query1=mysqli_query($conexion, $consulta1);
										while($dato1=mysqli_fetch_array($query1)){
										?>
											<option value="<?php echo $dato1['ID_FUNCION']; ?>"><?php echo $dato1['NOM_FUNCION']; ?></option>
										<?php 
										} 
										?>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							</br><button name="asig_rol" type="submit" class="btn btn-success btn-sm" id="asig_rol"><i class="fa fa-check"></i> Insertar Datos</button>
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