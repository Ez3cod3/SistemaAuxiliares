<?php 
session_start(); 
$yes = $_SESSION['log']; 
$cod = $_SESSION['cod'];
$ids = $_SESSION['usr'];
$con= $_GET['cod'];
include "includes/cabecera_home.inc";
?>
<div class="container">
    <div id="wrapper">
		<?php
			// codigo para menu navegacion
			$hoy = date("F j, Y");
			include "includes/nav_home_adm.inc";
        ?>
        <div id="page-wrapper">
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li class="active"> Listado de Postulantes - Meritos</li>
			</ol>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-briefcase"></i>Lista de Postulantes - Meritos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Postulante</th>
												<th>Calificacion</th>
												<th>Editar</th>
												
											</tr>
										</thead>
										<tbody>
										<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from postulacion, postulante, convocatoria where convocatoria.COD_CONVOCATORIA = '$con' and postulacion.COD_CONVOCATORIA = convocatoria.COD_CONVOCATORIA and postulacion.ID_POSTULANTE = postulante.ID_POSTULANTE	";
											$query=mysqli_query($conexion, $consulta);	
											$identi=0;
											while($dato=mysqli_fetch_array($query))
											{

												$cont++;
												?>
												
												<tr>
													<td ><?php echo "$cont"; ?></td>
													<td ><?php echo "".$dato['NOM_POSTULANTE'].""; ?> <?php echo "".$dato['APE_PAT_POSTULANTE'].""; ?> <?php echo "".$dato['APE_MAT_POSTULANTE'].""; ?></td>
													<?php 
													include_once('conexion.php');
													$conexion=Conectar();
													$aux1 = $dato['ID_POSTULACION'];
													$aux2 = $dato['COD_CONVOCATORIA'];
													$aux3 = 1;
													$consulta1="select * from nota where ID_POSTULACION = '$aux1' and COD_CONVOCATORIA = '$aux2' and TIPO_NOTA = '$aux3' ";
													$query1=mysqli_query($conexion, $consulta1);

													if ($dato1=mysqli_fetch_array($query1)) 
													{
														?>
														<td ><?php echo "".$dato1['NOTA_FINAL'].""; ?></td>

													<?php  	
													}else
													 {
													 	?>
														<td><a href="calif_meritos.php?cod=<?php echo "$con"; ?>&post=<?php echo "".$dato['ID_POSTULANTE'].""; ?>&postu=<?php echo "".$dato['ID_POSTULACION'].""; ?>" class="btn btn-primary btn-sm"></i>Por Validar</a></td>
													<?php 
													}
													 ?>
													

													 
													
													<td ><a href="calificacion_concimientos.php" class="btn btn-primary btn-sm"></i>Editar</a></td>
													
													
										<?php
											}
										?>
										</tbody>
										
									</table>
									
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
</div>
<!-- /.container -->
<?php      
include "includes/pie_home.inc";
?>