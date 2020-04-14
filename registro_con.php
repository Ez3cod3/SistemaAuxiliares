
<?php 
include "includes/cabecera_home.inc";
?>
<div class="container">
    <div id="wrapper">
		<?php
			// codigo para menu navegacion
			$hoy = date("F j, Y");
			include "includes/nav_home.inc";
			
        ?>
        <div id="page-wrapper"><br>
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li><a href="convocatoria.php">Convocatoria</a></li>
				<li class="active">Postulacion</li>
			</ol>
				<div class="col-lg-12">
					
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3><b style="color:blue;">Formulario de Postulacion Convoatoria ...</b></h3>
                            <h6 style="color:red">Los campos con un punto rojo son obligatorios</h6>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
							<br>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="bio">
                                    <div class="row">
										<div class="col-xs-12 col-sm-8 col-md-7 col-lg-7">
											<div class="account-wall">
												<div id="my-tab-content" class="tab-content">

													<div class="tab-pane active" id="login">

															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>Nombre</label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text" class="form-control"  value="">
																</div>
															</div>
															
															<div class="col-xs-15 col-sm-15 col-md-10 col-lg-10">
																<label>Apellido Paterno </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text" class="form-control" disabled value="">
																</div>
															</div>

															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>Apellido Materno </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text" class="form-control" value="">
																</div>
															</div>


															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>Codigo Sis </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text" class="form-control" value="">
																</div>
															</div>


															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>Cedula de identidad </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text" class="form-control" value="">
																</div>
															</div>
													</div>
												</div>
											</div>		
										</div>
									</div></br>
									<div class="btn-group">
										<center>
											<a a href="" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Enviar Postulacion</a>
											<a href="" class="btn btn-warning btn-sm"><i class="fa fa-hand-o-left"></i> Volver Atras</a>										
										</center>
									</div>
								</div>
                             </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-4 -->
		</div>
        <!-- /.page wraper -->
	</div>
	<!-- /.wraper -->
	<div id="act" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"> <i class="fa fa-edit"></i> Editar Datos de Carrera</h4>
				</div>
				<div class="modal-body">
					<form class="form-signin" action="mod_carrera.php"  method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Codigo de carrera </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon" ><img src="img/usr.png" width=20 height=20></span>
								<input type="hidden" name="id" value="<?php echo $id;?>">
								<input type="text" class="form-control" name="cod_carr" required value="<?php echo $dato['COD_CARRERA']; ?>">

							</div>
						</div>
						

						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Nombre Carrera </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon" ><img src="img/app.png" width=20 height=20></span>
								<input type="text" class="form-control" name="nom_carr" id="" required value="<?php echo $dato['NOMBRE']; ?>">
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<label>Facultad </label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="input-group">
								<span class="input-group-addon"><img src="img/genero.png" width=20 height=20></span>
					
								<select class="form-control" name='cod_fac' id="" required>
									<option value="">--Seleccione Facultad--</option>
									<?php

										require_once('conexion.php');
										$conexion=Conectar();

										$consulta1="select * from facultad";
										$query1=mysql_query($consulta1);
										while($dato1=mysql_fetch_array($query1)){
										?>
											<option value="<?php echo $dato1['COD_FAC']; ?>"><?php echo $dato1['NOMBRE_FAC']; ?></option>
										<?php 
										} 
										?>
								
  								</select><br>
					
							</div>
						</div>

						
						<div class="modal-footer">
							</br><button name="edit" type="submit" class="btn btn-success btn-sm" id="edit"><i class="fa fa-check"></i> Guardar Cambios</button>
						</div>												
					</form>
				</div><!-- End of Modal body -->
			</div><!-- End of Modal content -->
		</div><!-- End of Modal dialog -->
	</div><!-- End of Modal -->
	<div id="act_foto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"> <i class="fa fa-camera"></i> Editar Fotografia</h4>
				</div>
				<div class="modal-body">
					<form class="form-signin" action="user_datos.php" method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
							<br><img src="<?php echo $dato['FOTO_USER']; ?>" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<br><div class="input-group">
								<span class="input-group-addon"><img src="img/foto.png" width=20 height=20></span>
								<input type='file' name='archivo' required id="archivo" class="form-control"/>
								<input type="hidden" name="id" value="<?php echo $id; ?>">
							</div>									
						</div>
						<div class="modal-footer">
							</br><button name="foto" type="submit" class="btn btn-success btn-sm" id="foto"><i class="fa fa-check"></i> Guardar Cambios</button>
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