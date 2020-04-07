
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
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="perfil_user.php?m=0"><i class="fa fa-user fa-fw"></i> Ingresar Administrador</a>
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
                           
                                    <div class='panel-heading' style='padding: 1px;'>
                                        <h4>
                                            <p style='padding-left: 7px;'><a data-toggle='collapse' data-parent='#accordion' href='#c".$count."' style='font-size : 14px;'>Convocatorias</a></p>
                                        </h4>
                                    </div>
                                    <div class='panel-heading' style='padding: 1px;'>
                                        <h4>
                                            <p style='padding-left: 7px;'><a data-toggle='collapse' data-parent='#accordion' href='#c".$count."' style='font-size : 14px;'>Lista de Habilitados</a></p>
                                        </h4>
                                    </div>
                                    <div class='panel-heading' style='padding: 1px;'>
                                        <h4>
                                            <p style='padding-left: 7px;'><a data-toggle='collapse' data-parent='#accordion' href='#c".$count."' style='font-size : 14px;'>Lista de Resultados</a></p>
                                        </h4>
                                    </div>
                                    
                                    <div id='c".$count."' class='panel-collapse collapse'>
                                        <div class='panel-body' >
                               
                                            <a href='".$dato5["URL_FORM"]."?m=0' ><li style='list-style:none;'><img src='".$dato5["IMG_FORM"]."' height='16' width='16'/> ".$dato5["NOM_FORM"]."</a></li>
                                    
                                        </div>
                                    </div> 
                        </div>
                    </div>  
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>