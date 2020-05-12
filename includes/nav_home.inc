
<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="home.php" class="navbar-brand"> <i class="fa fa-th-large"></i> UMSS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="fa fa-calendar"></i><?php echo" ".$hoy." ";?></li>
                 <li></li>
               
                <li class="fa fa-clock-o" id="liveclock"></li>
                <li><a href="#login" data-toggle="modal"><i class="fa fa-user fa-fw" ></i>Iniciar Secion</a>
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
                           
                                    <div class='panel-heading' style='padding: 1px;'>
                                        <h4>
                                            <p style='padding-left: 7px;'><a data-toggle='collapse' data-parent='#accordion' href='#c' style='font-size : 14px;'>Convocatorias</a></p>
                                        </h4>
                                    </div>
                                    
                                    <div id="c" class='panel-collapse collapse'>
                                        <div class='panel-body' >
                                        <a href='' ><li style='list-style:none;'>Convocatorias - Laboratorios</a></li>
                                        <a href='' ><li style='list-style:none;'>Convocatorias - Docencia </a></li>
                                        </div>

                                    </div>
                                    <div class='panel-heading' style='padding: 1px;'>
                                        <h4>
                                            <p style='padding-left: 7px;'><a data-toggle='collapse' data-parent='#accordion' href='#v' style='font-size : 14px;'>Listas</a></p>
                                        </h4>
                                    </div>
                                    
                                    <div id="v" class='panel-collapse collapse'>
                                        <div class='panel-body' >
                                        <a href='' ><li style='list-style:none;'>Lista de  Habiles</a></li>
                                        

                                    </div>

                                    
                        </div>
                    </div>  
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>