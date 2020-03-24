<?php 
include_once('conexion.php');
$conexion=Conectar();

$consulta3="select * from mail,usuario where usuario.id_user=mail.id_user and mail.email_dest='$ids' order by mail.fec_mail desc";
$query3=mysql_query($consulta3);
$cont = mysql_num_rows($query3);

$consulta4="select * from usuario as u, user_rol as ur,rol as r ,rol_funcion as rf,funcion as f where u.id_user=ur.id_user and ur.id_rol=r.id_rol and
			r.id_rol=rf.id_rol and rf.id_func=f.id_func and u.id_user='$ids' ";
$query4=mysql_query($consulta4);
$cont4 = mysql_num_rows($query4);
?>
<!-- Navigation -->
        <nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Cambiar Navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"> <i class="fa fa-th-large"></i> INAMET</a>
				</div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-clock-o" ></i><b class="caret"></b>
					</a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-clock-o" id="liveclock"><div ></div></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-calendar"></i><?php echo" ".$hoy." ";?></a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
						<?php 
						if($cont == 0){
						echo "
							<center><b> No tiene mensajes</b></center>";
						}
						else{
							while($dato3=mysql_fetch_array($query3)){
							echo "
								<li>
									<a href ='det_mail.php?val=".$dato3['ID_MAIL']."'>
										<div>
											<strong>".$dato3["ASUN_MAIL"]."</strong>
											<span class='pull-right text-muted'>
												<em>".$dato3["FEC_MAIL"]."</em>
											</span>
										</div>
										<div>".$dato3["CONT_MAIL"]."</div>
									</a>
								</li>
								<li class='divider'></li>
								";
							}
						}
						?>
                        <li>
                            <a class="text-center" href="rec_mail.php?m=0">
                                <strong>Leer Todos los Mensajes</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-user"></i><?php echo" ".$usr." ";?><b class="caret"></b>
					</a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="perfil_user.php?m=0"><i class="fa fa-user fa-fw"></i> Perfil Usuario</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="unlog.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class='nav navbar-nav navbar-collapse'> 
					<?php 
					$count=0;
						if($cont4 == 0){
							echo "
							<center><b> No tiene Ninguna Funcion Definida</b></center>";
						}
						else{
							while($dato4=mysql_fetch_array($query4)){
								$count++;
								echo "
								<li class='dropdown'><a class ='dropdown-toggle' data-toggle='dropdown'> <img src='".$dato4["IMG_FUNC"]."' height='16' width='16'/> ".$dato4["NOM_FUNC"]."</a></a>
									<ul class='dropdown-menu'>
								";	
										$consulta5="select * from funcion as f ,form_funcion as ff ,formulario as form where f.id_func=ff.id_func and ff.id_form= form.id_form and f.id_func='".$dato4["ID_FUNC"]."' ";
										$query5=mysql_query($consulta5);
										while($dato5=mysql_fetch_array($query5)){
											echo "
												<li><a href='".$dato5["URL_FORM"]."?m=0'> <img src='".$dato5["IMG_FORM"]."' height='16' width='16'/> ".$dato5["NOM_FORM"]."</a></li>
											";
										}
								echo '
									</ul>
								</li>';
							}
						}
					?>				
				</ul>
			</div>
        </nav>