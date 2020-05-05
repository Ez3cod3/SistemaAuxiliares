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
				<li class="active"> Listado de Formularios Por Funcion</li>
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
                            <i class="fa fa-university"></i> Listado de Formularios Por Funcion
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Funcion</th>
												<th>Formulario</th>
												<th>URL</th>
												<th>Eliminar</th>
											</tr>
										</thead>
										<tbody>
										<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from formulario,funcion,form_fun where formulario.id_form=form_fun.id_form and form_fun.id_fun=funcion.id_fun";
											$query=mysql_query($consulta);	
											$identi=0;
											while($dato=mysql_fetch_array($query))
											{
												$cont++;
												echo "
												<tr>
													<td >".$cont."</td>
													<td>".$dato["NOM_FUN"]."</td>
													<td >".$dato["NOM_FORM"]."</td>
													<td >".$dato["URL_FORM"]."</td>
													<td ><center><a href ='del_form_func.php?id=".$dato['ID_FORM_FUN']."'><img src='img/eliminar.png' height='32' width='32'/></a></center></td>";
											}
										?>
										</tbody>
										
									</table>
									<div class="control-group">
										<div class="controls">
											<a a href="#new_form_func" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i> Nuevo</a>
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
	<div id="new_form_func" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"> <i class="fa fa-plus-square"></i> Asignar Formularios a cada Funcion</h4>
				</div>
				<div class="modal-body">
					<form class="form-signin" action="configure.php" method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<label>Funcion</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
							<div class="input-group">
								<span class="input-group-addon"><img src="img/funcion.png" width="20" height="20"></span>
								<select class="form-control" name='func2' id="func2" required>
									<option value="">--Seleccione Funcion--</option>
									<?php
										$consulta1="select * from funcion";
										$query1=mysql_query($consulta1);
										while($dato1=mysql_fetch_array($query1)){
										?>
											<option value="<?php echo $dato1['ID_FUNC']; ?>"><?php echo $dato1['NOM_FUNC']; ?></option>
										<?php 
										} 
										?>
								</select>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<label>Formulario</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
							<div class="input-group">
								<span class="input-group-addon"><img src="img/formulario.png" width="20" height="20"></span>
								<select class="form-control" name='form1' id="form1" required>
									<option value="">--Seleccione Formulario--</option>
									<?php
										$consulta1="select * from formulario";
										$query1=mysql_query($consulta1);
										while($dato1=mysql_fetch_array($query1)){
										?>
											<option value="<?php echo $dato1['ID_FORM']; ?>"><?php echo $dato1['NOM_FORM']; ?></option>
										<?php 
										} 
										?>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							</br><button name="asig_form" type="submit" class="btn btn-success btn-sm" id="asig_rol"><i class="fa fa-check"></i> Insertar Datos</button>
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