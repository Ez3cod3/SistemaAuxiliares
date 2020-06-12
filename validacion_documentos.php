
<?php 
session_start(); 
$yes = $_SESSION['log']; 
$cod = $_SESSION['cod'];
$ids = $_SESSION['usr'];

$con=$_GET['con'];
$pos=$_GET['post'];

    
include "includes/cabecera_home.inc";
?>
<div class="container">
    <div id="wrapper">
		<?php
			// codigo para menu navegacion
			$hoy = date("F j, Y");
			include "includes/nav_home_adm.inc";
			
			include_once('conexion.php');
			$conexion=Conectar();
			
			// codigo para actualiza
			
			$consulta="select * from convocatoria, documento where convocatoria.COD_CONVOCATORIA = documento.COD_CONVOCATORIA and convocatoria.COD_CONVOCATORIA = '$con'";
			$query=mysqli_query($conexion, $consulta);
			$consulta1="select * from postulante, postulacion where postulante.ID_POSTULANTE = postulacion.ID_POSTULANTE and postulacion.ID_POSTULACION = '$pos' ";
			$query1=mysqli_query($conexion, $consulta1);
			$dato1=mysqlI_fetch_array($query1);
			
			

		
        ?>
        <div id="page-wrapper"><br>
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li><a href="lis_user.php?m=0">Validacion - Documentacion</a></li>
				
			</ol>
				<div class="col-lg-12">
					
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-info-circle">Postulacion de <?php echo "".$dato1['NOM_POSTULANTE'].""; ?> </i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
							<br>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="bio">
                                    <div class="row">
										<div id="map">
											
										</div>
										<div class="col-xs-12 col-sm-8 col-md-7 col-lg-7">
											<div class="account-wall">
												<div id="my-tab-content" class="tab-content">
													<form action="validar_doc.php?con=<?php echo "".$con.""; ?>&pos=<?php echo "".$pos.""; ?>" method="post">
													<div class="tab-pane active" id="login">
														<?php
														$cont=0;
														while ($dato=mysqlI_fetch_array($query)) {
														 	
														$cont++;

														 ?>

															<div >
																<label><?php echo "".$dato['NOM_DOCUMENTO'].""; ?> </label>
															</div>
															<div >
																<div class="form-group" id="">
							                                        
							                                    <div class="radio">
							                                        <label >
							                                            <input type="radio" name="optradio[<?php echo $cont; ?>]" value="cumple" />Cumple
							                                        </label>
							                                        <label >
							                                            <input type="radio" name="optradio[<?php echo $cont; ?>]" value="nocumple" checked />No Cumple
							                                        </label>
							                                    </div>
							                                    
							                                	</div>
															</div>
															
															
															<?php  
															 } 

															?>
															<div >
																<div class="input-group">
																	<label>Observaciones</label>
																	<textarea name="obs" id="obs" cols="30" rows="10" class="form-control"></textarea>
																</div>
															</div>


													</div>
													<div class="btn-group">
														
														<center>
															<button type="submit" class="btn btn-success" name="submit">Finalizar</button>
																							
														</center>
													</div>
													</form>
												</div>
											</div>		
										</div>
									</div></br>
									
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