<?php 
include "includes/cabecera_home.inc";
?>

<div class="container">
    <div id="wrapper">
		<?php
			$hoy = date("F j, Y");
			include "includes/nav_home.inc";						
        ?>
         <div id="page-wrapper"><br>
			
			<section class="color1">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">
							<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
								<h4 align="center"><b style="color:black;">Bienvenido al Sistema de Gestion de Auxiliaturas de la Universidad Mayor de San Simon.</h4><hr>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<h3><b style="color:blue;">Noticias</b></h3><hr>
			
						<section>
							<div class='row'>
								<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
									<div class='row'>
										<?php
										include_once('conexion.php');
										$conexion=Conectar();
										$consulta= "select * from convocatoria as con, auxiliatura as aux where con.COD_AUXILIATURA = aux.COD_AUXILIATURA";
										$sql= mysqli_query($conexion, $consulta);
										$cont=0;
										while ($dato=mysqli_fetch_array($sql)) 
											{   

										?>
										<div class='col-xs-12 col-sm-9 col-md-6 col-lg-6'>
											<h3 style="color:black;"><?php echo "".$dato['NOM_CONVOCATORIA'].""; ?></h3><hr>
											<p align='justify' style="color:black;"><br><a href='convocatoria.php?id=<?php echo "".$dato['COD_CONVOCATORIA'].""; ?>'>leer más</a></p>
										</div>
										<div class='hidden-xs col-sm-3 col-md-4 col-lg-4'>
						
											<h3 style='color:green;'>Descarga PDF</h3><hr>
											<ul>
												<div class='btn-group-vertical'>
												
												<div class='btn-group'>
												<a type='button' href="descarga.php?id=<?php echo "".$dato['PDF_CONVOCATORIA'].""; ?>" class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='center' title='pdf'><img src='img/iconoPDF.png' height='20' width='20'/></a>
											
												</div>
											</ul>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
					
        </div>
        <!-- /#page-wrapper -->

    </div><br>
    <!-- /#wrapper -->
    <div id="login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"> <i class="fa fa-user fa-fw"></i>Login</h4>
				</div>
				<div class="modal-body">
					<form class="form-signin" action="validar_usu.php" method="post" enctype="multipart/form-data">
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<label>Usuario</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" class="form-control" placeholder="Identificacion" name="cod_usu">	
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<label>Contraseña</label>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="password" class="form-control" placeholder="Contraseña" name="con_usu">
							</div>
						</div>
						<div class="modal-footer">
							</br><button name="asig_form" type="submit" class="btn btn-success btn-sm" id="asig_rol"><i class="fa fa-check"></i>Iniciar Secion</button>
						</div>												
					</form>
				</div><!-- End of Modal body -->
			</div><!-- End of Modal content -->
		</div><!-- End of Modal dialog -->
	</div><!-- End of Modal -->
</div>
<!-- /#container -->
<?php      
include "includes/pie_home.inc";
?>

