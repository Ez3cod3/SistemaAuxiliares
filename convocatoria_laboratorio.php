<?php 

session_start(); 
$yes = $_SESSION['log']; 
$cod = $_SESSION['cod'];
$ids = $_SESSION['usr'];

$con = $_GET['con'];

    
include "includes/cabecera_home.inc";
?>


<div class="container">
  
    <div id="wrapper">
        <?php
            // codigo para menu navegacion
            $hoy = date("F j, Y");
            include "includes/nav_lab.inc";
        ?>


        <div id="page-wrapper"></br>
            <ol class="breadcrumb">
                <li>Configuracion de Convocatoria - Laboratorio</li>
                
            </ol>
            <div >
                <div >
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Requerimientos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form method="post" action="configure.php" accept-charset="utf-8">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cant.</th>
                                                <th>Hrs. Academicas</th>
                                                
                                                <th>Nombre de Auxiliatura</th>
                                                <th>Codigo de Auxiliatura</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once('conexion.php');
                                            $conexion=Conectar();
                                            $cont=0;
                                            $consulta="select * from con_aux, auxiliatura where con_aux.COD_AUXILIATURA = auxiliatura.COD_AUXILIATURA AND con_aux.COD_CONVOCATORIA = '$con'";
                                            $query=mysqli_query($conexion,$consulta);   
                                            $identi=0;
                                            while($dato=mysqli_fetch_array($query))
                                            {
                                                $cont++;
                                                ?>
                                                <tr>
                                                    <td><?php  echo "".$cont."";?></td>
                                                    <td><?php  echo "".$dato['CANT_AUX']."";?></td>
                                                    <td ><?php  echo "".$dato['HRS_AUXILIATURA']."";?></td>
                                                    <td ><?php  echo "".$dato['NOM_AUXILIATURA']."";?></td>
                                                    <td ><?php  echo "".$dato['COD_AUXILIATURA']."";?></td>
                                                    
                                                <?php  



                                                $identi++;
                                            }
                                        ?>
                                        
                                        </tbody>
                                        
                                    </table>
                                    
                                    <div class="control-group">
                                        <div class="controls">
                                            <a a href="#new_req" data-toggle="modal" class="btn btn-primary btn-sm"></i> Nuevo Requerimiento</a>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div>
                        <!-- /.panel-body -->
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div >
                <div >
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Requisitos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form method="post" action="configure.php" accept-charset="utf-8">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Requisito</th>
                                                
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once('conexion.php');
                                            $conexion=Conectar();
                                            $cont=0;
                                            $consulta="select * from requisito where COD_CONVOCATORIA = '$con'";
                                            $query=mysqli_query($conexion,$consulta);   
                                            $identi=0;
                                            while($dato=mysqli_fetch_array($query))
                                            {
                                                $cont++;
                                                ?>
                                                <tr>
                                                    <td><?php  echo "".$cont."";?></td>
                                                    <td><?php  echo "".$dato['DES_REQUISITO']."";?></td>
                                                    
                                                <?php  



                                                $identi++;
                                            }
                                        ?>
                                        
                                        </tbody>
                                        
                                    </table>
                                    
                                    <div class="control-group">
                                        <div class="controls">
                                            <a a href="#new_reque" data-toggle="modal" class="btn btn-primary btn-sm"></i> Nuevo Requisito</a>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div>
                        <!-- /.panel-body -->
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div >
                <div >
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Documentos a Presentar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form method="post" action="configure.php" accept-charset="utf-8">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Documento</th>
                                                
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once('conexion.php');
                                            $conexion=Conectar();
                                            $cont=0;
                                            $consulta="select * from documento where COD_CONVOCATORIA = '$con'";
                                            $query=mysqli_query($conexion,$consulta);   
                                            $identi=0;
                                            while($dato=mysqli_fetch_array($query))
                                            {
                                                $cont++;
                                                ?>
                                                <tr>
                                                    <td><?php  echo "".$cont."";?></td>
                                                    <td><?php  echo "".$dato['DES_DOCUMENTO']."";?></td>
                                                    
                                                <?php  



                                                $identi++;
                                            }
                                        ?>
                                        
                                        </tbody>
                                        
                                    </table>
                                    
                                    <div class="control-group">
                                        <div class="controls">
                                            <a a href="#new_doc" data-toggle="modal" class="btn btn-primary btn-sm"></i> Nuevo Documento</a>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div>
                        <!-- /.panel-body -->
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div >
                <div >
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Calificacion de Meritos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form method="post" action="configure.php" accept-charset="utf-8">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Area de Calificacion</th>
                                                <th>Puntaje Area</th>
                                                
                                                
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once('conexion.php');
                                            $conexion=Conectar();
                                            $cont=0;
                                            $consulta="select * from merito where COD_CONVOCATORIA = '$con'";
                                            $query=mysqli_query($conexion,$consulta);   
                                            $identi=0;
                                            while($dato=mysqli_fetch_array($query))
                                            {
                                                $cont++;
                                                ?>
                                                <tr>
                                                    <td><?php  echo "".$cont."";?></td>
                                                    <td><?php  echo "".$dato['NOM_MERITO']."";?></td>
                                                    <td ><?php  echo "".$dato['PUNTAJE_MERITO']."";?></td>
                                                   
                                                    
                                                <?php  
                                            }
                                        ?>
                                        
                                        </tbody>
                                        
                                    </table>
                                    
                                    <div class="control-group">
                                        <div class="controls">
                                            <a a href="#new_mer" data-toggle="modal" class="btn btn-primary btn-sm"></i> Nueva Area de Calificacion</a>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div>
                        <!-- /.panel-body -->
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div >
                <div >
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Calificacion de Conocimientos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form method="post" action="configure.php" accept-charset="utf-8">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tematica</th>
                                                <?php 
                                                 include_once('conexion.php');
                                                    $conexion=Conectar();
                                                    $cont=0;
                                                    $consulta="select * from con_aux where COD_CONVOCATORIA = '$con'";
                                                    $query=mysqli_query($conexion,$consulta);
                                                    while($dato=mysqli_fetch_array($query)) 
                                                    {
                                                           
                                                            ?>
                                                            
                                                                <th><?php  echo "".$dato['COD_AUXILIATURA']."";?></th>
                                                            
                                                            <?php  

                                                        }
                                                    ?>  
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once('conexion.php');
                                            $conexion=Conectar();
                                            $cont=0;
                                            $consulta="select * from conocimiento where COD_CONVOCATORIA = '$con'";
                                            $query=mysqli_query($conexion,$consulta);   
                                            $identi=0;
                                            while($dato=mysqli_fetch_array($query))
                                            {
                                                $cont++;
                                                ?>
                                                <tr>
                                                    <td><?php  echo "".$cont."";?></td>
                                                    <td><?php  echo "".$dato['NOM_CONOCIMIENTO']."";?></td>
                                                 <?php 
                                                  $consulta1="select * from con_aux where COD_CONVOCATORIA = '$con'";
                                                    $query1=mysqli_query($conexion,$consulta1);
                                                     while($dato1=mysqli_fetch_array($query1)) 
                                                    {
                                                        $aux=$dato1['COD_AUXILIATURA'];

                                                        $consulta2="select * from concimiento_aux where COD_AUXILIATURA = '$aux'";
                                                        $query2=mysqli_query($conexion,$consulta2);
                                                        $dato2=mysqli_fetch_array($query2);
                                                           
                                                            ?>
                                                            
                                                                <td><?php  echo "".$dato2['PUNTAJE']."";?></td>
                                                            
                                                    <?php  

                                                        }
                                                    ?>  
                                                    
                                                    
                                                <?php  

                                            }
                                        ?>
                                        
                                        </tbody>
                                        
                                    </table>
                                    
                                    <div class="control-group">
                                        <div class="controls">
                                            <a a href="#new_conocimiento" data-toggle="modal" class="btn btn-primary btn-sm"></i> Nueva Tematica</a>
                                            <a a href="#new_puntaje" data-toggle="modal" class="btn btn-primary btn-sm"></i> Añadir puntaje</a>
                                        </div>
                                
                                    </div>
                                </div>
                            </form>     
                        </div>
                        <!-- /.panel-body -->
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <div id="new_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></i>Llenar los datos de la Convocatoria para Laboratorio</h4>
                    <h4 class="modal-title"></i>Paso 1 de 3</h4>
                </div>
                <div class="modal-body">
                    <!-- aca empieza la ventana modal !-->
                    <form class="form-signin" action="crear_convocatoria_lab.php" method="post" enctype="multipart/form-data">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <label>Codigo</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="input-group">
                                <span class="input-group-addon" ></span>
                                <input type="text" class="form-control" name="cod_con" id="cod_con" minlength="3" maxlength="8" required placeholder="Codido de la Convocatoria">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <label>Nombre</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="nom_con" id="nom_con" minlength="6" maxlength="100" required placeholder="Nombre de la Convocatoria">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <label>Fecha Inicio</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="date" class="form-control" name="fecha_ini" id="fecha_ini" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <label>Fecha Conclusion</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <label>PDF</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="file" class="form-control" name="file" id="file" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <label>Tipo de Convocatoria</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="input-group">
                            <span class="input-group-addon" ></span>
                            <select class="form-control" minlength="4" name="ci_pos" id="ci_pos">
                                <option value="">---Seleccionar Tipo de Convocatoria---</option>
                                <option value="1">Convocatoria Docencia</option>
                                <option value="2">Convocatoria Laboratorios</option>
                            </select> 
                            </div>
                        </div>
                        
                        
                        <div class="modal-footer">
                            </br><button name="new_con" type="submit" class="btn btn-success btn-sm" id="new_con"></i>Crear Convocatoria</button>
                        </div>                                              
                    </form>
                </div><!-- End of Modal body -->
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->

    <div id="new_req" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> <i class="fa fa-plus-square"></i> Nueva Auxiliatura</h4>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="crear_convocatoria_lab.php?con=<?php  echo "".$con."";?>" method="post" enctype="multipart/form-data">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label>Cantidad </label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="cantidad" id="cantidad" required minlength="1" maxlength="42">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label>Hrs. Academicas </label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="horas" id="horas" required minlength="1" maxlength="42">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label>Nombre </label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="nombre" id="nombre" required minlength="3" maxlength="200">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label>Codigo </label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="codigo" id="codigo" required minlength="3" maxlength="42">
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            </br><button name="new_requisito" type="submit" class="btn btn-success btn-sm" id="new_requisito"><i class="fa fa-check"></i>Insertar</button>
                        </div>                                              
                    </form>
                </div><!-- End of Modal body -->
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->

    <div id="new_reque" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> <i class="fa fa-plus-square"></i>Nuevo Requisito</h4>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="crear_convocatoria_lab.php?con=<?php  echo "".$con."";?>" method="post" enctype="multipart/form-data">
                        
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label>Requisito</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <textarea class="form-control" name="requisito" id="requisito" required rows="3" minlength="3" maxlength="1000"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            </br><button name="new_req" type="submit" class="btn btn-success btn-sm" id="new_req"><i class="fa fa-check"></i>Insertar</button>
                        </div>                                              
                    </form>
                </div><!-- End of Modal body -->
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->

    <div id="new_doc" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> <i class="fa fa-plus-square"></i>Nuevo Documento</h4>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="crear_convocatoria_lab.php?con=<?php  echo "".$con."";?>" method="post" enctype="multipart/form-data">
                        
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label>Documento</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <textarea class="form-control" name="docu" id="docu" required rows="3" minlength="3" maxlength="1000"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            </br><button name="new_doc" type="submit" class="btn btn-success btn-sm" id="new_doc"><i class="fa fa-check"></i>Insertar</button>
                        </div>                                              
                    </form>
                </div><!-- End of Modal body -->
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->

    <div id="new_conocimiento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> <i class="fa fa-plus-square"></i>Nueva Tematica De Calificacion</h4>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="crear_convocatoria_lab.php?con=<?php  echo "".$con."";?>" method="post" enctype="multipart/form-data">
                        
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label>Nueva Tematica de Calificacion</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <textarea class="form-control" name="tema" id="tema" required rows="3" minlength="3" maxlength="1000"></textarea>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            </br><button name="new_cono" type="submit" class="btn btn-success btn-sm" id="new_cono"><i class="fa fa-check"></i>Insertar</button>
                        </div>                                              
                    </form>
                </div><!-- End of Modal body -->
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->

    <div id="new_puntaje" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> <i class="fa fa-plus-square"></i>Designar puntaje</h4>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="crear_convocatoria_lab.php?con=<?php  echo "".$con."";?>" method="post" enctype="multipart/form-data">
                        
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <label>Auxiliatura</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="input-group">
                            <span class="input-group-addon" ></span>
                            <select class="form-control" minlength="4" name="ci_pos" id="ci_pos">
                                <option value="">---Seleccionar Tipo de Convocatoria---</option>
                                <?php
                                $conexion=Conectar();
                                    $cont=0;
                                    $consulta="select * from con_aux, auxiliatura where con_aux.COD_AUXILIATURA = auxiliatura.COD_AUXILIATURA AND con_aux.COD_CONVOCATORIA = '$con'";
                                    $query=mysqli_query($conexion,$consulta);   
                                    $identi=0;
                                    while ($dato=mysqli_fetch_array($query)) {
                            
                                 ?>
                                <option value="<?php  echo "".$dato['COD_AUXILIATURA']."";?>"><?php  echo "".$dato['COD_AUXILIATURA']."";?></option>
                                
                                <?php 
                                }

                                 ?>
                            </select> 
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <label>Tematica</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="input-group">
                            <span class="input-group-addon" ></span>
                            <select class="form-control" minlength="4" name="ci_pos" id="ci_pos">
                                <option value="">---Seleccionar Tematica---</option>
                                <?php
                                $conexion=Conectar();
                                   $consulta="select * from conocimiento where COD_CONVOCATORIA = '$con'";
                                            $query=mysqli_query($conexion,$consulta);   
                                            $identi=0;
                                    $query=mysqli_query($conexion,$consulta);   
                                    $identi=0;
                                    while ($dato=mysqli_fetch_array($query)) {
                            
                                 ?>
                                <option value="<?php  echo "".$dato['NOM_CONOCIMIENTO']."";?>"><?php  echo "".$dato['NOM_CONOCIMIENTO']."";?></option>
                                
                                <?php 
                                }

                                 ?>
                            </select> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <label>Puntaje</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="input-group">
                                <span class="input-group-addon" ></span>
                                <input type="text" class="form-control" name="cod_con" id="cod_con" minlength="3" maxlength="8" required placeholder="Codido de la Convocatoria">
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            </br><button name="new_cono" type="submit" class="btn btn-success btn-sm" id="new_cono"><i class="fa fa-check"></i>Insertar</button>
                        </div>                                              
                    </form>
                </div><!-- End of Modal body -->
            </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->

     <div id="new_mer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> <i class="fa fa-plus-square"></i>Nuevo Requisito</h4>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="crear_convocatoria_lab.php?con=<?php  echo "".$con."";?>" method="post" enctype="multipart/form-data">
                        
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label>Nueva Area de Calificacion</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <textarea class="form-control" name="area" id="area" required rows="3" minlength="3" maxlength="1000"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label>Puntaje Maximo </label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="puntaje" id="puntaje" required minlength="1" maxlength="2">
                            </div>
                        </div>
                        <div class="modal-footer">
                            </br><button name="new_merito" type="submit" class="btn btn-success btn-sm" id="new_merito"><i class="fa fa-check"></i>Insertar</button>
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
