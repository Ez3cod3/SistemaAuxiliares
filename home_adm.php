<?php 
session_start(); 
$yes = $_SESSION['log']; 
$cod = $_SESSION['cod'];
$ids = $_SESSION['usr'];

include_once('conexion.php');
$conexion=Conectar();
$cont=0;
$consulta="select * from usuario where COD_USUARIO = '$cod'";
$query=mysqli_query($conexion,$consulta);	
$identi=0;
$dato=mysqli_fetch_array($query);

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
			<h3><b style="color:blue;">Usuario: <?php echo "".$dato['NOM_USUARIO'].""; ?> </b></h3><hr>
			
						
        </div>
        <!-- /#page-wrapper -->

    </div><br>
    <!-- /#wrapper -->
</div>
<!-- /#container -->
<?php      
include "includes/pie_home.inc";
?>

