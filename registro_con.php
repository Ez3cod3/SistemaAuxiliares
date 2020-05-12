
<?php 
include "includes/cabecera_home.inc";
require_once('conexion.php');
$conexion = Conectar();
$con=$_GET['id'];
$consulta="select * from convocatoria as con, auxiliatura as aux where con.COD_AUXILIATURA = aux.COD_AUXILIATURA and con.COD_CONVOCATORIA = '$con'";
$sql= mysqli_query($conexion,$consulta);
$dato= mysqli_fetch_array($sql);
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
                            <h3><b style="color:blue;">Formulario de Postulacion <?php echo "".$dato['NOM_CONVOCATORIA'].""; ?></b></h3>
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
														<form action="reg_pos.php?con=<?php echo "".$dato['COD_CONVOCATORIA'].""; ?>&aux=<?php echo "".$dato['COD_AUXILIATURA'].""; ?>" method="post" enctype="multipart/form-data">

															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>Nombre</label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text"minlength="2" class="form-control" name="nom_pos" id="nom_pos">
																</div>
															</div>
															
															<div class="col-xs-15 col-sm-15 col-md-10 col-lg-10">
																<label>Apellido Paterno </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text" class="form-control" minlength="3" name="ape_pat_pos" id="ape_pat_pos">
																</div>
															</div>

															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>Apellido Materno </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text" class="form-control" minlength="2" name="ape_mat_pos" id="ape_mat_pos">
																</div>
															</div>
															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>E-mail </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="email" class="form-control" name="mail_pos" minlength="8" id="mail_pos">
																</div>
															</div>

															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>Codigo Sis </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text" class="form-control" minlength="8" name="cod_sis_pos">
																</div>
															</div>


															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>Cedula de identidad </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<input type="text" class="form-control" minlength="4" name="ci_pos" id="ci_pos">
																</div>
															</div>
															<div class="col-xs-15 col-sm-15 col-md-8 col-lg-8">
																<label>Seleccione la Auxiliatura a la que desea postularse </label>
															</div>
															<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
																<div class="input-group">
																	<span class="input-group-addon" ><img src="img/punto_rojo.png" width=10 height=10></span>
																	<select class="form-control" minlength="4" name="ci_pos" id="ci_pos">
																		<option value="">---Seleccionar Auxiliatura---</option>
																		<option value="">Aux1</option>
																		</select> 
																</div>
															</div>
															<div class="btn-group"><br>
																<center>
																	<button href="reg_con.php" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Enviar Postulacion</button>
																	<a href="convocatoria.php" class="btn btn-warning btn-sm"><i class="fa fa-hand-o-left"></i> Volver Atras</a>										
																</center>
															</div>
														</form>
													</div>
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
</div>
<!-- /.container -->
<?php      
include "includes/pie_home.inc";
?>