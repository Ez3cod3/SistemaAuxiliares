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
			<ol class="breadcrumb">
				<li class="active">Home</li>
			</ol>
			<section class="color1">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">
							<div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
								<br><p align="center"><img src="img/logo.png" class="img-responsive" width="120" height="100"></p>
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
								<h4><b style="color:blue;">Bienvenido:</b></h4><hr>
								<p align="justify" style="padding: 5px 5px 5px 3px;">Bienvenido al Sistema de Gestion de Auxiliares de la Universidad Mayor de San Simon.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<h3><b style="color:blue;">Menus</b></h3><hr>
			
        </div>
        <!-- /#page-wrapper -->

    </div><br>
    <!-- /#wrapper -->
</div>
<!-- /#container -->
<?php      
include "includes/pie_home.inc";
?>

