<?php 
include "includes/cabecera_home.inc";
?>

<div class="container">
    <div id="wrapper">
		<?php
			$hoy = date("F j, Y");
			include "includes/nav_home_adm.inc";						
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
										
										<div class='col-xs-12 col-sm-9 col-md-6 col-lg-6'>
											<h3 style="color:black;">Convocatoria para Auxiliatura</h3><hr>
											<p align='justify' style="color:black;">Descripcion de la convocatoria<br><a href='convocatoria.php'>leer más</a></p>
										</div>
										<div class='hidden-xs col-sm-3 col-md-4 col-lg-4'>
						
											<h3 style='color:green;'>Descarga PDF</h3><hr>
											<ul>
												<div class='btn-group-vertical'>
												
												<div class='btn-group'>
												<button type='button' class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='center' title='pdf'><img src='img/iconoPDF.png' height='20' width='20'/></button>
											
												</div>
											</ul>
										</div>
										
									</div>
								</div>
							</div>
					
        </div>
        <!-- /#page-wrapper -->

    </div><br>
    <!-- /#wrapper -->
</div>
<!-- /#container -->
<?php      
include "includes/pie_home.inc";
?>

