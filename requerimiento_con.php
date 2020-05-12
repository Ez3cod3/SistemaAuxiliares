<?php 
//session_start(); 
//$yes = $_SESSION['log']; 
//$cod = $_SESSION['cod'];
//$ids = $_SESSION['usr'];
//valor= $_GET['m'];
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
				<li class="active"> Listado de Postulaciones</li>
			</ol>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-briefcase"></i> Listado de Postulaciones por Convocatoria
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover " id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Codigo Convocatoria</th>
												<th>Nombre Auxiliatura</th>
												<th>Lista Postulantes</th>
											</tr>
										</thead>
										<tbody>
										<?php
											include_once('conexion.php');
											$conexion=Conectar();
											$cont=0;
											$consulta="select * from convocatoria as con, auxiliatura as aux where con.COD_AUXILIATURA = aux.COD_AUXILIATURA";
											$query=mysqli_query($conexion, $consulta);	
											$identi=0;
											while($dato=mysqli_fetch_array($query))
											{

												$cont++;
												?>
												
												<tr>
													<td ><?php echo "$cont"; ?></td>
													<td><?php echo "".$dato['COD_CONVOCATORIA'].""; ?></td>
													<td ><?php echo "".$dato['NOM_AUXILIATURA'].""; ?></td>
													<td ><center><a href ='upd_rol.php?id=".$dato['']."'><img src='img/editar.png' height='32' width='32'/></a></center></td>
													<td ><center><a href =""></a></center></td>
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