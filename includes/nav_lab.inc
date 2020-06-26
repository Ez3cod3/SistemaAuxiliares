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
                
            
            <!-- /.navbar-static-side -->
        </nav>