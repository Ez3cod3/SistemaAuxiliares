

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
							<cen ter><b> No tiene mensajes</b></center>";
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
						<i class="fa fa-user"></i><b class="caret"></b>
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
                
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
					<div class="color2" style="border-radius: 5px;">
                        <h3 class="centrar3" style="color: white;">Menu</h3>
                    </div>
                    <div class="panel-group" id="accordion">
						<div class="panel panel-default">
							
										</div>
									</div>
								
						</div>
					</div>	
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>