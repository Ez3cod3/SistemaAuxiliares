<?php 
include "includes/cabecera_home.inc";
require_once('conexion.php');
$conexion = Conectar();
$con=$_GET['id'];
$consulta="select * from convocatoria where COD_CONVOCATORIA = '$con'";
$sql= mysqli_query($conexion,$consulta);
$dato= mysqli_fetch_array($sql);
?>

<div class="container">
    <div id="wrapper">
		<?php
			$hoy = date("F j, Y");
			include "includes/nav_home.inc";						
        ?>
         <div id="page-wrapper"><br>
			
			
			<h3><b style="color:blue;">Informacion - <?php echo "".$dato['NOM_CONVOCATORIA'].""; ?></b></h3><hr>
			
						<section>
							<div class='row'>
								<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
									<div class='row'>
										
										<div class='col-xs-12 col-sm-9 col-md-6 col-lg-6'>
											<h3 style="color:black;">Convocatoria para Auxiliatura</h3><hr>
											<p align='justify' style="color:black;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.<br></p>
										</div>
										<div class='hidden-xs col-sm-3 col-md-4 col-lg-4'>
						
											<h3 style='color:green;'>Descarga PDF</h3><hr>
											<ul>
												<div class='btn-group-vertical'>
												
												<div class='btn-group'>
												<a type='button' href="descarga.php?id=<?php echo "".$dato['PDF_CONVOCATORIA'].""; ?>" class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='center' title='pdf'><img src='img/iconoPDF.png' height='40' width='40'/></a>
											
												</div>
											</ul>
											<h3 style='color:green;'>Postularse</h3><hr>
											<ul>
												<div class='btn-group-vertical'>
												
												<div class='btn-group'>
												<a type='button' href="registro_con.php?id=<?php echo "".$dato['COD_CONVOCATORIA'].""; ?>"" class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='center' title='pdf'><img src='img/modificar.png' height='40' width='40'/></a>
											
												</div>
											</ul>
										</div>
										
									</div>
								</div>
							</div>
					
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>
<!-- /#container -->
<?php      
include "includes/pie_home.inc";
?>

