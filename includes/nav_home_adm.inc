<?php 
include_once('conexion.php');
$conexion=Conectar();

$consulta="select * from usuario as u, usu_rol as ur,rol as r ,rol_fun as rf,funcion as f 
   where u.COD_USUARIO=ur.COD_USUARIO and ur.ID_ROL = r.ID_ROL 
   and r.ID_ROL = rf.ID_ROL 
   and rf.ID_FUNCION = f.ID_FUNCION 
   and u.COD_USUARIO='$cod'";

$query4=mysqli_query($conexion,$consulta);
$cont4 = mysqli_num_rows($query4);

?>
<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"> <i class="fa fa-th-large"></i> UMSS</a>
                 <a class="navbar-brand"> <i class="fa fa-user fa-fw"></i> <?php echo" ".$cod." ";?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="fa fa-calendar"></i><?php echo" ".$hoy." ";?></li>
               
                <li class="fa fa-clock-o" id="liveclock"></li>
                 <li><a href="home.php"><i class="fa fa-sign-out fa-fw"></i>
                        Cerrar Sesion</a>
                        </li>

                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
                
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <div class="color2" style="border-radius: 5px;">
                        <h3 class="centrar3" style="color: white;">Menu</h3>
                    </div>
                     <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <?php 
                            $count=0;

                            //echo "el valor de cont4 es ----> ".$cont4;
                            if($cont4 == 0){
                            echo "
                                <center><b> No tiene Ninguna Funcion Definida</b></center>";
                            }
                            else{
                                while($dato4=mysqli_fetch_array($query4)){
                                $count++;
                                echo "
                                    <div class='panel-heading' style='padding: 1px;'>
                                        <h4>
                                            <p style='padding-left: 7px;'><a data-toggle='collapse' data-parent='#accordion' href='#c".$count."' style='font-size : 14px;'>".$dato4["NOM_FUNCION"]."</a></p>
                                        </h4>
                                    </div>
                                    
                                    <div id='c".$count."' class='panel-collapse collapse'>
                                        <div class='panel-body' >
                                ";
                                    $consulta5="select * from funcion as f ,fun_for as ff ,formulario as form where f.id_funcion=ff.id_funcion and ff.id_formulario= form.id_formulario and f.id_funcion='".$dato4["ID_FUNCION"]."' ";
                                    $query5=mysqli_query($conexion, $consulta5);
                                    while($dato5=mysqli_fetch_array($query5)){
                                        echo "
                                            <a href='".$dato5["URL_FORMULARIO"]."?m=0' ><li style='list-style:none;'>".$dato5["NOM_FORMULARIO"]."</a></li>
                                        ";
                                    }   
                                        echo'
                                        </div>
                                    </div>';
                                }
                            }
                            ?>  
                        </div>
                    </div>  
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>