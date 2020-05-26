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
				<li class="active">Listado de Usuarios</li>
			</ol>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Listado de Usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form method="post" action="configure.php" accept-charset="utf-8">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Nombre</th>
												<th>Estado</th>
												<th>Cambiar</th>
											</tr>
										</thead>
										<tbody>
										<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from usuario where HABILITADO_USU = 1";
											$query=mysqli_query($conexion, $consulta);	
											$identi=0;
											while($dato=mysqli_fetch_array($query))
											{

												$cont++;
												?>
												<tr>
													<td ><?php echo "$cont"; ?></td>
													<td ><?php echo "".$dato["NOM_USUARIO"].""; ?></td>
													<td>Habilitado</td>

														   
													<td ><center><a a href="configuracion_usu.php?id=<?php echo "".$dato["COD_USUARIO"].""; ?>&des=1" class="btn btn-danger btn-sm" name="deshabilitar" id="deshabilitar">Deshabilitar</a></center></td>
												</tr>
												
												<?php  
											}
										?>
										</tbody>
										
									</table>
									
									<div class="control-group">
										<div class="controls">
											<a a href="#new_user" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Nuevo Usuario</a>
											
											<hr>
										</div>
									</div>
								</div>
							</form>	
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="panel panel-danger">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Listado de Usuarios Deshabilitados
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form method="post" action="configure.php" accept-charset="utf-8">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example1">
										<thead>
											<tr>
												<th>#</th>
												<th>Nombre</th>
												<th>Estado</th>
												<th>Cambiar</th>
												<!--th>---</th-->
												
												
											</tr>
										</thead>
										<tbody>
										<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from usuario where HABILITADO_USU = 0";
											$query=mysqli_query($conexion, $consulta);	
											$identi=0;
											while($dato=mysqli_fetch_array($query))
											{

												$cont++;
												?>
												<tr>
													<td ><?php echo "$cont"; ?></td>
													<td ><?php echo "".$dato["NOM_USUARIO"].""; ?></td>
													<td>Deshabilitado</td>

													


													
														   
													<td ><center><a a href="configuracion_usu.php?id=<?php echo "".$dato["COD_USUARIO"].""; ?>&des=0"  class="btn btn-success btn-sm" name="habilitar" id="habilitar">Habilitar</a></center></td>
												</tr> 
												
												<?php  
											}
										?>
										</tbody>
										
									</table>
									
									
								</div>
							</form>	
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Aqui comienza la ventana modal -->
	<div id="new_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"> <i class="fa fa-user-plus"></i> Registrar Datos de Usuario</h4>
				</div>
				<div class="modal-body">
					<form class="form-signin" action="configuracion_usu.php" method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Usuario </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon" ></span>
								<input type="text" class="form-control" name="usr" id="usr" required >
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Contraseña </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" class="form-control" name="pwd" id="pwd" required >
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Nombre(s) </label>
						</div>	
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" class="form-control" name="nom" id="nom" required >
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Ap. Paterno </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon" ></span>
								<input type="text" class="form-control" name="app" id="app" required >
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Ap. Materno </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" class="form-control" name="apm" id="apm" required >
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>CI </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" class="form-control" name="ci" id="ci" pattern="[0-9]+.{6,}" required
								title="Ingrese solo numeros minimo 6 caracteres" >
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Expedido en:</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<select class="form-control" name='exp' id="exp" required>
									<option value="">--- Seleccione Departamento ---</option>
									<option value='Cochabamba'>Cochabamba</option>
									<option value='La Paz'>La Paz</option>
									<option value='Santa Cruz'>Santa Cruz</option>
									<option value='Oruro'>Oruro</option>
									<option value='Beni'>Beni</option>
									<option value='Pando'>Pando</option>
									<option value='Chuquisaca'>Chuquisaca</option>
									<option value='Tarija'>Tarija</option>
									<option value='Potosi'>Potosi</option>
								</select>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Rol </label>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<select class="form-control" name='rol' id="rol" required>

									<option value="">--- Seleccione Rol ---</option>
									<?php
									//consulta para mostrar todos los roles 
									require_once('conexion.php');
									$conexion=Conectar();
									$consulta1="select * from rol" ;
									$query1=mysqli_query($conexion, $consulta1);
									while ($dato1=mysqli_fetch_array($query1)) {
										?>
										<option value='<?php echo"".$dato1['ID_ROL']."" ?>'><?php echo"".$dato1['NOM_ROL']."" ?></option>
										<?php  
									}
									 ?>
									
								</select>
							</div>
						</div>
						
						

						<div class="modal-footer">
							<button name="new_user" type="submit" class="btn btn-success btn-sm" id="new_con">Crear</button>
							<button  type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
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
